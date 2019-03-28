<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Charge
{
    /**
     * A positive integer in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency) representing how much to charge. The minimum amount is $0.50 US or [equivalent in charge currency](https://support.stripe.com/questions/what-is-the-minimum-amount-i-can-charge-with-stripe).
     *
     * @var int
     */
    protected $amount;
    /**
     * Amount in %s refunded (can be less than the amount attribute on the charge if a partial refund was issued).
     *
     * @var int
     */
    protected $amountRefunded;
    /**
     * ID of the Connect application that created the charge.
     *
     * @var string
     */
    protected $application;
    /**
     * The application fee (if any) for the charge. [See the Connect documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees) for details.
     *
     * @var string
     */
    protected $applicationFee;
    /**
     * The amount of the application fee (if any) for the charge. [See the Connect documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees) for details.
     *
     * @var int
     */
    protected $applicationFeeAmount;
    /**
     * ID of the balance transaction that describes the impact of this charge on your account balance (not including refunds or disputes).
     *
     * @var string
     */
    protected $balanceTransaction;
    /**
     * If the charge was created without capturing, this Boolean represents whether it is still uncaptured or has since been captured.
     *
     * @var bool
     */
    protected $captured;
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
     * ID of the customer this charge is for if one exists.
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
     * Details about the dispute if the charge has been disputed.
     *
     * @var string
     */
    protected $dispute;
    /**
     * Error code explaining reason for charge failure if available (see [the errors section](https://stripe.com/docs/api#errors) for a list of codes).
     *
     * @var string
     */
    protected $failureCode;
    /**
     * Message to user further explaining reason for charge failure if available.
     *
     * @var string
     */
    protected $failureMessage;
    /**
     * @var ChargeFraudDetails
     */
    protected $fraudDetails;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * ID of the invoice this charge is for if one exists.
     *
     * @var string
     */
    protected $invoice;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * The account (if any) the charge was made on behalf of without triggering an automatic transfer. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers) for details.
     *
     * @var string
     */
    protected $onBehalfOf;
    /**
     * ID of the order this charge is for if one exists.
     *
     * @var string
     */
    protected $order;
    /**
     * @var ChargeOutcome
     */
    protected $outcome;
    /**
     * `true` if the charge succeeded, or was successfully authorized for later capture.
     *
     * @var bool
     */
    protected $paid;
    /**
     * ID of the PaymentIntent associated with this charge, if one exists.
     *
     * @var string
     */
    protected $paymentIntent;
    /**
     * ID of the payment method used in this charge.
     *
     * @var string
     */
    protected $paymentMethod;
    /**
     * @var PaymentMethodDetails
     */
    protected $paymentMethodDetails;
    /**
     * This is the email address that the receipt for this charge was sent to.
     *
     * @var string
     */
    protected $receiptEmail;
    /**
     * This is the transaction number that appears on email receipts sent for this charge. This attribute will be `null` until a receipt has been sent.
     *
     * @var string
     */
    protected $receiptNumber;
    /**
     * This is the URL to view the receipt for this charge. The receipt is kept up-to-date to the latest state of the charge, including any refunds. If the charge is for an Invoice, the receipt will be stylized as an Invoice receipt.
     *
     * @var string
     */
    protected $receiptUrl;
    /**
     * Whether the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
     *
     * @var bool
     */
    protected $refunded;
    /**
     * A list of refunds that have been applied to the charge.
     *
     * @var ChargeRefunds
     */
    protected $refunds;
    /**
     * ID of the review associated with this charge if one exists.
     *
     * @var string
     */
    protected $review;
    /**
     * @var Shipping
     */
    protected $shipping;
    /**
     * @var Account
     */
    protected $source;
    /**
     * The transfer ID which created this charge. Only present if the charge came from another Stripe account. [See the Connect documentation](https://stripe.com/docs/connect/destination-charges) for details.
     *
     * @var string
     */
    protected $sourceTransfer;
    /**
     * Extra information about a charge. This will appear on your customer's credit card statement. It must contain at least one letter.
     *
     * @var string
     */
    protected $statementDescriptor;
    /**
     * The status of the payment is either `succeeded`, `pending`, or `failed`.
     *
     * @var string
     */
    protected $status;
    /**
     * ID of the transfer to the `destination` account (only applicable if the charge was created using the `destination` parameter).
     *
     * @var string
     */
    protected $transfer;
    /**
     * @var ChargeTransferData
     */
    protected $transferData;
    /**
     * A string that identifies this transaction as part of a group. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers#grouping-transactions) for details.
     *
     * @var string
     */
    protected $transferGroup;

    /**
     * A positive integer in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency) representing how much to charge. The minimum amount is $0.50 US or [equivalent in charge currency](https://support.stripe.com/questions/what-is-the-minimum-amount-i-can-charge-with-stripe).
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * A positive integer in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency) representing how much to charge. The minimum amount is $0.50 US or [equivalent in charge currency](https://support.stripe.com/questions/what-is-the-minimum-amount-i-can-charge-with-stripe).
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
     * Amount in %s refunded (can be less than the amount attribute on the charge if a partial refund was issued).
     *
     * @return int
     */
    public function getAmountRefunded(): ?int
    {
        return $this->amountRefunded;
    }

    /**
     * Amount in %s refunded (can be less than the amount attribute on the charge if a partial refund was issued).
     *
     * @param int $amountRefunded
     *
     * @return self
     */
    public function setAmountRefunded(?int $amountRefunded): self
    {
        $this->amountRefunded = $amountRefunded;

        return $this;
    }

    /**
     * ID of the Connect application that created the charge.
     *
     * @return string
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }

    /**
     * ID of the Connect application that created the charge.
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
     * The application fee (if any) for the charge. [See the Connect documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees) for details.
     *
     * @return string
     */
    public function getApplicationFee(): ?string
    {
        return $this->applicationFee;
    }

    /**
     * The application fee (if any) for the charge. [See the Connect documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees) for details.
     *
     * @param string $applicationFee
     *
     * @return self
     */
    public function setApplicationFee(?string $applicationFee): self
    {
        $this->applicationFee = $applicationFee;

        return $this;
    }

    /**
     * The amount of the application fee (if any) for the charge. [See the Connect documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees) for details.
     *
     * @return int
     */
    public function getApplicationFeeAmount(): ?int
    {
        return $this->applicationFeeAmount;
    }

    /**
     * The amount of the application fee (if any) for the charge. [See the Connect documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees) for details.
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
     * ID of the balance transaction that describes the impact of this charge on your account balance (not including refunds or disputes).
     *
     * @return string
     */
    public function getBalanceTransaction(): ?string
    {
        return $this->balanceTransaction;
    }

    /**
     * ID of the balance transaction that describes the impact of this charge on your account balance (not including refunds or disputes).
     *
     * @param string $balanceTransaction
     *
     * @return self
     */
    public function setBalanceTransaction(?string $balanceTransaction): self
    {
        $this->balanceTransaction = $balanceTransaction;

        return $this;
    }

    /**
     * If the charge was created without capturing, this Boolean represents whether it is still uncaptured or has since been captured.
     *
     * @return bool
     */
    public function getCaptured(): ?bool
    {
        return $this->captured;
    }

    /**
     * If the charge was created without capturing, this Boolean represents whether it is still uncaptured or has since been captured.
     *
     * @param bool $captured
     *
     * @return self
     */
    public function setCaptured(?bool $captured): self
    {
        $this->captured = $captured;

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
     * ID of the customer this charge is for if one exists.
     *
     * @return string
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * ID of the customer this charge is for if one exists.
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
     * Details about the dispute if the charge has been disputed.
     *
     * @return string
     */
    public function getDispute(): ?string
    {
        return $this->dispute;
    }

    /**
     * Details about the dispute if the charge has been disputed.
     *
     * @param string $dispute
     *
     * @return self
     */
    public function setDispute(?string $dispute): self
    {
        $this->dispute = $dispute;

        return $this;
    }

    /**
     * Error code explaining reason for charge failure if available (see [the errors section](https://stripe.com/docs/api#errors) for a list of codes).
     *
     * @return string
     */
    public function getFailureCode(): ?string
    {
        return $this->failureCode;
    }

    /**
     * Error code explaining reason for charge failure if available (see [the errors section](https://stripe.com/docs/api#errors) for a list of codes).
     *
     * @param string $failureCode
     *
     * @return self
     */
    public function setFailureCode(?string $failureCode): self
    {
        $this->failureCode = $failureCode;

        return $this;
    }

    /**
     * Message to user further explaining reason for charge failure if available.
     *
     * @return string
     */
    public function getFailureMessage(): ?string
    {
        return $this->failureMessage;
    }

    /**
     * Message to user further explaining reason for charge failure if available.
     *
     * @param string $failureMessage
     *
     * @return self
     */
    public function setFailureMessage(?string $failureMessage): self
    {
        $this->failureMessage = $failureMessage;

        return $this;
    }

    /**
     * @return ChargeFraudDetails
     */
    public function getFraudDetails(): ?ChargeFraudDetails
    {
        return $this->fraudDetails;
    }

    /**
     * @param ChargeFraudDetails $fraudDetails
     *
     * @return self
     */
    public function setFraudDetails(?ChargeFraudDetails $fraudDetails): self
    {
        $this->fraudDetails = $fraudDetails;

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
     * ID of the invoice this charge is for if one exists.
     *
     * @return string
     */
    public function getInvoice(): ?string
    {
        return $this->invoice;
    }

    /**
     * ID of the invoice this charge is for if one exists.
     *
     * @param string $invoice
     *
     * @return self
     */
    public function setInvoice(?string $invoice): self
    {
        $this->invoice = $invoice;

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
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
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
     * The account (if any) the charge was made on behalf of without triggering an automatic transfer. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers) for details.
     *
     * @return string
     */
    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    /**
     * The account (if any) the charge was made on behalf of without triggering an automatic transfer. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers) for details.
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
     * ID of the order this charge is for if one exists.
     *
     * @return string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * ID of the order this charge is for if one exists.
     *
     * @param string $order
     *
     * @return self
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return ChargeOutcome
     */
    public function getOutcome(): ?ChargeOutcome
    {
        return $this->outcome;
    }

    /**
     * @param ChargeOutcome $outcome
     *
     * @return self
     */
    public function setOutcome(?ChargeOutcome $outcome): self
    {
        $this->outcome = $outcome;

        return $this;
    }

    /**
     * `true` if the charge succeeded, or was successfully authorized for later capture.
     *
     * @return bool
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    /**
     * `true` if the charge succeeded, or was successfully authorized for later capture.
     *
     * @param bool $paid
     *
     * @return self
     */
    public function setPaid(?bool $paid): self
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * ID of the PaymentIntent associated with this charge, if one exists.
     *
     * @return string
     */
    public function getPaymentIntent(): ?string
    {
        return $this->paymentIntent;
    }

    /**
     * ID of the PaymentIntent associated with this charge, if one exists.
     *
     * @param string $paymentIntent
     *
     * @return self
     */
    public function setPaymentIntent(?string $paymentIntent): self
    {
        $this->paymentIntent = $paymentIntent;

        return $this;
    }

    /**
     * ID of the payment method used in this charge.
     *
     * @return string
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * ID of the payment method used in this charge.
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
     * @return PaymentMethodDetails
     */
    public function getPaymentMethodDetails(): ?PaymentMethodDetails
    {
        return $this->paymentMethodDetails;
    }

    /**
     * @param PaymentMethodDetails $paymentMethodDetails
     *
     * @return self
     */
    public function setPaymentMethodDetails(?PaymentMethodDetails $paymentMethodDetails): self
    {
        $this->paymentMethodDetails = $paymentMethodDetails;

        return $this;
    }

    /**
     * This is the email address that the receipt for this charge was sent to.
     *
     * @return string
     */
    public function getReceiptEmail(): ?string
    {
        return $this->receiptEmail;
    }

    /**
     * This is the email address that the receipt for this charge was sent to.
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
     * This is the transaction number that appears on email receipts sent for this charge. This attribute will be `null` until a receipt has been sent.
     *
     * @return string
     */
    public function getReceiptNumber(): ?string
    {
        return $this->receiptNumber;
    }

    /**
     * This is the transaction number that appears on email receipts sent for this charge. This attribute will be `null` until a receipt has been sent.
     *
     * @param string $receiptNumber
     *
     * @return self
     */
    public function setReceiptNumber(?string $receiptNumber): self
    {
        $this->receiptNumber = $receiptNumber;

        return $this;
    }

    /**
     * This is the URL to view the receipt for this charge. The receipt is kept up-to-date to the latest state of the charge, including any refunds. If the charge is for an Invoice, the receipt will be stylized as an Invoice receipt.
     *
     * @return string
     */
    public function getReceiptUrl(): ?string
    {
        return $this->receiptUrl;
    }

    /**
     * This is the URL to view the receipt for this charge. The receipt is kept up-to-date to the latest state of the charge, including any refunds. If the charge is for an Invoice, the receipt will be stylized as an Invoice receipt.
     *
     * @param string $receiptUrl
     *
     * @return self
     */
    public function setReceiptUrl(?string $receiptUrl): self
    {
        $this->receiptUrl = $receiptUrl;

        return $this;
    }

    /**
     * Whether the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
     *
     * @return bool
     */
    public function getRefunded(): ?bool
    {
        return $this->refunded;
    }

    /**
     * Whether the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
     *
     * @param bool $refunded
     *
     * @return self
     */
    public function setRefunded(?bool $refunded): self
    {
        $this->refunded = $refunded;

        return $this;
    }

    /**
     * A list of refunds that have been applied to the charge.
     *
     * @return ChargeRefunds
     */
    public function getRefunds(): ?ChargeRefunds
    {
        return $this->refunds;
    }

    /**
     * A list of refunds that have been applied to the charge.
     *
     * @param ChargeRefunds $refunds
     *
     * @return self
     */
    public function setRefunds(?ChargeRefunds $refunds): self
    {
        $this->refunds = $refunds;

        return $this;
    }

    /**
     * ID of the review associated with this charge if one exists.
     *
     * @return string
     */
    public function getReview(): ?string
    {
        return $this->review;
    }

    /**
     * ID of the review associated with this charge if one exists.
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
     * @return Account
     */
    public function getSource(): ?Account
    {
        return $this->source;
    }

    /**
     * @param Account $source
     *
     * @return self
     */
    public function setSource(?Account $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * The transfer ID which created this charge. Only present if the charge came from another Stripe account. [See the Connect documentation](https://stripe.com/docs/connect/destination-charges) for details.
     *
     * @return string
     */
    public function getSourceTransfer(): ?string
    {
        return $this->sourceTransfer;
    }

    /**
     * The transfer ID which created this charge. Only present if the charge came from another Stripe account. [See the Connect documentation](https://stripe.com/docs/connect/destination-charges) for details.
     *
     * @param string $sourceTransfer
     *
     * @return self
     */
    public function setSourceTransfer(?string $sourceTransfer): self
    {
        $this->sourceTransfer = $sourceTransfer;

        return $this;
    }

    /**
     * Extra information about a charge. This will appear on your customer's credit card statement. It must contain at least one letter.
     *
     * @return string
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * Extra information about a charge. This will appear on your customer's credit card statement. It must contain at least one letter.
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
     * The status of the payment is either `succeeded`, `pending`, or `failed`.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The status of the payment is either `succeeded`, `pending`, or `failed`.
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
     * ID of the transfer to the `destination` account (only applicable if the charge was created using the `destination` parameter).
     *
     * @return string
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }

    /**
     * ID of the transfer to the `destination` account (only applicable if the charge was created using the `destination` parameter).
     *
     * @param string $transfer
     *
     * @return self
     */
    public function setTransfer(?string $transfer): self
    {
        $this->transfer = $transfer;

        return $this;
    }

    /**
     * @return ChargeTransferData
     */
    public function getTransferData(): ?ChargeTransferData
    {
        return $this->transferData;
    }

    /**
     * @param ChargeTransferData $transferData
     *
     * @return self
     */
    public function setTransferData(?ChargeTransferData $transferData): self
    {
        $this->transferData = $transferData;

        return $this;
    }

    /**
     * A string that identifies this transaction as part of a group. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers#grouping-transactions) for details.
     *
     * @return string
     */
    public function getTransferGroup(): ?string
    {
        return $this->transferGroup;
    }

    /**
     * A string that identifies this transaction as part of a group. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers#grouping-transactions) for details.
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