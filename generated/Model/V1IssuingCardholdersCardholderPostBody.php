<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1IssuingCardholdersCardholderPostBody
{
    /**
     * The cardholder's billing address.
     *
     * @var V1IssuingCardholdersCardholderPostBodyBilling
     */
    protected $billing;
    /**
     * The cardholder's email address.
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
     * Specifies whether to set this as the default cardholder.
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The cardholder's phone number.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Specifies whether to permit authorizations on this cardholder's cards. Possible values are `active` or `inactive`.
     *
     * @var string
     */
    protected $status;

    /**
     * The cardholder's billing address.
     *
     * @return V1IssuingCardholdersCardholderPostBodyBilling
     */
    public function getBilling(): ?V1IssuingCardholdersCardholderPostBodyBilling
    {
        return $this->billing;
    }

    /**
     * The cardholder's billing address.
     *
     * @param V1IssuingCardholdersCardholderPostBodyBilling $billing
     *
     * @return self
     */
    public function setBilling(?V1IssuingCardholdersCardholderPostBodyBilling $billing): self
    {
        $this->billing = $billing;

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
     * Specifies whether to set this as the default cardholder.
     *
     * @return bool
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * Specifies whether to set this as the default cardholder.
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
     * Specifies whether to permit authorizations on this cardholder's cards. Possible values are `active` or `inactive`.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Specifies whether to permit authorizations on this cardholder's cards. Possible values are `active` or `inactive`.
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
}
