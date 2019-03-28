<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1CustomersCustomerSubscriptionsPostBody
{
    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account. The request must be made with an OAuth key in order to set an application fee percentage. For more information, see the application fees [documentation](https://stripe.com/docs/connect/subscriptions#collecting-fees-on-subscriptions).
     *
     * @var float
     */
    protected $applicationFeePercent;
    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay this subscription at the end of the cycle using the default source attached to the customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions. Defaults to `charge_automatically`.
     *
     * @var string
     */
    protected $billing;
    /**
     * A future timestamp to anchor the subscription's [billing cycle](https://stripe.com/docs/subscriptions/billing-cycle). This is used to determine the date of the first full invoice, and, for plans with `month` or `year` intervals, the day of the month for subsequent invoices.
     *
     * @var string
     */
    protected $billingCycleAnchor;
    /**
     * Define thresholds at which an invoice will be sent, and the subscription advanced to a new billing period. Pass an empty string to remove previously-defined thresholds.
     *
     * @var mixed
     */
    protected $billingThresholds;
    /**
     * Boolean indicating whether this subscription should cancel at the end of the current period.
     *
     * @var bool
     */
    protected $cancelAtPeriodEnd;
    /**
     * The code of the coupon to apply to this subscription. A coupon applied to a subscription will only affect invoices created for that particular subscription.
     *
     * @var string
     */
    protected $coupon;
    /**
     * Number of days a customer has to pay invoices generated by this subscription. Valid only for subscriptions where `billing` is set to `send_invoice`.
     *
     * @var int
     */
    protected $daysUntilDue;
    /**
     * ID of the default payment source for the subscription. It must belong to the customer associated with the subscription and be in a chargeable state. If not set, defaults to the customer's default source.
     *
     * @var string
     */
    protected $defaultSource;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * List of subscription items, each with an attached plan.
     *
     * @var V1CustomersCustomerSubscriptionsPostBodyItemsItem[]
     */
    protected $items;
    /**
     * A set of key-value pairs that you can attach to a `Subscription` object. It can be useful for storing additional information about the subscription in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * Boolean (defaults to `true`) telling us whether to [credit for unused time](https://stripe.com/docs/subscriptions/billing-cycle#prorations) when the billing cycle changes (e.g. when switching plans, resetting `billing_cycle_anchor=now`, or starting a trial), or if an item's `quantity` changes. If `false`, the anchor period will be free (similar to a trial) and no proration adjustments will be created.
     *
     * @var bool
     */
    protected $prorate;
    /**
     * A non-negative decimal (with at most four decimal places) between 0 and 100. This represents the percentage of the subscription invoice subtotal that will be calculated and added as tax to the final amount in each billing period. For example, a plan which charges $10/month with a `tax_percent` of `20.0` will charge $12 per invoice. To unset a previously-set value, pass an empty string.
     *
     * @var mixed
     */
    protected $taxPercent;
    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time. This will always overwrite any trials that might apply via a subscribed plan. If set, trial_end will override the default trial period of the plan the customer is being subscribed to. The special value `now` can be provided to end the customer's trial immediately.
     *
     * @var string
     */
    protected $trialEnd;
    /**
     * Indicates if a plan's `trial_period_days` should be applied to the subscription. Setting `trial_end` per subscription is preferred, and this defaults to `false`. Setting this flag to `true` together with `trial_end` is not allowed.
     *
     * @var bool
     */
    protected $trialFromPlan;
    /**
     * Integer representing the number of trial period days before the customer is charged for the first time. This will always overwrite any trials that might apply via a subscribed plan.
     *
     * @var int
     */
    protected $trialPeriodDays;

    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account. The request must be made with an OAuth key in order to set an application fee percentage. For more information, see the application fees [documentation](https://stripe.com/docs/connect/subscriptions#collecting-fees-on-subscriptions).
     *
     * @return float
     */
    public function getApplicationFeePercent(): ?float
    {
        return $this->applicationFeePercent;
    }

    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice subtotal that will be transferred to the application owner's Stripe account. The request must be made with an OAuth key in order to set an application fee percentage. For more information, see the application fees [documentation](https://stripe.com/docs/connect/subscriptions#collecting-fees-on-subscriptions).
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
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay this subscription at the end of the cycle using the default source attached to the customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions. Defaults to `charge_automatically`.
     *
     * @return string
     */
    public function getBilling(): ?string
    {
        return $this->billing;
    }

    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay this subscription at the end of the cycle using the default source attached to the customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions. Defaults to `charge_automatically`.
     *
     * @param string $billing
     *
     * @return self
     */
    public function setBilling(?string $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * A future timestamp to anchor the subscription's [billing cycle](https://stripe.com/docs/subscriptions/billing-cycle). This is used to determine the date of the first full invoice, and, for plans with `month` or `year` intervals, the day of the month for subsequent invoices.
     *
     * @return string
     */
    public function getBillingCycleAnchor(): ?string
    {
        return $this->billingCycleAnchor;
    }

    /**
     * A future timestamp to anchor the subscription's [billing cycle](https://stripe.com/docs/subscriptions/billing-cycle). This is used to determine the date of the first full invoice, and, for plans with `month` or `year` intervals, the day of the month for subsequent invoices.
     *
     * @param string $billingCycleAnchor
     *
     * @return self
     */
    public function setBillingCycleAnchor(?string $billingCycleAnchor): self
    {
        $this->billingCycleAnchor = $billingCycleAnchor;

        return $this;
    }

    /**
     * Define thresholds at which an invoice will be sent, and the subscription advanced to a new billing period. Pass an empty string to remove previously-defined thresholds.
     *
     * @return mixed
     */
    public function getBillingThresholds()
    {
        return $this->billingThresholds;
    }

    /**
     * Define thresholds at which an invoice will be sent, and the subscription advanced to a new billing period. Pass an empty string to remove previously-defined thresholds.
     *
     * @param mixed $billingThresholds
     *
     * @return self
     */
    public function setBillingThresholds($billingThresholds): self
    {
        $this->billingThresholds = $billingThresholds;

        return $this;
    }

    /**
     * Boolean indicating whether this subscription should cancel at the end of the current period.
     *
     * @return bool
     */
    public function getCancelAtPeriodEnd(): ?bool
    {
        return $this->cancelAtPeriodEnd;
    }

    /**
     * Boolean indicating whether this subscription should cancel at the end of the current period.
     *
     * @param bool $cancelAtPeriodEnd
     *
     * @return self
     */
    public function setCancelAtPeriodEnd(?bool $cancelAtPeriodEnd): self
    {
        $this->cancelAtPeriodEnd = $cancelAtPeriodEnd;

        return $this;
    }

    /**
     * The code of the coupon to apply to this subscription. A coupon applied to a subscription will only affect invoices created for that particular subscription.
     *
     * @return string
     */
    public function getCoupon(): ?string
    {
        return $this->coupon;
    }

    /**
     * The code of the coupon to apply to this subscription. A coupon applied to a subscription will only affect invoices created for that particular subscription.
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
     * Number of days a customer has to pay invoices generated by this subscription. Valid only for subscriptions where `billing` is set to `send_invoice`.
     *
     * @return int
     */
    public function getDaysUntilDue(): ?int
    {
        return $this->daysUntilDue;
    }

    /**
     * Number of days a customer has to pay invoices generated by this subscription. Valid only for subscriptions where `billing` is set to `send_invoice`.
     *
     * @param int $daysUntilDue
     *
     * @return self
     */
    public function setDaysUntilDue(?int $daysUntilDue): self
    {
        $this->daysUntilDue = $daysUntilDue;

        return $this;
    }

    /**
     * ID of the default payment source for the subscription. It must belong to the customer associated with the subscription and be in a chargeable state. If not set, defaults to the customer's default source.
     *
     * @return string
     */
    public function getDefaultSource(): ?string
    {
        return $this->defaultSource;
    }

    /**
     * ID of the default payment source for the subscription. It must belong to the customer associated with the subscription and be in a chargeable state. If not set, defaults to the customer's default source.
     *
     * @param string $defaultSource
     *
     * @return self
     */
    public function setDefaultSource(?string $defaultSource): self
    {
        $this->defaultSource = $defaultSource;

        return $this;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @return string[]
     */
    public function getExpand(): ?array
    {
        return $this->expand;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @param string[] $expand
     *
     * @return self
     */
    public function setExpand(?array $expand): self
    {
        $this->expand = $expand;

        return $this;
    }

    /**
     * List of subscription items, each with an attached plan.
     *
     * @return V1CustomersCustomerSubscriptionsPostBodyItemsItem[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of subscription items, each with an attached plan.
     *
     * @param V1CustomersCustomerSubscriptionsPostBodyItemsItem[] $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * A set of key-value pairs that you can attach to a `Subscription` object. It can be useful for storing additional information about the subscription in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A set of key-value pairs that you can attach to a `Subscription` object. It can be useful for storing additional information about the subscription in a structured format.
     *
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Boolean (defaults to `true`) telling us whether to [credit for unused time](https://stripe.com/docs/subscriptions/billing-cycle#prorations) when the billing cycle changes (e.g. when switching plans, resetting `billing_cycle_anchor=now`, or starting a trial), or if an item's `quantity` changes. If `false`, the anchor period will be free (similar to a trial) and no proration adjustments will be created.
     *
     * @return bool
     */
    public function getProrate(): ?bool
    {
        return $this->prorate;
    }

    /**
     * Boolean (defaults to `true`) telling us whether to [credit for unused time](https://stripe.com/docs/subscriptions/billing-cycle#prorations) when the billing cycle changes (e.g. when switching plans, resetting `billing_cycle_anchor=now`, or starting a trial), or if an item's `quantity` changes. If `false`, the anchor period will be free (similar to a trial) and no proration adjustments will be created.
     *
     * @param bool $prorate
     *
     * @return self
     */
    public function setProrate(?bool $prorate): self
    {
        $this->prorate = $prorate;

        return $this;
    }

    /**
     * A non-negative decimal (with at most four decimal places) between 0 and 100. This represents the percentage of the subscription invoice subtotal that will be calculated and added as tax to the final amount in each billing period. For example, a plan which charges $10/month with a `tax_percent` of `20.0` will charge $12 per invoice. To unset a previously-set value, pass an empty string.
     *
     * @return mixed
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

    /**
     * A non-negative decimal (with at most four decimal places) between 0 and 100. This represents the percentage of the subscription invoice subtotal that will be calculated and added as tax to the final amount in each billing period. For example, a plan which charges $10/month with a `tax_percent` of `20.0` will charge $12 per invoice. To unset a previously-set value, pass an empty string.
     *
     * @param mixed $taxPercent
     *
     * @return self
     */
    public function setTaxPercent($taxPercent): self
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }

    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time. This will always overwrite any trials that might apply via a subscribed plan. If set, trial_end will override the default trial period of the plan the customer is being subscribed to. The special value `now` can be provided to end the customer's trial immediately.
     *
     * @return string
     */
    public function getTrialEnd(): ?string
    {
        return $this->trialEnd;
    }

    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time. This will always overwrite any trials that might apply via a subscribed plan. If set, trial_end will override the default trial period of the plan the customer is being subscribed to. The special value `now` can be provided to end the customer's trial immediately.
     *
     * @param string $trialEnd
     *
     * @return self
     */
    public function setTrialEnd(?string $trialEnd): self
    {
        $this->trialEnd = $trialEnd;

        return $this;
    }

    /**
     * Indicates if a plan's `trial_period_days` should be applied to the subscription. Setting `trial_end` per subscription is preferred, and this defaults to `false`. Setting this flag to `true` together with `trial_end` is not allowed.
     *
     * @return bool
     */
    public function getTrialFromPlan(): ?bool
    {
        return $this->trialFromPlan;
    }

    /**
     * Indicates if a plan's `trial_period_days` should be applied to the subscription. Setting `trial_end` per subscription is preferred, and this defaults to `false`. Setting this flag to `true` together with `trial_end` is not allowed.
     *
     * @param bool $trialFromPlan
     *
     * @return self
     */
    public function setTrialFromPlan(?bool $trialFromPlan): self
    {
        $this->trialFromPlan = $trialFromPlan;

        return $this;
    }

    /**
     * Integer representing the number of trial period days before the customer is charged for the first time. This will always overwrite any trials that might apply via a subscribed plan.
     *
     * @return int
     */
    public function getTrialPeriodDays(): ?int
    {
        return $this->trialPeriodDays;
    }

    /**
     * Integer representing the number of trial period days before the customer is charged for the first time. This will always overwrite any trials that might apply via a subscribed plan.
     *
     * @param int $trialPeriodDays
     *
     * @return self
     */
    public function setTrialPeriodDays(?int $trialPeriodDays): self
    {
        $this->trialPeriodDays = $trialPeriodDays;

        return $this;
    }
}
