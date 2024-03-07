<?php

namespace Goldtest\Mall\Models;

use Illuminate\Support\Facades\DB;
use Model;
use October\Rain\Database\Traits\Nullable;
use October\Rain\Database\Traits\SoftDelete;
use October\Rain\Database\Traits\Validation;
use OFFLINE\Mall\Classes\Traits\HashIds;
use OFFLINE\Mall\Classes\Traits\PriceAccessors;
use OFFLINE\Mall\Models\Discount;
use OFFLINE\Mall\Models\Price;
use OFFLINE\Mall\Models\Product;

/**
 * Model
 */
class DiscountTrigger extends Model
{
    use Validation;
    //use SoftDelete;
    use PriceAccessors;
    use Nullable;
    use HashIds;

    const MORPH_KEY = 'mall.discount_trigger';

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    public $nullable = ['product_id', 'product_ids', 'code'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $casts = [];
    public $rules = [
        'trigger'                              => 'required|in:total,code,product,products',
        'product_id'                              => 'required_if:trigger,product',
        'product_ids'                          => 'required_if:trigger,products',
        'code'                                 => 'nullable|unique:goldtest_mall_discount_trigger',
    ];
    public $table = 'goldtest_mall_discount_trigger';
    public $belongsTo = [
        'product' => [Product::class],
        'discount' => [
            Discount::class,
            'key'      => 'discount_id',
        ]
    ];
    public $belongsToMany = [
        'carts' => [
            Cart::class,
            'table' => 'offline_mall_cart_discount',
            'key'      => 'discount_id',
            'otherKey' => 'cart_id'
        ]
    ];
    public $appends = ['products', 'is_multi_condition'];
    public $with = ['totals_to_reach', 'product'];
    public $fillable = [
        'code',
        'product_id',
        'product_ids',
        'trigger',
        'discount_id'
    ];

    public $morphMany = [
        'totals_to_reach' => [Price::class, 'name' => 'priceable', 'conditions' => 'field = "totals_to_reach"']
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function (self $discountTrigger) {
            if ($discountTrigger->trigger === 'code' && !$discountTrigger->code) {
                $discountTrigger->code = strtoupper(str_random(10));
            } else if ($discountTrigger->trigger === 'code') {
                $discountTrigger->code = strtoupper($discountTrigger->code);
            }
            if ($discountTrigger->trigger !== 'products') {
                $discountTrigger->product_ids = null;
            }
            if ($discountTrigger->trigger !== 'product') {
                $discountTrigger->product_id = null;
            }
            if ($discountTrigger->trigger !== 'code') {
                $discountTrigger->code = null;
            }
        });
    }

    public function getProductsAttribute()
    {
        return Product::whereIn('id', explode(',', $this->product_ids))->get();
    }

    public function totalToReach($currency = null)
    {
        return $this->price($currency, 'totals_to_reach');
    }

    public function getIsMultiConditionAttribute()
    {
        return DB::table('goldtest_mall_discount_trigger')->where('discount_id', $this->discount_id)->count() > 1;
    }

    public function afterDelete()
    {
    }
}
