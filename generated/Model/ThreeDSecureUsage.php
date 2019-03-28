<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class ThreeDSecureUsage
{
    /**
     * 3D Secure is support on this card.
     *
     * @var bool
     */
    protected $supported;

    /**
     * 3D Secure is support on this card.
     *
     * @return bool
     */
    public function getSupported(): ?bool
    {
        return $this->supported;
    }

    /**
     * 3D Secure is support on this card.
     *
     * @param bool $supported
     *
     * @return self
     */
    public function setSupported(?bool $supported): self
    {
        $this->supported = $supported;

        return $this;
    }
}