<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountPersonsPersonPostBody
{
    /**
     * The person's address.
     *
     * @var V1AccountsAccountPersonsPersonPostBodyAddress
     */
    protected $address;
    /**
     * The Kana variation of the person's address (Japan only).
     *
     * @var V1AccountsAccountPersonsPersonPostBodyAddressKana
     */
    protected $addressKana;
    /**
     * The Kanji variation of the person's address (Japan only).
     *
     * @var V1AccountsAccountPersonsPersonPostBodyAddressKanji
     */
    protected $addressKanji;
    /**
     * The person's date of birth.
     *
     * @var V1AccountsAccountPersonsPersonPostBodyDob
     */
    protected $dob;
    /**
     * The person's email address.
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
     * The person's first name.
     *
     * @var string
     */
    protected $firstName;
    /**
     * The Kana variation of the person's first name (Japan only).
     *
     * @var string
     */
    protected $firstNameKana;
    /**
     * The Kanji variation of the person's first name (Japan only).
     *
     * @var string
     */
    protected $firstNameKanji;
    /**
     * The person's gender (International regulations require either "male" or "female").
     *
     * @var string
     */
    protected $gender;
    /**
     * The person's ID number, as appropriate for their country. For example, a social security number in the U.S., social insurance number in Canada, etc. Instead of the number itself, you can also provide a [PII token provided by Stripe.js](https://stripe.com/docs/stripe.js#collecting-pii-data).
     *
     * @var string
     */
    protected $idNumber;
    /**
     * The person's last name.
     *
     * @var string
     */
    protected $lastName;
    /**
     * The Kana variation of the person's last name (Japan only).
     *
     * @var string
     */
    protected $lastNameKana;
    /**
     * The Kanji variation of the person's last name (Japan only).
     *
     * @var string
     */
    protected $lastNameKanji;
    /**
     * The person's maiden name.
     *
     * @var string
     */
    protected $maidenName;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The person's phone number.
     *
     * @var string
     */
    protected $phone;
    /**
     * The relationship that this person has with the account's legal entity.
     *
     * @var V1AccountsAccountPersonsPersonPostBodyRelationship
     */
    protected $relationship;
    /**
     * The last 4 digits of the person's social security number.
     *
     * @var string
     */
    protected $ssnLast4;
    /**
     * The person's verification status.
     *
     * @var V1AccountsAccountPersonsPersonPostBodyVerification
     */
    protected $verification;

    /**
     * The person's address.
     *
     * @return V1AccountsAccountPersonsPersonPostBodyAddress
     */
    public function getAddress(): ?V1AccountsAccountPersonsPersonPostBodyAddress
    {
        return $this->address;
    }

    /**
     * The person's address.
     *
     * @param V1AccountsAccountPersonsPersonPostBodyAddress $address
     *
     * @return self
     */
    public function setAddress(?V1AccountsAccountPersonsPersonPostBodyAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * The Kana variation of the person's address (Japan only).
     *
     * @return V1AccountsAccountPersonsPersonPostBodyAddressKana
     */
    public function getAddressKana(): ?V1AccountsAccountPersonsPersonPostBodyAddressKana
    {
        return $this->addressKana;
    }

    /**
     * The Kana variation of the person's address (Japan only).
     *
     * @param V1AccountsAccountPersonsPersonPostBodyAddressKana $addressKana
     *
     * @return self
     */
    public function setAddressKana(?V1AccountsAccountPersonsPersonPostBodyAddressKana $addressKana): self
    {
        $this->addressKana = $addressKana;

        return $this;
    }

    /**
     * The Kanji variation of the person's address (Japan only).
     *
     * @return V1AccountsAccountPersonsPersonPostBodyAddressKanji
     */
    public function getAddressKanji(): ?V1AccountsAccountPersonsPersonPostBodyAddressKanji
    {
        return $this->addressKanji;
    }

    /**
     * The Kanji variation of the person's address (Japan only).
     *
     * @param V1AccountsAccountPersonsPersonPostBodyAddressKanji $addressKanji
     *
     * @return self
     */
    public function setAddressKanji(?V1AccountsAccountPersonsPersonPostBodyAddressKanji $addressKanji): self
    {
        $this->addressKanji = $addressKanji;

        return $this;
    }

    /**
     * The person's date of birth.
     *
     * @return V1AccountsAccountPersonsPersonPostBodyDob
     */
    public function getDob(): ?V1AccountsAccountPersonsPersonPostBodyDob
    {
        return $this->dob;
    }

    /**
     * The person's date of birth.
     *
     * @param V1AccountsAccountPersonsPersonPostBodyDob $dob
     *
     * @return self
     */
    public function setDob(?V1AccountsAccountPersonsPersonPostBodyDob $dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * The person's email address.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The person's email address.
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
     * The person's first name.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * The person's first name.
     *
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
     * The Kana variation of the person's first name (Japan only).
     *
     * @return string
     */
    public function getFirstNameKana(): ?string
    {
        return $this->firstNameKana;
    }

    /**
     * The Kana variation of the person's first name (Japan only).
     *
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
     * The Kanji variation of the person's first name (Japan only).
     *
     * @return string
     */
    public function getFirstNameKanji(): ?string
    {
        return $this->firstNameKanji;
    }

    /**
     * The Kanji variation of the person's first name (Japan only).
     *
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
     * The person's gender (International regulations require either "male" or "female").
     *
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * The person's gender (International regulations require either "male" or "female").
     *
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
     * The person's ID number, as appropriate for their country. For example, a social security number in the U.S., social insurance number in Canada, etc. Instead of the number itself, you can also provide a [PII token provided by Stripe.js](https://stripe.com/docs/stripe.js#collecting-pii-data).
     *
     * @return string
     */
    public function getIdNumber(): ?string
    {
        return $this->idNumber;
    }

    /**
     * The person's ID number, as appropriate for their country. For example, a social security number in the U.S., social insurance number in Canada, etc. Instead of the number itself, you can also provide a [PII token provided by Stripe.js](https://stripe.com/docs/stripe.js#collecting-pii-data).
     *
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
     * The person's last name.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * The person's last name.
     *
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
     * The Kana variation of the person's last name (Japan only).
     *
     * @return string
     */
    public function getLastNameKana(): ?string
    {
        return $this->lastNameKana;
    }

    /**
     * The Kana variation of the person's last name (Japan only).
     *
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
     * The Kanji variation of the person's last name (Japan only).
     *
     * @return string
     */
    public function getLastNameKanji(): ?string
    {
        return $this->lastNameKanji;
    }

    /**
     * The Kanji variation of the person's last name (Japan only).
     *
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
     * The person's maiden name.
     *
     * @return string
     */
    public function getMaidenName(): ?string
    {
        return $this->maidenName;
    }

    /**
     * The person's maiden name.
     *
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
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
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
     * The person's phone number.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * The person's phone number.
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
     * The relationship that this person has with the account's legal entity.
     *
     * @return V1AccountsAccountPersonsPersonPostBodyRelationship
     */
    public function getRelationship(): ?V1AccountsAccountPersonsPersonPostBodyRelationship
    {
        return $this->relationship;
    }

    /**
     * The relationship that this person has with the account's legal entity.
     *
     * @param V1AccountsAccountPersonsPersonPostBodyRelationship $relationship
     *
     * @return self
     */
    public function setRelationship(?V1AccountsAccountPersonsPersonPostBodyRelationship $relationship): self
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * The last 4 digits of the person's social security number.
     *
     * @return string
     */
    public function getSsnLast4(): ?string
    {
        return $this->ssnLast4;
    }

    /**
     * The last 4 digits of the person's social security number.
     *
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
     * The person's verification status.
     *
     * @return V1AccountsAccountPersonsPersonPostBodyVerification
     */
    public function getVerification(): ?V1AccountsAccountPersonsPersonPostBodyVerification
    {
        return $this->verification;
    }

    /**
     * The person's verification status.
     *
     * @param V1AccountsAccountPersonsPersonPostBodyVerification $verification
     *
     * @return self
     */
    public function setVerification(?V1AccountsAccountPersonsPersonPostBodyVerification $verification): self
    {
        $this->verification = $verification;

        return $this;
    }
}