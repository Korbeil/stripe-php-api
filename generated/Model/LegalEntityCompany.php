<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class LegalEntityCompany
{
    /**
     * @var Address
     */
    protected $address;
    /**
     * @var LegalEntityJapanAddress
     */
    protected $addressKana;
    /**
     * @var LegalEntityJapanAddress
     */
    protected $addressKanji;
    /**
     * Whether information was collected from the company's directors.
     *
     * @var bool
     */
    protected $directorsProvided;
    /**
     * The company's legal name.
     *
     * @var string
     */
    protected $name;
    /**
     * The Kana variation of the company's legal name Japan only).
     *
     * @var string
     */
    protected $nameKana;
    /**
     * The Kanji variation of the company's legal name (Japan only).
     *
     * @var string
     */
    protected $nameKanji;
    /**
     * Whether the company's owners have been provided.
     *
     * @var bool
     */
    protected $ownersProvided;
    /**
     * The company's phone number (used for verification).
     *
     * @var string
     */
    protected $phone;
    /**
     * Whether the company's business ID number was provided.
     *
     * @var bool
     */
    protected $taxIdProvided;
    /**
     * The jurisdiction in which the `tax_id` is registered (Germany-based companies only).
     *
     * @var string
     */
    protected $taxIdRegistrar;
    /**
     * Whether the company's business VAT number was provided.
     *
     * @var bool
     */
    protected $vatIdProvided;

    /**
     * @return Address
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return LegalEntityJapanAddress
     */
    public function getAddressKana(): ?LegalEntityJapanAddress
    {
        return $this->addressKana;
    }

    /**
     * @param LegalEntityJapanAddress $addressKana
     *
     * @return self
     */
    public function setAddressKana(?LegalEntityJapanAddress $addressKana): self
    {
        $this->addressKana = $addressKana;

        return $this;
    }

    /**
     * @return LegalEntityJapanAddress
     */
    public function getAddressKanji(): ?LegalEntityJapanAddress
    {
        return $this->addressKanji;
    }

    /**
     * @param LegalEntityJapanAddress $addressKanji
     *
     * @return self
     */
    public function setAddressKanji(?LegalEntityJapanAddress $addressKanji): self
    {
        $this->addressKanji = $addressKanji;

        return $this;
    }

    /**
     * Whether information was collected from the company's directors.
     *
     * @return bool
     */
    public function getDirectorsProvided(): ?bool
    {
        return $this->directorsProvided;
    }

    /**
     * Whether information was collected from the company's directors.
     *
     * @param bool $directorsProvided
     *
     * @return self
     */
    public function setDirectorsProvided(?bool $directorsProvided): self
    {
        $this->directorsProvided = $directorsProvided;

        return $this;
    }

    /**
     * The company's legal name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The company's legal name.
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
     * The Kana variation of the company's legal name Japan only).
     *
     * @return string
     */
    public function getNameKana(): ?string
    {
        return $this->nameKana;
    }

    /**
     * The Kana variation of the company's legal name Japan only).
     *
     * @param string $nameKana
     *
     * @return self
     */
    public function setNameKana(?string $nameKana): self
    {
        $this->nameKana = $nameKana;

        return $this;
    }

    /**
     * The Kanji variation of the company's legal name (Japan only).
     *
     * @return string
     */
    public function getNameKanji(): ?string
    {
        return $this->nameKanji;
    }

    /**
     * The Kanji variation of the company's legal name (Japan only).
     *
     * @param string $nameKanji
     *
     * @return self
     */
    public function setNameKanji(?string $nameKanji): self
    {
        $this->nameKanji = $nameKanji;

        return $this;
    }

    /**
     * Whether the company's owners have been provided.
     *
     * @return bool
     */
    public function getOwnersProvided(): ?bool
    {
        return $this->ownersProvided;
    }

    /**
     * Whether the company's owners have been provided.
     *
     * @param bool $ownersProvided
     *
     * @return self
     */
    public function setOwnersProvided(?bool $ownersProvided): self
    {
        $this->ownersProvided = $ownersProvided;

        return $this;
    }

    /**
     * The company's phone number (used for verification).
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * The company's phone number (used for verification).
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Whether the company's business ID number was provided.
     *
     * @return bool
     */
    public function getTaxIdProvided(): ?bool
    {
        return $this->taxIdProvided;
    }

    /**
     * Whether the company's business ID number was provided.
     *
     * @param bool $taxIdProvided
     *
     * @return self
     */
    public function setTaxIdProvided(?bool $taxIdProvided): self
    {
        $this->taxIdProvided = $taxIdProvided;

        return $this;
    }

    /**
     * The jurisdiction in which the `tax_id` is registered (Germany-based companies only).
     *
     * @return string
     */
    public function getTaxIdRegistrar(): ?string
    {
        return $this->taxIdRegistrar;
    }

    /**
     * The jurisdiction in which the `tax_id` is registered (Germany-based companies only).
     *
     * @param string $taxIdRegistrar
     *
     * @return self
     */
    public function setTaxIdRegistrar(?string $taxIdRegistrar): self
    {
        $this->taxIdRegistrar = $taxIdRegistrar;

        return $this;
    }

    /**
     * Whether the company's business VAT number was provided.
     *
     * @return bool
     */
    public function getVatIdProvided(): ?bool
    {
        return $this->vatIdProvided;
    }

    /**
     * Whether the company's business VAT number was provided.
     *
     * @param bool $vatIdProvided
     *
     * @return self
     */
    public function setVatIdProvided(?bool $vatIdProvided): self
    {
        $this->vatIdProvided = $vatIdProvided;

        return $this;
    }
}
