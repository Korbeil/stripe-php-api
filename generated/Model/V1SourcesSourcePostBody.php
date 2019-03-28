<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SourcesSourcePostBody
{
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * @var bool
     */
    protected $isPermittedSourceUsage;
    /**
     * Information about a mandate possibility attached to a source object (generally for bank debits) as well as its acceptance status.
     *
     * @var V1SourcesSourcePostBodyMandate
     */
    protected $mandate;
    /**
     * A set of key-value pairs that you can attach to a source object. It can be useful for storing additional information about the source in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * Information about the owner of the payment instrument that may be used or required by particular source types.
     *
     * @var V1SourcesSourcePostBodyOwner
     */
    protected $owner;

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
     * @return bool
     */
    public function getIsPermittedSourceUsage(): ?bool
    {
        return $this->isPermittedSourceUsage;
    }

    /**
     * @param bool $isPermittedSourceUsage
     *
     * @return self
     */
    public function setIsPermittedSourceUsage(?bool $isPermittedSourceUsage): self
    {
        $this->isPermittedSourceUsage = $isPermittedSourceUsage;

        return $this;
    }

    /**
     * Information about a mandate possibility attached to a source object (generally for bank debits) as well as its acceptance status.
     *
     * @return V1SourcesSourcePostBodyMandate
     */
    public function getMandate(): ?V1SourcesSourcePostBodyMandate
    {
        return $this->mandate;
    }

    /**
     * Information about a mandate possibility attached to a source object (generally for bank debits) as well as its acceptance status.
     *
     * @param V1SourcesSourcePostBodyMandate $mandate
     *
     * @return self
     */
    public function setMandate(?V1SourcesSourcePostBodyMandate $mandate): self
    {
        $this->mandate = $mandate;

        return $this;
    }

    /**
     * A set of key-value pairs that you can attach to a source object. It can be useful for storing additional information about the source in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A set of key-value pairs that you can attach to a source object. It can be useful for storing additional information about the source in a structured format.
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
     * Information about the owner of the payment instrument that may be used or required by particular source types.
     *
     * @return V1SourcesSourcePostBodyOwner
     */
    public function getOwner(): ?V1SourcesSourcePostBodyOwner
    {
        return $this->owner;
    }

    /**
     * Information about the owner of the payment instrument that may be used or required by particular source types.
     *
     * @param V1SourcesSourcePostBodyOwner $owner
     *
     * @return self
     */
    public function setOwner(?V1SourcesSourcePostBodyOwner $owner): self
    {
        $this->owner = $owner;

        return $this;
    }
}