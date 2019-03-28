<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class InvoiceLineItemPeriod
{
    /**
     * End of the line item's billing period.
     *
     * @var int
     */
    protected $end;
    /**
     * Start of the line item's billing period.
     *
     * @var int
     */
    protected $start;

    /**
     * End of the line item's billing period.
     *
     * @return int
     */
    public function getEnd(): ?int
    {
        return $this->end;
    }

    /**
     * End of the line item's billing period.
     *
     * @param int $end
     *
     * @return self
     */
    public function setEnd(?int $end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Start of the line item's billing period.
     *
     * @return int
     */
    public function getStart(): ?int
    {
        return $this->start;
    }

    /**
     * Start of the line item's billing period.
     *
     * @param int $start
     *
     * @return self
     */
    public function setStart(?int $start): self
    {
        $this->start = $start;

        return $this;
    }
}