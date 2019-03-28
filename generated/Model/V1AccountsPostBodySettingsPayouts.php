<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsPostBodySettingsPayouts
{
    /**
     * @var bool
     */
    protected $debitNegativeBalances;
    /**
     * @var V1AccountsPostBodySettingsPayoutsSchedule
     */
    protected $schedule;
    /**
     * @var string
     */
    protected $statementDescriptor;

    /**
     * @return bool
     */
    public function getDebitNegativeBalances(): ?bool
    {
        return $this->debitNegativeBalances;
    }

    /**
     * @param bool $debitNegativeBalances
     *
     * @return self
     */
    public function setDebitNegativeBalances(?bool $debitNegativeBalances): self
    {
        $this->debitNegativeBalances = $debitNegativeBalances;

        return $this;
    }

    /**
     * @return V1AccountsPostBodySettingsPayoutsSchedule
     */
    public function getSchedule(): ?V1AccountsPostBodySettingsPayoutsSchedule
    {
        return $this->schedule;
    }

    /**
     * @param V1AccountsPostBodySettingsPayoutsSchedule $schedule
     *
     * @return self
     */
    public function setSchedule(?V1AccountsPostBodySettingsPayoutsSchedule $schedule): self
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * @param string $statementDescriptor
     *
     * @return self
     */
    public function setStatementDescriptor(?string $statementDescriptor): self
    {
        $this->statementDescriptor = $statementDescriptor;

        return $this;
    }
}