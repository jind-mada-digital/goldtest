<?php namespace Goldtest\Site;

use Backend\Widgets\Form as FormWidget;
use Event;
use Goldtest\Site\Models\School;
use Goldtest\Site\Models\Settings;
use OFFLINE\Mall\Classes\Customer\SignUpHandler;
use RainLab\User\Controllers\Users;
use RainLab\User\Models\User;
use Request;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/*
 * DB fields added
 *
 * users.goldtest_is_school_member
 * users.goldtest_school_id
 *
 */

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Goldtest',
            'description' => '',
            'author' => 'inetis',
            'icon' => 'icon-leaf',
        ];
    }

    public function boot()
    {
        $this->extendUserModel();
    }

    public function registerComponents()
    {
        return [
            Components\Contact::class => 'goldtestContact',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'Goldtest',
                'description' => '',
                'category' => SettingsManager::CATEGORY_SYSTEM,
                'icon' => 'icon-cogs',
                'class' => Settings::class,
                'order' => 1,
                'keywords' => 'Goldtest Contact Configuration',
            ],
        ];
    }

    private function extendUserModel()
    {
        User::extend(function (User $model) {
            $model->addFillable('goldtest_is_school_member');
            $model->addFillable('goldtest_school_id');
            // $model->addFillable('height');
            // $model->addFillable('weight');

            $model->belongsTo['goldtest_school'] = [School::class];

            $model->rules['goldtest_civility'] = ['required', 'in:Madame,Monsieur'];

            $model->bindEvent('model.beforeValidate', function () use ($model) {
                if ($civility = Request::post('goldtest_civility')) {
                    $model->goldtest_civility = $civility;
                }

                if ($title = Request::post('goldtest_school_title')) {
                    $model->goldtest_school_title = $title == 'CUSTOM'
                        ? Request::post('goldtest_school_title_other')
                        : $title;
                }
            });

            $model->bindEvent('model.beforeSave', function () use ($model) {
                if (empty($model->goldtest_school_id)) {
                    $model->goldtest_school_id = null;
                    $model->goldtest_is_school_member = false;
                    $model->goldtest_school_title = null;
                }

                if ($phone = Request::post('goldtest_phone')) {
                    $model->goldtest_phone = $phone;
                }
            });
        });

        // extending Controller which has ListController Behavior 
        Users::extendListColumns(function($list, $model) {

            // we want only our Item model be extended
            if (!$model instanceof User) {
                return;
            }

            // adding quantity column
            $list->addColumns([
                'customer[height]' => [
                    'label' => 'Height',
                    'type' => 'number',
                    'searchable' => true
                ],
                'customer[weight]' => [
                    'label' => 'Weight',
                    'type' => 'number',
                    'searchable' => true
                ]
            ]);

        });

        Users::extendFormFields(function (FormWidget $widget) {
            if (!$widget->model instanceof User || $widget->isNested) {
                return;
            }

            $widget->addFields([
                'goldtest_civility' => [
                    'label' => 'Civilité',
                    'type' => 'dropdown',
                    'tab' => 'rainlab.user::lang.user.account',
                    'emptyOption' => '--',
                    'options' => [
                        'Madame' => 'Madame',
                        'Monsieur' => 'Monsieur',
                    ],
                ],
            ]);

            $widget->addTabFields([
                'goldtest_is_school_member' => [
                    'label' => 'travaille pour école de ski',
                    'type' => 'switch',
                    'default' => false,
                    'tab' => 'rainlab.user::lang.user.account',
                ],
                'goldtest_school' => [
                    'label' => 'Ecole/Association/office',
                    'type' => 'relation',
                    'nameFrom' => 'name',
                    'emptyOption' => '--',
                    'tab' => 'rainlab.user::lang.user.account',
                ],
                'goldtest_school_title' => [
                    'label' => 'Titre',
                    'type' => 'text',
                    'tab' => 'rainlab.user::lang.user.account',
                    'span' => 'auto'
                ],
                'goldtest_phone' => [
                    'label' => 'Numéro de téléphone',
                    'type' => 'text',
                    'tab' => 'rainlab.user::lang.user.account',
                    'span' => 'auto'
                ],
                'customer[height]' => [
                    'label' => 'Taille (cm)',
                    'type' => 'text',
                    'tab' => 'rainlab.user::lang.user.account',
                    'span' => 'auto'
                ],
                'customer[weight]' => [
                    'label' => 'Poids (kg)',
                    'type' => 'text',
                    'tab' => 'rainlab.user::lang.user.account',
                    'span' => 'auto'
                ],
            ]);
        });

        Event::listen('mall.customer.afterSignup', function (SignUpHandler $handler, User $user) {
            $user->goldtest_is_school_member = Request::post('goldtest_is_school_member');
            $user->goldtest_school_id = Request::post('goldtest_school_id');
            $user->goldtest_phone = Request::post('goldtest_phone');
            $user->save();
        });

        Event::listen('rainlab.user.login', function (User $user) {
            if(!$user->customer->height) {
                \Session::put('show_user_fill_details_popup', 'show');
            }
        });
    }
}
