<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountPersonsPersonPostBodyVerification
{
    /**
     * @var V1AccountsAccountPersonsPersonPostBodyVerificationDocument
     */
    protected $document;

    /**
     * @return V1AccountsAccountPersonsPersonPostBodyVerificationDocument
     */
    public function getDocument(): ?V1AccountsAccountPersonsPersonPostBodyVerificationDocument
    {
        return $this->document;
    }

    /**
     * @param V1AccountsAccountPersonsPersonPostBodyVerificationDocument $document
     *
     * @return self
     */
    public function setDocument(?V1AccountsAccountPersonsPersonPostBodyVerificationDocument $document): self
    {
        $this->document = $document;

        return $this;
    }
}
