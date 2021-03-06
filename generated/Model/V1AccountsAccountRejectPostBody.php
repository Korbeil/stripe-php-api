<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountRejectPostBody
{
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * The reason for rejecting the account. Can be `fraud`, `terms_of_service`, or `other`.
     *
     * @var string
     */
    protected $reason;

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @return string[]
     */
    public function getExpand(): ?array
    {
        return $this->expand;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @param string[] $expand
     *
     * @return self
     */
    public function setExpand(?array $expand): self
    {
        $this->expand = $expand;

        return $this;
    }

    /**
     * The reason for rejecting the account. Can be `fraud`, `terms_of_service`, or `other`.
     *
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * The reason for rejecting the account. Can be `fraud`, `terms_of_service`, or `other`.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }
}
