<?php

namespace Goldtest\Mall\Components;

use OFFLINE\Mall\Components\CustomerProfile as DefaultCustomerProfile;

use Auth;
use DB;
use Request;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Flash;
// use OFFLINE\Mall\Classes\Customer\SignUpHandler;
use Goldtest\Mall\Classes\Customer\GoldtestSignUpHandler;
use RainLab\User\Models\User;
use RainLab\User\Models\UserGroup;
use Validator;

/**
 * The CustomerProfile component displays a form
 * to edit profile information.
 */
class CustomerProfile extends DefaultCustomerProfile
{

    /**
     * Save changes to the user's profie.
     *
     * @throws ValidationException
     */
    public function onSubmit()
    {
        $data    = post();
        // $handler = app(SignUpHandler::class);
        $handler = app(GoldtestSignUpHandler::class);

        $neededRules = array_only($handler::rules(false), [
            'firstname',
            'lastname',
            'height',
            'weight',
            'email',
            'password',
            'password_repeat',
        ]);
        if ($data['password'] === '') {
            // The password is unchanged so we don't need to validate it.
            unset($neededRules['password'], $neededRules['password_repeat']);
        }

        $validation = Validator::make($data, $neededRules, $handler::messages());
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        DB::transaction(function () use ($data) {
            $this->user->customer->firstname = $data['firstname'];
            $this->user->customer->lastname  = $data['lastname'];

            $this->user->customer->height = $data['height'];
            $this->user->customer->weight  = $data['weight'];

            $this->user->email               = $data['email'];
            if ($data['password']) {
                $this->user->password              = $data['password'];
                $this->user->password_confirmation = $data['password_repeat'];
                $this->user->customer->is_guest    = false;

                $this->user->groups()->detach(UserGroup::getGuestGroup());
            }

            // extended data start
            if ($civility = Request::post('goldtest_civility')) {
                $this->user->goldtest_civility = $civility;
            }

            if ($phone = Request::post('goldtest_phone')) {
                $this->user->goldtest_phone = $phone;
            }

            $this->user->goldtest_school_id = Request::post('goldtest_school_id');
            if (empty($this->user->goldtest_school_id)) {
                $this->user->goldtest_school_id = null;
                $this->user->goldtest_is_school_member = false;
                $this->user->goldtest_school_title = null;
            }
            else {
                $this->user->goldtest_is_school_member = Request::post('goldtest_is_school_member');
                if ($title = Request::post('goldtest_school_title')) {
                    $this->user->goldtest_school_title = $title == 'CUSTOM'
                        ? Request::post('goldtest_school_title_other')
                        : $title;
                }
            }
            // extended data end

            $this->user->save();
            $this->user->customer->save();
        });

        // Re-authenticate the user with his new credentials
        Auth::login($this->user);

        Flash::success(trans('offline.mall::lang.common.saved_changes'));
    }
}
