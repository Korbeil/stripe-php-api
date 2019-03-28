<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Plan
{
    /**
     * Whether the plan is currently available for new subscriptions.
     *
     * @var bool
     */
    protected $active;
    /**
     * Specifies a usage aggregation strategy for plans of `usage_type=metered`. Allowed values are `sum` for summing up all usage during a period, `last_during_period` for picking the last usage record reported within a period, `last_ever` for picking the last usage record ever (across period bounds) or `max` which picks the usage record with the maximum reported usage during a period. Defaults to `sum`.
     *
     * @var string
     */
    protected $aggregateUsage;
    /**
     * The amount in %s to be charged on the interval specified.
     *
     * @var int
     */
    protected $amount;
    /**
     * Describes how to compute the price per period. Either `per_unit` or `tiered`. `per_unit` indicates that the fixed amount (specified in `amount`) will be charged per unit in `quantity` (for plans with `usage_type=licensed`), or per unit of total usage (for plans with `usage_type=metered`). `tiered` indicates that the unit pricing will be computed using a tiering strategy as defined using the `tiers` and `tiers_mode` attributes.
     *
     * @var string
     */
    protected $billingScheme;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @var string
     */
    protected $currency;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * One of `day`, `week`, `month` or `year`. The frequency with which a subscription should be billed.
     *
     * @var string
     */
    protected $interval;
    /**
     * The number of intervals (specified in the `interval` property) between subscription billings. For example, `interval=month` and `interval_count=3` bills every 3 months.
     *
     * @var int
     */
    protected $intervalCount;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * A brief description of the plan, hidden from customers.
     *
     * @var string
     */
    protected $nickname;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * The product whose pricing this plan determines.
     *
     * @var string
     */
    protected $product;
    /**
     * Each element represents a pricing tier. This parameter requires `billing_scheme` to be set to `tiered`. See also the documentation for `billing_scheme`.
     *
     * @var PlanTier[]
     */
    protected $tiers;
    /**
     * Defines if the tiering price should be `graduated` or `volume` based. In `volume`-based tiering, the maximum quantity within a period determines the per unit price, in `graduated` tiering pricing can successively change as the quantity grows.
     *
     * @var string
     */
    protected $tiersMode;
    /**
     * @var TransformUsage
     */
    protected $transformUsage;
    /**
     * Default number of trial days when subscribing a customer to this plan using [`trial_from_plan=true`](https://stripe.com/docs/api#create_subscription-trial_from_plan).
     *
     * @var int
     */
    protected $trialPeriodDays;
    /**
     * Configures how the quantity per period should be determined, can be either `metered` or `licensed`. `licensed` will automatically bill the `quantity` set for a plan when adding it to a subscription, `metered` will aggregate the total usage based on usage records. Defaults to `licensed`.
     *
     * @var string
     */
    protected $usageType;

    /**
     * Whether the plan is currently available for new subscriptions.
     *
     * @return bool
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Whether the plan is currently available for new subscriptions.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Specifies a usage aggregation strategy for plans of `usage_type=metered`. Allowed values are `sum` for summing up all usage during a period, `last_during_period` for picking the last usage record reported within a period, `last_ever` for picking the last usage record ever (across period bounds) or `max` which picks the usage record with the maximum reported usage during a period. Defaults to `sum`.
     *
     * @return string
     */
    public function getAggregateUsage(): ?string
    {
        return $this->aggregateUsage;
    }

    /**
     * Specifies a usage aggregation strategy for plans of `usage_type=metered`. Allowed values are `sum` for summing up all usage during a period, `last_during_period` for picking the last usage record reported within a period, `last_ever` for picking the last usage record ever (across period bounds) or `max` which picks the usage record with the maximum reported usage during a period. Defaults to `sum`.
     *
     * @param string $aggregateUsage
     *
     * @return self
     */
    public function setAggregateUsage(?string $aggregateUsage): self
    {
        $this->aggregateUsage = $aggregateUsage;

        return $this;
    }

    /**
     * The amount in %s to be charged on the interval specified.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * The amount in %s to be charged on the interval specified.
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Describes how to compute the price per period. Either `per_unit` or `tiered`. `per_unit` indicates that the fixed amount (specified in `amount`) will be charged per unit in `quantity` (for plans with `usage_type=licensed`), or per unit of total usage (for plans with `usage_type=metered`). `tiered` indicates that the unit pricing will be computed using a tiering strategy as defined using the `tiers` and `tiers_mode` attributes.
     *
     * @return string
     */
    public function getBillingScheme(): ?string
    {
        return $this->billingScheme;
    }

    /**
     * Describes how to compute the price per period. Either `per_unit` or `tiered`. `per_unit` indicates that the fixed amount (specified in `amount`) will be charged per unit in `quantity` (for plans with `usage_type=licensed`), or per unit of total usage (for plans with `usage_type=metered`). `tiered` indicates that the unit pricing will be computed using a tiering strategy as defined using the `tiers` and `tiers_mode` attributes.
     *
     * @param string $billingScheme
     *
     * @return self
     */
    public function setBillingScheme(?string $billingScheme): self
    {
        $this->billingScheme = $billingScheme;

        return $this;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Unique identifier for the object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier for the object.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * One of `day`, `week`, `month` or `year`. The frequency with which a subscription should be billed.
     *
     * @return string
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    /**
     * One of `day`, `week`, `month` or `year`. The frequency with which a subscription should be billed.
     *
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
     * The number of intervals (specified in the `interval` property) between subscription billings. For example, `interval=month` and `interval_count=3` bills every 3 months.
     *
     * @return int
     */
    public function getIntervalCount(): ?int
    {
        return $this->intervalCount;
    }

    /**
     * The number of intervals (specified in the `interval` property) between subscription billings. For example, `interval=month` and `interval_count=3` bills every 3 months.
     *
     * @param int $intervalCount
     *
     * @return self
     */
    public function setIntervalCount(?int $intervalCount): self
    {
        $this->intervalCount = $intervalCount;

        return $this;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @return bool
     */
    public function getLivemode(): ?bool
    {
        return $this->livemode;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @param bool $livemode
     *
     * @return self
     */
    public function setLivemode(?bool $livemode): self
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
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
     * A brief description of the plan, hidden from customers.
     *
     * @return string
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * A brief description of the plan, hidden from customers.
     *
     * @param string $nickname
     *
     * @return self
     */
    public function setNickname(?string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @return string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    /**
     * The product whose pricing this plan determines.
     *
     * @return string
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }

    /**
     * The product whose pricing this plan determines.
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct(?string $product): self
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Each element represents a pricing tier. This parameter requires `billing_scheme` to be set to `tiered`. See also the documentation for `billing_scheme`.
     *
     * @return PlanTier[]
     */
    public function getTiers(): ?array
    {
        return $this->tiers;
    }

    /**
     * Each element represents a pricing tier. This parameter requires `billing_scheme` to be set to `tiered`. See also the documentation for `billing_scheme`.
     *
     * @param PlanTier[] $tiers
     *
     * @return self
     */
    public function setTiers(?array $tiers): self
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * Defines if the tiering price should be `graduated` or `volume` based. In `volume`-based tiering, the maximum quantity within a period determines the per unit price, in `graduated` tiering pricing can successively change as the quantity grows.
     *
     * @return string
     */
    public function getTiersMode(): ?string
    {
        return $this->tiersMode;
    }

    /**
     * Defines if the tiering price should be `graduated` or `volume` based. In `volume`-based tiering, the maximum quantity within a period determines the per unit price, in `graduated` tiering pricing can successively change as the quantity grows.
     *
     * @param string $tiersMode
     *
     * @return self
     */
    public function setTiersMode(?string $tiersMode): self
    {
        $this->tiersMode = $tiersMode;

        return $this;
    }

    /**
     * @return TransformUsage
     */
    public function getTransformUsage(): ?TransformUsage
    {
        return $this->transformUsage;
    }

    /**
     * @param TransformUsage $transformUsage
     *
     * @return self
     */
    public function setTransformUsage(?TransformUsage $transformUsage): self
    {
        $this->transformUsage = $transformUsage;

        return $this;
    }

    /**
     * Default number of trial days when subscribing a customer to this plan using [`trial_from_plan=true`](https://stripe.com/docs/api#create_subscription-trial_from_plan).
     *
     * @return int
     */
    public function getTrialPeriodDays(): ?int
    {
        return $this->trialPeriodDays;
    }

    /**
     * Default number of trial days when subscribing a customer to this plan using [`trial_from_plan=true`](https://stripe.com/docs/api#create_subscription-trial_from_plan).
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

    /**
     * Configures how the quantity per period should be determined, can be either `metered` or `licensed`. `licensed` will automatically bill the `quantity` set for a plan when adding it to a subscription, `metered` will aggregate the total usage based on usage records. Defaults to `licensed`.
     *
     * @return string
     */
    public function getUsageType(): ?string
    {
        return $this->usageType;
    }

    /**
     * Configures how the quantity per period should be determined, can be either `metered` or `licensed`. `licensed` will automatically bill the `quantity` set for a plan when adding it to a subscription, `metered` will aggregate the total usage based on usage records. Defaults to `licensed`.
     *
     * @param string $usageType
     *
     * @return self
     */
    public function setUsageType(?string $usageType): self
    {
        $this->usageType = $usageType;

        return $this;
    }
}