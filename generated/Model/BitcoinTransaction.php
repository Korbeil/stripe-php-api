<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class BitcoinTransaction
{
    /**
     * The amount of `currency` that the transaction was converted to in real-time.
     *
     * @var int
     */
    protected $amount;
    /**
     * The amount of bitcoin contained in the transaction.
     *
     * @var int
     */
    protected $bitcoinAmount;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) to which this transaction was converted.
     *
     * @var string
     */
    protected $currency;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * The receiver to which this transaction was sent.
     *
     * @var string
     */
    protected $receiver;

    /**
     * The amount of `currency` that the transaction was converted to in real-time.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * The amount of `currency` that the transaction was converted to in real-time.
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
     * The amount of bitcoin contained in the transaction.
     *
     * @return int
     */
    public function getBitcoinAmount(): ?int
    {
        return $this->bitcoinAmount;
    }

    /**
     * The amount of bitcoin contained in the transaction.
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
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) to which this transaction was converted.
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) to which this transaction was converted.
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
     * The receiver to which this transaction was sent.
     *
     * @return string
     */
    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    /**
     * The receiver to which this transaction was sent.
     *
     * @param string $receiver
     *
     * @return self
     */
    public function setReceiver(?string $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }
}
