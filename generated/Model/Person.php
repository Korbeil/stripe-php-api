<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Person
{
    /**
     * @var string
     */
    protected $account;
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
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * @var LegalEntityDob
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
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $idNumberProvided;
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
     * @var string
     */
    protected $phone;
    /**
     * @var PersonRelationship
     */
    protected $relationship;
    /**
     * @var PersonRequirements
     */
    protected $requirements;
    /**
     * @var bool
     */
    protected $ssnLast4Provided;
    /**
     * @var LegalEntityVerification
     */
    protected $verification;

    /**
     * @return string
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * @param string $account
     *
     * @return self
     */
    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }

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
     * @return LegalEntityDob
     */
    public function getDob(): ?LegalEntityDob
    {
        return $this->dob;
    }

    /**
     * @param LegalEntityDob $dob
     *
     * @return self
     */
    public function setDob(?LegalEntityDob $dob): self
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
     * @return bool
     */
    public function getIdNumberProvided(): ?bool
    {
        return $this->idNumberProvided;
    }

    /**
     * @param bool $idNumberProvided
     *
     * @return self
     */
    public function setIdNumberProvided(?bool $idNumberProvided): self
    {
        $this->idNumberProvided = $idNumberProvided;

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
     * @return PersonRelationship
     */
    public function getRelationship(): ?PersonRelationship
    {
        return $this->relationship;
    }

    /**
     * @param PersonRelationship $relationship
     *
     * @return self
     */
    public function setRelationship(?PersonRelationship $relationship): self
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * @return PersonRequirements
     */
    public function getRequirements(): ?PersonRequirements
    {
        return $this->requirements;
    }

    /**
     * @param PersonRequirements $requirements
     *
     * @return self
     */
    public function setRequirements(?PersonRequirements $requirements): self
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSsnLast4Provided(): ?bool
    {
        return $this->ssnLast4Provided;
    }

    /**
     * @param bool $ssnLast4Provided
     *
     * @return self
     */
    public function setSsnLast4Provided(?bool $ssnLast4Provided): self
    {
        $this->ssnLast4Provided = $ssnLast4Provided;

        return $this;
    }

    /**
     * @return LegalEntityVerification
     */
    public function getVerification(): ?LegalEntityVerification
    {
        return $this->verification;
    }

    /**
     * @param LegalEntityVerification $verification
     *
     * @return self
     */
    public function setVerification(?LegalEntityVerification $verification): self
    {
        $this->verification = $verification;

        return $this;
    }
}
