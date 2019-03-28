<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1CustomersCustomerPostBody
{
    /**
     * An integer amount in %s that represents the account balance for your customer. Account balances only affect invoices. A negative amount represents a credit that decreases the amount due on an invoice; a positive amount increases the amount due on an invoice.
     *
     * @var int
     */
    protected $accountBalance;
    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary containing a user's bank account details.
     *
     * @var mixed
     */
    protected $bankAccount;
    /**
     * A token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js).
     *
     * @var mixed
     */
    protected $card;
    /**
     * The code of the coupon to apply to this subscription. A coupon applied to a subscription will only affect invoices created for that particular subscription.
     *
     * @var string
     */
    protected $coupon;
    /**
     * ID of Alipay account to make the customer's new default for invoice payments.
     *
     * @var string
     */
    protected $defaultAlipayAccount;
    /**
     * ID of bank account to make the customer's new default for invoice payments.
     *
     * @var string
     */
    protected $defaultBankAccount;
    /**
     * ID of card to make the customer's new default for invoice payments.
     *
     * @var string
     */
    protected $defaultCard;
    /**
     * ID of the default payment source for the customer.
     *
     * @var string
     */
    protected $defaultSource;
    /**
     * An arbitrary string that you can attach to a customer object. It is displayed alongside the customer in the dashboard.
     *
     * @var string
     */
    protected $description;
    /**
     * Customer's email address. It's displayed alongside the customer in your dashboard and can be useful for searching and tracking. This may be up to *512 characters*.
     *
     * @var string
     */
    protected $email;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * The prefix for the customer used to generate unique invoice numbers. Must be 3–12 uppercase letters or numbers.
     *
     * @var string
     */
    protected $invoicePrefix;
    /**
     * Default invoice settings for this customer.
     *
     * @var V1CustomersCustomerPostBodyInvoiceSettings
     */
    protected $invoiceSettings;
    /**
     * A set of key-value pairs that you can attach to a customer object. It can be useful for storing additional information about the customer in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The customer's shipping information. Appears on invoices emailed to this customer.
     *
     * @var mixed
     */
    protected $shipping;
    /**
     * The source can be a [Token](https://stripe.com/docs/api#tokens) or a [Source](https://stripe.com/docs/api#sources), as returned by [Elements](https://stripe.com/docs/elements). You must provide a source if the customer does not already have a valid source attached, and you are subscribing the customer to be charged automatically for a plan that is not free.

    Passing `source` will create a new source object, make it the customer default source, and delete the old customer default if one exists. If you want to add an additional source, instead use the [card creation API](https://stripe.com/docs/api#create_card) to add the card and then the [customer update API](https://stripe.com/docs/api#update_customer) to set it as the default.

    Whenever you attach a card to a customer, Stripe will automatically validate the card.
     *
     * @var string
     */
    protected $source;
    /**
     * The customer's tax information. Appears on invoices emailed to this customer.
     *
     * @var V1CustomersCustomerPostBodyTaxInfo
     */
    protected $taxInfo;
    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time. This will always overwrite any trials that might apply via a subscribed plan. If set, trial_end will override the default trial period of the plan the customer is being subscribed to. The special value `now` can be provided to end the customer's trial immediately.
     *
     * @var string
     */
    protected $trialEnd;

    /**
     * An integer amount in %s that represents the account balance for your customer. Account balances only affect invoices. A negative amount represents a credit that decreases the amount due on an invoice; a positive amount increases the amount due on an invoice.
     *
     * @return int
     */
    public function getAccountBalance(): ?int
    {
        return $this->accountBalance;
    }

    /**
     * An integer amount in %s that represents the account balance for your customer. Account balances only affect invoices. A negative amount represents a credit that decreases the amount due on an invoice; a positive amount increases the amount due on an invoice.
     *
     * @param int $accountBalance
     *
     * @return self
     */
    public function setAccountBalance(?int $accountBalance): self
    {
        $this->accountBalance = $accountBalance;

        return $this;
    }

    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary containing a user's bank account details.
     *
     * @return mixed
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary containing a user's bank account details.
     *
     * @param mixed $bankAccount
     *
     * @return self
     */
    public function setBankAccount($bankAccount): self
    {
        $this->bankAccount = $bankAccount;

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
     * The code of the coupon to apply to this subscription. A coupon applied to a subscription will only affect invoices created for that particular subscription.
     *
     * @return string
     */
    public function getCoupon(): ?string
    {
        return $this->coupon;
    }

    /**
     * The code of the coupon to apply to this subscription. A coupon applied to a subscription will only affect invoices created for that particular subscription.
     *
     * @param string $coupon
     *
     * @return self
     */
    public function setCoupon(?string $coupon): self
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * ID of Alipay account to make the customer's new default for invoice payments.
     *
     * @return string
     */
    public function getDefaultAlipayAccount(): ?string
    {
        return $this->defaultAlipayAccount;
    }

    /**
     * ID of Alipay account to make the customer's new default for invoice payments.
     *
     * @param string $defaultAlipayAccount
     *
     * @return self
     */
    public function setDefaultAlipayAccount(?string $defaultAlipayAccount): self
    {
        $this->defaultAlipayAccount = $defaultAlipayAccount;

        return $this;
    }

    /**
     * ID of bank account to make the customer's new default for invoice payments.
     *
     * @return string
     */
    public function getDefaultBankAccount(): ?string
    {
        return $this->defaultBankAccount;
    }

    /**
     * ID of bank account to make the customer's new default for invoice payments.
     *
     * @param string $defaultBankAccount
     *
     * @return self
     */
    public function setDefaultBankAccount(?string $defaultBankAccount): self
    {
        $this->defaultBankAccount = $defaultBankAccount;

        return $this;
    }

    /**
     * ID of card to make the customer's new default for invoice payments.
     *
     * @return string
     */
    public function getDefaultCard(): ?string
    {
        return $this->defaultCard;
    }

    /**
     * ID of card to make the customer's new default for invoice payments.
     *
     * @param string $defaultCard
     *
     * @return self
     */
    public function setDefaultCard(?string $defaultCard): self
    {
        $this->defaultCard = $defaultCard;

        return $this;
    }

    /**
     * ID of the default payment source for the customer.
     *
     * @return string
     */
    public function getDefaultSource(): ?string
    {
        return $this->defaultSource;
    }

    /**
     * ID of the default payment source for the customer.
     *
     * @param string $defaultSource
     *
     * @return self
     */
    public function setDefaultSource(?string $defaultSource): self
    {
        $this->defaultSource = $defaultSource;

        return $this;
    }

    /**
     * An arbitrary string that you can attach to a customer object. It is displayed alongside the customer in the dashboard.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * An arbitrary string that you can attach to a customer object. It is displayed alongside the customer in the dashboard.
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
     * Customer's email address. It's displayed alongside the customer in your dashboard and can be useful for searching and tracking. This may be up to *512 characters*.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Customer's email address. It's displayed alongside the customer in your dashboard and can be useful for searching and tracking. This may be up to *512 characters*.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
     * The prefix for the customer used to generate unique invoice numbers. Must be 3–12 uppercase letters or numbers.
     *
     * @return string
     */
    public function getInvoicePrefix(): ?string
    {
        return $this->invoicePrefix;
    }

    /**
     * The prefix for the customer used to generate unique invoice numbers. Must be 3–12 uppercase letters or numbers.
     *
     * @param string $invoicePrefix
     *
     * @return self
     */
    public function setInvoicePrefix(?string $invoicePrefix): self
    {
        $this->invoicePrefix = $invoicePrefix;

        return $this;
    }

    /**
     * Default invoice settings for this customer.
     *
     * @return V1CustomersCustomerPostBodyInvoiceSettings
     */
    public function getInvoiceSettings(): ?V1CustomersCustomerPostBodyInvoiceSettings
    {
        return $this->invoiceSettings;
    }

    /**
     * Default invoice settings for this customer.
     *
     * @param V1CustomersCustomerPostBodyInvoiceSettings $invoiceSettings
     *
     * @return self
     */
    public function setInvoiceSettings(?V1CustomersCustomerPostBodyInvoiceSettings $invoiceSettings): self
    {
        $this->invoiceSettings = $invoiceSettings;

        return $this;
    }

    /**
     * A set of key-value pairs that you can attach to a customer object. It can be useful for storing additional information about the customer in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A set of key-value pairs that you can attach to a customer object. It can be useful for storing additional information about the customer in a structured format.
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
     * The customer's shipping information. Appears on invoices emailed to this customer.
     *
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * The customer's shipping information. Appears on invoices emailed to this customer.
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
     * The source can be a [Token](https://stripe.com/docs/api#tokens) or a [Source](https://stripe.com/docs/api#sources), as returned by [Elements](https://stripe.com/docs/elements). You must provide a source if the customer does not already have a valid source attached, and you are subscribing the customer to be charged automatically for a plan that is not free.

    Passing `source` will create a new source object, make it the customer default source, and delete the old customer default if one exists. If you want to add an additional source, instead use the [card creation API](https://stripe.com/docs/api#create_card) to add the card and then the [customer update API](https://stripe.com/docs/api#update_customer) to set it as the default.

    Whenever you attach a card to a customer, Stripe will automatically validate the card.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * The source can be a [Token](https://stripe.com/docs/api#tokens) or a [Source](https://stripe.com/docs/api#sources), as returned by [Elements](https://stripe.com/docs/elements). You must provide a source if the customer does not already have a valid source attached, and you are subscribing the customer to be charged automatically for a plan that is not free.

    Passing `source` will create a new source object, make it the customer default source, and delete the old customer default if one exists. If you want to add an additional source, instead use the [card creation API](https://stripe.com/docs/api#create_card) to add the card and then the [customer update API](https://stripe.com/docs/api#update_customer) to set it as the default.

    Whenever you attach a card to a customer, Stripe will automatically validate the card.
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
     * The customer's tax information. Appears on invoices emailed to this customer.
     *
     * @return V1CustomersCustomerPostBodyTaxInfo
     */
    public function getTaxInfo(): ?V1CustomersCustomerPostBodyTaxInfo
    {
        return $this->taxInfo;
    }

    /**
     * The customer's tax information. Appears on invoices emailed to this customer.
     *
     * @param V1CustomersCustomerPostBodyTaxInfo $taxInfo
     *
     * @return self
     */
    public function setTaxInfo(?V1CustomersCustomerPostBodyTaxInfo $taxInfo): self
    {
        $this->taxInfo = $taxInfo;

        return $this;
    }

    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time. This will always overwrite any trials that might apply via a subscribed plan. If set, trial_end will override the default trial period of the plan the customer is being subscribed to. The special value `now` can be provided to end the customer's trial immediately.
     *
     * @return string
     */
    public function getTrialEnd(): ?string
    {
        return $this->trialEnd;
    }

    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time. This will always overwrite any trials that might apply via a subscribed plan. If set, trial_end will override the default trial period of the plan the customer is being subscribed to. The special value `now` can be provided to end the customer's trial immediately.
     *
     * @param string $trialEnd
     *
     * @return self
     */
    public function setTrialEnd(?string $trialEnd): self
    {
        $this->trialEnd = $trialEnd;

        return $this;
    }
}
