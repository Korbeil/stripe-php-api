<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1TokensPostBodyAccountIndividualVerification
{
    /**
     * @var V1TokensPostBodyAccountIndividualVerificationDocument
     */
    protected $document;

    /**
     * @return V1TokensPostBodyAccountIndividualVerificationDocument
     */
    public function getDocument(): ?V1TokensPostBodyAccountIndividualVerificationDocument
    {
        return $this->document;
    }

    /**
     * @param V1TokensPostBodyAccountIndividualVerificationDocument $document
     *
     * @return self
     */
    public function setDocument(?V1TokensPostBodyAccountIndividualVerificationDocument $document): self
    {
        $this->document = $document;

        return $this;
    }
}
