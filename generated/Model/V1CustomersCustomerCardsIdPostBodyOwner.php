<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1CustomersCustomerCardsIdPostBodyOwner
{
    /**
     * @var V1CustomersCustomerCardsIdPostBodyOwnerAddress
     */
    protected $address;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $phone;

    /**
     * @return V1CustomersCustomerCardsIdPostBodyOwnerAddress
     */
    public function getAddress(): ?V1CustomersCustomerCardsIdPostBodyOwnerAddress
    {
        return $this->address;
    }

    /**
     * @param V1CustomersCustomerCardsIdPostBodyOwnerAddress $address
     *
     * @return self
     */
    public function setAddress(?V1CustomersCustomerCardsIdPostBodyOwnerAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
