<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1InvoicesInvoicePostBody
{
    /**
     * A fee in %s that will be applied to the invoice and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the Stripe-Account header in order to take an application fee. For more information, see the application fees [documentation](https://stripe.com/docs/connect/subscriptions#invoices).
     *
     * @var int
     */
    protected $applicationFeeAmount;
    /**
     * Controls whether Stripe will perform [automatic collection](https://stripe.com/docs/billing/invoices/workflow/#auto_advance) of the invoice.
     *
     * @var bool
     */
    protected $autoAdvance;
    /**
     * A list of up to 4 custom fields to be displayed on the invoice. If a value for `custom_fields` is specified, the list specified will replace the existing custom field list on this invoice.
     *
     * @var mixed
     */
    protected $customFields;
    /**
     * The number of days from which the invoice is created until it is due. Only valid for invoices where `billing=send_invoice`. This field can only be updated on `draft` invoices.
     *
     * @var int
     */
    protected $daysUntilDue;
    /**
     * ID of the default payment source for the invoice. It must belong to the customer associated with the invoice and be in a chargeable state. If not set, defaults to the subscription's default source, if any, or to the customer's default source.
     *
     * @var string
     */
    protected $defaultSource;
    /**
     * @var string
     */
    protected $description;
    /**
     * The date on which payment for this invoice is due. Only valid for invoices where `billing=send_invoice`. This field can only be updated on `draft` invoices.
     *
     * @var int
     */
    protected $dueDate;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * Footer to be displayed on the invoice.
     *
     * @var string
     */
    protected $footer;
    /**
     * @var mixed
     */
    protected $metadata;
    /**
     * Extra information about a charge for the customer's credit card statement. It must contain at least one letter. If not specified and this invoice is part of a subscription, the default `statement_descriptor` will be set to the first subscription item's product's `statement_descriptor`.
     *
     * @var string
     */
    protected $statementDescriptor;
    /**
     * The percent tax rate applied to the invoice, represented as a non-negative decimal number (with at most four decimal places) between 0 and 100. To unset a previously-set value, pass an empty string. This field can be updated only on `draft` invoices.
     *
     * @var mixed
     */
    protected $taxPercent;

    /**
     * A fee in %s that will be applied to the invoice and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the Stripe-Account header in order to take an application fee. For more information, see the application fees [documentation](https://stripe.com/docs/connect/subscriptions#invoices).
     *
     * @return int
     */
    public function getApplicationFeeAmount(): ?int
    {
        return $this->applicationFeeAmount;
    }

    /**
     * A fee in %s that will be applied to the invoice and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the Stripe-Account header in order to take an application fee. For more information, see the application fees [documentation](https://stripe.com/docs/connect/subscriptions#invoices).
     *
     * @param int $applicationFeeAmount
     *
     * @return self
     */
    public function setApplicationFeeAmount(?int $applicationFeeAmount): self
    {
        $this->applicationFeeAmount = $applicationFeeAmount;

        return $this;
    }

    /**
     * Controls whether Stripe will perform [automatic collection](https://stripe.com/docs/billing/invoices/workflow/#auto_advance) of the invoice.
     *
     * @return bool
     */
    public function getAutoAdvance(): ?bool
    {
        return $this->autoAdvance;
    }

    /**
     * Controls whether Stripe will perform [automatic collection](https://stripe.com/docs/billing/invoices/workflow/#auto_advance) of the invoice.
     *
     * @param bool $autoAdvance
     *
     * @return self
     */
    public function setAutoAdvance(?bool $autoAdvance): self
    {
        $this->autoAdvance = $autoAdvance;

        return $this;
    }

    /**
     * A list of up to 4 custom fields to be displayed on the invoice. If a value for `custom_fields` is specified, the list specified will replace the existing custom field list on this invoice.
     *
     * @return mixed
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * A list of up to 4 custom fields to be displayed on the invoice. If a value for `custom_fields` is specified, the list specified will replace the existing custom field list on this invoice.
     *
     * @param mixed $customFields
     *
     * @return self
     */
    public function setCustomFields($customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * The number of days from which the invoice is created until it is due. Only valid for invoices where `billing=send_invoice`. This field can only be updated on `draft` invoices.
     *
     * @return int
     */
    public function getDaysUntilDue(): ?int
    {
        return $this->daysUntilDue;
    }

    /**
     * The number of days from which the invoice is created until it is due. Only valid for invoices where `billing=send_invoice`. This field can only be updated on `draft` invoices.
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

    /**
     * ID of the default payment source for the invoice. It must belong to the customer associated with the invoice and be in a chargeable state. If not set, defaults to the subscription's default source, if any, or to the customer's default source.
     *
     * @return string
     */
    public function getDefaultSource(): ?string
    {
        return $this->defaultSource;
    }

    /**
     * ID of the default payment source for the invoice. It must belong to the customer associated with the invoice and be in a chargeable state. If not set, defaults to the subscription's default source, if any, or to the customer's default source.
     *
     * @param string $defaultSource
     *
     * @return self
     */
    public function setDefaultSource(?string $defaultSource): self
    {
        $this->defaultSource = $defaultSource;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The date on which payment for this invoice is due. Only valid for invoices where `billing=send_invoice`. This field can only be updated on `draft` invoices.
     *
     * @return int
     */
    public function getDueDate(): ?int
    {
        return $this->dueDate;
    }

    /**
     * The date on which payment for this invoice is due. Only valid for invoices where `billing=send_invoice`. This field can only be updated on `draft` invoices.
     *
     * @param int $dueDate
     *
     * @return self
     */
    public function setDueDate(?int $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

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
     * Footer to be displayed on the invoice.
     *
     * @return string
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }

    /**
     * Footer to be displayed on the invoice.
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

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Extra information about a charge for the customer's credit card statement. It must contain at least one letter. If not specified and this invoice is part of a subscription, the default `statement_descriptor` will be set to the first subscription item's product's `statement_descriptor`.
     *
     * @return string
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * Extra information about a charge for the customer's credit card statement. It must contain at least one letter. If not specified and this invoice is part of a subscription, the default `statement_descriptor` will be set to the first subscription item's product's `statement_descriptor`.
     *
     * @param string $statementDescriptor
     *
     * @return self
     */
    public function setStatementDescriptor(?string $statementDescriptor): self
    {
        $this->statementDescriptor = $statementDescriptor;

        return $this;
    }

    /**
     * The percent tax rate applied to the invoice, represented as a non-negative decimal number (with at most four decimal places) between 0 and 100. To unset a previously-set value, pass an empty string. This field can be updated only on `draft` invoices.
     *
     * @return mixed
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

    /**
     * The percent tax rate applied to the invoice, represented as a non-negative decimal number (with at most four decimal places) between 0 and 100. To unset a previously-set value, pass an empty string. This field can be updated only on `draft` invoices.
     *
     * @param mixed $taxPercent
     *
     * @return self
     */
    public function setTaxPercent($taxPercent): self
    {
        $this->taxPercent = $taxPercent;

        return $this;
    }
}
