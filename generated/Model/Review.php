<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Review
{
    /**
     * The ZIP or postal code of the card used, if applicable.
     *
     * @var string
     */
    protected $billingZip;
    /**
     * The charge associated with this review.
     *
     * @var string
     */
    protected $charge;
    /**
     * The reason the review was closed, or null if it has not yet been closed. One of `approved`, `refunded`, `refunded_as_fraud`, or `disputed`.
     *
     * @var string
     */
    protected $closedReason;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * The IP address where the payment originated.
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * @var RadarReviewResourceLocation
     */
    protected $ipAddressLocation;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * If `true`, the review needs action.
     *
     * @var bool
     */
    protected $open;
    /**
     * The reason the review was opened. One of `rule` or `manual`.
     *
     * @var string
     */
    protected $openedReason;
    /**
     * The PaymentIntent ID associated with this review, if one exists.
     *
     * @var string
     */
    protected $paymentIntent;
    /**
     * The reason the review is currently open or closed. One of `rule`, `manual`, `approved`, `refunded`, `refunded_as_fraud`, or `disputed`.
     *
     * @var string
     */
    protected $reason;
    /**
     * @var RadarReviewResourceSession
     */
    protected $session;

    /**
     * The ZIP or postal code of the card used, if applicable.
     *
     * @return string
     */
    public function getBillingZip(): ?string
    {
        return $this->billingZip;
    }

    /**
     * The ZIP or postal code of the card used, if applicable.
     *
     * @param string $billingZip
     *
     * @return self
     */
    public function setBillingZip(?string $billingZip): self
    {
        $this->billingZip = $billingZip;

        return $this;
    }

    /**
     * The charge associated with this review.
     *
     * @return string
     */
    public function getCharge(): ?string
    {
        return $this->charge;
    }

    /**
     * The charge associated with this review.
     *
     * @param string $charge
     *
     * @return self
     */
    public function setCharge(?string $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * The reason the review was closed, or null if it has not yet been closed. One of `approved`, `refunded`, `refunded_as_fraud`, or `disputed`.
     *
     * @return string
     */
    public function getClosedReason(): ?string
    {
        return $this->closedReason;
    }

    /**
     * The reason the review was closed, or null if it has not yet been closed. One of `approved`, `refunded`, `refunded_as_fraud`, or `disputed`.
     *
     * @param string $closedReason
     *
     * @return self
     */
    public function setClosedReason(?string $closedReason): self
    {
        $this->closedReason = $closedReason;

        return $this;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Unique identifier for the object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier for the object.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IP address where the payment originated.
     *
     * @return string
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * The IP address where the payment originated.
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * @return RadarReviewResourceLocation
     */
    public function getIpAddressLocation(): ?RadarReviewResourceLocation
    {
        return $this->ipAddressLocation;
    }

    /**
     * @param RadarReviewResourceLocation $ipAddressLocation
     *
     * @return self
     */
    public function setIpAddressLocation(?RadarReviewResourceLocation $ipAddressLocation): self
    {
        $this->ipAddressLocation = $ipAddressLocation;

        return $this;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @return bool
     */
    public function getLivemode(): ?bool
    {
        return $this->livemode;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @param bool $livemode
     *
     * @return self
     */
    public function setLivemode(?bool $livemode): self
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @return string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    /**
     * If `true`, the review needs action.
     *
     * @return bool
     */
    public function getOpen(): ?bool
    {
        return $this->open;
    }

    /**
     * If `true`, the review needs action.
     *
     * @param bool $open
     *
     * @return self
     */
    public function setOpen(?bool $open): self
    {
        $this->open = $open;

        return $this;
    }

    /**
     * The reason the review was opened. One of `rule` or `manual`.
     *
     * @return string
     */
    public function getOpenedReason(): ?string
    {
        return $this->openedReason;
    }

    /**
     * The reason the review was opened. One of `rule` or `manual`.
     *
     * @param string $openedReason
     *
     * @return self
     */
    public function setOpenedReason(?string $openedReason): self
    {
        $this->openedReason = $openedReason;

        return $this;
    }

    /**
     * The PaymentIntent ID associated with this review, if one exists.
     *
     * @return string
     */
    public function getPaymentIntent(): ?string
    {
        return $this->paymentIntent;
    }

    /**
     * The PaymentIntent ID associated with this review, if one exists.
     *
     * @param string $paymentIntent
     *
     * @return self
     */
    public function setPaymentIntent(?string $paymentIntent): self
    {
        $this->paymentIntent = $paymentIntent;

        return $this;
    }

    /**
     * The reason the review is currently open or closed. One of `rule`, `manual`, `approved`, `refunded`, `refunded_as_fraud`, or `disputed`.
     *
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * The reason the review is currently open or closed. One of `rule`, `manual`, `approved`, `refunded`, `refunded_as_fraud`, or `disputed`.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return RadarReviewResourceSession
     */
    public function getSession(): ?RadarReviewResourceSession
    {
        return $this->session;
    }

    /**
     * @param RadarReviewResourceSession $session
     *
     * @return self
     */
    public function setSession(?RadarReviewResourceSession $session): self
    {
        $this->session = $session;

        return $this;
    }
}
