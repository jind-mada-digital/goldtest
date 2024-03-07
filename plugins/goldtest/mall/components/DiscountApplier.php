<?php

namespace Goldtest\Mall\Components;

use OFFLINE\Mall\Components\DiscountApplier as DefaultDiscountApplier;
use Auth;
use OFFLINE\Mall\Models\Cart;
use October\Rain\Exception\ValidationException;


/**
 * The DiscountApplier component allow the user to enter a discount code.
 */
class DiscountApplier extends DefaultDiscountApplier
{

    /**
     * A discount code has been entered.
     *
     * Applies the discount code directly to the Cart model.
     *
     * @throws ValidationException
     */
    public function onApplyDiscount()
    {
        /*$cart = Cart::byUser(Auth::getUser());*/

        /* CUSTOM logic to remove promocodes if implicitly discount is set to product or cart total*/
        /*$hasAppliedNonTriggerCode = $cart->checkPromocodeAndDiscounts();*/
        /*end*/

        /*if($cart->discounts->count() > 0 || $hasAppliedNonTriggerCode) {
            throw new ValidationException([
                'code' => trans('goldtest.mall::lang.components.discountApplier.onlyOneCouponError'),
            ]);
        }*/
        parent::onApplyDiscount();
    }

    public function onRemoveDiscountCode()
    {
        $id = $this->decode(input('id'));
        $cart = Cart::byUser(Auth::getUser());
        $cart->discounts()->detach($id);
    }
}
