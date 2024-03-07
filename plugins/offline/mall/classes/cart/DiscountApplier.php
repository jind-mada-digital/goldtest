<?php

namespace OFFLINE\Mall\Classes\Cart;

use Goldtest\Mall\Models\DiscountTrigger;
use Illuminate\Support\Collection;
use OFFLINE\Mall\Classes\Totals\TotalsCalculatorInput;
use OFFLINE\Mall\Classes\Utils\Money;
use OFFLINE\Mall\Models\Discount;
use RainLab\User\Facades\Auth;

class DiscountApplier
{
    /**
     * @var TotalsCalculatorInput
     */
    private $input;
    /**
     * @var int
     */
    private $total;
    /**
     * @var int
     */
    private $reducedTotal;
    /**
     * @var Discount[]
     */
    private $discounts;
    /**
     * @var bool
     */
    private $reducedTotalIsFixed = false;
    /**
     * @var Money
     */
    private $money;

    public function __construct(TotalsCalculatorInput $input, float $total, float $baseTotal = null)
    {
        $this->input        = $input;
        $this->total        = $total;
        $this->reducedTotal = $baseTotal ?? $total;
        $this->discounts    = collect([]);
        $this->money        = app(Money::class);
    }

    public function apply(DiscountTrigger $discount): ?bool
    {
        /** vérification finale de réduction (shipping, autres) si ils sont déstinées aux clients proffessionnels */
        if (
            collect($discount->discount->customer_groups)->count() > 0 &&
            (
                !Auth::getUser() ||
                !Auth::getUser()->customer_group ||
                collect($discount->discount->customer_groups)->pluck('id')->contains(Auth::getUser()->customer_group->id) == false
            )
        ) {
            return null;
        }
        //dd(json_decode(json_encode($discount)));
        if (!$this->discountCanBeApplied($discount)) {
            //dd(json_decode(json_encode($discount)));
            return null;
        }
        //dd(json_decode(json_encode($discount)));
        if ($this->reducedTotalIsFixed === true) {
            return false;
        }
        //dd(json_decode(json_encode($discount)));
        $savings = 0;

        if ($discount->discount->type === 'shipping') {
            $this->reducedTotal        = $discount->discount->shippingPrice()->integer;
            $savings                   = $this->input->shipping_method->price()->integer -
                $discount->discount->shippingPrice()->integer;
            $this->reducedTotalIsFixed = true;
        }

        if ($discount->discount->type === 'fixed_amount') {
            $savings            = $discount->discount->amount()->integer;
            $this->reducedTotal -= $savings;
        }

        if ($discount->discount->type === 'rate') {
            $savings            = $this->total * ($discount->discount->rate / 100);
            $this->reducedTotal -= $savings;
        }

        $this->discounts->push([
            'discount'          => $discount,
            'savings'           => $savings * -1,
            'savings_formatted' => $this->money->format($savings * -1),
        ]);

        return true;
    }

    /** modifier par manitra */
    public function applyMany(Collection $discounts): Collection
    {
        //dd(json_decode(json_encode($discounts)));
        //dd($this->discounts);
        $discountsToApply = collect([]);
        $discounts_group = $discounts->groupBy('discount_id', true);
        //dd($discounts_group);
        $discounts_group = collect($discounts_group)->filter(function ($discounts, $discont_id) {
            return DiscountTrigger::where(['discount_id' => $discont_id, 'trigger' => 'code'])->whereNotIn('id', collect($discounts)->lists('id'))->count() == 0;
        })->map(function ($item, $discont_id) {
            return collect($item)->merge(DiscountTrigger::where(['discount_id' => $discont_id])->whereNotIn('id', collect($item)->lists('id'))->get());
        })->filter(function ($discounts) {
            $currentCorequiste = collect($discounts)->first();
            $nextCorequiste = collect($discounts);
            $nextCorequiste->shift();
            return $this->discountCanBeApplied($currentCorequiste, $nextCorequiste);
        })->map(function ($item) {
            $groupByTrigger = collect($item)->groupBy('trigger', true);
            return collect([
                $groupByTrigger->get('code'),
                $groupByTrigger->get('total'),
                $groupByTrigger->get('products'),
                $groupByTrigger->get('product')
            ])->filter(function ($item) {
                return $item != null;
            })->map(function ($item) {
                return $item->first();
            })->first();
        })->values();

        //dd(json_decode(json_encode($discounts_group)));
        foreach ($discounts_group as $discount) {

            if ($discount->trigger == 'code') {
                $discountsToApply->push($discount);
                continue;
            }
            //dd($discount->is_multi_condition);
            if ($discount->trigger == 'product' && $discountsToApply->count() == 0) {
                $discountsToApply = collect([$discount]);
                break;
            }
            if ($discount->trigger == 'products'  && $discountsToApply->count() == 0) {
                $discountsToApply = collect([$discount]);
                break;
            }
            if ($discount->trigger == 'total'  && $discountsToApply->count() == 0) {
                $discountsToApply = collect([$discount]);
                break;
            }
        }
        //dd(json_decode(json_encode($discountsToApply)));
        foreach ($discountsToApply as $discount) {
            // A return value of `false` indicates that a discount is applied that
            // fixes the final amount so no other discounts would have an effect.
            if ($this->apply($discount) === false) {
                break;
            }
        }
        //dd(json_decode(json_encode($this->discounts)));
        return $this->discounts;
    }
    /** modifier par manitra */

    public function reducedTotal(): ?float
    {
        return $this->reducedTotal;
    }
    /** modifier par manitra */
    protected function discountCanBeApplied(DiscountTrigger $discount, $corequiste = []): bool
    {
        $currentCorequiste = collect($corequiste)->first();
        $nextCorequiste = collect($corequiste);
        $nextCorequiste->shift();
        if ($discount->discount->max_number_of_usages !== null && $discount->discount->max_number_of_usages < $discount->discount->number_of_usages) {
            return false;
        }

        if ($discount->trigger === 'total' && (int)$discount->totalToReach()->integer <= $this->total) {
            return $currentCorequiste ? $this->discountCanBeApplied($currentCorequiste, $nextCorequiste) : true;
        }

        if ($discount->trigger === 'product' && $this->productIsInCart($discount->product_id)) {
            return $currentCorequiste ? $this->discountCanBeApplied($currentCorequiste, $nextCorequiste) : true;
        }

        if ($discount->trigger === 'products' && $this->productsIsInCart(explode(',', $discount->product_ids))) {
            return $currentCorequiste ? $this->discountCanBeApplied($currentCorequiste, $nextCorequiste) : true;
        }
        return $discount->trigger === 'code' && ($currentCorequiste ? $this->discountCanBeApplied($currentCorequiste, $nextCorequiste) : true);
    }
    /** modifier par manitra */
    private function productsIsInCart($productIds): bool
    {
        $productsInCart = $this->input->products->pluck('product_id')->toArray();
        $result = count(array_intersect($productIds, $productsInCart)) == count($productIds);
        return $result;
    }

    private function productIsInCart(int $productId): bool
    {
        return $this->input->products->pluck('product_id')->contains($productId);
    }
}
