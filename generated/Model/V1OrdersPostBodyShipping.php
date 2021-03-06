<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1OrdersPostBodyShipping
{
    /**
     * @var V1OrdersPostBodyShippingAddress
     */
    protected $address;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $phone;

    /**
     * @return V1OrdersPostBodyShippingAddress
     */
    public function getAddress(): ?V1OrdersPostBodyShippingAddress
    {
        return $this->address;
    }

    /**
     * @param V1OrdersPostBodyShippingAddress $address
     *
     * @return self
     */
    public function setAddress(?V1OrdersPostBodyShippingAddress $address): self
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

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
