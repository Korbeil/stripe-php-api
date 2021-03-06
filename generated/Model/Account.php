<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Account
{
    /**
     * @var AccountBusinessProfile
     */
    protected $businessProfile;
    /**
     * The business type. Can be `individual` or `company`.
     *
     * @var string
     */
    protected $businessType;
    /**
     * @var AccountCapabilities
     */
    protected $capabilities;
    /**
     * Whether the account can create live charges.
     *
     * @var bool
     */
    protected $chargesEnabled;
    /**
     * @var LegalEntityCompany
     */
    protected $company;
    /**
     * The account's country.
     *
     * @var string
     */
    protected $country;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * Three-letter ISO currency code representing the default currency for the account. This must be a currency that [Stripe supports in the account's country](https://stripe.com/docs/payouts).
     *
     * @var string
     */
    protected $defaultCurrency;
    /**
     * Whether account details have been submitted. Standard accounts cannot receive payouts before this is true.
     *
     * @var bool
     */
    protected $detailsSubmitted;
    /**
     * The primary user's email address.
     *
     * @var string
     */
    protected $email;
    /**
     * External accounts (bank accounts and debit cards) currently attached to this account.
     *
     * @var AccountExternalAccounts
     */
    protected $externalAccounts;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * @var Person
     */
    protected $individual;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * Whether Stripe can send payouts to this account.
     *
     * @var bool
     */
    protected $payoutsEnabled;
    /**
     * @var AccountRequirements
     */
    protected $requirements;
    /**
     * @var AccountSettings
     */
    protected $settings;
    /**
     * @var AccountTosAcceptance
     */
    protected $tosAcceptance;
    /**
     * The Stripe account type. Can be `standard`, `express`, or `custom`.
     *
     * @var string
     */
    protected $type;

    /**
     * @return AccountBusinessProfile
     */
    public function getBusinessProfile(): ?AccountBusinessProfile
    {
        return $this->businessProfile;
    }

    /**
     * @param AccountBusinessProfile $businessProfile
     *
     * @return self
     */
    public function setBusinessProfile(?AccountBusinessProfile $businessProfile): self
    {
        $this->businessProfile = $businessProfile;

        return $this;
    }

    /**
     * The business type. Can be `individual` or `company`.
     *
     * @return string
     */
    public function getBusinessType(): ?string
    {
        return $this->businessType;
    }

    /**
     * The business type. Can be `individual` or `company`.
     *
     * @param string $businessType
     *
     * @return self
     */
    public function setBusinessType(?string $businessType): self
    {
        $this->businessType = $businessType;

        return $this;
    }

    /**
     * @return AccountCapabilities
     */
    public function getCapabilities(): ?AccountCapabilities
    {
        return $this->capabilities;
    }

    /**
     * @param AccountCapabilities $capabilities
     *
     * @return self
     */
    public function setCapabilities(?AccountCapabilities $capabilities): self
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    /**
     * Whether the account can create live charges.
     *
     * @return bool
     */
    public function getChargesEnabled(): ?bool
    {
        return $this->chargesEnabled;
    }

    /**
     * Whether the account can create live charges.
     *
     * @param bool $chargesEnabled
     *
     * @return self
     */
    public function setChargesEnabled(?bool $chargesEnabled): self
    {
        $this->chargesEnabled = $chargesEnabled;

        return $this;
    }

    /**
     * @return LegalEntityCompany
     */
    public function getCompany(): ?LegalEntityCompany
    {
        return $this->company;
    }

    /**
     * @param LegalEntityCompany $company
     *
     * @return self
     */
    public function setCompany(?LegalEntityCompany $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * The account's country.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * The account's country.
     *
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
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Three-letter ISO currency code representing the default currency for the account. This must be a currency that [Stripe supports in the account's country](https://stripe.com/docs/payouts).
     *
     * @return string
     */
    public function getDefaultCurrency(): ?string
    {
        return $this->defaultCurrency;
    }

    /**
     * Three-letter ISO currency code representing the default currency for the account. This must be a currency that [Stripe supports in the account's country](https://stripe.com/docs/payouts).
     *
     * @param string $defaultCurrency
     *
     * @return self
     */
    public function setDefaultCurrency(?string $defaultCurrency): self
    {
        $this->defaultCurrency = $defaultCurrency;

        return $this;
    }

    /**
     * Whether account details have been submitted. Standard accounts cannot receive payouts before this is true.
     *
     * @return bool
     */
    public function getDetailsSubmitted(): ?bool
    {
        return $this->detailsSubmitted;
    }

    /**
     * Whether account details have been submitted. Standard accounts cannot receive payouts before this is true.
     *
     * @param bool $detailsSubmitted
     *
     * @return self
     */
    public function setDetailsSubmitted(?bool $detailsSubmitted): self
    {
        $this->detailsSubmitted = $detailsSubmitted;

        return $this;
    }

    /**
     * The primary user's email address.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The primary user's email address.
     *
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
     * External accounts (bank accounts and debit cards) currently attached to this account.
     *
     * @return AccountExternalAccounts
     */
    public function getExternalAccounts(): ?AccountExternalAccounts
    {
        return $this->externalAccounts;
    }

    /**
     * External accounts (bank accounts and debit cards) currently attached to this account.
     *
     * @param AccountExternalAccounts $externalAccounts
     *
     * @return self
     */
    public function setExternalAccounts(?AccountExternalAccounts $externalAccounts): self
    {
        $this->externalAccounts = $externalAccounts;

        return $this;
    }

    /**
     * Unique identifier for the object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier for the object.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Person
     */
    public function getIndividual(): ?Person
    {
        return $this->individual;
    }

    /**
     * @param Person $individual
     *
     * @return self
     */
    public function setIndividual(?Person $individual): self
    {
        $this->individual = $individual;

        return $this;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
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

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @return string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Whether Stripe can send payouts to this account.
     *
     * @return bool
     */
    public function getPayoutsEnabled(): ?bool
    {
        return $this->payoutsEnabled;
    }

    /**
     * Whether Stripe can send payouts to this account.
     *
     * @param bool $payoutsEnabled
     *
     * @return self
     */
    public function setPayoutsEnabled(?bool $payoutsEnabled): self
    {
        $this->payoutsEnabled = $payoutsEnabled;

        return $this;
    }

    /**
     * @return AccountRequirements
     */
    public function getRequirements(): ?AccountRequirements
    {
        return $this->requirements;
    }

    /**
     * @param AccountRequirements $requirements
     *
     * @return self
     */
    public function setRequirements(?AccountRequirements $requirements): self
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * @return AccountSettings
     */
    public function getSettings(): ?AccountSettings
    {
        return $this->settings;
    }

    /**
     * @param AccountSettings $settings
     *
     * @return self
     */
    public function setSettings(?AccountSettings $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @return AccountTosAcceptance
     */
    public function getTosAcceptance(): ?AccountTosAcceptance
    {
        return $this->tosAcceptance;
    }

    /**
     * @param AccountTosAcceptance $tosAcceptance
     *
     * @return self
     */
    public function setTosAcceptance(?AccountTosAcceptance $tosAcceptance): self
    {
        $this->tosAcceptance = $tosAcceptance;

        return $this;
    }

    /**
     * The Stripe account type. Can be `standard`, `express`, or `custom`.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The Stripe account type. Can be `standard`, `express`, or `custom`.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
