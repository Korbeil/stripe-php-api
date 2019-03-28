<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SourceTransactionPaperCheckData
{
    /**
     * String unix time for the available date.
     *
     * @var string
     */
    protected $availableAt;
    /**
     * Invoice ID associated with the paper check.
     *
     * @var string
     */
    protected $invoices;

    /**
     * String unix time for the available date.
     *
     * @return string
     */
    public function getAvailableAt(): ?string
    {
        return $this->availableAt;
    }

    /**
     * String unix time for the available date.
     *
     * @param string $availableAt
     *
     * @return self
     */
    public function setAvailableAt(?string $availableAt): self
    {
        $this->availableAt = $availableAt;

        return $this;
    }

    /**
     * Invoice ID associated with the paper check.
     *
     * @return string
     */
    public function getInvoices(): ?string
    {
        return $this->invoices;
    }

    /**
     * Invoice ID associated with the paper check.
     *
     * @param string $invoices
     *
     * @return self
     */
    public function setInvoices(?string $invoices): self
    {
        $this->invoices = $invoices;

        return $this;
    }
}
