<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1IssuingCardsPostBodyAuthorizationControls
{
    /**
     * @var string[]
     */
    protected $allowedCategories;
    /**
     * @var string[]
     */
    protected $blockedCategories;
    /**
     * @var int
     */
    protected $maxAmount;
    /**
     * @var int
     */
    protected $maxApprovals;

    /**
     * @return string[]
     */
    public function getAllowedCategories(): ?array
    {
        return $this->allowedCategories;
    }

    /**
     * @param string[] $allowedCategories
     *
     * @return self
     */
    public function setAllowedCategories(?array $allowedCategories): self
    {
        $this->allowedCategories = $allowedCategories;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getBlockedCategories(): ?array
    {
        return $this->blockedCategories;
    }

    /**
     * @param string[] $blockedCategories
     *
     * @return self
     */
    public function setBlockedCategories(?array $blockedCategories): self
    {
        $this->blockedCategories = $blockedCategories;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxAmount(): ?int
    {
        return $this->maxAmount;
    }

    /**
     * @param int $maxAmount
     *
     * @return self
     */
    public function setMaxAmount(?int $maxAmount): self
    {
        $this->maxAmount = $maxAmount;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxApprovals(): ?int
    {
        return $this->maxApprovals;
    }

    /**
     * @param int $maxApprovals
     *
     * @return self
     */
    public function setMaxApprovals(?int $maxApprovals): self
    {
        $this->maxApprovals = $maxApprovals;

        return $this;
    }
}
