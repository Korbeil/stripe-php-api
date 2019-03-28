<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountPostBodySettingsPayoutsSchedule
{
    /**
     * @var mixed
     */
    protected $delayDays;
    /**
     * @var string
     */
    protected $interval;
    /**
     * @var int
     */
    protected $monthlyAnchor;
    /**
     * @var string
     */
    protected $weeklyAnchor;

    /**
     * @return mixed
     */
    public function getDelayDays()
    {
        return $this->delayDays;
    }

    /**
     * @param mixed $delayDays
     *
     * @return self
     */
    public function setDelayDays($delayDays): self
    {
        $this->delayDays = $delayDays;

        return $this;
    }

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
    public function getMonthlyAnchor(): ?int
    {
        return $this->monthlyAnchor;
    }

    /**
     * @param int $monthlyAnchor
     *
     * @return self
     */
    public function setMonthlyAnchor(?int $monthlyAnchor): self
    {
        $this->monthlyAnchor = $monthlyAnchor;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeeklyAnchor(): ?string
    {
        return $this->weeklyAnchor;
    }

    /**
     * @param string $weeklyAnchor
     *
     * @return self
     */
    public function setWeeklyAnchor(?string $weeklyAnchor): self
    {
        $this->weeklyAnchor = $weeklyAnchor;

        return $this;
    }
}
