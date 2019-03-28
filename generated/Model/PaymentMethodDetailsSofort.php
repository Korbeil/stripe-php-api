<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentMethodDetailsSofort
{
    /**
     * Bank code of bank associated with the bank account.
     *
     * @var string
     */
    protected $bankCode;
    /**
     * Name of the bank associated with the bank account.
     *
     * @var string
     */
    protected $bankName;
    /**
     * Bank Identifier Code of the bank associated with the bank account.
     *
     * @var string
     */
    protected $bic;
    /**
     * Two-letter ISO code representing the country the bank account is located in.
     *
     * @var string
     */
    protected $country;
    /**
     * Last four characters of the IBAN.
     *
     * @var string
     */
    protected $ibanLast4;
    /**
     * Owner's verified full name. Values are verified or provided by SOFORT directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @var string
     */
    protected $verifiedName;

    /**
     * Bank code of bank associated with the bank account.
     *
     * @return string
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * Bank code of bank associated with the bank account.
     *
     * @param string $bankCode
     *
     * @return self
     */
    public function setBankCode(?string $bankCode): self
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Name of the bank associated with the bank account.
     *
     * @return string
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Name of the bank associated with the bank account.
     *
     * @param string $bankName
     *
     * @return self
     */
    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Bank Identifier Code of the bank associated with the bank account.
     *
     * @return string
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * Bank Identifier Code of the bank associated with the bank account.
     *
     * @param string $bic
     *
     * @return self
     */
    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * Two-letter ISO code representing the country the bank account is located in.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Two-letter ISO code representing the country the bank account is located in.
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
     * Last four characters of the IBAN.
     *
     * @return string
     */
    public function getIbanLast4(): ?string
    {
        return $this->ibanLast4;
    }

    /**
     * Last four characters of the IBAN.
     *
     * @param string $ibanLast4
     *
     * @return self
     */
    public function setIbanLast4(?string $ibanLast4): self
    {
        $this->ibanLast4 = $ibanLast4;

        return $this;
    }

    /**
     * Owner's verified full name. Values are verified or provided by SOFORT directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @return string
     */
    public function getVerifiedName(): ?string
    {
        return $this->verifiedName;
    }

    /**
     * Owner's verified full name. Values are verified or provided by SOFORT directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @param string $verifiedName
     *
     * @return self
     */
    public function setVerifiedName(?string $verifiedName): self
    {
        $this->verifiedName = $verifiedName;

        return $this;
    }
}