<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1CheckoutSessionsPostBodySubscriptionDataItemsItem
{
    /**
     * @var string
     */
    protected $plan;
    /**
     * @var int
     */
    protected $quantity;

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
