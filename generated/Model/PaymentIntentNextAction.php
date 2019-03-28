<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PaymentIntentNextAction
{
    /**
     * @var PaymentIntentNextActionRedirectToUrl
     */
    protected $redirectToUrl;
    /**
     * Type of the next action to perform, one of `redirect_to_url` or `use_stripe_sdk`.
     *
     * @var string
     */
    protected $type;
    /**
     * When confirming a PaymentIntent with Stripe.js, Stripe.js depends on the contents of this dictionary to invoke authentication flows. The shape of the contents is subject to change and is only intended to be used by Stripe.js.
     *
     * @var mixed
     */
    protected $useStripeSdk;

    /**
     * @return PaymentIntentNextActionRedirectToUrl
     */
    public function getRedirectToUrl(): ?PaymentIntentNextActionRedirectToUrl
    {
        return $this->redirectToUrl;
    }

    /**
     * @param PaymentIntentNextActionRedirectToUrl $redirectToUrl
     *
     * @return self
     */
    public function setRedirectToUrl(?PaymentIntentNextActionRedirectToUrl $redirectToUrl): self
    {
        $this->redirectToUrl = $redirectToUrl;

        return $this;
    }

    /**
     * Type of the next action to perform, one of `redirect_to_url` or `use_stripe_sdk`.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the next action to perform, one of `redirect_to_url` or `use_stripe_sdk`.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * When confirming a PaymentIntent with Stripe.js, Stripe.js depends on the contents of this dictionary to invoke authentication flows. The shape of the contents is subject to change and is only intended to be used by Stripe.js.
     *
     * @return mixed
     */
    public function getUseStripeSdk()
    {
        return $this->useStripeSdk;
    }

    /**
     * When confirming a PaymentIntent with Stripe.js, Stripe.js depends on the contents of this dictionary to invoke authentication flows. The shape of the contents is subject to change and is only intended to be used by Stripe.js.
     *
     * @param mixed $useStripeSdk
     *
     * @return self
     */
    public function setUseStripeSdk($useStripeSdk): self
    {
        $this->useStripeSdk = $useStripeSdk;

        return $this;
    }
}
