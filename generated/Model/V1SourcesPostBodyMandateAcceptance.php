<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SourcesPostBodyMandateAcceptance
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
     * @var V1SourcesPostBodyMandateAcceptanceOffline
     */
    protected $offline;
    /**
     * @var V1SourcesPostBodyMandateAcceptanceOnline
     */
    protected $online;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $type;
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
     * @return V1SourcesPostBodyMandateAcceptanceOffline
     */
    public function getOffline(): ?V1SourcesPostBodyMandateAcceptanceOffline
    {
        return $this->offline;
    }

    /**
     * @param V1SourcesPostBodyMandateAcceptanceOffline $offline
     *
     * @return self
     */
    public function setOffline(?V1SourcesPostBodyMandateAcceptanceOffline $offline): self
    {
        $this->offline = $offline;

        return $this;
    }

    /**
     * @return V1SourcesPostBodyMandateAcceptanceOnline
     */
    public function getOnline(): ?V1SourcesPostBodyMandateAcceptanceOnline
    {
        return $this->online;
    }

    /**
     * @param V1SourcesPostBodyMandateAcceptanceOnline $online
     *
     * @return self
     */
    public function setOnline(?V1SourcesPostBodyMandateAcceptanceOnline $online): self
    {
        $this->online = $online;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
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
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

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
