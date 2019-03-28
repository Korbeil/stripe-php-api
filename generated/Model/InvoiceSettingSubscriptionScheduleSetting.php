<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class InvoiceSettingSubscriptionScheduleSetting
{
    /**
     * Number of days within which a customer must pay invoices generated by this subscription schedule. This value will be `null` for subscription schedules where `billing=charge_automatically`.
     *
     * @var int
     */
    protected $daysUntilDue;

    /**
     * Number of days within which a customer must pay invoices generated by this subscription schedule. This value will be `null` for subscription schedules where `billing=charge_automatically`.
     *
     * @return int
     */
    public function getDaysUntilDue(): ?int
    {
        return $this->daysUntilDue;
    }

    /**
     * Number of days within which a customer must pay invoices generated by this subscription schedule. This value will be `null` for subscription schedules where `billing=charge_automatically`.
     *
     * @param int $daysUntilDue
     *
     * @return self
     */
    public function setDaysUntilDue(?int $daysUntilDue): self
    {
        $this->daysUntilDue = $daysUntilDue;

        return $this;
    }
}