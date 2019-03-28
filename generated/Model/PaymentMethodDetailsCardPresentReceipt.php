<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentMethodDetailsCardPresentReceipt
{
    /**
     * @var string
     */
    protected $applicationCryptogram;
    /**
     * @var string
     */
    protected $applicationPreferredName;
    /**
     * @var string
     */
    protected $authorizationCode;
    /**
     * @var string
     */
    protected $authorizationResponseCode;
    /**
     * @var string
     */
    protected $cardholderVerificationMethod;
    /**
     * @var string
     */
    protected $dedicatedFileName;
    /**
     * @var string
     */
    protected $terminalVerificationResults;
    /**
     * @var string
     */
    protected $transactionStatusInformation;

    /**
     * @return string
     */
    public function getApplicationCryptogram(): ?string
    {
        return $this->applicationCryptogram;
    }

    /**
     * @param string $applicationCryptogram
     *
     * @return self
     */
    public function setApplicationCryptogram(?string $applicationCryptogram): self
    {
        $this->applicationCryptogram = $applicationCryptogram;

        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationPreferredName(): ?string
    {
        return $this->applicationPreferredName;
    }

    /**
     * @param string $applicationPreferredName
     *
     * @return self
     */
    public function setApplicationPreferredName(?string $applicationPreferredName): self
    {
        $this->applicationPreferredName = $applicationPreferredName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode(): ?string
    {
        return $this->authorizationCode;
    }

    /**
     * @param string $authorizationCode
     *
     * @return self
     */
    public function setAuthorizationCode(?string $authorizationCode): self
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationResponseCode(): ?string
    {
        return $this->authorizationResponseCode;
    }

    /**
     * @param string $authorizationResponseCode
     *
     * @return self
     */
    public function setAuthorizationResponseCode(?string $authorizationResponseCode): self
    {
        $this->authorizationResponseCode = $authorizationResponseCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardholderVerificationMethod(): ?string
    {
        return $this->cardholderVerificationMethod;
    }

    /**
     * @param string $cardholderVerificationMethod
     *
     * @return self
     */
    public function setCardholderVerificationMethod(?string $cardholderVerificationMethod): self
    {
        $this->cardholderVerificationMethod = $cardholderVerificationMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getDedicatedFileName(): ?string
    {
        return $this->dedicatedFileName;
    }

    /**
     * @param string $dedicatedFileName
     *
     * @return self
     */
    public function setDedicatedFileName(?string $dedicatedFileName): self
    {
        $this->dedicatedFileName = $dedicatedFileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalVerificationResults(): ?string
    {
        return $this->terminalVerificationResults;
    }

    /**
     * @param string $terminalVerificationResults
     *
     * @return self
     */
    public function setTerminalVerificationResults(?string $terminalVerificationResults): self
    {
        $this->terminalVerificationResults = $terminalVerificationResults;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionStatusInformation(): ?string
    {
        return $this->transactionStatusInformation;
    }

    /**
     * @param string $transactionStatusInformation
     *
     * @return self
     */
    public function setTransactionStatusInformation(?string $transactionStatusInformation): self
    {
        $this->transactionStatusInformation = $transactionStatusInformation;

        return $this;
    }
}
