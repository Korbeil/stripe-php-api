<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1ChargesChargeRefundsPostBody
{
    /**
     * @var int
     */
    protected $amount;
    /**
     * @var string
     */
    protected $description;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var string
     */
    protected $reason;
    /**
     * @var bool
     */
    protected $refundApplicationFee;
    /**
     * @var bool
     */
    protected $reverseTransfer;

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
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
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
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
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
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
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRefundApplicationFee(): ?bool
    {
        return $this->refundApplicationFee;
    }

    /**
     * @param bool $refundApplicationFee
     *
     * @return self
     */
    public function setRefundApplicationFee(?bool $refundApplicationFee): self
    {
        $this->refundApplicationFee = $refundApplicationFee;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReverseTransfer(): ?bool
    {
        return $this->reverseTransfer;
    }

    /**
     * @param bool $reverseTransfer
     *
     * @return self
     */
    public function setReverseTransfer(?bool $reverseTransfer): self
    {
        $this->reverseTransfer = $reverseTransfer;

        return $this;
    }
}
