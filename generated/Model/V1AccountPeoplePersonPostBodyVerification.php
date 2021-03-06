<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountPeoplePersonPostBodyVerification
{
    /**
     * @var V1AccountPeoplePersonPostBodyVerificationDocument
     */
    protected $document;

    /**
     * @return V1AccountPeoplePersonPostBodyVerificationDocument
     */
    public function getDocument(): ?V1AccountPeoplePersonPostBodyVerificationDocument
    {
        return $this->document;
    }

    /**
     * @param V1AccountPeoplePersonPostBodyVerificationDocument $document
     *
     * @return self
     */
    public function setDocument(?V1AccountPeoplePersonPostBodyVerificationDocument $document): self
    {
        $this->document = $document;

        return $this;
    }
}
