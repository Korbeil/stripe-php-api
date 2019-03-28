<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SubscriptionSchedulesScheduleCancelPostBody
{
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * If the subscription schedule is `active`, indicates whether or not to generate a final invoice that contains any un-invoiced metered usage and new/pending proration invoice items. Defaults to `true`.
     *
     * @var bool
     */
    protected $invoiceNow;
    /**
     * If the subscription schedule is `active`, indicates if the cancellation should be prorated. Defaults to `true`.
     *
     * @var bool
     */
    protected $prorate;

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
     * If the subscription schedule is `active`, indicates whether or not to generate a final invoice that contains any un-invoiced metered usage and new/pending proration invoice items. Defaults to `true`.
     *
     * @return bool
     */
    public function getInvoiceNow(): ?bool
    {
        return $this->invoiceNow;
    }

    /**
     * If the subscription schedule is `active`, indicates whether or not to generate a final invoice that contains any un-invoiced metered usage and new/pending proration invoice items. Defaults to `true`.
     *
     * @param bool $invoiceNow
     *
     * @return self
     */
    public function setInvoiceNow(?bool $invoiceNow): self
    {
        $this->invoiceNow = $invoiceNow;

        return $this;
    }

    /**
     * If the subscription schedule is `active`, indicates if the cancellation should be prorated. Defaults to `true`.
     *
     * @return bool
     */
    public function getProrate(): ?bool
    {
        return $this->prorate;
    }

    /**
     * If the subscription schedule is `active`, indicates if the cancellation should be prorated. Defaults to `true`.
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
}