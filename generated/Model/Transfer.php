<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Transfer
{
    /**
     * Amount in %s to be transferred.
     *
     * @var int
     */
    protected $amount;
    /**
     * Amount in %s reversed (can be less than the amount attribute on the transfer if a partial reversal was issued).
     *
     * @var int
     */
    protected $amountReversed;
    /**
     * Balance transaction that describes the impact of this transfer on your account balance.
     *
     * @var string
     */
    protected $balanceTransaction;
    /**
     * Time that this record of the transfer was first created.
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
     * An arbitrary string attached to the object. Often useful for displaying to users.
     *
     * @var string
     */
    protected $description;
    /**
     * ID of the Stripe account the transfer was sent to.
     *
     * @var string
     */
    protected $destination;
    /**
     * If the destination is a Stripe account, this will be the ID of the payment that the destination account received for the transfer.
     *
     * @var string
     */
    protected $destinationPayment;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * A set of key-value pairs that you can attach to a transfer object. It can be useful for storing additional information about the transfer in a structured format.
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
     * A list of reversals that have been applied to the transfer.
     *
     * @var TransferReversals
     */
    protected $reversals;
    /**
     * Whether the transfer has been fully reversed. If the transfer is only partially reversed, this attribute will still be false.
     *
     * @var bool
     */
    protected $reversed;
    /**
     * ID of the charge or payment that was used to fund the transfer. If null, the transfer was funded from the available balance.
     *
     * @var string
     */
    protected $sourceTransaction;
    /**
     * The source balance this transfer came from. One of `card`, `financing`, `bank_account`, or `alipay_account`.
     *
     * @var string
     */
    protected $sourceType;
    /**
     * A string that identifies this transaction as part of a group. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers#grouping-transactions) for details.
     *
     * @var string
     */
    protected $transferGroup;

    /**
     * Amount in %s to be transferred.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Amount in %s to be transferred.
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
     * Amount in %s reversed (can be less than the amount attribute on the transfer if a partial reversal was issued).
     *
     * @return int
     */
    public function getAmountReversed(): ?int
    {
        return $this->amountReversed;
    }

    /**
     * Amount in %s reversed (can be less than the amount attribute on the transfer if a partial reversal was issued).
     *
     * @param int $amountReversed
     *
     * @return self
     */
    public function setAmountReversed(?int $amountReversed): self
    {
        $this->amountReversed = $amountReversed;

        return $this;
    }

    /**
     * Balance transaction that describes the impact of this transfer on your account balance.
     *
     * @return string
     */
    public function getBalanceTransaction(): ?string
    {
        return $this->balanceTransaction;
    }

    /**
     * Balance transaction that describes the impact of this transfer on your account balance.
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
     * Time that this record of the transfer was first created.
     *
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * Time that this record of the transfer was first created.
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
     * ID of the Stripe account the transfer was sent to.
     *
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * ID of the Stripe account the transfer was sent to.
     *
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * If the destination is a Stripe account, this will be the ID of the payment that the destination account received for the transfer.
     *
     * @return string
     */
    public function getDestinationPayment(): ?string
    {
        return $this->destinationPayment;
    }

    /**
     * If the destination is a Stripe account, this will be the ID of the payment that the destination account received for the transfer.
     *
     * @param string $destinationPayment
     *
     * @return self
     */
    public function setDestinationPayment(?string $destinationPayment): self
    {
        $this->destinationPayment = $destinationPayment;

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
     * A set of key-value pairs that you can attach to a transfer object. It can be useful for storing additional information about the transfer in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A set of key-value pairs that you can attach to a transfer object. It can be useful for storing additional information about the transfer in a structured format.
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
     * A list of reversals that have been applied to the transfer.
     *
     * @return TransferReversals
     */
    public function getReversals(): ?TransferReversals
    {
        return $this->reversals;
    }

    /**
     * A list of reversals that have been applied to the transfer.
     *
     * @param TransferReversals $reversals
     *
     * @return self
     */
    public function setReversals(?TransferReversals $reversals): self
    {
        $this->reversals = $reversals;

        return $this;
    }

    /**
     * Whether the transfer has been fully reversed. If the transfer is only partially reversed, this attribute will still be false.
     *
     * @return bool
     */
    public function getReversed(): ?bool
    {
        return $this->reversed;
    }

    /**
     * Whether the transfer has been fully reversed. If the transfer is only partially reversed, this attribute will still be false.
     *
     * @param bool $reversed
     *
     * @return self
     */
    public function setReversed(?bool $reversed): self
    {
        $this->reversed = $reversed;

        return $this;
    }

    /**
     * ID of the charge or payment that was used to fund the transfer. If null, the transfer was funded from the available balance.
     *
     * @return string
     */
    public function getSourceTransaction(): ?string
    {
        return $this->sourceTransaction;
    }

    /**
     * ID of the charge or payment that was used to fund the transfer. If null, the transfer was funded from the available balance.
     *
     * @param string $sourceTransaction
     *
     * @return self
     */
    public function setSourceTransaction(?string $sourceTransaction): self
    {
        $this->sourceTransaction = $sourceTransaction;

        return $this;
    }

    /**
     * The source balance this transfer came from. One of `card`, `financing`, `bank_account`, or `alipay_account`.
     *
     * @return string
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    /**
     * The source balance this transfer came from. One of `card`, `financing`, `bank_account`, or `alipay_account`.
     *
     * @param string $sourceType
     *
     * @return self
     */
    public function setSourceType(?string $sourceType): self
    {
        $this->sourceType = $sourceType;

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