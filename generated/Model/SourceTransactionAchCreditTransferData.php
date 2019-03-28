<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SourceTransactionAchCreditTransferData
{
    /**
     * Customer data associated with the transfer.
     *
     * @var string
     */
    protected $customerData;
    /**
     * Bank account fingerprint associated with the transfer.
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * Last 4 digits of the account number associated with the transfer.
     *
     * @var string
     */
    protected $last4;
    /**
     * Routing number associated with the transfer.
     *
     * @var string
     */
    protected $routingNumber;

    /**
     * Customer data associated with the transfer.
     *
     * @return string
     */
    public function getCustomerData(): ?string
    {
        return $this->customerData;
    }

    /**
     * Customer data associated with the transfer.
     *
     * @param string $customerData
     *
     * @return self
     */
    public function setCustomerData(?string $customerData): self
    {
        $this->customerData = $customerData;

        return $this;
    }

    /**
     * Bank account fingerprint associated with the transfer.
     *
     * @return string
     */
    public function getFingerprint(): ?string
    {
        return $this->fingerprint;
    }

    /**
     * Bank account fingerprint associated with the transfer.
     *
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(?string $fingerprint): self
    {
        $this->fingerprint = $fingerprint;

        return $this;
    }

    /**
     * Last 4 digits of the account number associated with the transfer.
     *
     * @return string
     */
    public function getLast4(): ?string
    {
        return $this->last4;
    }

    /**
     * Last 4 digits of the account number associated with the transfer.
     *
     * @param string $last4
     *
     * @return self
     */
    public function setLast4(?string $last4): self
    {
        $this->last4 = $last4;

        return $this;
    }

    /**
     * Routing number associated with the transfer.
     *
     * @return string
     */
    public function getRoutingNumber(): ?string
    {
        return $this->routingNumber;
    }

    /**
     * Routing number associated with the transfer.
     *
     * @param string $routingNumber
     *
     * @return self
     */
    public function setRoutingNumber(?string $routingNumber): self
    {
        $this->routingNumber = $routingNumber;

        return $this;
    }
}