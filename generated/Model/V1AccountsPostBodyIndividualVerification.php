<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsPostBodyIndividualVerification
{
    /**
     * @var V1AccountsPostBodyIndividualVerificationDocument
     */
    protected $document;

    /**
     * @return V1AccountsPostBodyIndividualVerificationDocument
     */
    public function getDocument(): ?V1AccountsPostBodyIndividualVerificationDocument
    {
        return $this->document;
    }

    /**
     * @param V1AccountsPostBodyIndividualVerificationDocument $document
     *
     * @return self
     */
    public function setDocument(?V1AccountsPostBodyIndividualVerificationDocument $document): self
    {
        $this->document = $document;

        return $this;
    }
}
