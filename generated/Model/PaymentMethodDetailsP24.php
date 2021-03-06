<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentMethodDetailsP24
{
    /**
     * Unique reference for this Przelewy24 payment.
     *
     * @var string
     */
    protected $reference;
    /**
     * Owner's verified full name. Values are verified or provided by Przelewy24 directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @var string
     */
    protected $verifiedName;

    /**
     * Unique reference for this Przelewy24 payment.
     *
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Unique reference for this Przelewy24 payment.
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
     * Owner's verified full name. Values are verified or provided by Przelewy24 directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @return string
     */
    public function getVerifiedName(): ?string
    {
        return $this->verifiedName;
    }

    /**
     * Owner's verified full name. Values are verified or provided by Przelewy24 directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @param string $verifiedName
     *
     * @return self
     */
    public function setVerifiedName(?string $verifiedName): self
    {
        $this->verifiedName = $verifiedName;

        return $this;
    }
}
