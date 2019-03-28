<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountPostBody
{
    /**
     * An [account token](https://stripe.com/docs/api#create_account_token), used to securely provide details to the account.
     *
     * @var string
     */
    protected $accountToken;
    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary containing a user's bank account details.
     *
     * @var mixed
     */
    protected $bankAccount;
    /**
     * Non-essential business information about the account.
     *
     * @var V1AccountsAccountPostBodyBusinessProfile
     */
    protected $businessProfile;
    /**
     * The business type. Can be `individual` or `company`.
     *
     * @var string
     */
    protected $businessType;
    /**
     * Information about the company or business. This field is null unless `business_type` is set to `company`.
     *
     * @var V1AccountsAccountPostBodyCompany
     */
    protected $company;
    /**
     * Three-letter ISO currency code representing the default currency for the account. This must be a currency that [Stripe supports in the account's country](https://stripe.com/docs/payouts).
     *
     * @var string
     */
    protected $defaultCurrency;
    /**
     * Email address of the account representative. For Standard accounts, this is used to ask them to claim their Stripe account. For Custom accounts, this only makes the account easier to identify to platforms; Stripe does not email the account representative.
     *
     * @var string
     */
    protected $email;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * A card or bank account to attach to the account. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary, as documented in the `external_account` parameter for [bank account](https://stripe.com/docs/api#account_create_bank_account) creation. <br><br>By default, providing an external account sets it as the new default external account for its currency, and deletes the old default if one exists. To add additional external accounts without replacing the existing default for the currency, use the bank account or card creation API.
     *
     * @var string
     */
    protected $externalAccount;
    /**
     * Information about the person represented by the account. This field is null unless `business_type` is set to `individual`.
     *
     * @var V1AccountsAccountPostBodyIndividual
     */
    protected $individual;
    /**
     * A set of key-value pairs that you can attach to an `Account` object. This can be useful for storing additional information about the account in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The set of capabilities you want to unlock for this account (US only). Each capability will be inactive until you have provided its specific requirements and Stripe has verified them. An account may have some of its requested capabilities be active and some be inactive.
     *
     * @var string[]
     */
    protected $requestedCapabilities;
    /**
     * Options for customizing how the account functions within Stripe.
     *
     * @var V1AccountsAccountPostBodySettings
     */
    protected $settings;
    /**
     * Details on the account's acceptance of the [Stripe Services Agreement](https://stripe.com/docs/connect/updating-accounts#tos-acceptance).
     *
     * @var V1AccountsAccountPostBodyTosAcceptance
     */
    protected $tosAcceptance;

    /**
     * An [account token](https://stripe.com/docs/api#create_account_token), used to securely provide details to the account.
     *
     * @return string
     */
    public function getAccountToken(): ?string
    {
        return $this->accountToken;
    }

    /**
     * An [account token](https://stripe.com/docs/api#create_account_token), used to securely provide details to the account.
     *
     * @param string $accountToken
     *
     * @return self
     */
    public function setAccountToken(?string $accountToken): self
    {
        $this->accountToken = $accountToken;

        return $this;
    }

    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary containing a user's bank account details.
     *
     * @return mixed
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary containing a user's bank account details.
     *
     * @param mixed $bankAccount
     *
     * @return self
     */
    public function setBankAccount($bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Non-essential business information about the account.
     *
     * @return V1AccountsAccountPostBodyBusinessProfile
     */
    public function getBusinessProfile(): ?V1AccountsAccountPostBodyBusinessProfile
    {
        return $this->businessProfile;
    }

    /**
     * Non-essential business information about the account.
     *
     * @param V1AccountsAccountPostBodyBusinessProfile $businessProfile
     *
     * @return self
     */
    public function setBusinessProfile(?V1AccountsAccountPostBodyBusinessProfile $businessProfile): self
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
     * Information about the company or business. This field is null unless `business_type` is set to `company`.
     *
     * @return V1AccountsAccountPostBodyCompany
     */
    public function getCompany(): ?V1AccountsAccountPostBodyCompany
    {
        return $this->company;
    }

    /**
     * Information about the company or business. This field is null unless `business_type` is set to `company`.
     *
     * @param V1AccountsAccountPostBodyCompany $company
     *
     * @return self
     */
    public function setCompany(?V1AccountsAccountPostBodyCompany $company): self
    {
        $this->company = $company;

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
     * Email address of the account representative. For Standard accounts, this is used to ask them to claim their Stripe account. For Custom accounts, this only makes the account easier to identify to platforms; Stripe does not email the account representative.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email address of the account representative. For Standard accounts, this is used to ask them to claim their Stripe account. For Custom accounts, this only makes the account easier to identify to platforms; Stripe does not email the account representative.
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
     * A card or bank account to attach to the account. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary, as documented in the `external_account` parameter for [bank account](https://stripe.com/docs/api#account_create_bank_account) creation. <br><br>By default, providing an external account sets it as the new default external account for its currency, and deletes the old default if one exists. To add additional external accounts without replacing the existing default for the currency, use the bank account or card creation API.
     *
     * @return string
     */
    public function getExternalAccount(): ?string
    {
        return $this->externalAccount;
    }

    /**
     * A card or bank account to attach to the account. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary, as documented in the `external_account` parameter for [bank account](https://stripe.com/docs/api#account_create_bank_account) creation. <br><br>By default, providing an external account sets it as the new default external account for its currency, and deletes the old default if one exists. To add additional external accounts without replacing the existing default for the currency, use the bank account or card creation API.
     *
     * @param string $externalAccount
     *
     * @return self
     */
    public function setExternalAccount(?string $externalAccount): self
    {
        $this->externalAccount = $externalAccount;

        return $this;
    }

    /**
     * Information about the person represented by the account. This field is null unless `business_type` is set to `individual`.
     *
     * @return V1AccountsAccountPostBodyIndividual
     */
    public function getIndividual(): ?V1AccountsAccountPostBodyIndividual
    {
        return $this->individual;
    }

    /**
     * Information about the person represented by the account. This field is null unless `business_type` is set to `individual`.
     *
     * @param V1AccountsAccountPostBodyIndividual $individual
     *
     * @return self
     */
    public function setIndividual(?V1AccountsAccountPostBodyIndividual $individual): self
    {
        $this->individual = $individual;

        return $this;
    }

    /**
     * A set of key-value pairs that you can attach to an `Account` object. This can be useful for storing additional information about the account in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A set of key-value pairs that you can attach to an `Account` object. This can be useful for storing additional information about the account in a structured format.
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
     * The set of capabilities you want to unlock for this account (US only). Each capability will be inactive until you have provided its specific requirements and Stripe has verified them. An account may have some of its requested capabilities be active and some be inactive.
     *
     * @return string[]
     */
    public function getRequestedCapabilities(): ?array
    {
        return $this->requestedCapabilities;
    }

    /**
     * The set of capabilities you want to unlock for this account (US only). Each capability will be inactive until you have provided its specific requirements and Stripe has verified them. An account may have some of its requested capabilities be active and some be inactive.
     *
     * @param string[] $requestedCapabilities
     *
     * @return self
     */
    public function setRequestedCapabilities(?array $requestedCapabilities): self
    {
        $this->requestedCapabilities = $requestedCapabilities;

        return $this;
    }

    /**
     * Options for customizing how the account functions within Stripe.
     *
     * @return V1AccountsAccountPostBodySettings
     */
    public function getSettings(): ?V1AccountsAccountPostBodySettings
    {
        return $this->settings;
    }

    /**
     * Options for customizing how the account functions within Stripe.
     *
     * @param V1AccountsAccountPostBodySettings $settings
     *
     * @return self
     */
    public function setSettings(?V1AccountsAccountPostBodySettings $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Details on the account's acceptance of the [Stripe Services Agreement](https://stripe.com/docs/connect/updating-accounts#tos-acceptance).
     *
     * @return V1AccountsAccountPostBodyTosAcceptance
     */
    public function getTosAcceptance(): ?V1AccountsAccountPostBodyTosAcceptance
    {
        return $this->tosAcceptance;
    }

    /**
     * Details on the account's acceptance of the [Stripe Services Agreement](https://stripe.com/docs/connect/updating-accounts#tos-acceptance).
     *
     * @param V1AccountsAccountPostBodyTosAcceptance $tosAcceptance
     *
     * @return self
     */
    public function setTosAcceptance(?V1AccountsAccountPostBodyTosAcceptance $tosAcceptance): self
    {
        $this->tosAcceptance = $tosAcceptance;

        return $this;
    }
}
