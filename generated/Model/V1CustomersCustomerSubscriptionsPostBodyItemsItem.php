<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1CustomersCustomerSubscriptionsPostBodyItemsItem
{
    /**
     * @var mixed
     */
    protected $billingThresholds;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * @var string
     */
    protected $plan;
    /**
     * @var int
     */
    protected $quantity;

    /**
     * @return mixed
     */
    public function getBillingThresholds()
    {
        return $this->billingThresholds;
    }

    /**
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
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
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
     * @return string
     */
    public function getPlan(): ?string
    {
        return $this->plan;
    }

    /**
     * @param string $plan
     *
     * @return self
     */
    public function setPlan(?string $plan): self
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
