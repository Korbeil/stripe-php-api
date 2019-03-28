<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentMethodDetailsEps
{
    /**
     * Owner's verified full name. Values are verified or provided by EPS directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @var string
     */
    protected $verifiedName;

    /**
     * Owner's verified full name. Values are verified or provided by EPS directly.
    (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     *
     * @return string
     */
    public function getVerifiedName(): ?string
    {
        return $this->verifiedName;
    }

    /**
     * Owner's verified full name. Values are verified or provided by EPS directly.
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
