<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SourcesSourcePostBodyMandateAcceptanceOnline
{
    /**
     * @var int
     */
    protected $date;
    /**
     * @var string
     */
    protected $ip;
    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @return int
     */
    public function getDate(): ?int
    {
        return $this->date;
    }

    /**
     * @param int $date
     *
     * @return self
     */
    public function setDate(?int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     *
     * @return self
     */
    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     *
     * @return self
     */
    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }
}
