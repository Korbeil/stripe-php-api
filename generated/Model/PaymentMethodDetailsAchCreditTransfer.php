<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentMethodDetailsAchCreditTransfer
{
    /**
     * Account number to transfer funds to.
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * Name of the bank associated with the routing number.
     *
     * @var string
     */
    protected $bankName;
    /**
     * Routing transit number for the bank account to transfer funds to.
     *
     * @var string
     */
    protected $routingNumber;
    /**
     * SWIFT code of the bank associated with the routing number.
     *
     * @var string
     */
    protected $swiftCode;

    /**
     * Account number to transfer funds to.
     *
     * @return string
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Account number to transfer funds to.
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Name of the bank associated with the routing number.
     *
     * @return string
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Name of the bank associated with the routing number.
     *
     * @param string $bankName
     *
     * @return self
     */
    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Routing transit number for the bank account to transfer funds to.
     *
     * @return string
     */
    public function getRoutingNumber(): ?string
    {
        return $this->routingNumber;
    }

    /**
     * Routing transit number for the bank account to transfer funds to.
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

    /**
     * SWIFT code of the bank associated with the routing number.
     *
     * @return string
     */
    public function getSwiftCode(): ?string
    {
        return $this->swiftCode;
    }

    /**
     * SWIFT code of the bank associated with the routing number.
     *
     * @param string $swiftCode
     *
     * @return self
     */
    public function setSwiftCode(?string $swiftCode): self
    {
        $this->swiftCode = $swiftCode;

        return $this;
    }
}