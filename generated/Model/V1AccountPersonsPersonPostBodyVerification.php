<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountPersonsPersonPostBodyVerification
{
    /**
     * @var V1AccountPersonsPersonPostBodyVerificationDocument
     */
    protected $document;

    /**
     * @return V1AccountPersonsPersonPostBodyVerificationDocument
     */
    public function getDocument(): ?V1AccountPersonsPersonPostBodyVerificationDocument
    {
        return $this->document;
    }

    /**
     * @param V1AccountPersonsPersonPostBodyVerificationDocument $document
     *
     * @return self
     */
    public function setDocument(?V1AccountPersonsPersonPostBodyVerificationDocument $document): self
    {
        $this->document = $document;

        return $this;
    }
}
