<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1ApplicationFeesIdRefundsPostBody
{
    /**
     * A positive integer, in _%s_, representing how much of this fee to refund. Can refund only up to the remaining unrefunded amount of the fee.
     *
     * @var int
     */
    protected $amount;
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
     * A positive integer, in _%s_, representing how much of this fee to refund. Can refund only up to the remaining unrefunded amount of the fee.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * A positive integer, in _%s_, representing how much of this fee to refund. Can refund only up to the remaining unrefunded amount of the fee.
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
}
