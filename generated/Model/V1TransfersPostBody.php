<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1TransfersPostBody
{
    /**
     * A positive integer in %s representing how much to transfer.
     *
     * @var int
     */
    protected $amount;
    /**
     * 3-letter [ISO code for currency](https://stripe.com/docs/payouts).
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
     * The ID of a connected Stripe account. <a href="/docs/connect/charges-transfers">See the Connect documentation</a> for details.
     *
     * @var string
     */
    protected $destination;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * You can use this parameter to transfer funds from a charge before they are added to your available balance. A pending balance will transfer immediately but the funds will not become available until the original charge becomes available. [See the Connect documentation](https://stripe.com/docs/connect/charges-transfers#transfer-availability) for details.
     *
     * @var string
     */
    protected $sourceTransaction;
    /**
     * The source balance to use for this transfer. One of `card`, `financing`, `bank_account`, or `alipay_account`. For most users, this will default to `card`.
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
     * A positive integer in %s representing how much to transfer.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * A positive integer in %s representing how much to transfer.
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
     * 3-letter [ISO code for currency](https://stripe.com/docs/payouts).
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * 3-letter [ISO code for currency](https://stripe.com/docs/payouts).
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
     * The ID of a connected Stripe account. <a href="/docs/connect/charges-transfers">See the Connect documentation</a> for details.
     *
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * The ID of a connected Stripe account. <a href="/docs/connect/charges-transfers">See the Connect documentation</a> for details.
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
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
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
     * You can use this parameter to transfer funds from a charge before they are added to your available balance. A pending balance will transfer immediately but the funds will not become available until the original charge becomes available. [See the Connect documentation](https://stripe.com/docs/connect/charges-transfers#transfer-availability) for details.
     *
     * @return string
     */
    public function getSourceTransaction(): ?string
    {
        return $this->sourceTransaction;
    }

    /**
     * You can use this parameter to transfer funds from a charge before they are added to your available balance. A pending balance will transfer immediately but the funds will not become available until the original charge becomes available. [See the Connect documentation](https://stripe.com/docs/connect/charges-transfers#transfer-availability) for details.
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
     * The source balance to use for this transfer. One of `card`, `financing`, `bank_account`, or `alipay_account`. For most users, this will default to `card`.
     *
     * @return string
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    /**
     * The source balance to use for this transfer. One of `card`, `financing`, `bank_account`, or `alipay_account`. For most users, this will default to `card`.
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