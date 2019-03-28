<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SourceTypeSepaDebit
{
    /**
     * @var string
     */
    protected $bankCode;
    /**
     * @var string
     */
    protected $branchCode;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $fingerprint;
    /**
     * @var string
     */
    protected $last4;
    /**
     * @var string
     */
    protected $mandateReference;
    /**
     * @var string
     */
    protected $mandateUrl;

    /**
     * @return string
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * @param string $bankCode
     *
     * @return self
     */
    public function setBankCode(?string $bankCode): self
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getBranchCode(): ?string
    {
        return $this->branchCode;
    }

    /**
     * @param string $branchCode
     *
     * @return self
     */
    public function setBranchCode(?string $branchCode): self
    {
        $this->branchCode = $branchCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getFingerprint(): ?string
    {
        return $this->fingerprint;
    }

    /**
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(?string $fingerprint): self
    {
        $this->fingerprint = $fingerprint;

        return $this;
    }

    /**
     * @return string
     */
    public function getLast4(): ?string
    {
        return $this->last4;
    }

    /**
     * @param string $last4
     *
     * @return self
     */
    public function setLast4(?string $last4): self
    {
        $this->last4 = $last4;

        return $this;
    }

    /**
     * @return string
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }

    /**
     * @param string $mandateReference
     *
     * @return self
     */
    public function setMandateReference(?string $mandateReference): self
    {
        $this->mandateReference = $mandateReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getMandateUrl(): ?string
    {
        return $this->mandateUrl;
    }

    /**
     * @param string $mandateUrl
     *
     * @return self
     */
    public function setMandateUrl(?string $mandateUrl): self
    {
        $this->mandateUrl = $mandateUrl;

        return $this;
    }
}