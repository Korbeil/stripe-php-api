<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class IssuingAuthorizationVerificationData
{
    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @var string
     */
    protected $addressLine1Check;
    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @var string
     */
    protected $addressZipCheck;
    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @var string
     */
    protected $cvcCheck;

    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @return string
     */
    public function getAddressLine1Check(): ?string
    {
        return $this->addressLine1Check;
    }

    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @param string $addressLine1Check
     *
     * @return self
     */
    public function setAddressLine1Check(?string $addressLine1Check): self
    {
        $this->addressLine1Check = $addressLine1Check;

        return $this;
    }

    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @return string
     */
    public function getAddressZipCheck(): ?string
    {
        return $this->addressZipCheck;
    }

    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @param string $addressZipCheck
     *
     * @return self
     */
    public function setAddressZipCheck(?string $addressZipCheck): self
    {
        $this->addressZipCheck = $addressZipCheck;

        return $this;
    }

    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @return string
     */
    public function getCvcCheck(): ?string
    {
        return $this->cvcCheck;
    }

    /**
     * One of `match`, `mismatch`, or `not_provided`.
     *
     * @param string $cvcCheck
     *
     * @return self
     */
    public function setCvcCheck(?string $cvcCheck): self
    {
        $this->cvcCheck = $cvcCheck;

        return $this;
    }
}