<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1IssuingDisputesPostBodyEvidenceFraudulent
{
    /**
     * @var string
     */
    protected $disputeExplanation;
    /**
     * @var string
     */
    protected $uncategorizedFile;

    /**
     * @return string
     */
    public function getDisputeExplanation(): ?string
    {
        return $this->disputeExplanation;
    }

    /**
     * @param string $disputeExplanation
     *
     * @return self
     */
    public function setDisputeExplanation(?string $disputeExplanation): self
    {
        $this->disputeExplanation = $disputeExplanation;

        return $this;
    }

    /**
     * @return string
     */
    public function getUncategorizedFile(): ?string
    {
        return $this->uncategorizedFile;
    }

    /**
     * @param string $uncategorizedFile
     *
     * @return self
     */
    public function setUncategorizedFile(?string $uncategorizedFile): self
    {
        $this->uncategorizedFile = $uncategorizedFile;

        return $this;
    }
}