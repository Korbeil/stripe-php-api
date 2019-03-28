<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SubscriptionSchedulesSchedulePostBodyRenewalInterval
{
    /**
     * @var string
     */
    protected $interval;
    /**
     * @var int
     */
    protected $length;

    /**
     * @return string
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     *
     * @return self
     */
    public function setInterval(?string $interval): self
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): ?int
    {
        return $this->length;
    }

    /**
     * @param int $length
     *
     * @return self
     */
    public function setLength(?int $length): self
    {
        $this->length = $length;

        return $this;
    }
}
