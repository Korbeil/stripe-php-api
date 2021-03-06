<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountPeoplePersonPostBodyVerification
{
    /**
     * @var V1AccountsAccountPeoplePersonPostBodyVerificationDocument
     */
    protected $document;

    /**
     * @return V1AccountsAccountPeoplePersonPostBodyVerificationDocument
     */
    public function getDocument(): ?V1AccountsAccountPeoplePersonPostBodyVerificationDocument
    {
        return $this->document;
    }

    /**
     * @param V1AccountsAccountPeoplePersonPostBodyVerificationDocument $document
     *
     * @return self
     */
    public function setDocument(?V1AccountsAccountPeoplePersonPostBodyVerificationDocument $document): self
    {
        $this->document = $document;

        return $this;
    }
}
