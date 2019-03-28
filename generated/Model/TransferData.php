<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class TransferData
{
    /**
     * The account (if any) the payment will be attributed to for tax.
    reporting, and where funds from the payment will be transferred to upon
    payment success.
     *
     * @var string
     */
    protected $destination;

    /**
     * The account (if any) the payment will be attributed to for tax.
    reporting, and where funds from the payment will be transferred to upon
    payment success.
     *
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * The account (if any) the payment will be attributed to for tax.
    reporting, and where funds from the payment will be transferred to upon
    payment success.
     *
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }
}
