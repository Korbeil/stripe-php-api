<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1ChargesChargePostBody
{
    /**
     * The ID of an existing customer that will be associated with this request. This field may only be updated if there is no existing associated customer with this charge.
     *
     * @var string
     */
    protected $customer;
    /**
     * An arbitrary string which you can attach to a charge object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
     *
     * @var string
     */
    protected $description;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * A set of key-value pairs you can attach to a charge giving information about its riskiness. If you believe a charge is fraudulent, include a `user_report` key with a value of `fraudulent`. If you believe a charge is safe, include a `user_report` key with a value of `safe`. Note that you must refund a charge before setting the `user_report` to `fraudulent`. Stripe will use the information you send to improve our fraud detection algorithms.
     *
     * @var V1ChargesChargePostBodyFraudDetails
     */
    protected $fraudDetails;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * This is the email address that the receipt for this charge will be sent to. If this field is updated, then a new email receipt will be sent to the updated address.
     *
     * @var string
     */
    protected $receiptEmail;
    /**
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     *
     * @var V1ChargesChargePostBodyShipping
     */
    protected $shipping;
    /**
     * A string that identifies this transaction as part of a group. `transfer_group` may only be provided if it has not been set. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers#grouping-transactions) for details.
     *
     * @var string
     */
    protected $transferGroup;

    /**
     * The ID of an existing customer that will be associated with this request. This field may only be updated if there is no existing associated customer with this charge.
     *
     * @return string
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * The ID of an existing customer that will be associated with this request. This field may only be updated if there is no existing associated customer with this charge.
     *
     * @param string $customer
     *
     * @return self
     */
    public function setCustomer(?string $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * An arbitrary string which you can attach to a charge object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * An arbitrary string which you can attach to a charge object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
     *
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
     * A set of key-value pairs you can attach to a charge giving information about its riskiness. If you believe a charge is fraudulent, include a `user_report` key with a value of `fraudulent`. If you believe a charge is safe, include a `user_report` key with a value of `safe`. Note that you must refund a charge before setting the `user_report` to `fraudulent`. Stripe will use the information you send to improve our fraud detection algorithms.
     *
     * @return V1ChargesChargePostBodyFraudDetails
     */
    public function getFraudDetails(): ?V1ChargesChargePostBodyFraudDetails
    {
        return $this->fraudDetails;
    }

    /**
     * A set of key-value pairs you can attach to a charge giving information about its riskiness. If you believe a charge is fraudulent, include a `user_report` key with a value of `fraudulent`. If you believe a charge is safe, include a `user_report` key with a value of `safe`. Note that you must refund a charge before setting the `user_report` to `fraudulent`. Stripe will use the information you send to improve our fraud detection algorithms.
     *
     * @param V1ChargesChargePostBodyFraudDetails $fraudDetails
     *
     * @return self
     */
    public function setFraudDetails(?V1ChargesChargePostBodyFraudDetails $fraudDetails): self
    {
        $this->fraudDetails = $fraudDetails;

        return $this;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
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
     * This is the email address that the receipt for this charge will be sent to. If this field is updated, then a new email receipt will be sent to the updated address.
     *
     * @return string
     */
    public function getReceiptEmail(): ?string
    {
        return $this->receiptEmail;
    }

    /**
     * This is the email address that the receipt for this charge will be sent to. If this field is updated, then a new email receipt will be sent to the updated address.
     *
     * @param string $receiptEmail
     *
     * @return self
     */
    public function setReceiptEmail(?string $receiptEmail): self
    {
        $this->receiptEmail = $receiptEmail;

        return $this;
    }

    /**
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     *
     * @return V1ChargesChargePostBodyShipping
     */
    public function getShipping(): ?V1ChargesChargePostBodyShipping
    {
        return $this->shipping;
    }

    /**
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     *
     * @param V1ChargesChargePostBodyShipping $shipping
     *
     * @return self
     */
    public function setShipping(?V1ChargesChargePostBodyShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * A string that identifies this transaction as part of a group. `transfer_group` may only be provided if it has not been set. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers#grouping-transactions) for details.
     *
     * @return string
     */
    public function getTransferGroup(): ?string
    {
        return $this->transferGroup;
    }

    /**
     * A string that identifies this transaction as part of a group. `transfer_group` may only be provided if it has not been set. See the [Connect documentation](https://stripe.com/docs/connect/charges-transfers#grouping-transactions) for details.
     *
     * @param string $transferGroup
     *
     * @return self
     */
    public function setTransferGroup(?string $transferGroup): self
    {
        $this->transferGroup = $transferGroup;

        return $this;
    }
}
