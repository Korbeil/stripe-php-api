<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountPeoplePersonPostBodyVerificationDocument
{
    /**
     * @var string
     */
    protected $back;
    /**
     * @var string
     */
    protected $front;

    /**
     * @return string
     */
    public function getBack(): ?string
    {
        return $this->back;
    }

    /**
     * @param string $back
     *
     * @return self
     */
    public function setBack(?string $back): self
    {
        $this->back = $back;

        return $this;
    }

    /**
     * @return string
     */
    public function getFront(): ?string
    {
        return $this->front;
    }

    /**
     * @param string $front
     *
     * @return self
     */
    public function setFront(?string $front): self
    {
        $this->front = $front;

        return $this;
    }
}
