<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class InvoiceSettingCustomerSetting
{
    /**
     * Default custom fields to be displayed on invoices for this customer.
     *
     * @var InvoiceSettingCustomField[]
     */
    protected $customFields;
    /**
     * Default footer to be displayed on invoices for this customer.
     *
     * @var string
     */
    protected $footer;

    /**
     * Default custom fields to be displayed on invoices for this customer.
     *
     * @return InvoiceSettingCustomField[]
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Default custom fields to be displayed on invoices for this customer.
     *
     * @param InvoiceSettingCustomField[] $customFields
     *
     * @return self
     */
    public function setCustomFields(?array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * Default footer to be displayed on invoices for this customer.
     *
     * @return string
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }

    /**
     * Default footer to be displayed on invoices for this customer.
     *
     * @param string $footer
     *
     * @return self
     */
    public function setFooter(?string $footer): self
    {
        $this->footer = $footer;

        return $this;
    }
}
