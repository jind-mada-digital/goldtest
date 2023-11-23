<?php

namespace Goldtest\Mall\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Illuminate\Http\RedirectResponse;
use OFFLINE\Mall\Models\Address;
use OFFLINE\Mall\Models\Cart;
use OFFLINE\Mall\Models\Customer;
use OFFLINE\Mall\Models\PaymentMethod;
use RainLab\User\Models\User;
use Redirect;

class InitCheckout extends ComponentBase
{
    /** @var User */
    protected $user;

    /** @return array */
    public function componentDetails()
    {
        return [
            'name' => 'Init checkout process',
            'description' => 'Permet à l\'utilisateur de choisir si commande groupée vs commande privée',
        ];
    }

    public function init()
    {
        if (!$this->user = Auth::getUser()) {
            return null;
        }
    }

    /**
     * The component is executed.
     *
     * @return RedirectResponse|void
     */
    public function onRun()
    {
        if (!$this->user || !$this->user->goldtest_is_school_member) {
            return $this->redirectToCheckoutStep();
        }
    }

    /**
     * The component is executed.
     *
     * @return RedirectResponse|void
     */
    public function onGroupOrder()
    {
        if (!$this->user) {
            return null;
        }

        if (empty($address = $this->addOrUpdateSchoolAddressToUserProfile())) {
            return $this->redirectToCheckoutStep();
        }

        $cart = Cart::byUser($this->user);
        $cart->setPaymentMethod(PaymentMethod::where('code', 'invoice')->first());

        $cart->setShippingAddress($address);
        $cart->setBillingAddress($address);
        $cart->save();

        return $this->redirectToCheckoutStep('confirm');
    }

    public function onPrivateOrder()
    {
        $cart = Cart::byUser($this->user);
        $cart->shipping_address_id = $this->user->customer->default_shipping_address_id;
        $cart->billing_address_id = $this->user->customer->default_billing_address_id;
        $cart->save();

        return $this->redirectToCheckoutStep();
    }

    protected function redirectToCheckoutStep($step = 'payment')
    {
        return Redirect::to(
            $this->controller->pageUrl('checkout', ['step' => $step])
        );
    }

    private function addOrUpdateSchoolAddressToUserProfile()
    {
        if (!$this->user->customer) {
            return null;
        }

        /** @var Address $address */
        $address = $this->user->customer->addresses()
            ->where('goldtest_is_school_address', true)
            ->first();

        if (!$address) {
            $address = $this->user->customer->addresses()->make();
        }

        if (empty($schoolAddress = $this->user->goldtest_school)) {
            return null;
        }

        /** @var Customer $customer */
        $customer =  $this->user->customer;

        $address->customer_id = $customer->id;
        $address->company = $schoolAddress->name;
        $address->name = $customer->name;
        $address->lines = $schoolAddress->lines;
        $address->zip = $schoolAddress->zip;
        $address->city = $schoolAddress->city;
        $address->state_id = $schoolAddress->state_id;
        $address->country_id = $schoolAddress->country_id;
        $address->goldtest_is_school_address = true;
        $address->save();

        return $address;
    }
}
