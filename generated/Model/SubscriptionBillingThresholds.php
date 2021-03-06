<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SubscriptionBillingThresholds
{
    /**
     * Monetary threshold that triggers the subscription to create an invoice.
     *
     * @var int
     */
    protected $amountGte;
    /**
     * Indicates if the `billing_cycle_anchor` should be reset when a threshold is reached. If true, `billing_cycle_anchor` will be updated to the date/time the threshold was last reached; otherwise, the value will remain unchanged. This value may not be `true` if the subscription contains items with plans that have `aggregate_usage=last_ever`.
     *
     * @var bool
     */
    protected $resetBillingCycleAnchor;

    /**
     * Monetary threshold that triggers the subscription to create an invoice.
     *
     * @return int
     */
    public function getAmountGte(): ?int
    {
        return $this->amountGte;
    }

    /**
     * Monetary threshold that triggers the subscription to create an invoice.
     *
     * @param int $amountGte
     *
     * @return self
     */
    public function setAmountGte(?int $amountGte): self
    {
        $this->amountGte = $amountGte;

        return $this;
    }

    /**
     * Indicates if the `billing_cycle_anchor` should be reset when a threshold is reached. If true, `billing_cycle_anchor` will be updated to the date/time the threshold was last reached; otherwise, the value will remain unchanged. This value may not be `true` if the subscription contains items with plans that have `aggregate_usage=last_ever`.
     *
     * @return bool
     */
    public function getResetBillingCycleAnchor(): ?bool
    {
        return $this->resetBillingCycleAnchor;
    }

    /**
     * Indicates if the `billing_cycle_anchor` should be reset when a threshold is reached. If true, `billing_cycle_anchor` will be updated to the date/time the threshold was last reached; otherwise, the value will remain unchanged. This value may not be `true` if the subscription contains items with plans that have `aggregate_usage=last_ever`.
     *
     * @param bool $resetBillingCycleAnchor
     *
     * @return self
     */
    public function setResetBillingCycleAnchor(?bool $resetBillingCycleAnchor): self
    {
        $this->resetBillingCycleAnchor = $resetBillingCycleAnchor;

        return $this;
    }
}
