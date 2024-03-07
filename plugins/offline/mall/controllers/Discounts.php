<?php

namespace OFFLINE\Mall\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\RelationController;
use Backend\Classes\Controller;
use BackendMenu;
use Goldtest\Mall\Models\DiscountTrigger;
use OFFLINE\Mall\Models\Discount;
use OFFLINE\Mall\Models\Price;

class Discounts extends Controller
{
    public $implement = [
        ListController::class,
        FormController::class,
        RelationController::class,
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'offline.mall.manage_discounts',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OFFLINE.Mall', 'mall-orders', 'mall-discounts');
        $this->addJs('/plugins/offline/mall/assets/disable_duplicate_options_discount.js');
    }


    public function formAfterCreate(Discount $model)
    {
        $this->handleUpdatesPriceDiscount($model);
        $this->createOrUpdateTrigger($model);
    }

    public function formAfterUpdate(Discount $model)
    {
        $this->handleUpdatesPriceDiscount($model);
        $this->createOrUpdateTrigger($model);
    }

    public function formAfterDelete(Discount $model)
    {
        $model->discount_triggers()->delete();
    }

    public function handleUpdatesPriceDiscount(Discount $model)
    {
        $this->updatePrices($model, 'shipping_prices', '_shipping_prices');
        $this->updatePrices($model, 'amounts', '_amounts');
    }

    private function createOrUpdateTrigger(Discount $model)
    {
        $triggers = post('Discount.discount_triggers', []);
        $id_triggers = [];
        foreach ($triggers as $value) {
            $data_trigger = array_merge(
                $this->getArraySometimes($value, [
                    'code',
                    'product_id',
                    'product_ids',
                    'trigger',
                    'id'
                ]),
                ['discount_id' => $model->id]
            );
            $data_trigger['product_ids'] = $data_trigger['product_ids'] ? implode(',', $data_trigger['product_ids']) : null;
            $trigger = DiscountTrigger::where(['discount_id' => $data_trigger['discount_id'], 'id' => $data_trigger['id']])->first();
            if ($trigger) {
                $trigger->update($data_trigger);
            } else {
                $trigger = DiscountTrigger::create($data_trigger);
            }
            $id_triggers[] = $trigger->id;
            $totals_to_reach = array_get($value, '_totals_to_reach', []);
            $this->updateTotalToReach($totals_to_reach, $trigger);
        }
        DiscountTrigger::whereNotIn('id', $id_triggers)->where(['discount_id' => $model->id])->delete();
    }

    private function updateTotalToReach($totals_to_reach, DiscountTrigger $model)
    {
        foreach ($totals_to_reach as $_currency => $_data) {
            $currency = ltrim($_currency, "_");
            $value = $_data;
            if ($value === '') {
                $value = null;
            }
            Price::updateOrCreate([
                'price_category_id' => null,
                'priceable_id'      => $model->id,
                'priceable_type'    => $model::MORPH_KEY,
                'currency_id'       => $currency,
                'field'             => 'totals_to_reach',
            ], [
                'price' => $value,
            ]);
        }
    }

    private function getArraySometimes($source, $need)
    {
        return array_combine($need, collect($need)->map(function ($key) use ($source) {
            return array_get($source, $key, null);
        })->toArray());
    }

    protected function updatePrices($model, $field = null, $key = '_prices')
    {
        $data = post('MallPrice', []);
        foreach ($data as $currency => $_data) {
            $value = array_get($_data, $key);
            if ($value === '') {
                $value = null;
            }
            Price::updateOrCreate([
                'price_category_id' => null,
                'priceable_id'      => $model->id,
                'priceable_type'    => $model::MORPH_KEY,
                'currency_id'       => $currency,
                'field'             => $field,
            ], [
                'price' => $value,
            ]);
        }
    }
}
