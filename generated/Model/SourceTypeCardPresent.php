<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class SourceTypeCardPresent
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
    protected $brand;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $cvmType;
    /**
     * @var string
     */
    protected $dataType;
    /**
     * @var string
     */
    protected $dedicatedFileName;
    /**
     * @var string
     */
    protected $emvAuthData;
    /**
     * @var string
     */
    protected $evidenceCustomerSignature;
    /**
     * @var string
     */
    protected $evidenceTransactionCertificate;
    /**
     * @var int
     */
    protected $expMonth;
    /**
     * @var int
     */
    protected $expYear;
    /**
     * @var string
     */
    protected $fingerprint;
    /**
     * @var string
     */
    protected $funding;
    /**
     * @var string
     */
    protected $last4;
    /**
     * @var string
     */
    protected $posDeviceId;
    /**
     * @var string
     */
    protected $posEntryMode;
    /**
     * @var string
     */
    protected $readMethod;
    /**
     * @var string
     */
    protected $reader;
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
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     *
     * @return self
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCvmType(): ?string
    {
        return $this->cvmType;
    }

    /**
     * @param string $cvmType
     *
     * @return self
     */
    public function setCvmType(?string $cvmType): self
    {
        $this->cvmType = $cvmType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    /**
     * @param string $dataType
     *
     * @return self
     */
    public function setDataType(?string $dataType): self
    {
        $this->dataType = $dataType;

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
    public function getEmvAuthData(): ?string
    {
        return $this->emvAuthData;
    }

    /**
     * @param string $emvAuthData
     *
     * @return self
     */
    public function setEmvAuthData(?string $emvAuthData): self
    {
        $this->emvAuthData = $emvAuthData;

        return $this;
    }

    /**
     * @return string
     */
    public function getEvidenceCustomerSignature(): ?string
    {
        return $this->evidenceCustomerSignature;
    }

    /**
     * @param string $evidenceCustomerSignature
     *
     * @return self
     */
    public function setEvidenceCustomerSignature(?string $evidenceCustomerSignature): self
    {
        $this->evidenceCustomerSignature = $evidenceCustomerSignature;

        return $this;
    }

    /**
     * @return string
     */
    public function getEvidenceTransactionCertificate(): ?string
    {
        return $this->evidenceTransactionCertificate;
    }

    /**
     * @param string $evidenceTransactionCertificate
     *
     * @return self
     */
    public function setEvidenceTransactionCertificate(?string $evidenceTransactionCertificate): self
    {
        $this->evidenceTransactionCertificate = $evidenceTransactionCertificate;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    /**
     * @param int $expMonth
     *
     * @return self
     */
    public function setExpMonth(?int $expMonth): self
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    /**
     * @param int $expYear
     *
     * @return self
     */
    public function setExpYear(?int $expYear): self
    {
        $this->expYear = $expYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getFingerprint(): ?string
    {
        return $this->fingerprint;
    }

    /**
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
     * @return string
     */
    public function getFunding(): ?string
    {
        return $this->funding;
    }

    /**
     * @param string $funding
     *
     * @return self
     */
    public function setFunding(?string $funding): self
    {
        $this->funding = $funding;

        return $this;
    }

    /**
     * @return string
     */
    public function getLast4(): ?string
    {
        return $this->last4;
    }

    /**
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
     * @return string
     */
    public function getPosDeviceId(): ?string
    {
        return $this->posDeviceId;
    }

    /**
     * @param string $posDeviceId
     *
     * @return self
     */
    public function setPosDeviceId(?string $posDeviceId): self
    {
        $this->posDeviceId = $posDeviceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPosEntryMode(): ?string
    {
        return $this->posEntryMode;
    }

    /**
     * @param string $posEntryMode
     *
     * @return self
     */
    public function setPosEntryMode(?string $posEntryMode): self
    {
        $this->posEntryMode = $posEntryMode;

        return $this;
    }

    /**
     * @return string
     */
    public function getReadMethod(): ?string
    {
        return $this->readMethod;
    }

    /**
     * @param string $readMethod
     *
     * @return self
     */
    public function setReadMethod(?string $readMethod): self
    {
        $this->readMethod = $readMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getReader(): ?string
    {
        return $this->reader;
    }

    /**
     * @param string $reader
     *
     * @return self
     */
    public function setReader(?string $reader): self
    {
        $this->reader = $reader;

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
