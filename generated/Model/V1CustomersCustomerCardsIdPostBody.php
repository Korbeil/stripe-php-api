<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1CustomersCustomerCardsIdPostBody
{
    /**
     * The name of the person or business that owns the bank account.
     *
     * @var string
     */
    protected $accountHolderName;
    /**
     * The type of entity that holds the account. This can be either `individual` or `company`.
     *
     * @var string
     */
    protected $accountHolderType;
    /**
     * City/District/Suburb/Town/Village.
     *
     * @var string
     */
    protected $addressCity;
    /**
     * Billing address country, if provided when creating card.
     *
     * @var string
     */
    protected $addressCountry;
    /**
     * Address line 1 (Street address/PO Box/Company name).
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Address line 2 (Apartment/Suite/Unit/Building).
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * State/County/Province/Region.
     *
     * @var string
     */
    protected $addressState;
    /**
     * ZIP or postal code.
     *
     * @var string
     */
    protected $addressZip;
    /**
     * Two digit number representing the card’s expiration month.
     *
     * @var string
     */
    protected $expMonth;
    /**
     * Four digit number representing the card’s expiration year.
     *
     * @var string
     */
    protected $expYear;
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
     * Cardholder name.
     *
     * @var string
     */
    protected $name;
    /**
     * @var V1CustomersCustomerCardsIdPostBodyOwner
     */
    protected $owner;

    /**
     * The name of the person or business that owns the bank account.
     *
     * @return string
     */
    public function getAccountHolderName(): ?string
    {
        return $this->accountHolderName;
    }

    /**
     * The name of the person or business that owns the bank account.
     *
     * @param string $accountHolderName
     *
     * @return self
     */
    public function setAccountHolderName(?string $accountHolderName): self
    {
        $this->accountHolderName = $accountHolderName;

        return $this;
    }

    /**
     * The type of entity that holds the account. This can be either `individual` or `company`.
     *
     * @return string
     */
    public function getAccountHolderType(): ?string
    {
        return $this->accountHolderType;
    }

    /**
     * The type of entity that holds the account. This can be either `individual` or `company`.
     *
     * @param string $accountHolderType
     *
     * @return self
     */
    public function setAccountHolderType(?string $accountHolderType): self
    {
        $this->accountHolderType = $accountHolderType;

        return $this;
    }

    /**
     * City/District/Suburb/Town/Village.
     *
     * @return string
     */
    public function getAddressCity(): ?string
    {
        return $this->addressCity;
    }

    /**
     * City/District/Suburb/Town/Village.
     *
     * @param string $addressCity
     *
     * @return self
     */
    public function setAddressCity(?string $addressCity): self
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    /**
     * Billing address country, if provided when creating card.
     *
     * @return string
     */
    public function getAddressCountry(): ?string
    {
        return $this->addressCountry;
    }

    /**
     * Billing address country, if provided when creating card.
     *
     * @param string $addressCountry
     *
     * @return self
     */
    public function setAddressCountry(?string $addressCountry): self
    {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * Address line 1 (Street address/PO Box/Company name).
     *
     * @return string
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Address line 1 (Street address/PO Box/Company name).
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(?string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Address line 2 (Apartment/Suite/Unit/Building).
     *
     * @return string
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Address line 2 (Apartment/Suite/Unit/Building).
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * State/County/Province/Region.
     *
     * @return string
     */
    public function getAddressState(): ?string
    {
        return $this->addressState;
    }

    /**
     * State/County/Province/Region.
     *
     * @param string $addressState
     *
     * @return self
     */
    public function setAddressState(?string $addressState): self
    {
        $this->addressState = $addressState;

        return $this;
    }

    /**
     * ZIP or postal code.
     *
     * @return string
     */
    public function getAddressZip(): ?string
    {
        return $this->addressZip;
    }

    /**
     * ZIP or postal code.
     *
     * @param string $addressZip
     *
     * @return self
     */
    public function setAddressZip(?string $addressZip): self
    {
        $this->addressZip = $addressZip;

        return $this;
    }

    /**
     * Two digit number representing the card’s expiration month.
     *
     * @return string
     */
    public function getExpMonth(): ?string
    {
        return $this->expMonth;
    }

    /**
     * Two digit number representing the card’s expiration month.
     *
     * @param string $expMonth
     *
     * @return self
     */
    public function setExpMonth(?string $expMonth): self
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    /**
     * Four digit number representing the card’s expiration year.
     *
     * @return string
     */
    public function getExpYear(): ?string
    {
        return $this->expYear;
    }

    /**
     * Four digit number representing the card’s expiration year.
     *
     * @param string $expYear
     *
     * @return self
     */
    public function setExpYear(?string $expYear): self
    {
        $this->expYear = $expYear;

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
     * Cardholder name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Cardholder name.
     *
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
     * @return V1CustomersCustomerCardsIdPostBodyOwner
     */
    public function getOwner(): ?V1CustomersCustomerCardsIdPostBodyOwner
    {
        return $this->owner;
    }

    /**
     * @param V1CustomersCustomerCardsIdPostBodyOwner $owner
     *
     * @return self
     */
    public function setOwner(?V1CustomersCustomerCardsIdPostBodyOwner $owner): self
    {
        $this->owner = $owner;

        return $this;
    }
}
