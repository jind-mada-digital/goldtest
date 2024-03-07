<?php

namespace Goldtest\Mall\Components;

use Auth;
use Flash;
use Goldtest\Mall\Models\DiscountTrigger;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use OFFLINE\Mall\Classes\Exceptions\OutOfStockException;
use OFFLINE\Mall\Components\Cart as ComponentsCart;
use OFFLINE\Mall\Models\Cart as CartModel;
use OFFLINE\Mall\Models\CartProduct;
use OFFLINE\Mall\Models\GeneralSettings;
use OFFLINE\Mall\Models\ShippingMethod;
use Request;
use Session;

/**
 * The Cart component displays a user's cart.
 */
class Cart extends ComponentsCart
{
    /**
     * The user removed an item from the cart.
     *
     * @return array
     */
    public function onRemoveDiscountCode()
    {
        $id = $this->decode(input('id'));
        $cart = CartModel::byUser(Auth::getUser());
        $cart->discounts()->detach($id);
        $this->setData();
    }
}
