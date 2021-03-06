<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsPostBodyIndividual
{
    /**
     * @var V1AccountsPostBodyIndividualAddress
     */
    protected $address;
    /**
     * @var V1AccountsPostBodyIndividualAddressKana
     */
    protected $addressKana;
    /**
     * @var V1AccountsPostBodyIndividualAddressKanji
     */
    protected $addressKanji;
    /**
     * @var V1AccountsPostBodyIndividualDob
     */
    protected $dob;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $firstNameKana;
    /**
     * @var string
     */
    protected $firstNameKanji;
    /**
     * @var string
     */
    protected $gender;
    /**
     * @var string
     */
    protected $idNumber;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $lastNameKana;
    /**
     * @var string
     */
    protected $lastNameKanji;
    /**
     * @var string
     */
    protected $maidenName;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $ssnLast4;
    /**
     * @var V1AccountsPostBodyIndividualVerification
     */
    protected $verification;

    /**
     * @return V1AccountsPostBodyIndividualAddress
     */
    public function getAddress(): ?V1AccountsPostBodyIndividualAddress
    {
        return $this->address;
    }

    /**
     * @param V1AccountsPostBodyIndividualAddress $address
     *
     * @return self
     */
    public function setAddress(?V1AccountsPostBodyIndividualAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return V1AccountsPostBodyIndividualAddressKana
     */
    public function getAddressKana(): ?V1AccountsPostBodyIndividualAddressKana
    {
        return $this->addressKana;
    }

    /**
     * @param V1AccountsPostBodyIndividualAddressKana $addressKana
     *
     * @return self
     */
    public function setAddressKana(?V1AccountsPostBodyIndividualAddressKana $addressKana): self
    {
        $this->addressKana = $addressKana;

        return $this;
    }

    /**
     * @return V1AccountsPostBodyIndividualAddressKanji
     */
    public function getAddressKanji(): ?V1AccountsPostBodyIndividualAddressKanji
    {
        return $this->addressKanji;
    }

    /**
     * @param V1AccountsPostBodyIndividualAddressKanji $addressKanji
     *
     * @return self
     */
    public function setAddressKanji(?V1AccountsPostBodyIndividualAddressKanji $addressKanji): self
    {
        $this->addressKanji = $addressKanji;

        return $this;
    }

    /**
     * @return V1AccountsPostBodyIndividualDob
     */
    public function getDob(): ?V1AccountsPostBodyIndividualDob
    {
        return $this->dob;
    }

    /**
     * @param V1AccountsPostBodyIndividualDob $dob
     *
     * @return self
     */
    public function setDob(?V1AccountsPostBodyIndividualDob $dob): self
    {
        $this->dob = $dob;

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
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstNameKana(): ?string
    {
        return $this->firstNameKana;
    }

    /**
     * @param string $firstNameKana
     *
     * @return self
     */
    public function setFirstNameKana(?string $firstNameKana): self
    {
        $this->firstNameKana = $firstNameKana;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstNameKanji(): ?string
    {
        return $this->firstNameKanji;
    }

    /**
     * @param string $firstNameKanji
     *
     * @return self
     */
    public function setFirstNameKanji(?string $firstNameKanji): self
    {
        $this->firstNameKanji = $firstNameKanji;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdNumber(): ?string
    {
        return $this->idNumber;
    }

    /**
     * @param string $idNumber
     *
     * @return self
     */
    public function setIdNumber(?string $idNumber): self
    {
        $this->idNumber = $idNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastNameKana(): ?string
    {
        return $this->lastNameKana;
    }

    /**
     * @param string $lastNameKana
     *
     * @return self
     */
    public function setLastNameKana(?string $lastNameKana): self
    {
        $this->lastNameKana = $lastNameKana;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastNameKanji(): ?string
    {
        return $this->lastNameKanji;
    }

    /**
     * @param string $lastNameKanji
     *
     * @return self
     */
    public function setLastNameKanji(?string $lastNameKanji): self
    {
        $this->lastNameKanji = $lastNameKanji;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaidenName(): ?string
    {
        return $this->maidenName;
    }

    /**
     * @param string $maidenName
     *
     * @return self
     */
    public function setMaidenName(?string $maidenName): self
    {
        $this->maidenName = $maidenName;

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

    /**
     * @return string
     */
    public function getSsnLast4(): ?string
    {
        return $this->ssnLast4;
    }

    /**
     * @param string $ssnLast4
     *
     * @return self
     */
    public function setSsnLast4(?string $ssnLast4): self
    {
        $this->ssnLast4 = $ssnLast4;

        return $this;
    }

    /**
     * @return V1AccountsPostBodyIndividualVerification
     */
    public function getVerification(): ?V1AccountsPostBodyIndividualVerification
    {
        return $this->verification;
    }

    /**
     * @param V1AccountsPostBodyIndividualVerification $verification
     *
     * @return self
     */
    public function setVerification(?V1AccountsPostBodyIndividualVerification $verification): self
    {
        $this->verification = $verification;

        return $this;
    }
}
