<?php

namespace OFFLINE\Mall\Models;

use Goldtest\Mall\Models\DiscountTrigger;
use Illuminate\Support\Facades\DB;
use Model;
use October\Rain\Database\Traits\Nullable;
use October\Rain\Database\Traits\Validation;
use OFFLINE\Mall\Classes\Traits\PriceAccessors;

class Discount extends Model
{
    use Validation;
    use PriceAccessors;
    use Nullable;

    const MORPH_KEY = 'mall.discount';

    public $rules = [
        'name'                                 => 'required',
        'valid_from'                           => 'nullable|date|before_or_equal:expires',
        'expires'                              => 'nullable|date|after_or_equal:valid_from',
        'number_of_usages'                     => 'nullable|numeric',
        'max_number_of_usages'                 => 'nullable|numeric',
        'types'                                => 'in:fixed_amount,rate,shipping',
        'type'                                 => 'in:fixed_amount,rate,shipping',
        'rate'                                 => 'required_if:type,rate|nullable|numeric',
        'shipping_description'                 => 'required_if:type,shipping',
        'shipping_guaranteed_days_to_delivery' => 'nullable|numeric',
        'customer_group_ids'                   => 'nullable',
        //
        'discount_triggers' => 'requiredDiscountTrigger:Discount',
        'discount_triggers.*.trigger'                              => 'required|in:total,code,product,products',
        'discount_triggers.*.product'                              => 'required_if:trigger,product',
        'discount_triggers.*.product_ids'                          => 'required_if:trigger,products',
        //'discount_triggers.*.code'                                 => 'nullable|unique:goldtest_mall_discount_trigger,code'
    ];

    public $customMessages = [
        'required_discount_trigger' => 'Combinaison du réduction est obligatoire.',
    ];

    public $with = ['shipping_prices', 'amounts', 'discount_triggers'];
    public $table = 'offline_mall_discounts';
    public $dates = ['valid_from', 'expires'];
    public $nullable = ['max_number_of_usages'];
    public $casts = [
        'number_of_usages' => 'integer',
    ];
    public $morphMany = [
        'shipping_prices' => [Price::class, 'name' => 'priceable', 'conditions' => 'field = "shipping_prices"'],
        'amounts'         => [Price::class, 'name' => 'priceable', 'conditions' => 'field = "amounts"']
    ];
    public $fillable = [
        'name',
        'valid_from',
        'expires',
        'number_of_usages',
        'max_number_of_usages',
        'types',
        'type',
        'rate',
        'shipping_description',
        'shipping_guaranteed_days_to_delivery',
        'customer_group_ids'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $hasMany = [
        'discount_triggers' => [DiscountTrigger::class, 'discount_id', 'id']
    ];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'name',
        'shipping_description',
    ];


    public static function boot()
    {
        parent::boot();
        static::deleted(function (self $discount) {
            $discount->discount_triggers()->delete();
        });
    }

    public function __construct()
    {
        parent::__construct();
        /*$this->unbindEvent('model.afterSave', function ($model) {
            // Code pour manipuler l'événement si 
            dd('');
        });
        unset($this->discount_triggers);*/
    }

    public function getTypeOptions()
    {
        return trans('offline.mall::lang.discounts.types');
    }

    public function amount($currency = null)
    {
        return $this->price($currency, 'amounts');
    }

    public function shippingPrice($currency = null)
    {
        return $this->price($currency, 'shipping_prices');
    }

    /** Discount trigger */
    public function getProductIdOptions()
    {
        return [null => trans('offline.mall::lang.common.none')] + Product::get()->pluck('name', 'id')->toArray();
    }

    public function getCustomerGroupIdsOptions()
    {
        return CustomerGroup::get()->pluck('name', 'id')->toArray();
    }

    public function getCustomerGroupsAttribute()
    {
        return CustomerGroup::whereIn('id', explode(',', $this->customer_group_ids))->get();
    }

    public function getProductIdsOptions()
    {
        return Product::get()->pluck('name', 'id')->toArray();
    }

    public function getTriggerOptions($value, $formData)
    {
        $discount_triggers = post('Discount.discount_triggers', []);

        $selected_trigger = collect($discount_triggers)->map(function ($discount_multiple) {
            return $discount_multiple['trigger'];
        })->toArray();
        $not_selected =  collect(trans('offline.mall::lang.discounts.triggers'))->filter(function ($trigger, $key) use ($selected_trigger) {
            return !in_array($key, $selected_trigger) || $key == '';
        })->toArray();
        return $not_selected;
    }

    public function getRelationValue($relationName)
    {
        return $this->$relationName()->get()->toArray();
    }

    public function fireEvent($event, $params = [], $halt = false)
    {
        if ($event == 'model.afterSave') {
            return;
        } else {
            parent::fireEvent($event, $params, $halt);
        }
    }
}
