<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentIntent
{
    /**
     * Amount intended to be collected by this PaymentIntent.
     *
     * @var int
     */
    protected $amount;
    /**
     * Amount that can be captured from this PaymentIntent.
     *
     * @var int
     */
    protected $amountCapturable;
    /**
     * Amount that was collected by this PaymentIntent.
     *
     * @var int
     */
    protected $amountReceived;
    /**
     * ID of the Connect application that created the PaymentIntent.
     *
     * @var string
     */
    protected $application;
    /**
     * The amount of the application fee (if any) for the resulting payment. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @var int
     */
    protected $applicationFeeAmount;
    /**
     * Populated when `status` is `canceled`, this is the time at which the PaymentIntent was canceled. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $canceledAt;
    /**
     * User-given reason for cancellation of this PaymentIntent, one of `duplicate`, `fraudulent`, `requested_by_customer`, or `failed_invoice`.
     *
     * @var string
     */
    protected $cancellationReason;
    /**
     * Capture method of this PaymentIntent, one of `automatic` or `manual`.
     *
     * @var string
     */
    protected $captureMethod;
    /**
     * Charges that were created by this PaymentIntent, if any.
     *
     * @var PaymentIntentCharges
     */
    protected $charges;
    /**
     * The client secret of this PaymentIntent. Used for client-side retrieval using a publishable key. Please refer to [dynamic authentication](https://stripe.com/docs/payments/dynamic-authentication) guide on how `client_secret` should be handled.
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * Confirmation method of this PaymentIntent, one of `secret` or `publishable`.
     *
     * @var string
     */
    protected $confirmationMethod;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @var string
     */
    protected $currency;
    /**
     * ID of the Customer this PaymentIntent is for if one exists.
     *
     * @var string
     */
    protected $customer;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     *
     * @var string
     */
    protected $description;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * @var ApiErrors
     */
    protected $lastPaymentError;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. For more information, see the [documentation](https://stripe.com/docs/payments/payment-intents/creating-payment-intents#storing-information-in-metadata).
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * @var PaymentIntentNextAction
     */
    protected $nextAction;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * The account (if any) for which the funds of the PaymentIntent are intended. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @var string
     */
    protected $onBehalfOf;
    /**
     * ID of the payment method used in this PaymentIntent.
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
     * ID of the review associated with this PaymentIntent, if any.
     *
     * @var string
     */
    protected $review;
    /**
     * @var Shipping
     */
    protected $shipping;
    /**
     * ID of the source used in this PaymentIntent.
     *
     * @var string
     */
    protected $source;
    /**
     * Extra information about a PaymentIntent. This will appear on your customer's statement when this PaymentIntent succeeds in creating a charge.
     *
     * @var string
     */
    protected $statementDescriptor;
    /**
     * Status of this PaymentIntent, one of `requires_payment_method`, `requires_confirmation`, `requires_action`, `processing`, `requires_authorization`, `requires_capture`, `canceled`, or `succeeded`.
     *
     * @var string
     */
    protected $status;
    /**
     * @var TransferData
     */
    protected $transferData;
    /**
     * A string that identifies the resulting payment as part of a group. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @var string
     */
    protected $transferGroup;

    /**
     * Amount intended to be collected by this PaymentIntent.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Amount intended to be collected by this PaymentIntent.
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Amount that can be captured from this PaymentIntent.
     *
     * @return int
     */
    public function getAmountCapturable(): ?int
    {
        return $this->amountCapturable;
    }

    /**
     * Amount that can be captured from this PaymentIntent.
     *
     * @param int $amountCapturable
     *
     * @return self
     */
    public function setAmountCapturable(?int $amountCapturable): self
    {
        $this->amountCapturable = $amountCapturable;

        return $this;
    }

    /**
     * Amount that was collected by this PaymentIntent.
     *
     * @return int
     */
    public function getAmountReceived(): ?int
    {
        return $this->amountReceived;
    }

    /**
     * Amount that was collected by this PaymentIntent.
     *
     * @param int $amountReceived
     *
     * @return self
     */
    public function setAmountReceived(?int $amountReceived): self
    {
        $this->amountReceived = $amountReceived;

        return $this;
    }

    /**
     * ID of the Connect application that created the PaymentIntent.
     *
     * @return string
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }

    /**
     * ID of the Connect application that created the PaymentIntent.
     *
     * @param string $application
     *
     * @return self
     */
    public function setApplication(?string $application): self
    {
        $this->application = $application;

        return $this;
    }

    /**
     * The amount of the application fee (if any) for the resulting payment. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @return int
     */
    public function getApplicationFeeAmount(): ?int
    {
        return $this->applicationFeeAmount;
    }

    /**
     * The amount of the application fee (if any) for the resulting payment. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @param int $applicationFeeAmount
     *
     * @return self
     */
    public function setApplicationFeeAmount(?int $applicationFeeAmount): self
    {
        $this->applicationFeeAmount = $applicationFeeAmount;

        return $this;
    }

    /**
     * Populated when `status` is `canceled`, this is the time at which the PaymentIntent was canceled. Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getCanceledAt(): ?int
    {
        return $this->canceledAt;
    }

    /**
     * Populated when `status` is `canceled`, this is the time at which the PaymentIntent was canceled. Measured in seconds since the Unix epoch.
     *
     * @param int $canceledAt
     *
     * @return self
     */
    public function setCanceledAt(?int $canceledAt): self
    {
        $this->canceledAt = $canceledAt;

        return $this;
    }

    /**
     * User-given reason for cancellation of this PaymentIntent, one of `duplicate`, `fraudulent`, `requested_by_customer`, or `failed_invoice`.
     *
     * @return string
     */
    public function getCancellationReason(): ?string
    {
        return $this->cancellationReason;
    }

    /**
     * User-given reason for cancellation of this PaymentIntent, one of `duplicate`, `fraudulent`, `requested_by_customer`, or `failed_invoice`.
     *
     * @param string $cancellationReason
     *
     * @return self
     */
    public function setCancellationReason(?string $cancellationReason): self
    {
        $this->cancellationReason = $cancellationReason;

        return $this;
    }

    /**
     * Capture method of this PaymentIntent, one of `automatic` or `manual`.
     *
     * @return string
     */
    public function getCaptureMethod(): ?string
    {
        return $this->captureMethod;
    }

    /**
     * Capture method of this PaymentIntent, one of `automatic` or `manual`.
     *
     * @param string $captureMethod
     *
     * @return self
     */
    public function setCaptureMethod(?string $captureMethod): self
    {
        $this->captureMethod = $captureMethod;

        return $this;
    }

    /**
     * Charges that were created by this PaymentIntent, if any.
     *
     * @return PaymentIntentCharges
     */
    public function getCharges(): ?PaymentIntentCharges
    {
        return $this->charges;
    }

    /**
     * Charges that were created by this PaymentIntent, if any.
     *
     * @param PaymentIntentCharges $charges
     *
     * @return self
     */
    public function setCharges(?PaymentIntentCharges $charges): self
    {
        $this->charges = $charges;

        return $this;
    }

    /**
     * The client secret of this PaymentIntent. Used for client-side retrieval using a publishable key. Please refer to [dynamic authentication](https://stripe.com/docs/payments/dynamic-authentication) guide on how `client_secret` should be handled.
     *
     * @return string
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    /**
     * The client secret of this PaymentIntent. Used for client-side retrieval using a publishable key. Please refer to [dynamic authentication](https://stripe.com/docs/payments/dynamic-authentication) guide on how `client_secret` should be handled.
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
     * Confirmation method of this PaymentIntent, one of `secret` or `publishable`.
     *
     * @return string
     */
    public function getConfirmationMethod(): ?string
    {
        return $this->confirmationMethod;
    }

    /**
     * Confirmation method of this PaymentIntent, one of `secret` or `publishable`.
     *
     * @param string $confirmationMethod
     *
     * @return self
     */
    public function setConfirmationMethod(?string $confirmationMethod): self
    {
        $this->confirmationMethod = $confirmationMethod;

        return $this;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * ID of the Customer this PaymentIntent is for if one exists.
     *
     * @return string
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * ID of the Customer this PaymentIntent is for if one exists.
     *
     * @param string $customer
     *
     * @return self
     */
    public function setCustomer(?string $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Unique identifier for the object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier for the object.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return ApiErrors
     */
    public function getLastPaymentError(): ?ApiErrors
    {
        return $this->lastPaymentError;
    }

    /**
     * @param ApiErrors $lastPaymentError
     *
     * @return self
     */
    public function setLastPaymentError(?ApiErrors $lastPaymentError): self
    {
        $this->lastPaymentError = $lastPaymentError;

        return $this;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @return bool
     */
    public function getLivemode(): ?bool
    {
        return $this->livemode;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @param bool $livemode
     *
     * @return self
     */
    public function setLivemode(?bool $livemode): self
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. For more information, see the [documentation](https://stripe.com/docs/payments/payment-intents/creating-payment-intents#storing-information-in-metadata).
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. For more information, see the [documentation](https://stripe.com/docs/payments/payment-intents/creating-payment-intents#storing-information-in-metadata).
     *
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * @return PaymentIntentNextAction
     */
    public function getNextAction(): ?PaymentIntentNextAction
    {
        return $this->nextAction;
    }

    /**
     * @param PaymentIntentNextAction $nextAction
     *
     * @return self
     */
    public function setNextAction(?PaymentIntentNextAction $nextAction): self
    {
        $this->nextAction = $nextAction;

        return $this;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @return string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    /**
     * The account (if any) for which the funds of the PaymentIntent are intended. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @return string
     */
    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    /**
     * The account (if any) for which the funds of the PaymentIntent are intended. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @param string $onBehalfOf
     *
     * @return self
     */
    public function setOnBehalfOf(?string $onBehalfOf): self
    {
        $this->onBehalfOf = $onBehalfOf;

        return $this;
    }

    /**
     * ID of the payment method used in this PaymentIntent.
     *
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * ID of the payment method used in this PaymentIntent.
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
     * ID of the review associated with this PaymentIntent, if any.
     *
     * @return string
     */
    public function getReview(): ?string
    {
        return $this->review;
    }

    /**
     * ID of the review associated with this PaymentIntent, if any.
     *
     * @param string $review
     *
     * @return self
     */
    public function setReview(?string $review): self
    {
        $this->review = $review;

        return $this;
    }

    /**
     * @return Shipping
     */
    public function getShipping(): ?Shipping
    {
        return $this->shipping;
    }

    /**
     * @param Shipping $shipping
     *
     * @return self
     */
    public function setShipping(?Shipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * ID of the source used in this PaymentIntent.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * ID of the source used in this PaymentIntent.
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

    /**
     * Extra information about a PaymentIntent. This will appear on your customer's statement when this PaymentIntent succeeds in creating a charge.
     *
     * @return string
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * Extra information about a PaymentIntent. This will appear on your customer's statement when this PaymentIntent succeeds in creating a charge.
     *
     * @param string $statementDescriptor
     *
     * @return self
     */
    public function setStatementDescriptor(?string $statementDescriptor): self
    {
        $this->statementDescriptor = $statementDescriptor;

        return $this;
    }

    /**
     * Status of this PaymentIntent, one of `requires_payment_method`, `requires_confirmation`, `requires_action`, `processing`, `requires_authorization`, `requires_capture`, `canceled`, or `succeeded`.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status of this PaymentIntent, one of `requires_payment_method`, `requires_confirmation`, `requires_action`, `processing`, `requires_authorization`, `requires_capture`, `canceled`, or `succeeded`.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return TransferData
     */
    public function getTransferData(): ?TransferData
    {
        return $this->transferData;
    }

    /**
     * @param TransferData $transferData
     *
     * @return self
     */
    public function setTransferData(?TransferData $transferData): self
    {
        $this->transferData = $transferData;

        return $this;
    }

    /**
     * A string that identifies the resulting payment as part of a group. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @return string
     */
    public function getTransferGroup(): ?string
    {
        return $this->transferGroup;
    }

    /**
     * A string that identifies the resulting payment as part of a group. See the PaymentIntents [Connect usage guide](https://stripe.com/docs/payments/payment-intents/usage#connect) for details.
     *
     * @param string $transferGroup
     *
     * @return self
     */
    public function setTransferGroup(?string $transferGroup): self
    {
        $this->transferGroup = $transferGroup;

        return $this;
    }
}
