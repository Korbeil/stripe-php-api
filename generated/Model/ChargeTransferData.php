<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class ChargeTransferData
{
    /**
     * The amount transferred to the destination account, if specified. By default, the entire charge amount is transferred to the destination account.
     *
     * @var int
     */
    protected $amount;
    /**
     * ID of an existing, connected Stripe account to transfer funds to if `transfer_data` was specified in the charge request.
     *
     * @var string
     */
    protected $destination;

    /**
     * The amount transferred to the destination account, if specified. By default, the entire charge amount is transferred to the destination account.
     *
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * The amount transferred to the destination account, if specified. By default, the entire charge amount is transferred to the destination account.
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
     * ID of an existing, connected Stripe account to transfer funds to if `transfer_data` was specified in the charge request.
     *
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * ID of an existing, connected Stripe account to transfer funds to if `transfer_data` was specified in the charge request.
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
