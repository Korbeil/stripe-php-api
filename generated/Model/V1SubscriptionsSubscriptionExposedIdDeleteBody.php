<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SubscriptionsSubscriptionExposedIdDeleteBody
{
    /**
     * Will generate a final invoice that invoices for any un-invoiced metered usage and new/pending proration invoice items.
     *
     * @var bool
     */
    protected $invoiceNow;
    /**
     * Will generate a proration invoice item that credits remaining unused time until the subscription period end.
     *
     * @var bool
     */
    protected $prorate;

    /**
     * Will generate a final invoice that invoices for any un-invoiced metered usage and new/pending proration invoice items.
     *
     * @return bool
     */
    public function getInvoiceNow(): ?bool
    {
        return $this->invoiceNow;
    }

    /**
     * Will generate a final invoice that invoices for any un-invoiced metered usage and new/pending proration invoice items.
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
     * Will generate a proration invoice item that credits remaining unused time until the subscription period end.
     *
     * @return bool
     */
    public function getProrate(): ?bool
    {
        return $this->prorate;
    }

    /**
     * Will generate a proration invoice item that credits remaining unused time until the subscription period end.
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