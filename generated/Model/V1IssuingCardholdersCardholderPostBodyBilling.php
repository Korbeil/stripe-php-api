<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1IssuingCardholdersCardholderPostBodyBilling
{
    /**
     * @var V1IssuingCardholdersCardholderPostBodyBillingAddress
     */
    protected $address;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return V1IssuingCardholdersCardholderPostBodyBillingAddress
     */
    public function getAddress(): ?V1IssuingCardholdersCardholderPostBodyBillingAddress
    {
        return $this->address;
    }

    /**
     * @param V1IssuingCardholdersCardholderPostBodyBillingAddress $address
     *
     * @return self
     */
    public function setAddress(?V1IssuingCardholdersCardholderPostBodyBillingAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
