<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountPostBodyIndividualVerification
{
    /**
     * @var V1AccountsAccountPostBodyIndividualVerificationDocument
     */
    protected $document;

    /**
     * @return V1AccountsAccountPostBodyIndividualVerificationDocument
     */
    public function getDocument(): ?V1AccountsAccountPostBodyIndividualVerificationDocument
    {
        return $this->document;
    }

    /**
     * @param V1AccountsAccountPostBodyIndividualVerificationDocument $document
     *
     * @return self
     */
    public function setDocument(?V1AccountsAccountPostBodyIndividualVerificationDocument $document): self
    {
        $this->document = $document;

        return $this;
    }
}
