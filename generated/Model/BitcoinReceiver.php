<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class BitcoinReceiver
{
    /**
     * True when this bitcoin receiver has received a non-zero amount of bitcoin.
     *
     * @var bool
     */
    protected $active;
    /**
     * The amount of `currency` that you are collecting as payment.
     *
     * @var int
     */
    protected $amount;
    /**
     * The amount of `currency` to which `bitcoin_amount_received` has been converted.
     *
     * @var int
     */
    protected $amountReceived;
    /**
     * The amount of bitcoin that the customer should send to fill the receiver. The `bitcoin_amount` is denominated in Satoshi: there are 10^8 Satoshi in one bitcoin.
     *
     * @var int
     */
    protected $bitcoinAmount;
    /**
     * The amount of bitcoin that has been sent by the customer to this receiver.
     *
     * @var int
     */
    protected $bitcoinAmountReceived;
    /**
     * This URI can be displayed to the customer as a clickable link (to activate their bitcoin client) or as a QR code (for mobile wallets).
     *
     * @var string
     */
    protected $bitcoinUri;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) to which the bitcoin will be converted.
     *
     * @var string
     */
    protected $currency;
    /**
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
     * The customer's email address, set by the API call that creates the receiver.
     *
     * @var string
     */
    protected $email;
    /**
     * This flag is initially false and updates to true when the customer sends the `bitcoin_amount` to this receiver.
     *
     * @var bool
     */
    protected $filled;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * A bitcoin address that is specific to this receiver. The customer can send bitcoin to this address to fill the receiver.
     *
     * @var string
     */
    protected $inboundAddress;
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
     * The ID of the payment created from the receiver, if any. Hidden when viewing the receiver with a publishable key.
     *
     * @var string
     */
    protected $payment;
    /**
     * @var string
     */
    protected $refundAddress;
    /**
     * A list with one entry for each time that the customer sent bitcoin to the receiver. Hidden when viewing the receiver with a publishable key.
     *
     * @var BitcoinReceiverTransactions
     */
    protected $transactions;
    /**
     * This receiver contains uncaptured funds that can be used for a payment or refunded.
     *
     * @var bool
     */
    protected $uncapturedFunds;
    /**
     * @var bool
     */
    protected $usedForPayment;

    /**
     * True when this bitcoin receiver has received a non-zero amount of bitcoin.
     *
     * @return bool
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * True when this bitcoin receiver has received a non-zero amount of bitcoin.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * The amount of `currency` that you are collecting as payment.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * The amount of `currency` that you are collecting as payment.
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
     * The amount of `currency` to which `bitcoin_amount_received` has been converted.
     *
     * @return int
     */
    public function getAmountReceived(): ?int
    {
        return $this->amountReceived;
    }

    /**
     * The amount of `currency` to which `bitcoin_amount_received` has been converted.
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
     * The amount of bitcoin that the customer should send to fill the receiver. The `bitcoin_amount` is denominated in Satoshi: there are 10^8 Satoshi in one bitcoin.
     *
     * @return int
     */
    public function getBitcoinAmount(): ?int
    {
        return $this->bitcoinAmount;
    }

    /**
     * The amount of bitcoin that the customer should send to fill the receiver. The `bitcoin_amount` is denominated in Satoshi: there are 10^8 Satoshi in one bitcoin.
     *
     * @param int $bitcoinAmount
     *
     * @return self
     */
    public function setBitcoinAmount(?int $bitcoinAmount): self
    {
        $this->bitcoinAmount = $bitcoinAmount;

        return $this;
    }

    /**
     * The amount of bitcoin that has been sent by the customer to this receiver.
     *
     * @return int
     */
    public function getBitcoinAmountReceived(): ?int
    {
        return $this->bitcoinAmountReceived;
    }

    /**
     * The amount of bitcoin that has been sent by the customer to this receiver.
     *
     * @param int $bitcoinAmountReceived
     *
     * @return self
     */
    public function setBitcoinAmountReceived(?int $bitcoinAmountReceived): self
    {
        $this->bitcoinAmountReceived = $bitcoinAmountReceived;

        return $this;
    }

    /**
     * This URI can be displayed to the customer as a clickable link (to activate their bitcoin client) or as a QR code (for mobile wallets).
     *
     * @return string
     */
    public function getBitcoinUri(): ?string
    {
        return $this->bitcoinUri;
    }

    /**
     * This URI can be displayed to the customer as a clickable link (to activate their bitcoin client) or as a QR code (for mobile wallets).
     *
     * @param string $bitcoinUri
     *
     * @return self
     */
    public function setBitcoinUri(?string $bitcoinUri): self
    {
        $this->bitcoinUri = $bitcoinUri;

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
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) to which the bitcoin will be converted.
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) to which the bitcoin will be converted.
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
     * @return string
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
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
     * The customer's email address, set by the API call that creates the receiver.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The customer's email address, set by the API call that creates the receiver.
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
     * This flag is initially false and updates to true when the customer sends the `bitcoin_amount` to this receiver.
     *
     * @return bool
     */
    public function getFilled(): ?bool
    {
        return $this->filled;
    }

    /**
     * This flag is initially false and updates to true when the customer sends the `bitcoin_amount` to this receiver.
     *
     * @param bool $filled
     *
     * @return self
     */
    public function setFilled(?bool $filled): self
    {
        $this->filled = $filled;

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
     * A bitcoin address that is specific to this receiver. The customer can send bitcoin to this address to fill the receiver.
     *
     * @return string
     */
    public function getInboundAddress(): ?string
    {
        return $this->inboundAddress;
    }

    /**
     * A bitcoin address that is specific to this receiver. The customer can send bitcoin to this address to fill the receiver.
     *
     * @param string $inboundAddress
     *
     * @return self
     */
    public function setInboundAddress(?string $inboundAddress): self
    {
        $this->inboundAddress = $inboundAddress;

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
     * The ID of the payment created from the receiver, if any. Hidden when viewing the receiver with a publishable key.
     *
     * @return string
     */
    public function getPayment(): ?string
    {
        return $this->payment;
    }

    /**
     * The ID of the payment created from the receiver, if any. Hidden when viewing the receiver with a publishable key.
     *
     * @param string $payment
     *
     * @return self
     */
    public function setPayment(?string $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAddress(): ?string
    {
        return $this->refundAddress;
    }

    /**
     * @param string $refundAddress
     *
     * @return self
     */
    public function setRefundAddress(?string $refundAddress): self
    {
        $this->refundAddress = $refundAddress;

        return $this;
    }

    /**
     * A list with one entry for each time that the customer sent bitcoin to the receiver. Hidden when viewing the receiver with a publishable key.
     *
     * @return BitcoinReceiverTransactions
     */
    public function getTransactions(): ?BitcoinReceiverTransactions
    {
        return $this->transactions;
    }

    /**
     * A list with one entry for each time that the customer sent bitcoin to the receiver. Hidden when viewing the receiver with a publishable key.
     *
     * @param BitcoinReceiverTransactions $transactions
     *
     * @return self
     */
    public function setTransactions(?BitcoinReceiverTransactions $transactions): self
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * This receiver contains uncaptured funds that can be used for a payment or refunded.
     *
     * @return bool
     */
    public function getUncapturedFunds(): ?bool
    {
        return $this->uncapturedFunds;
    }

    /**
     * This receiver contains uncaptured funds that can be used for a payment or refunded.
     *
     * @param bool $uncapturedFunds
     *
     * @return self
     */
    public function setUncapturedFunds(?bool $uncapturedFunds): self
    {
        $this->uncapturedFunds = $uncapturedFunds;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUsedForPayment(): ?bool
    {
        return $this->usedForPayment;
    }

    /**
     * @param bool $usedForPayment
     *
     * @return self
     */
    public function setUsedForPayment(?bool $usedForPayment): self
    {
        $this->usedForPayment = $usedForPayment;

        return $this;
    }
}
