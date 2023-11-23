<?php

namespace Goldtest\Mall\Components;

use Flash;
use Illuminate\Support\Collection;
use OFFLINE\Mall\Models\GeneralSettings;
use OFFLINE\Mall\Models\Property;
use OFFLINE\Mall\Models\PropertyValue;
use OFFLINE\Mall\Models\Variant;
use RainLab\Translate\Models\Message;

class Product extends \OFFLINE\Mall\Components\Product
{
    /** @var Collection */
    private $productProperties;

    /** @var Collection */
    private $variantsIndex;

    /**
     * The user changed a property of the product.
     *
     * Check the stock for the currentyl selected Variant and return
     * the information back to the user.
     *
     * @return array
     */
    public function onChangeProperty()
    {
        $values = post('values', []);
        $isInitial = (bool)post('initial', false);
        $variant = $this->getVariantByPropertyValues($values);

        $this->page['stock'] = $variant ? $variant->stock : 0;
        $this->page['item'] = $variant ?: $this->getProduct();

        if (!$this->page['item'] instanceof Variant && $isInitial === false) {
            Flash::error(Message::trans("Cette combinaison de variantes n'est pas disponible"));

            return redirect()->refresh();
        }

        if ($this->redirectOnPropertyChange && $isInitial === false) {
            $item = $this->page['item'];
            $slug = $item instanceof Variant ? $item->product->slug : $item->slug;

            return redirect()->to($this->getProductPageUrl($slug, $item));
        }

        return $this->stockCheckResponse();
    }

    /**
     * Get all Properties of this item.
     *
     * @return Collection
     */
    protected function getProps()
    {
        $valueMap = $this->getValueMap();
        if ($valueMap->count() < 1) {
            return $valueMap;
        }

        return $this->product->categories->flatMap->properties->map(function (Property $property) use ($valueMap) {
            $sortIndex = collect($property->options)
                ->filter(function ($item) {
                    return $item['value'];
                })
                ->mapWithKeys(function ($item, $index) use ($property) {
                    return [$item['value'] => $index];
                });

            $filteredValues = optional($valueMap->get($property->id))
                ->reject(function (PropertyValue $value) {
                    return $this->variant && $value->variant_id === null;
                })
                ->filter(function (PropertyValue $value) {
                    return $this->variantMatchingPropertyExists($value);
                })
                ->sortBy(function (PropertyValue $value) use ($sortIndex) {
                    return $sortIndex->get($value->value, 1000);
                });

            return (object)[
                'property' => $property,
                'values' => optional($filteredValues)->unique('value'),
            ];
        })->filter(function ($collection) {
            if ($this->variant && $collection->property->pivot->use_for_variants != true) {
                return false;
            }

            return $collection->values && $collection->values->count() > 0;
        })->keyBy(function ($value) {
            return $value->property->id;
        });
    }

    /**
     * Generate the page url for a Product/Variant combination.
     *
     * @param              $slug
     * @param Variant|null $item
     *
     * @return string
     */
    private function getProductPageUrl($slug, ?Variant $item): string
    {
        return $this->controller->pageUrl(GeneralSettings::get('product_page'), [
            'slug' => $slug,
            'variant' => optional($item)->variantHashId,
        ]);
    }

    /**
     * Check if current properties and given property exist in one variant
     *
     * This allow us to hide invalide properties combinaisons
     *
     * @param PropertyValue $value
     *
     * @return bool
     */
    private function variantMatchingPropertyExists(PropertyValue $value)
    {
        if (empty($this->productProperties)) {
            $this->productProperties = $this->variant->property_values->mapWithKeys(function ($item, $key) {
                return [$item->property_id => $item->index_value];
            });
        }

        if (empty($this->variantsIndex)) {
            $this->variantsIndex = $this->product->property_values()
                ->whereNotNull('variant_id')
                ->where('variant_id', '<>', '')
                ->get()
                ->groupBy('variant_id')
                ->transform(function (Collection $variantProperties) {
                    return $variantProperties->mapWithKeys(function ($variant, $key) {
                        return [$variant->property_id => $variant->index_value];
                    });
                });
        }

        $properties = clone $this->productProperties;
        $properties->put($value->property_id, $value->index_value);

        return $this->variantsIndex->toBase()->contains($properties);
    }
}
