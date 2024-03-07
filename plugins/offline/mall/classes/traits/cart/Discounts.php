<?php

namespace OFFLINE\Mall\Classes\Traits\Cart;

use Carbon\Carbon;
use Goldtest\Mall\Models\DiscountTrigger;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use October\Rain\Exception\ValidationException;
use OFFLINE\Mall\Models\Discount;

trait Discounts
{

    /** modifier par manitra */
    protected function checkCorequisteDiscount($corequiste = [])
    {
        $currentCorequiste = collect($corequiste)->first();
        $nextCorequiste = collect($corequiste);
        $nextCorequiste->shift();
        if ($currentCorequiste) {
            if ($currentCorequiste->trigger === 'total' && (int)$currentCorequiste->totalToReach()->integer <= $this->totals->totalPostTaxes()) {
                return count($nextCorequiste) > 0 ? $this->checkCorequisteDiscount($nextCorequiste) : true;
            }else if ($currentCorequiste->trigger === 'product' && $this->productIsInCart($currentCorequiste->product_id)) {
                return count($nextCorequiste) > 0 ? $this->checkCorequisteDiscount($nextCorequiste) : true;
            }else if ($currentCorequiste->trigger === 'products' && $this->productsIsInCart(explode(',', $currentCorequiste->product_ids))) {
                return count($nextCorequiste) > 0 ? $this->checkCorequisteDiscount($nextCorequiste) : true;
            }else{
                return false;
            }
        }
        return true;
    }

    private function productsIsInCart($productIds): bool
    {
        $productsInCart = $this->products->pluck('product_id')->toArray();
        $result = count(array_intersect($productIds, $productsInCart)) == count($productIds);
        return $result;
    }

    private function productIsInCart(int $productId): bool
    {
        return $this->products->pluck('product_id')->contains($productId);
    }

    private function isDiscountCustomerCountReached()
    {
        return $this->discounts->where('discount.customer_group_ids','!=', null)->count() > 0;
    }

    private function isDiscountCountReached()
    {
        return $this->discounts->where('discount.customer_group_ids', null)->count() > 0;
    }

    /** modifier par manitra */

    public function applyDiscount(DiscountTrigger $discount)
    {
        //dd(json_decode(json_encode($this)));
        $uniqueDiscountTypes = ['shipping'];
        //dd($discount->discount->type);
        $corequisteDiscount = DiscountTrigger::with(['discount'])->where(['discount_id' => $discount->discount_id])->whereNotIn('id', [$discount->id])->get();
        if (count($corequisteDiscount) == 0) {
            /* CUSTOM logic to remove promocodes if implicitly discount is set to product or cart total*/
            //$hasAppliedNonTriggerCode = $this->checkPromocodeAndDiscounts();
            /*end*/
            if(collect($discount->discount->customer_groups)->count() &&( !$this->customer || !$this->customer->user || !$this->customer->user->customer_group)){
                throw new ValidationException(['code' => trans('goldtest.mall::lang.components.discountApplier.discountCustomerGroupError')]);
            }else if ($this->customer && $this->customer->user && $this->customer->user->customer_group && collect($discount->discount->customer_groups)->pluck('id')->contains($this->customer->user->customer_group->id) == false && $this->isDiscountCountReached()) {
                throw new ValidationException(['code' => trans('goldtest.mall::lang.components.discountApplier.onlyOneCouponGuestError')]);
            } else if ($this->customer && $this->customer->user && collect($discount->discount->customer_groups)->pluck('id')->contains($this->customer->user->customer_group->id) == true && $this->isDiscountCountReached() && $this->isDiscountCustomerCountReached()) {
                throw new ValidationException(['code' => trans('goldtest.mall::lang.components.discountApplier.cartPromotionTwoMaxAppliedError')]);
            } else if ($this->isDiscountCountReached()) {
                throw new ValidationException([
                    'code' => trans('goldtest.mall::lang.components.discountApplier.onlyOneCouponError'),
                ]);
            }

            /*if ($this->discounts->count() > 0 || $hasAppliedNonTriggerCode) {
                throw new ValidationException([
                    'code' => trans('goldtest.mall::lang.components.discountApplier.onlyOneCouponError'),
                ]);
            }*/
        }
        if (
            in_array($discount->discount->type, $uniqueDiscountTypes)
            && $this->discounts->where('discount.type', $discount->discount->type)->count() > 0
        ) {
            throw new ValidationException([trans('offline.mall::lang.discounts.validation.' . $discount->discount->type)]);
        }

        if ($this->discounts->contains('discount.id', $discount->discount->id)) {
            throw new ValidationException([trans('offline.mall::lang.discounts.validation.duplicate')]);
        }

        if ($discount->discount->valid_from && $discount->discount->valid_from->gte(Carbon::now())) {
            throw new ValidationException([trans('offline.mall::lang.discounts.validation.not_found')]);
        }

        if ($discount->discount->expires && $discount->discount->expires->lt(Carbon::today())) {
            throw new ValidationException([trans('offline.mall::lang.discounts.validation.expired')]);
        }

        if ($discount->discount->max_number_of_usages !== null && $discount->discount->number_of_usages >= $discount->discount->max_number_of_usages) {
            throw new ValidationException([trans('offline.mall::lang.discounts.validation.usage_limit_reached')]);
        }
        if (!$this->checkCorequisteDiscount(collect($corequisteDiscount))) {
            throw new ValidationException([trans('goldtest.mall::lang.discounts.validation.conditions_corequiste_require')]);
        }

        /** avant d'enregistrer il faut connaitre si le code applique seul */

        $this->discounts()->save($discount);
    }

    /** code modifié par manitra */
    public function applyDiscountByCode(string $code)
    {
        $code = strtoupper(trim($code));
        if ($code === '') {
            throw new ValidationException([
                'code' => trans('offline.mall::lang.discounts.validation.empty'),
            ]);
        }

        try {
            $discount = DiscountTrigger::with(['discount'])->whereCode($code)->firstOrFail();
            /*if($this->checkPromocodeAndDiscounts() == true && collect($discount->discount->customer_groups)->pluck('id')->contains($this->customer->user->customer_group->id) == false){
                throw new ValidationException([trans('goldtest.mall::lang.components.discountApplier.cartPromotionAlreadyApplied')]);
            }*/
            //dd($this->checkPromocodeAndDiscounts());
            //dd($discount->discount->customer_groups);
            //dd(json_decode(json_encode($this->customer->user->customer_group)));
            //dd($this);
        } catch (ModelNotFoundException $e) {
            throw new ValidationException([
                'code' => trans('offline.mall::lang.discounts.validation.not_found'),
            ]);
        }

        return $this->applyDiscount($discount);
    }
    /** code modifié par manitra */

    /**
     * Updates the `number_of_usages` property on each
     * applied discount of this cart.
     */
    public function updateDiscountUsageCount()
    {
        $this->totals()->appliedDiscounts()->each(function (array $discount) {
            $discount['discount']->discount->number_of_usages++;
            $discount['discount']->discount->save();
        });

        if ($shippingDiscount = $this->totals()->shippingTotal()->appliedDiscount()) {
            $shippingDiscount['discount']->discount->number_of_usages++;
            $shippingDiscount['discount']->discount->save();
        }
    }
}
