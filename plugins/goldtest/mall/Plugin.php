<?php

namespace Goldtest\Mall;

use Backend\Classes\NavigationManager;
use Backend\Widgets\Filter as FilterWidget;
use Backend\Widgets\Form as FormWidget;
use Backend\Widgets\Lists as ListWidget;
use Cache;
use DB;
use Event;
use Flash;
use Model;
use Goldtest\Mall\Classes\Customer\GoldtestSignUpHandler;
use Goldtest\Mall\Classes\DefaultMoney;
use Goldtest\Mall\Classes\MySQLIndex;
use Goldtest\Mall\Classes\SixSaferPayPaymentProvider;
use Goldtest\Site\Models\School;
use Illuminate\Support\Facades\Validator;
use OFFLINE\Mall\Classes\Customer\SignUpHandler;
use OFFLINE\Mall\Classes\Index\Filebase;
use OFFLINE\Mall\Classes\Index\Index;
use OFFLINE\Mall\Classes\Index\IndexNotSupportedException;
use OFFLINE\Mall\Classes\Payments\PaymentGateway;
use OFFLINE\Mall\Classes\Utils\Money;
use OFFLINE\Mall\Controllers\Orders;
use OFFLINE\Mall\Controllers\PaymentLogs;
use OFFLINE\Mall\Controllers\Products;
use OFFLINE\Mall\Controllers\PropertyGroups;
use OFFLINE\Mall\Models\Address;
use OFFLINE\Mall\Models\Cart;
use OFFLINE\Mall\Models\GeneralSettings;
use OFFLINE\Mall\Models\Order;
use OFFLINE\Mall\Models\PaymentLog;
use OFFLINE\Mall\Models\Product;
use OFFLINE\Mall\Models\Property;
use OFFLINE\Mall\Models\ShippingMethod;
use OFFLINE\Mall\Models\Variant;
use October\Rain\Exception\ApplicationException;
use October\Rain\Support\Arr;
use OFFLINE\Mall\Models\Discount;
use RainLab\Translate\Models\Message;
use Redirect;
use Request;
use Response;
use Session;
use System\Classes\PluginBase;
use System\Models\File;

/*
 * DB fields added
 *
 * offline_mall_products.goldtest_assurances_activity
 * offline_mall_products.goldtest_assurances_design
 * offline_mall_products.goldtest_assurances_material
 * offline_mall_products.goldtest_assurances_details
 *
 * offline_mall_categories.goldtest_pretitle
 *
 * offline_mall_addresses.goldtest_is_school_address
 *
 */

