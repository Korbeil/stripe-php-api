<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1PaymentIntentsIntentCapturePostBody
{
    /**
     * The amount to capture from the PaymentIntent, which must be less than or equal to the original amount. Any additional amount will be automatically refunded. Defaults to the full `amount_capturable` if not provided.
     *
     * @var int
     */
    protected $amountToCapture;
    /**
     * The amount of the application fee (if any) that will be applied to the.
    payment and transferred to the application owner's Stripe account. For
    more information, see the PaymentIntents [Connect usage
    guide](/docs/payments/payment-intents/usage#connect).
     *
     * @var int
     */
    protected $applicationFeeAmount;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;

    /**
     * The amount to capture from the PaymentIntent, which must be less than or equal to the original amount. Any additional amount will be automatically refunded. Defaults to the full `amount_capturable` if not provided.
     *
     * @return int
     */
    public function getAmountToCapture(): ?int
    {
        return $this->amountToCapture;
    }

    /**
     * The amount to capture from the PaymentIntent, which must be less than or equal to the original amount. Any additional amount will be automatically refunded. Defaults to the full `amount_capturable` if not provided.
     *
     * @param int $amountToCapture
     *
     * @return self
     */
    public function setAmountToCapture(?int $amountToCapture): self
    {
        $this->amountToCapture = $amountToCapture;

        return $this;
    }

    /**
     * The amount of the application fee (if any) that will be applied to the.
    payment and transferred to the application owner's Stripe account. For
    more information, see the PaymentIntents [Connect usage
    guide](/docs/payments/payment-intents/usage#connect).
     *
     * @return int
     */
    public function getApplicationFeeAmount(): ?int
    {
        return $this->applicationFeeAmount;
    }

    /**
     * The amount of the application fee (if any) that will be applied to the.
    payment and transferred to the application owner's Stripe account. For
    more information, see the PaymentIntents [Connect usage
    guide](/docs/payments/payment-intents/usage#connect).
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
}