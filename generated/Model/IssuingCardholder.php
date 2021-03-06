<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class IssuingCardholder
{
    /**
     * @var IssuingCardholderAddress
     */
    protected $billing;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * The cardholder's email address.
     *
     * @var string
     */
    protected $email;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * Whether or not this cardholder is the default cardholder.
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The cardholder's name. This will be printed on cards issued to them.
     *
     * @var string
     */
    protected $name;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * The cardholder's phone number.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * One of `active`, `inactive`, `blocked`, or `pending`.
     *
     * @var string
     */
    protected $status;
    /**
     * One of `individual` or `business_entity`.
     *
     * @var string
     */
    protected $type;

    /**
     * @return IssuingCardholderAddress
     */
    public function getBilling(): ?IssuingCardholderAddress
    {
        return $this->billing;
    }

    /**
     * @param IssuingCardholderAddress $billing
     *
     * @return self
     */
    public function setBilling(?IssuingCardholderAddress $billing): self
    {
        $this->billing = $billing;

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
     * The cardholder's email address.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The cardholder's email address.
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
     * Whether or not this cardholder is the default cardholder.
     *
     * @return bool
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * Whether or not this cardholder is the default cardholder.
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @return bool
     */
    public function getLivemode(): ?bool
    {
        return $this->livemode;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @param bool $livemode
     *
     * @return self
     */
    public function setLivemode(?bool $livemode): self
    {
        $this->livemode = $livemode;

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
     * The cardholder's name. This will be printed on cards issued to them.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The cardholder's name. This will be printed on cards issued to them.
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
     * The cardholder's phone number.
     *
     * @return string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * The cardholder's phone number.
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * One of `active`, `inactive`, `blocked`, or `pending`.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * One of `active`, `inactive`, `blocked`, or `pending`.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * One of `individual` or `business_entity`.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * One of `individual` or `business_entity`.
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