class Plugin extends PluginBase
{
    const LEAGUE5_CATEGORY_ID = 2;

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Mall configs for Goldtest',
            'description' => '',
            'author' => 'inetis',
            'icon' => 'icon-leaf',
        ];
    }

    public function boot()
    {
        $this->registerMallIndexOverride();

        $this->registerCustomMoneyClass();

        $this->registerSixSaferPayPaymantProvider();

        $this->extendMallProduct();

        $this->extendMallVariant();

        $this->extendMallOrder();

        $this->simplifyMallBackend();

        $this->addContextImagesToProduct();

        $this->addAssurancesToProduct();

        $this->addColorHexaFieldToFilterProperty();

        $this->fixMallPaymentLogFields();

        $this->overrideMallOrdersList();

        $this->addValidationsOnCheckout();

        Validator::extend('requiredDiscountTrigger', function ($attribute, $value, $parameters) {
            $post = post(collect($parameters)->first());
            for ($k = 1; $k < count($parameters); $k++) {
                $post = array_get($post, $parameters[$k], []);
            }
            return count(array_get($post, $attribute, [])) > 0;
        });
    }

    public function register()
    {
        $this->app->extend(SignUpHandler::class,  function ($service, $app) {
            return new GoldtestSignUpHandler();
        });
        //dd($this->app);
        $this->registerConsoleCommand('discount:refact', 'App\Console\Commands\DiscounRefact');
    }

    public function registerComponents()
    {
        return [
            Components\Product::class => 'goldtestProduct',
            Components\InitCheckout::class => 'goldtestInitCheckout',
            Components\DiscountApplier::class => 'goldtestDiscountApplier',
            Components\CustomerProfile::class => 'goldtestCustomerProfile',
            Components\Cart::class => 'goldtestCart',
        ];
    }

    protected function extendMallProduct()
    {
        Product::extend(function (Product $model) {
            $model->addDynamicMethod('getGenderPropertyAttribute', function () use ($model) {
                return $model->getPropertyValueBySlug('genre');
            });

            $model->addDynamicMethod('getPropertiesIndexedBySlugAttribute', function () use ($model) {
                return $model->property_values()->with('property')->get()->mapWithKeys(function ($item) {
                    return [$item->property->slug => $item];
                });
            });

            $model->addDynamicMethod('getInProCategoryAttribute', function () use ($model) {
                return $model->categories->pluck('id')->contains(self::LEAGUE5_CATEGORY_ID);
            });

            $model->addDynamicMethod('getPropertyValueBySlug', $this->registerPropertyValueBySlugCallback($model));
        });
    }

    protected function extendMallVariant()
    {
        Variant::extend(function (Variant $model) {
            $model->addDynamicMethod('getGenderPropertyAttribute', function () use ($model) {
                return $model->getPropertyValueBySlug('genre');
            });

            $model->addDynamicMethod('getColorPropertyAttribute', function () use ($model) {
                return $model->getPropertyValueBySlug('couleurs');
            });

            $model->addDynamicMethod('getSizePropertyAttribute', function () use ($model) {
                return $model->getPropertyValueBySlug('size');
            });

            $model->addDynamicMethod('getPropertyValueBySlug', $this->registerPropertyValueBySlugCallback($model));
        });
    }

    protected function registerMallIndexOverride()
    {
        $this->app->bind(Index::class, function () {
            try {
                return new MySQLIndex;
            } catch (IndexNotSupportedException $e) {
                logger()->error(
                    '[OFFLINE.Mall] Your database does not support JSON data. Your index driver has been switched to "Filesystem". Update your database to make use of database indexing.'
                );

                GeneralSettings::set('index_driver', 'filesystem');
                Cache::forget('offline_mall.mysql.index.driver');

                return new Filebase;
            }
        });
    }

    /**
     * Fix issue with Twig parser when user redirected after payment
     * @see https://github.com/OFFLINE-GmbH/oc-mall-plugin/issues/258
     */
    private function registerCustomMoneyClass()
    {
        $this->app->singleton(Money::class, function () {
            return new DefaultMoney();
        });
    }

    private function registerSixSaferPayPaymantProvider()
    {
        $gateway = $this->app->get(PaymentGateway::class);
        $gateway->registerProvider(new SixSaferPayPaymentProvider);
    }

    protected function registerPropertyValueBySlugCallback($model)
    {
        return function ($slug) use ($model) {
            return $model->property_values()
                ->whereHas('property', function ($query) use ($slug) {
                    $query->where('slug', $slug);
                })
                ->first()
                ->value ?? '';
        };
    }

    protected function simplifyMallBackend()
    {
        $this->removeFieldsFromMallProductForm();
        $this->removeFieldsFromMallProductVariantModal();

        $this->removeMallSidebarMenuItems();
    }

    protected function removeFieldsFromMallProductForm()
    {
        Event::listen('backend.form.extendFields', function (FormWidget $form) {
            if (!$form->getController() instanceof Products || !$form->model instanceof Product || $form->isNested) {
                return;
            }

            // Tab details
            $form->removeTab('offline.mall::lang.product.details');

            // Tab Description
            $form->removeField('gtin');
            $form->removeField('mpn');
            $form->removeField('brand');

            // Tab Images/Dl
            $form->removeField('downloads');
            $form->removeField('links');
            $form->removeField('embeds');

            // Tab Cart
            $form->removeField('custom_fields');
            $form->removeField('services');

            // Tab review
            $form->removeField('reviews');
        });
    }

    protected function removeFieldsFromMallProductVariantModal()
    {
        Event::listen('backend.form.extendFields', function (FormWidget $form) {
            if (!$form->getController() instanceof Products || !$form->model instanceof Variant || $form->isNested) {
                return;
            }

            // Tab Description
            $form->removeField('gtin');
            $form->removeField('mpn');

            // Tab Images/Dl
            $form->removeField('downloads');
        });
    }

    protected function removeMallSidebarMenuItems()
    {
        Event::listen('backend.menu.extendItems', function (NavigationManager $manager) {
            $manager->removeSideMenuItem('OFFLINE.Mall', 'mall-catalogue', 'mall-reviews');
            $manager->removeSideMenuItem('OFFLINE.Mall', 'mall-catalogue', 'mall-services');
            $manager->removeSideMenuItem('OFFLINE.Mall', 'mall-catalogue', 'mall-brands');
        });
    }

    private function addColorHexaFieldToFilterProperty()
    {
        Event::listen('backend.form.extendFieldsBefore', function (FormWidget $form) {
            if (!$form->getController() instanceof PropertyGroups || !$form->model instanceof Property || $form->isNested) {
                return;
            }

            if (($form->model->slug ?? '') !== 'couleurs') {
                return;
            }

            Arr::set($form->fields, 'options.form.fields.value.span', 'left');

            Arr::set($form->fields, 'options.form.fields.color', [
                'label' => 'Couleur',
                'type' => 'text',
                'comment' => 'Valeur hexadécimale',
                'span' => 'right',
            ]);
        });
    }

    private function addContextImagesToProduct()
    {
        Product::extend(function (Product $model) {
            $model->attachMany['goldtest_context_images'] = [File::class];
        });

        Products::extendFormFields(function (FormWidget $form, Model $model, $context) {
            if (!$model instanceof Product) {
                return;
            }

            $form->addTabFields([
                'goldtest_context_images' => [
                    'label' => 'Images de contexte',
                    'type' => 'fileupload',
                    'mode' => 'image',
                    'tab' => 'offline.mall::lang.product.description',
                    'span' => 'right',
                ],
            ]);
        });
    }

    private function addAssurancesToProduct()
    {
        Product::extend(function (Product $model) {
            $model->translatable = array_merge($model->translatable, [
                'goldtest_assurances_activity',
                'goldtest_assurances_design',
                'goldtest_assurances_material',
                'goldtest_assurances_details',
            ]);
        });

        Event::listen('backend.form.extendFieldsBefore', function (FormWidget $form) {
            if (!$form->getController() instanceof Products || !$form->model instanceof Product || $form->isNested) {
                return;
            }

            $form->tabs['fields'] += [
                'goldtest_assurances_activity' => [
                    'label' => 'Activité',
                    'type' => 'textarea',
                    'tab' => 'Garanties',
                    'span' => 'auto',
                ],
                'goldtest_assurances_design' => [
                    'label' => 'Design',
                    'type' => 'textarea',
                    'tab' => 'Garanties',
                    'span' => 'auto',
                ],
                'goldtest_assurances_material' => [
                    'label' => 'Matériel',
                    'type' => 'textarea',
                    'tab' => 'Garanties',
                    'span' => 'auto',
                ],
                'goldtest_assurances_details' => [
                    'label' => 'Détails',
                    'type' => 'textarea',
                    'tab' => 'Garanties',
                    'span' => 'auto',
                ],
            ];
        });
    }

    private function fixMallPaymentLogFields()
    {
        Event::listen('backend.form.extendFieldsBefore', function (FormWidget $form) {
            // /backend/offline/mall/paymentlogs/update/XXX
            $isPaymentlogsForm = $form->getController() instanceof PaymentLogs
                && $form->model instanceof PaymentLog
                && !$form->isNested;

            // /backend/offline/mall/orders/show/XXX payments relation modal
            $isOrderFormPaymentLogsRelation = $form->getController() instanceof Orders
                && Request::header('X-OCTOBER-REQUEST-HANDLER') === 'onRelationClickViewList'
                && Request::post('_relation_field') === 'payment_logs'
                && $form->model instanceof PaymentLog
                && !$form->isNested;

            if (!$isPaymentlogsForm && !$isOrderFormPaymentLogsRelation) {
                return;
            }

            $fields = &$form->tabs['fields'];

            if (isset($fields['message'])) {
                $fields['message_raw'] = $fields['message'];
                unset($fields['message']);
            }
        });
    }

    private function overrideMallOrdersList()
    {
        Orders::extendListColumns(function (ListWidget $list, $model) {
            if (!$model instanceof Order) {
                return;
            }

            $list->defaultSort = [
                'column' => 'created_at',
                'direction' => 'desc',
            ];

            // array_set($list->columns, 'payment_state.sortable', false);
        });

        Orders::extendListFilterScopes(function (FilterWidget $filter) {
            $filter->addScopes([
                'school' => [
                    'label' => 'Ecole de ski',
                    'modelClass' => School::class,
                    'nameFrom' => 'name',
                    'scope' => 'filerBySchool',
                ],
            ]);
        });
    }

    private function extendMallOrder()
    {
        Order::extend(function (Order $model) {
            $model->addDynamicMethod('scopeFilerBySchool', function ($query, $schoolId) use ($model) {
                $query
                    ->whereHas('customer.user', function ($q) use ($schoolId) {
                        $q->where('goldtest_school_id', $schoolId);
                    })
                    ->leftJoin(
                        'offline_mall_addresses',
                        DB::raw('JSON_EXTRACT(billing_address, "$.id")'),
                        '=',
                        'offline_mall_addresses.id'
                    )
                    ->where(function ($q) {
                        $q->where('offline_mall_addresses.goldtest_is_school_address', true);
                    });
            });

            $model->addDynamicMethod('isGoldtestSchoolOrder', function () use ($model) {
                if (!empty($billingAdresse = $model->billing_address['id'])) {
                    return Address::find($billingAdresse)->goldtest_is_school_address ?? false;
                }

                return false;
            });

            $model->bindEvent('model.beforeSave', function () use ($model) {
                if ($comment = Request::post('checkout_comment')) {
                    $model->goldtest_customer_comment = $comment;
                }
            });
        });
    }

    private function addValidationsOnCheckout(): void
    {
        Event::listen('mall.order.beforeCreate', function (Cart $cart) {
            if (!$cart->shipping_address) {
                throw new ApplicationException(Message::trans('Adresse de livraison invalide'));
            }

            if (!$cart->billing_address) {
                throw new ApplicationException(Message::trans('Adresse de facturation invalide'));
            }

            $supportedShippingMethods = ShippingMethod::getAvailableByCart($cart);
            $needRefresh = false;

            if (!$supportedShippingMethods->contains($cart->shipping_method)) {
                $cart->setShippingMethod($supportedShippingMethods->first());

                Flash::info(Message::trans("Le mode de livraison a été modifié car il n'était pas valide"));
                $needRefresh = true;
            }

            if ($cart->billing_address->country->code != 'CH' && $cart->payment_method->code == 'invoice') {
                Flash::info(Message::trans("Moyen de paiement invalide, merci de choisir un nouveau moyen de paiement"));

                Session::save();
                Response::make()->setContent([
                    'X_OCTOBER_REDIRECT' => '/checkout/payment?via=confirm',
                ])->send();

                exit;
            }

            if ($needRefresh) {
                Session::save();
                Redirect::refresh()->send();
                exit;
            }
        });
    }
}
