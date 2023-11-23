<?php

namespace Goldtest\Mall\Classes;

use Exception;
use October\Rain\Exception\ValidationException;
use OFFLINE\Mall\Classes\Payments\PaymentProvider;
use OFFLINE\Mall\Classes\Payments\PaymentResult;
use OFFLINE\Mall\Models\PaymentGatewaySettings;
use OFFLINE\Mall\Models\PaymentMethod;
use Request;
use Session;
use Throwable;
use Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\Message\ErrorResponse;
use Ticketpark\SaferpayJson\PaymentPage\AssertRequest;
use Ticketpark\SaferpayJson\PaymentPage\InitializeRequest;

class SixSaferPayPaymentProvider extends PaymentProvider
{
    /**
     * Return the display name of this payment provider.
     *
     * @return string
     */
    public function name(): string
    {
        return 'SIX SaferPay';
    }

    /**
     * Return a unique identifier for this payment provider.
     *
     * @return string
     */
    public function identifier(): string
    {
        return 'six-saferpay';
    }

    /**
     * Validate the given input data for this payment.
     *
     * @return bool
     * @throws ValidationException
     */
    public function validate(): bool
    {
        return true;
    }

    /**
     * Process the payment.
     *
     * @param PaymentResult $result
     *
     * @return PaymentResult
     */
    public function process(PaymentResult $result): PaymentResult
    {
        try {
            /** @var PaymentMethod $paymentMethod */
            $paymentMethod = $this->order->payment_method;

            $requestHeader = (new Container\RequestHeader())
                ->setCustomerId($this->customerId())
                ->setRequestId(uniqid('six', true));

            $amount = (new Container\Amount())
                ->setCurrencyCode($this->order->currency['code'])
                ->setValue($this->order->total_in_currency * 100);

            $payment = (new Container\Payment())
                ->setAmount($amount)
                ->setOrderId($this->order->id)
                ->setDescription('Goldtest commande ' . $this->order->id);

            $returnUrls = (new Container\ReturnUrls())
                ->setSuccess($this->returnUrl())
                ->setFail($this->failUrl())
                ->setAbort($this->cancelUrl());

            $response = (new InitializeRequest($this->apiKey(), $this->apiSecret(), $this->isTestMode()))
                ->setRequestHeader($requestHeader)
                ->setPayment($payment)
                ->setPaymentMethods([$paymentMethod->code])
                ->setTerminalId($this->terminalId())
                ->setReturnUrls($returnUrls)
                ->execute();

        } catch (Throwable $e) {
            return $result->fail([], $e);
        }

        if ($response instanceof ErrorResponse) {
            return $result->fail(
                $this->extractError($response),
                new Exception($response->getErrorMessage() . ': ' . implode(', ', $response->getErrorDetail()))
            );
        }

        Session::put('mall.payment.callback', self::class);
        Session::put('mall.saferpay.token', $response->getToken());

        return $result->redirect($response->getRedirectUrl());
    }

    /**
     * PayPal has processed the payment and redirected the user back.
     *
     * @param PaymentResult $result
     *
     * @return PaymentResult
     */
    public function complete(PaymentResult $result): PaymentResult
    {
        $token = Session::pull('mall.saferpay.token');

        $this->setOrder($result->order);

        try {
            $requestHeader = (new Container\RequestHeader())
                ->setCustomerId($this->customerId())
                ->setRequestId(uniqid('six', true));

            $response = (new AssertRequest($this->apiKey(), $this->apiSecret(), $this->isTestMode()))
                ->setRequestHeader($requestHeader)
                ->setToken($token)
                ->execute();

        } catch (Throwable $e) {
            return $result->fail([], $e);
        }

        if ($response instanceof ErrorResponse) {
            return $result->fail(
                $this->extractError($response),
                new Exception($response->getErrorMessage() . ': ' . implode(', ', $response->getErrorDetail())
                ));
        }

        $data = ['id' => $response->getTransaction()->getId()];

        return $result->success($data, $response);
    }

    /**
     * Fail URL passed to external payment services.
     *
     * The user will be redirected back to this URL if an external error occurs.
     *
     * @return string
     */
    public function failUrl(): string
    {
        return Request::url() . '?' . http_build_query([
                'return' => 'fail',
                'oc-microcart-payment-id' => Session::get('mall.payment.id'),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function settings(): array
    {
        return [
            'six_customer_id' => [
                'label' => 'Customer ID',
                'span' => 'auto',
                'type' => 'text',
            ],
            'six_terminal_id' => [
                'label' => 'Terminal ID',
                'span' => 'auto',
                'type' => 'text',
            ],
            'six_api_key' => [
                'label' => 'API Key',
                'span' => 'auto',
                'type' => 'text',
            ],
            'six_api_secret' => [
                'label' => 'API Secret',
                'span' => 'auto',
                'type' => 'text',
            ],
            'test_mode' => [
                'label' => 'Test mode',
                'comment' => 'Activer le mode sandbox (nécessite un compte Saferpay de test)',
                'type' => 'switch',
                'default' => false,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function encryptedSettings(): array
    {
        return [
            'six_customer_id',
            'six_terminal_id',
            'six_api_key',
            'six_api_secret',
        ];
    }

    protected function isTestMode()
    {
        return PaymentGatewaySettings::get('test_mode');
    }

    protected function customerId()
    {
        return $this->getEncryptedSetting('six_customer_id');
    }

    protected function terminalId()
    {
        return $this->getEncryptedSetting('six_terminal_id');
    }

    protected function apiKey()
    {
        return $this->getEncryptedSetting('six_api_key');
    }

    protected function apiSecret()
    {
        return $this->getEncryptedSetting('six_api_secret');
    }

    protected function getEncryptedSetting($key)
    {
        return decrypt(PaymentGatewaySettings::get($key));
    }

    /**
     * @param ErrorResponse $response
     *
     * @return array
     */
    protected function extractError(ErrorResponse $response): array
    {
        return [
            'name' => $response->getErrorName(),
            'msg' => $response->getErrorMessage(),
            'detail' => $response->getErrorDetail(),
        ];
    }
}
