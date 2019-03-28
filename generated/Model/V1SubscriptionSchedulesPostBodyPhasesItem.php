<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SubscriptionSchedulesPostBodyPhasesItem
{
    /**
     * @var float
     */
    protected $applicationFeePercent;
    /**
     * @var string
     */
    protected $coupon;
    /**
     * @var int
     */
    protected $endDate;
    /**
     * @var int
     */
    protected $iterations;
    /**
     * @var V1SubscriptionSchedulesPostBodyPhasesItemPlansItem[]
     */
    protected $plans;
    /**
     * @var float
     */
    protected $taxPercent;
    /**
     * @var bool
     */
    protected $trial;
    /**
     * @var int
     */
    protected $trialEnd;

    /**
     * @return float
     */
    public function getApplicationFeePercent(): ?float
    {
        return $this->applicationFeePercent;
    }

    /**
     * @param float $applicationFeePercent
     *
     * @return self
     */
    public function setApplicationFeePercent(?float $applicationFeePercent): self
    {
        $this->applicationFeePercent = $applicationFeePercent;

        return $this;
    }

    /**
     * @return string
     */
    public function getCoupon(): ?string
    {
        return $this->coupon;
    }

    /**
     * @param string $coupon
     *
     * @return self
     */
    public function setCoupon(?string $coupon): self
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * @return int
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    /**
     * @param int $endDate
     *
     * @return self
     */
    public function setEndDate(?int $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getIterations(): ?int
    {
        return $this->iterations;
    }

    /**
     * @param int $iterations
     *
     * @return self
     */
    public function setIterations(?int $iterations): self
    {
        $this->iterations = $iterations;

        return $this;
    }

    /**
     * @return V1SubscriptionSchedulesPostBodyPhasesItemPlansItem[]
     */
    public function getPlans(): ?array
    {
        return $this->plans;
    }

    /**
     * @param V1SubscriptionSchedulesPostBodyPhasesItemPlansItem[] $plans
     *
     * @return self
     */
    public function setPlans(?array $plans): self
    {
        $this->plans = $plans;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }

    /**
     * @param float $taxPercent
     *
     * @return self
     */
    public function setTaxPercent(?float $taxPercent): self
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTrial(): ?bool
    {
        return $this->trial;
    }

    /**
     * @param bool $trial
     *
     * @return self
     */
    public function setTrial(?bool $trial): self
    {
        $this->trial = $trial;

        return $this;
    }

    /**
     * @return int
     */
    public function getTrialEnd(): ?int
    {
        return $this->trialEnd;
    }

    /**
     * @param int $trialEnd
     *
     * @return self
     */
    public function setTrialEnd(?int $trialEnd): self
    {
        $this->trialEnd = $trialEnd;

        return $this;
    }
}
