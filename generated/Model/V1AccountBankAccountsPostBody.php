<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountBankAccountsPostBody
{
    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe.js), or a dictionary containing a user's bank account details.
     *
     * @var mixed
     */
    protected $bankAccount;
    /**
     * When set to true, or if this is the first external account added in this currency, this account becomes the default external account for its currency.
     *
     * @var bool
     */
    protected $defaultForCurrency;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * Please refer to full [documentation](https://stripe.com/docs/api) instead.
     *
     * @var string
     */
    protected $externalAccount;
    /**
     * A set of key-value pairs that you can attach to an external account object. It can be useful for storing additional information about the external account in a structured format.
     *
     * @var mixed
     */
    protected $metadata;

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
     * When set to true, or if this is the first external account added in this currency, this account becomes the default external account for its currency.
     *
     * @return bool
     */
    public function getDefaultForCurrency(): ?bool
    {
        return $this->defaultForCurrency;
    }

    /**
     * When set to true, or if this is the first external account added in this currency, this account becomes the default external account for its currency.
     *
     * @param bool $defaultForCurrency
     *
     * @return self
     */
    public function setDefaultForCurrency(?bool $defaultForCurrency): self
    {
        $this->defaultForCurrency = $defaultForCurrency;

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
     * Please refer to full [documentation](https://stripe.com/docs/api) instead.
     *
     * @return string
     */
    public function getExternalAccount(): ?string
    {
        return $this->externalAccount;
    }

    /**
     * Please refer to full [documentation](https://stripe.com/docs/api) instead.
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
     * A set of key-value pairs that you can attach to an external account object. It can be useful for storing additional information about the external account in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A set of key-value pairs that you can attach to an external account object. It can be useful for storing additional information about the external account in a structured format.
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
}
