<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1IssuingCardsPostBodyShipping
{
    /**
     * @var V1IssuingCardsPostBodyShippingAddress
     */
    protected $address;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return V1IssuingCardsPostBodyShippingAddress
     */
    public function getAddress(): ?V1IssuingCardsPostBodyShippingAddress
    {
        return $this->address;
    }

    /**
     * @param V1IssuingCardsPostBodyShippingAddress $address
     *
     * @return self
     */
    public function setAddress(?V1IssuingCardsPostBodyShippingAddress $address): self
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
