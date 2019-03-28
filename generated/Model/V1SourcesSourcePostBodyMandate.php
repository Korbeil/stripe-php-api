<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SourcesSourcePostBodyMandate
{
    /**
     * @var V1SourcesSourcePostBodyMandateAcceptance
     */
    protected $acceptance;
    /**
     * @var mixed
     */
    protected $amount;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var string
     */
    protected $interval;
    /**
     * @var string
     */
    protected $notificationMethod;

    /**
     * @return V1SourcesSourcePostBodyMandateAcceptance
     */
    public function getAcceptance(): ?V1SourcesSourcePostBodyMandateAcceptance
    {
        return $this->acceptance;
    }

    /**
     * @param V1SourcesSourcePostBodyMandateAcceptance $acceptance
     *
     * @return self
     */
    public function setAcceptance(?V1SourcesSourcePostBodyMandateAcceptance $acceptance): self
    {
        $this->acceptance = $acceptance;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     *
     * @return self
     */
    public function setAmount($amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     *
     * @return self
     */
    public function setInterval(?string $interval): self
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationMethod(): ?string
    {
        return $this->notificationMethod;
    }

    /**
     * @param string $notificationMethod
     *
     * @return self
     */
    public function setNotificationMethod(?string $notificationMethod): self
    {
        $this->notificationMethod = $notificationMethod;

        return $this;
    }
}