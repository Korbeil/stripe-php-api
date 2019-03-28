<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SourceTypeMultibanco
{
    /**
     * @var string
     */
    protected $entity;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $refundAccountHolderAddressCity;
    /**
     * @var string
     */
    protected $refundAccountHolderAddressCountry;
    /**
     * @var string
     */
    protected $refundAccountHolderAddressLine1;
    /**
     * @var string
     */
    protected $refundAccountHolderAddressLine2;
    /**
     * @var string
     */
    protected $refundAccountHolderAddressPostalCode;
    /**
     * @var string
     */
    protected $refundAccountHolderAddressState;
    /**
     * @var string
     */
    protected $refundAccountHolderName;
    /**
     * @var string
     */
    protected $refundIban;

    /**
     * @return string
     */
    public function getEntity(): ?string
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     *
     * @return self
     */
    public function setEntity(?string $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAccountHolderAddressCity(): ?string
    {
        return $this->refundAccountHolderAddressCity;
    }

    /**
     * @param string $refundAccountHolderAddressCity
     *
     * @return self
     */
    public function setRefundAccountHolderAddressCity(?string $refundAccountHolderAddressCity): self
    {
        $this->refundAccountHolderAddressCity = $refundAccountHolderAddressCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAccountHolderAddressCountry(): ?string
    {
        return $this->refundAccountHolderAddressCountry;
    }

    /**
     * @param string $refundAccountHolderAddressCountry
     *
     * @return self
     */
    public function setRefundAccountHolderAddressCountry(?string $refundAccountHolderAddressCountry): self
    {
        $this->refundAccountHolderAddressCountry = $refundAccountHolderAddressCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAccountHolderAddressLine1(): ?string
    {
        return $this->refundAccountHolderAddressLine1;
    }

    /**
     * @param string $refundAccountHolderAddressLine1
     *
     * @return self
     */
    public function setRefundAccountHolderAddressLine1(?string $refundAccountHolderAddressLine1): self
    {
        $this->refundAccountHolderAddressLine1 = $refundAccountHolderAddressLine1;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAccountHolderAddressLine2(): ?string
    {
        return $this->refundAccountHolderAddressLine2;
    }

    /**
     * @param string $refundAccountHolderAddressLine2
     *
     * @return self
     */
    public function setRefundAccountHolderAddressLine2(?string $refundAccountHolderAddressLine2): self
    {
        $this->refundAccountHolderAddressLine2 = $refundAccountHolderAddressLine2;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAccountHolderAddressPostalCode(): ?string
    {
        return $this->refundAccountHolderAddressPostalCode;
    }

    /**
     * @param string $refundAccountHolderAddressPostalCode
     *
     * @return self
     */
    public function setRefundAccountHolderAddressPostalCode(?string $refundAccountHolderAddressPostalCode): self
    {
        $this->refundAccountHolderAddressPostalCode = $refundAccountHolderAddressPostalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAccountHolderAddressState(): ?string
    {
        return $this->refundAccountHolderAddressState;
    }

    /**
     * @param string $refundAccountHolderAddressState
     *
     * @return self
     */
    public function setRefundAccountHolderAddressState(?string $refundAccountHolderAddressState): self
    {
        $this->refundAccountHolderAddressState = $refundAccountHolderAddressState;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAccountHolderName(): ?string
    {
        return $this->refundAccountHolderName;
    }

    /**
     * @param string $refundAccountHolderName
     *
     * @return self
     */
    public function setRefundAccountHolderName(?string $refundAccountHolderName): self
    {
        $this->refundAccountHolderName = $refundAccountHolderName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundIban(): ?string
    {
        return $this->refundIban;
    }

    /**
     * @param string $refundIban
     *
     * @return self
     */
    public function setRefundIban(?string $refundIban): self
    {
        $this->refundIban = $refundIban;

        return $this;
    }
}
