<?php

namespace Goldtest\Mall\Classes\Customer;

use October\Rain\Exception\ValidationException;
use OFFLINE\Mall\Classes\Customer\DefaultSignUpHandler;
use OFFLINE\Mall\Models\GeneralSettings;
use Illuminate\Support\Facades\Validator;

class GoldtestSignUpHandler extends DefaultSignUpHandler
{

    public static function rules($forSignup = true): array
    {
        $rules = [
            'firstname'           => 'required',
            'lastname'            => 'required',
            'height'              => 'required|numeric',
            'weight'              => 'required|numeric',
            'email'               => ['required', 'email', ($forSignup ? 'non_existing_user' : null)],
            'billing_lines'       => 'required',
            'billing_zip'         => 'required',
            'billing_city'        => 'required',
            'billing_country_id'  => 'required|exists:rainlab_location_countries,id',
            // 'billing_state_id'    => 'required|exists:rainlab_location_states,id',
            'shipping_lines'      => 'required_if:use_different_shipping,1',
            'shipping_zip'        => 'required_if:use_different_shipping,1',
            'shipping_city'       => 'required_if:use_different_shipping,1',
            // 'shipping_state_id'   => 'required_if:use_different_shipping,1|exists:rainlab_location_states,id',
            'shipping_country_id' => 'required_if:use_different_shipping,1|exists:rainlab_location_countries,id',
            'password'            => 'required|min:8|max:255',
            'password_repeat'     => 'required|same:password',
            'terms_accepted'      => 'required',
        ];

        if ((bool)GeneralSettings::get('use_state', true) !== true) {
            unset($rules['billing_state_id'], $rules['shipping_state_id']);
        }

        return $rules;
    }

     /**
     * @throws ValidationException
     */
    protected function validate(array $data)
    {
        $rules = self::rules();

        if ($this->asGuest) {
            unset($rules['password'], $rules['password_repeat']);
        }

        $messages = self::messages();

        $validation = Validator::make($data, $rules, $messages);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
    }
}
