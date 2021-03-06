<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1ChargesPostBody
{
    /**
     * A positive integer representing how much to charge, in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal) (e.g., `100` cents to charge $1.00, or `100` to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 USD or [equivalent in charge currency](https://stripe.com/docs/currencies#minimum-and-maximum-charge-amounts).
     *
     * @var int
     */
    protected $amount;
    /**
     * @var int
     */
    protected $applicationFee;
    /**
     * A fee in %s that will be applied to the charge and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the `Stripe-Account` header in order to take an application fee. For more information, see the application fees [documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees).
     *
     * @var int
     */
    protected $applicationFeeAmount;
    /**
     * Whether to immediately capture the charge. Defaults to `true`. When `false`, the charge issues an authorization (or pre-authorization), and will need to be [captured](#capture_charge) later. Uncaptured charges expire in _seven days_. For more information, see the [authorizing charges and settling later](https://stripe.com/docs/charges#auth-and-capture) documentation.
     *
     * @var bool
     */
    protected $capture;
    /**
     * A token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js).
     *
     * @var mixed
     */
    protected $card;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @var string
     */
    protected $currency;
    /**
     * The ID of an existing customer that will be charged in this request.
     *
     * @var string
     */
    protected $customer;
    /**
     * An arbitrary string which you can attach to a `Charge` object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
     *
     * @var string
     */
    protected $description;
    /**
     * @var V1ChargesPostBodyDestination
     */
    protected $destination;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The Stripe account ID for which these funds are intended. Automatically set if you use the `destination` parameter. For details, see [Creating Separate Charges and Transfers](https://stripe.com/docs/connect/charges-transfers#on-behalf-of).
     *
     * @var string
     */
    protected $onBehalfOf;
    /**
     * The email address to which this charge's [receipt](https://stripe.com/docs/dashboard/receipts) will be sent. The receipt will not be sent until the charge is paid, and no receipts will be sent for test mode charges. If this charge is for a [Customer](https://stripe.com/docs/api/customers/object), the email address specified here will override the customer's email address. If `receipt_email` is specified for a charge in live mode, a receipt will be sent regardless of your [email settings](https://dashboard.stripe.com/account/emails).
     *
     * @var string
     */
    protected $receiptEmail;
    /**
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     *
     * @var V1ChargesPostBodyShipping
     */
    protected $shipping;
    /**
     * A payment source to be charged. This can be the ID of a [card](https://stripe.com/docs/api#cards) (i.e., credit or debit card), a [bank account](https://stripe.com/docs/api#bank_accounts), a [source](https://stripe.com/docs/api#sources), a [token](https://stripe.com/docs/api#tokens), or a [connected account](https://stripe.com/docs/connect/account-debits#charging-a-connected-account). For certain sources---namely, [cards](https://stripe.com/docs/api#cards), [bank accounts](https://stripe.com/docs/api#bank_accounts), and attached [sources](https://stripe.com/docs/api#sources)---you must also pass the ID of the associated customer.
     *
     * @var string
     */
    protected $source;
    /**
     * An arbitrary string to be displayed on your customer's credit card statement. This can be up to _22 characters_. As an example, if your website is `RunClub` and the item you're charging for is a race ticket, you might want to specify a `statement_descriptor` of `RunClub 5K race ticket`. The statement description must contain at least one letter, must not contain `<>"'` characters, and will appear on your customer's statement in capital letters. Non-ASCII characters are automatically stripped. While most banks and card issuers display this information consistently, some might display it incorrectly or not at all.
     *
     * @var string
     */
    protected $statementDescriptor;
    /**
     * An optional dictionary including the account to automatically transfer to as part of a destination charge. [See the Connect documentation](https://stripe.com/docs/connect/destination-charges) for details.
     *
     * @var V1ChargesPostBodyTransferData
     */
    protected $transferData;
    /**
     * A string that identifies this transaction as part of a group. For details, see [Grouping transactions](https://stripe.com/docs/connect/charges-transfers#grouping-transactions).
     *
     * @var string
     */
    protected $transferGroup;

    /**
     * A positive integer representing how much to charge, in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal) (e.g., `100` cents to charge $1.00, or `100` to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 USD or [equivalent in charge currency](https://stripe.com/docs/currencies#minimum-and-maximum-charge-amounts).
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * A positive integer representing how much to charge, in the [smallest currency unit](https://stripe.com/docs/currencies#zero-decimal) (e.g., `100` cents to charge $1.00, or `100` to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 USD or [equivalent in charge currency](https://stripe.com/docs/currencies#minimum-and-maximum-charge-amounts).
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
     * @return int
     */
    public function getApplicationFee(): ?int
    {
        return $this->applicationFee;
    }

    /**
     * @param int $applicationFee
     *
     * @return self
     */
    public function setApplicationFee(?int $applicationFee): self
    {
        $this->applicationFee = $applicationFee;

        return $this;
    }

    /**
     * A fee in %s that will be applied to the charge and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the `Stripe-Account` header in order to take an application fee. For more information, see the application fees [documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees).
     *
     * @return int
     */
    public function getApplicationFeeAmount(): ?int
    {
        return $this->applicationFeeAmount;
    }

    /**
     * A fee in %s that will be applied to the charge and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the `Stripe-Account` header in order to take an application fee. For more information, see the application fees [documentation](https://stripe.com/docs/connect/direct-charges#collecting-fees).
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
     * Whether to immediately capture the charge. Defaults to `true`. When `false`, the charge issues an authorization (or pre-authorization), and will need to be [captured](#capture_charge) later. Uncaptured charges expire in _seven days_. For more information, see the [authorizing charges and settling later](https://stripe.com/docs/charges#auth-and-capture) documentation.
     *
     * @return bool
     */
    public function getCapture(): ?bool
    {
        return $this->capture;
    }

    /**
     * Whether to immediately capture the charge. Defaults to `true`. When `false`, the charge issues an authorization (or pre-authorization), and will need to be [captured](#capture_charge) later. Uncaptured charges expire in _seven days_. For more information, see the [authorizing charges and settling later](https://stripe.com/docs/charges#auth-and-capture) documentation.
     *
     * @param bool $capture
     *
     * @return self
     */
    public function setCapture(?bool $capture): self
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * A token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js).
     *
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * A token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js).
     *
     * @param mixed $card
     *
     * @return self
     */
    public function setCard($card): self
    {
        $this->card = $card;

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
     * The ID of an existing customer that will be charged in this request.
     *
     * @return string
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * The ID of an existing customer that will be charged in this request.
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
     * An arbitrary string which you can attach to a `Charge` object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * An arbitrary string which you can attach to a `Charge` object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
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
     * @return V1ChargesPostBodyDestination
     */
    public function getDestination(): ?V1ChargesPostBodyDestination
    {
        return $this->destination;
    }

    /**
     * @param V1ChargesPostBodyDestination $destination
     *
     * @return self
     */
    public function setDestination(?V1ChargesPostBodyDestination $destination): self
    {
        $this->destination = $destination;

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
     * The Stripe account ID for which these funds are intended. Automatically set if you use the `destination` parameter. For details, see [Creating Separate Charges and Transfers](https://stripe.com/docs/connect/charges-transfers#on-behalf-of).
     *
     * @return string
     */
    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    /**
     * The Stripe account ID for which these funds are intended. Automatically set if you use the `destination` parameter. For details, see [Creating Separate Charges and Transfers](https://stripe.com/docs/connect/charges-transfers#on-behalf-of).
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
     * The email address to which this charge's [receipt](https://stripe.com/docs/dashboard/receipts) will be sent. The receipt will not be sent until the charge is paid, and no receipts will be sent for test mode charges. If this charge is for a [Customer](https://stripe.com/docs/api/customers/object), the email address specified here will override the customer's email address. If `receipt_email` is specified for a charge in live mode, a receipt will be sent regardless of your [email settings](https://dashboard.stripe.com/account/emails).
     *
     * @return string
     */
    public function getReceiptEmail(): ?string
    {
        return $this->receiptEmail;
    }

    /**
     * The email address to which this charge's [receipt](https://stripe.com/docs/dashboard/receipts) will be sent. The receipt will not be sent until the charge is paid, and no receipts will be sent for test mode charges. If this charge is for a [Customer](https://stripe.com/docs/api/customers/object), the email address specified here will override the customer's email address. If `receipt_email` is specified for a charge in live mode, a receipt will be sent regardless of your [email settings](https://dashboard.stripe.com/account/emails).
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
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     *
     * @return V1ChargesPostBodyShipping
     */
    public function getShipping(): ?V1ChargesPostBodyShipping
    {
        return $this->shipping;
    }

    /**
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     *
     * @param V1ChargesPostBodyShipping $shipping
     *
     * @return self
     */
    public function setShipping(?V1ChargesPostBodyShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * A payment source to be charged. This can be the ID of a [card](https://stripe.com/docs/api#cards) (i.e., credit or debit card), a [bank account](https://stripe.com/docs/api#bank_accounts), a [source](https://stripe.com/docs/api#sources), a [token](https://stripe.com/docs/api#tokens), or a [connected account](https://stripe.com/docs/connect/account-debits#charging-a-connected-account). For certain sources---namely, [cards](https://stripe.com/docs/api#cards), [bank accounts](https://stripe.com/docs/api#bank_accounts), and attached [sources](https://stripe.com/docs/api#sources)---you must also pass the ID of the associated customer.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * A payment source to be charged. This can be the ID of a [card](https://stripe.com/docs/api#cards) (i.e., credit or debit card), a [bank account](https://stripe.com/docs/api#bank_accounts), a [source](https://stripe.com/docs/api#sources), a [token](https://stripe.com/docs/api#tokens), or a [connected account](https://stripe.com/docs/connect/account-debits#charging-a-connected-account). For certain sources---namely, [cards](https://stripe.com/docs/api#cards), [bank accounts](https://stripe.com/docs/api#bank_accounts), and attached [sources](https://stripe.com/docs/api#sources)---you must also pass the ID of the associated customer.
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
     * An arbitrary string to be displayed on your customer's credit card statement. This can be up to _22 characters_. As an example, if your website is `RunClub` and the item you're charging for is a race ticket, you might want to specify a `statement_descriptor` of `RunClub 5K race ticket`. The statement description must contain at least one letter, must not contain `<>"'` characters, and will appear on your customer's statement in capital letters. Non-ASCII characters are automatically stripped. While most banks and card issuers display this information consistently, some might display it incorrectly or not at all.
     *
     * @return string
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * An arbitrary string to be displayed on your customer's credit card statement. This can be up to _22 characters_. As an example, if your website is `RunClub` and the item you're charging for is a race ticket, you might want to specify a `statement_descriptor` of `RunClub 5K race ticket`. The statement description must contain at least one letter, must not contain `<>"'` characters, and will appear on your customer's statement in capital letters. Non-ASCII characters are automatically stripped. While most banks and card issuers display this information consistently, some might display it incorrectly or not at all.
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
     * An optional dictionary including the account to automatically transfer to as part of a destination charge. [See the Connect documentation](https://stripe.com/docs/connect/destination-charges) for details.
     *
     * @return V1ChargesPostBodyTransferData
     */
    public function getTransferData(): ?V1ChargesPostBodyTransferData
    {
        return $this->transferData;
    }

    /**
     * An optional dictionary including the account to automatically transfer to as part of a destination charge. [See the Connect documentation](https://stripe.com/docs/connect/destination-charges) for details.
     *
     * @param V1ChargesPostBodyTransferData $transferData
     *
     * @return self
     */
    public function setTransferData(?V1ChargesPostBodyTransferData $transferData): self
    {
        $this->transferData = $transferData;

        return $this;
    }

    /**
     * A string that identifies this transaction as part of a group. For details, see [Grouping transactions](https://stripe.com/docs/connect/charges-transfers#grouping-transactions).
     *
     * @return string
     */
    public function getTransferGroup(): ?string
    {
        return $this->transferGroup;
    }

    /**
     * A string that identifies this transaction as part of a group. For details, see [Grouping transactions](https://stripe.com/docs/connect/charges-transfers#grouping-transactions).
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
