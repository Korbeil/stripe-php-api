<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1PlansPostBodyTransformUsage
{
    /**
     * @var int
     */
    protected $divideBy;
    /**
     * @var string
     */
    protected $round;

    /**
     * @return int
     */
    public function getDivideBy(): ?int
    {
        return $this->divideBy;
    }

    /**
     * @param int $divideBy
     *
     * @return self
     */
    public function setDivideBy(?int $divideBy): self
    {
        $this->divideBy = $divideBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getRound(): ?string
    {
        return $this->round;
    }

    /**
     * @param string $round
     *
     * @return self
     */
    public function setRound(?string $round): self
    {
        $this->round = $round;

        return $this;
    }
}
