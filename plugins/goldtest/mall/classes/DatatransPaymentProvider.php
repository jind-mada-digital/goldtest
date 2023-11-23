<?php

namespace Inetis\Mall\Classes;

use OFFLINE\Mall\Classes\Payments\PaymentProvider;
use OFFLINE\Mall\Classes\Payments\PaymentResult;
use OFFLINE\Mall\Models\PaymentGatewaySettings;
use Omnipay\Omnipay;
use Session;
use Throwable;

class DatatransPaymentProvider extends PaymentProvider
{
    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'Datatrans';
    }

    /**
     * {@inheritdoc}
     */
    public function identifier(): string
    {
        return 'datatrans';
    }

    /**
     * {@inheritDoc}
     */
    public function validate(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function process(PaymentResult $result): PaymentResult
    {
        $gateway = $this->getGateway();

        $response = null;

        try {
            $response = $gateway->purchase([
                'amount' => $this->order->total_in_currency,
                'currency' => $this->order->currency['code'],
                'transactionId' => $this->order->id,
                'returnUrl' => $this->returnUrl(),
                'cancelUrl' => $this->cancelUrl(),
                'redirectMethod' => 'GET',
            ])->send();
        } catch (Throwable $e) {
            return $result->fail([], $e);
        }

        // Datatrans has to return a RedirectResponse if everything went well
        if (!$response->isRedirect()) {
            return $result->fail((array)$response->getData(), $response);
        }

        Session::put('mall.payment.callback', self::class);

        return $result->redirect($response->getRedirectUrl());
    }

    /**
     * Datatrans has processed the payment and redirected the user back.
     *
     * @param PaymentResult $result
     *
     * @return PaymentResult
     */
    public function complete(PaymentResult $result): PaymentResult
    {
        $this->setOrder($result->order);

        try {
            $response = $this->getGateway()->completeAuthorize()->send();
        } catch (Throwable $e) {
            return $result->fail([], $e);
        }

        $data = (array)$response->getData();

        if (!$response->isSuccessful()) {
            return $result->fail($data, $response);
        }

        return $result->success($data, $response);
    }

    /**
     * Build the Omnipay Gateway for Datatrans.
     *
     * @return \Omnipay\Common\GatewayInterface
     */
    protected function getGateway()
    {
        $gateway = Omnipay::create('Datatrans');

        $gateway->initialize([
            'merchantId' => decrypt(PaymentGatewaySettings::get('datatrans_merchant_id')),
            'sign' => decrypt(PaymentGatewaySettings::get('datatrans_sign')),
            'hmacKey1' => decrypt(PaymentGatewaySettings::get('datatrans_hmacKey1')),
            'hmacKey2' => decrypt(PaymentGatewaySettings::get('datatrans_hmacKey2')),
        ]);

        return $gateway;
    }

    /**
     * {@inheritdoc}
     */
    public function settings(): array
    {
        return [
            'datatrans_merchant_id' => [
                'label' => 'Merchant-ID',
                'span' => 'left',
                'type' => 'text',
            ],
            'datatrans_sign' => [
                'label' => 'Sign',
                'span' => 'left',
                'type' => 'text',
            ],
            'datatrans_hmacKey1' => [
                'label' => 'HMAC Key1',
                'span' => 'left',
                'type' => 'text',
            ],
            'datatrans_hmacKey2' => [
                'label' => 'HMAC Key2',
                'span' => 'left',
                'type' => 'text',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function encryptedSettings(): array
    {
//        return ['datatrans_merchant_id', 'datatrans_sign'];

        return [
            'datatrans_merchant_id',
            'datatrans_sign',
            'datatrans_hmacKey1',
            'datatrans_hmacKey2',
        ];
    }
}
