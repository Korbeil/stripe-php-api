<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SourceTransactionSepaCreditTransferData
{
    /**
     * Reference associated with the transfer.
     *
     * @var string
     */
    protected $reference;
    /**
     * Sender's bank account IBAN.
     *
     * @var string
     */
    protected $senderIban;
    /**
     * Sender's name.
     *
     * @var string
     */
    protected $senderName;

    /**
     * Reference associated with the transfer.
     *
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Reference associated with the transfer.
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Sender's bank account IBAN.
     *
     * @return string
     */
    public function getSenderIban(): ?string
    {
        return $this->senderIban;
    }

    /**
     * Sender's bank account IBAN.
     *
     * @param string $senderIban
     *
     * @return self
     */
    public function setSenderIban(?string $senderIban): self
    {
        $this->senderIban = $senderIban;

        return $this;
    }

    /**
     * Sender's name.
     *
     * @return string
     */
    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    /**
     * Sender's name.
     *
     * @param string $senderName
     *
     * @return self
     */
    public function setSenderName(?string $senderName): self
    {
        $this->senderName = $senderName;

        return $this;
    }
}
