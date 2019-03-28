<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentMethodCard
{
    /**
     * Card brand. Can be `amex`, `diners`, `discover`, `jcb`, `mastercard`, `unionpay`, `visa`, or `unknown`.
     *
     * @var string
     */
    protected $brand;
    /**
     * @var PaymentMethodCardChecks
     */
    protected $checks;
    /**
     * Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you've collected.
     *
     * @var string
     */
    protected $country;
    /**
     * Two-digit number representing the card's expiration month.
     *
     * @var int
     */
    protected $expMonth;
    /**
     * Four-digit number representing the card's expiration year.
     *
     * @var int
     */
    protected $expYear;
    /**
     * Uniquely identifies this particular card number. You can use this attribute to check whether two customers who've signed up with you are using the same card number, for example.
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * Card funding type. Can be `credit`, `debit`, `prepaid`, or `unknown`.
     *
     * @var string
     */
    protected $funding;
    /**
     * The last four digits of the card.
     *
     * @var string
     */
    protected $last4;
    /**
     * @var ThreeDSecureUsage
     */
    protected $threeDSecureUsage;
    /**
     * @var PaymentMethodCardWallet
     */
    protected $wallet;

    /**
     * Card brand. Can be `amex`, `diners`, `discover`, `jcb`, `mastercard`, `unionpay`, `visa`, or `unknown`.
     *
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Card brand. Can be `amex`, `diners`, `discover`, `jcb`, `mastercard`, `unionpay`, `visa`, or `unknown`.
     *
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
     * @return PaymentMethodCardChecks
     */
    public function getChecks(): ?PaymentMethodCardChecks
    {
        return $this->checks;
    }

    /**
     * @param PaymentMethodCardChecks $checks
     *
     * @return self
     */
    public function setChecks(?PaymentMethodCardChecks $checks): self
    {
        $this->checks = $checks;

        return $this;
    }

    /**
     * Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you've collected.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you've collected.
     *
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
     * Two-digit number representing the card's expiration month.
     *
     * @return int
     */
    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    /**
     * Two-digit number representing the card's expiration month.
     *
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
     * Four-digit number representing the card's expiration year.
     *
     * @return int
     */
    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    /**
     * Four-digit number representing the card's expiration year.
     *
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
     * Uniquely identifies this particular card number. You can use this attribute to check whether two customers who've signed up with you are using the same card number, for example.
     *
     * @return string
     */
    public function getFingerprint(): ?string
    {
        return $this->fingerprint;
    }

    /**
     * Uniquely identifies this particular card number. You can use this attribute to check whether two customers who've signed up with you are using the same card number, for example.
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
     * Card funding type. Can be `credit`, `debit`, `prepaid`, or `unknown`.
     *
     * @return string
     */
    public function getFunding(): ?string
    {
        return $this->funding;
    }

    /**
     * Card funding type. Can be `credit`, `debit`, `prepaid`, or `unknown`.
     *
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
     * The last four digits of the card.
     *
     * @return string
     */
    public function getLast4(): ?string
    {
        return $this->last4;
    }

    /**
     * The last four digits of the card.
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
     * @return ThreeDSecureUsage
     */
    public function getThreeDSecureUsage(): ?ThreeDSecureUsage
    {
        return $this->threeDSecureUsage;
    }

    /**
     * @param ThreeDSecureUsage $threeDSecureUsage
     *
     * @return self
     */
    public function setThreeDSecureUsage(?ThreeDSecureUsage $threeDSecureUsage): self
    {
        $this->threeDSecureUsage = $threeDSecureUsage;

        return $this;
    }

    /**
     * @return PaymentMethodCardWallet
     */
    public function getWallet(): ?PaymentMethodCardWallet
    {
        return $this->wallet;
    }

    /**
     * @param PaymentMethodCardWallet $wallet
     *
     * @return self
     */
    public function setWallet(?PaymentMethodCardWallet $wallet): self
    {
        $this->wallet = $wallet;

        return $this;
    }
}