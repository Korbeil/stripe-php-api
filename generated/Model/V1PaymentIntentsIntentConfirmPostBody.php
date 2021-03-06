<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1PaymentIntentsIntentConfirmPostBody
{
    /**
     * The client secret of the PaymentIntent.
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * ID of the payment method to attach to this PaymentIntent.
     *
     * @var string
     */
    protected $paymentMethod;
    /**
     * The list of payment method types (e.g. card) that this PaymentIntent is allowed to use.
     *
     * @var string[]
     */
    protected $paymentMethodTypes;
    /**
     * Email address that the receipt for the resulting payment will be sent to.
     *
     * @var string
     */
    protected $receiptEmail;
    /**
     * The URL to redirect your customer back to after they authenticate or cancel their payment on the payment method's app or site.
    If you'd prefer to redirect to a mobile application, you can alternatively supply an application URI scheme.
    This parameter is only used for cards and other redirect-based payment methods.
     *
     * @var string
     */
    protected $returnUrl;
    /**
     * Set to `true` to save the PaymentIntent's payment method (either `source` or `payment_method`) to the associated customer. If the payment method is already attached, this parameter does nothing. This parameter defaults to `false` and applies to the payment method passed in the same request or the current payment method attached to the PaymentIntent and must be specified again if a new payment method is added.
     *
     * @var bool
     */
    protected $savePaymentMethod;
    /**
     * Shipping information for this PaymentIntent.
     *
     * @var mixed
     */
    protected $shipping;
    /**
     * ID of the Source object to attach to this PaymentIntent.
     *
     * @var string
     */
    protected $source;

    /**
     * The client secret of the PaymentIntent.
     *
     * @return string
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    /**
     * The client secret of the PaymentIntent.
     *
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(?string $clientSecret): self
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @return string[]
     */
    public function getExpand(): ?array
    {
        return $this->expand;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @param string[] $expand
     *
     * @return self
     */
    public function setExpand(?array $expand): self
    {
        $this->expand = $expand;

        return $this;
    }

    /**
     * ID of the payment method to attach to this PaymentIntent.
     *
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * ID of the payment method to attach to this PaymentIntent.
     *
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * The list of payment method types (e.g. card) that this PaymentIntent is allowed to use.
     *
     * @return string[]
     */
    public function getPaymentMethodTypes(): ?array
    {
        return $this->paymentMethodTypes;
    }

    /**
     * The list of payment method types (e.g. card) that this PaymentIntent is allowed to use.
     *
     * @param string[] $paymentMethodTypes
     *
     * @return self
     */
    public function setPaymentMethodTypes(?array $paymentMethodTypes): self
    {
        $this->paymentMethodTypes = $paymentMethodTypes;

        return $this;
    }

    /**
     * Email address that the receipt for the resulting payment will be sent to.
     *
     * @return string
     */
    public function getReceiptEmail(): ?string
    {
        return $this->receiptEmail;
    }

    /**
     * Email address that the receipt for the resulting payment will be sent to.
     *
     * @param string $receiptEmail
     *
     * @return self
     */
    public function setReceiptEmail(?string $receiptEmail): self
    {
        $this->receiptEmail = $receiptEmail;

        return $this;
    }

    /**
     * The URL to redirect your customer back to after they authenticate or cancel their payment on the payment method's app or site.
    If you'd prefer to redirect to a mobile application, you can alternatively supply an application URI scheme.
    This parameter is only used for cards and other redirect-based payment methods.
     *
     * @return string
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * The URL to redirect your customer back to after they authenticate or cancel their payment on the payment method's app or site.
    If you'd prefer to redirect to a mobile application, you can alternatively supply an application URI scheme.
    This parameter is only used for cards and other redirect-based payment methods.
     *
     * @param string $returnUrl
     *
     * @return self
     */
    public function setReturnUrl(?string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * Set to `true` to save the PaymentIntent's payment method (either `source` or `payment_method`) to the associated customer. If the payment method is already attached, this parameter does nothing. This parameter defaults to `false` and applies to the payment method passed in the same request or the current payment method attached to the PaymentIntent and must be specified again if a new payment method is added.
     *
     * @return bool
     */
    public function getSavePaymentMethod(): ?bool
    {
        return $this->savePaymentMethod;
    }

    /**
     * Set to `true` to save the PaymentIntent's payment method (either `source` or `payment_method`) to the associated customer. If the payment method is already attached, this parameter does nothing. This parameter defaults to `false` and applies to the payment method passed in the same request or the current payment method attached to the PaymentIntent and must be specified again if a new payment method is added.
     *
     * @param bool $savePaymentMethod
     *
     * @return self
     */
    public function setSavePaymentMethod(?bool $savePaymentMethod): self
    {
        $this->savePaymentMethod = $savePaymentMethod;

        return $this;
    }

    /**
     * Shipping information for this PaymentIntent.
     *
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Shipping information for this PaymentIntent.
     *
     * @param mixed $shipping
     *
     * @return self
     */
    public function setShipping($shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * ID of the Source object to attach to this PaymentIntent.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * ID of the Source object to attach to this PaymentIntent.
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }
}
