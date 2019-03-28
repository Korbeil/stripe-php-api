<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class IssuingDisputeFraudulentEvidence
{
    /**
     * Brief freeform text explaining why you are disputing this transaction.
     *
     * @var string
     */
    protected $disputeExplanation;
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Additional file evidence supporting your dispute.
     *
     * @var string
     */
    protected $uncategorizedFile;

    /**
     * Brief freeform text explaining why you are disputing this transaction.
     *
     * @return string
     */
    public function getDisputeExplanation(): ?string
    {
        return $this->disputeExplanation;
    }

    /**
     * Brief freeform text explaining why you are disputing this transaction.
     *
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
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Additional file evidence supporting your dispute.
     *
     * @return string
     */
    public function getUncategorizedFile(): ?string
    {
        return $this->uncategorizedFile;
    }

    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Additional file evidence supporting your dispute.
     *
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
