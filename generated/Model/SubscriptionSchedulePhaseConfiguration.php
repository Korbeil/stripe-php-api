<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SubscriptionSchedulePhaseConfiguration
{
    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account during this phase of the schedule.
     *
     * @var float
     */
    protected $applicationFeePercent;
    /**
     * ID of the coupon to use during this phase of the subscription schedule.
     *
     * @var string
     */
    protected $coupon;
    /**
     * The end of this phase of the subscription schedule.
     *
     * @var int
     */
    protected $endDate;
    /**
     * Plans to subscribe during this phase of the subscription schedule.
     *
     * @var SubscriptionScheduleConfigurationItem[]
     */
    protected $plans;
    /**
     * The start of this phase of the subscription schedule.
     *
     * @var int
     */
    protected $startDate;
    /**
     * If provided, each invoice created during this phase of the subscription schedule will apply the tax rate, increasing the amount billed to the customer.
     *
     * @var float
     */
    protected $taxPercent;
    /**
     * When the trial ends within the phase.
     *
     * @var int
     */
    protected $trialEnd;

    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account during this phase of the schedule.
     *
     * @return float
     */
    public function getApplicationFeePercent(): ?float
    {
        return $this->applicationFeePercent;
    }

    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account during this phase of the schedule.
     *
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
     * ID of the coupon to use during this phase of the subscription schedule.
     *
     * @return string
     */
    public function getCoupon(): ?string
    {
        return $this->coupon;
    }

    /**
     * ID of the coupon to use during this phase of the subscription schedule.
     *
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
     * The end of this phase of the subscription schedule.
     *
     * @return int
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    /**
     * The end of this phase of the subscription schedule.
     *
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
     * Plans to subscribe during this phase of the subscription schedule.
     *
     * @return SubscriptionScheduleConfigurationItem[]
     */
    public function getPlans(): ?array
    {
        return $this->plans;
    }

    /**
     * Plans to subscribe during this phase of the subscription schedule.
     *
     * @param SubscriptionScheduleConfigurationItem[] $plans
     *
     * @return self
     */
    public function setPlans(?array $plans): self
    {
        $this->plans = $plans;

        return $this;
    }

    /**
     * The start of this phase of the subscription schedule.
     *
     * @return int
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    /**
     * The start of this phase of the subscription schedule.
     *
     * @param int $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * If provided, each invoice created during this phase of the subscription schedule will apply the tax rate, increasing the amount billed to the customer.
     *
     * @return float
     */
    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }

    /**
     * If provided, each invoice created during this phase of the subscription schedule will apply the tax rate, increasing the amount billed to the customer.
     *
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
     * When the trial ends within the phase.
     *
     * @return int
     */
    public function getTrialEnd(): ?int
    {
        return $this->trialEnd;
    }

    /**
     * When the trial ends within the phase.
     *
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
