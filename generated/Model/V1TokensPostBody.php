<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1TokensPostBody
{
    /**
     * Information for the account this token will represent.
     *
     * @var V1TokensPostBodyAccount
     */
    protected $account;
    /**
     * The bank account this token will represent.
     *
     * @var V1TokensPostBodyBankAccount
     */
    protected $bankAccount;
    /**
     * @var mixed
     */
    protected $card;
    /**
     * @var string
     */
    protected $currency;
    /**
     * The customer (owned by the application's account) for which to create a token. For use only with [Stripe Connect](https://stripe.com/docs/connect). Also, this can be used only with an [OAuth access token](https://stripe.com/docs/connect/standard-accounts) or [Stripe-Account header](https://stripe.com/docs/connect/authentication). For more details, see [Shared Customers](https://stripe.com/docs/connect/shared-customers).
     *
     * @var string
     */
    protected $customer;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * The PII this token will represent.
     *
     * @var V1TokensPostBodyPii
     */
    protected $pii;

    /**
     * Information for the account this token will represent.
     *
     * @return V1TokensPostBodyAccount
     */
    public function getAccount(): ?V1TokensPostBodyAccount
    {
        return $this->account;
    }

    /**
     * Information for the account this token will represent.
     *
     * @param V1TokensPostBodyAccount $account
     *
     * @return self
     */
    public function setAccount(?V1TokensPostBodyAccount $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * The bank account this token will represent.
     *
     * @return V1TokensPostBodyBankAccount
     */
    public function getBankAccount(): ?V1TokensPostBodyBankAccount
    {
        return $this->bankAccount;
    }

    /**
     * The bank account this token will represent.
     *
     * @param V1TokensPostBodyBankAccount $bankAccount
     *
     * @return self
     */
    public function setBankAccount(?V1TokensPostBodyBankAccount $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param mixed $card
     *
     * @return self
     */
    public function setCard($card): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * The customer (owned by the application's account) for which to create a token. For use only with [Stripe Connect](https://stripe.com/docs/connect). Also, this can be used only with an [OAuth access token](https://stripe.com/docs/connect/standard-accounts) or [Stripe-Account header](https://stripe.com/docs/connect/authentication). For more details, see [Shared Customers](https://stripe.com/docs/connect/shared-customers).
     *
     * @return string
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * The customer (owned by the application's account) for which to create a token. For use only with [Stripe Connect](https://stripe.com/docs/connect). Also, this can be used only with an [OAuth access token](https://stripe.com/docs/connect/standard-accounts) or [Stripe-Account header](https://stripe.com/docs/connect/authentication). For more details, see [Shared Customers](https://stripe.com/docs/connect/shared-customers).
     *
     * @param string $customer
     *
     * @return self
     */
    public function setCustomer(?string $customer): self
    {
        $this->customer = $customer;

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
     * The PII this token will represent.
     *
     * @return V1TokensPostBodyPii
     */
    public function getPii(): ?V1TokensPostBodyPii
    {
        return $this->pii;
    }

    /**
     * The PII this token will represent.
     *
     * @param V1TokensPostBodyPii $pii
     *
     * @return self
     */
    public function setPii(?V1TokensPostBodyPii $pii): self
    {
        $this->pii = $pii;

        return $this;
    }
}
