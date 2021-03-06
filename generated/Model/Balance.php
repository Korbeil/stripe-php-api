<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Balance
{
    /**
     * Funds that are available to be transferred or paid out, whether automatically by Stripe or explicitly via the [Transfers API](#transfers) or [Payouts API](#payouts). The available balance for each currency and payment type can be found in the `source_types` property.
     *
     * @var BalanceAmount[]
     */
    protected $available;
    /**
     * Funds held due to negative balances on connected Custom accounts. The connect reserve balance for each currency and payment type can be found in the `source_types` property.
     *
     * @var BalanceAmount[]
     */
    protected $connectReserved;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * Funds that are not yet available in the balance, due to the 7-day rolling pay cycle. The pending balance for each currency, and for each payment type, can be found in the `source_types` property.
     *
     * @var BalanceAmount[]
     */
    protected $pending;

    /**
     * Funds that are available to be transferred or paid out, whether automatically by Stripe or explicitly via the [Transfers API](#transfers) or [Payouts API](#payouts). The available balance for each currency and payment type can be found in the `source_types` property.
     *
     * @return BalanceAmount[]
     */
    public function getAvailable(): ?array
    {
        return $this->available;
    }

    /**
     * Funds that are available to be transferred or paid out, whether automatically by Stripe or explicitly via the [Transfers API](#transfers) or [Payouts API](#payouts). The available balance for each currency and payment type can be found in the `source_types` property.
     *
     * @param BalanceAmount[] $available
     *
     * @return self
     */
    public function setAvailable(?array $available): self
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Funds held due to negative balances on connected Custom accounts. The connect reserve balance for each currency and payment type can be found in the `source_types` property.
     *
     * @return BalanceAmount[]
     */
    public function getConnectReserved(): ?array
    {
        return $this->connectReserved;
    }

    /**
     * Funds held due to negative balances on connected Custom accounts. The connect reserve balance for each currency and payment type can be found in the `source_types` property.
     *
     * @param BalanceAmount[] $connectReserved
     *
     * @return self
     */
    public function setConnectReserved(?array $connectReserved): self
    {
        $this->connectReserved = $connectReserved;

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
     * Funds that are not yet available in the balance, due to the 7-day rolling pay cycle. The pending balance for each currency, and for each payment type, can be found in the `source_types` property.
     *
     * @return BalanceAmount[]
     */
    public function getPending(): ?array
    {
        return $this->pending;
    }

    /**
     * Funds that are not yet available in the balance, due to the 7-day rolling pay cycle. The pending balance for each currency, and for each payment type, can be found in the `source_types` property.
     *
     * @param BalanceAmount[] $pending
     *
     * @return self
     */
    public function setPending(?array $pending): self
    {
        $this->pending = $pending;

        return $this;
    }
}
