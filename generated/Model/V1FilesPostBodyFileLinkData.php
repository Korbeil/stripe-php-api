<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1FilesPostBodyFileLinkData
{
    /**
     * @var bool
     */
    protected $create;
    /**
     * @var int
     */
    protected $expiresAt;
    /**
     * @var mixed
     */
    protected $metadata;

    /**
     * @return bool
     */
    public function getCreate(): ?bool
    {
        return $this->create;
    }

    /**
     * @param bool $create
     *
     * @return self
     */
    public function setCreate(?bool $create): self
    {
        $this->create = $create;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpiresAt(): ?int
    {
        return $this->expiresAt;
    }

    /**
     * @param int $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?int $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

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
}
