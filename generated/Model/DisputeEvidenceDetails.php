<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class DisputeEvidenceDetails
{
    /**
     * Date by which evidence must be submitted in order to successfully challenge dispute. Will be null if the customer's bank or credit card company doesn't allow a response for this particular dispute.
     *
     * @var int
     */
    protected $dueBy;
    /**
     * Whether evidence has been staged for this dispute.
     *
     * @var bool
     */
    protected $hasEvidence;
    /**
     * Whether the last evidence submission was submitted past the due date. Defaults to `false` if no evidence submissions have occurred. If `true`, then delivery of the latest evidence is *not* guaranteed.
     *
     * @var bool
     */
    protected $pastDue;
    /**
     * The number of times evidence has been submitted. Typically, you may only submit evidence once.
     *
     * @var int
     */
    protected $submissionCount;

    /**
     * Date by which evidence must be submitted in order to successfully challenge dispute. Will be null if the customer's bank or credit card company doesn't allow a response for this particular dispute.
     *
     * @return int
     */
    public function getDueBy(): ?int
    {
        return $this->dueBy;
    }

    /**
     * Date by which evidence must be submitted in order to successfully challenge dispute. Will be null if the customer's bank or credit card company doesn't allow a response for this particular dispute.
     *
     * @param int $dueBy
     *
     * @return self
     */
    public function setDueBy(?int $dueBy): self
    {
        $this->dueBy = $dueBy;

        return $this;
    }

    /**
     * Whether evidence has been staged for this dispute.
     *
     * @return bool
     */
    public function getHasEvidence(): ?bool
    {
        return $this->hasEvidence;
    }

    /**
     * Whether evidence has been staged for this dispute.
     *
     * @param bool $hasEvidence
     *
     * @return self
     */
    public function setHasEvidence(?bool $hasEvidence): self
    {
        $this->hasEvidence = $hasEvidence;

        return $this;
    }

    /**
     * Whether the last evidence submission was submitted past the due date. Defaults to `false` if no evidence submissions have occurred. If `true`, then delivery of the latest evidence is *not* guaranteed.
     *
     * @return bool
     */
    public function getPastDue(): ?bool
    {
        return $this->pastDue;
    }

    /**
     * Whether the last evidence submission was submitted past the due date. Defaults to `false` if no evidence submissions have occurred. If `true`, then delivery of the latest evidence is *not* guaranteed.
     *
     * @param bool $pastDue
     *
     * @return self
     */
    public function setPastDue(?bool $pastDue): self
    {
        $this->pastDue = $pastDue;

        return $this;
    }

    /**
     * The number of times evidence has been submitted. Typically, you may only submit evidence once.
     *
     * @return int
     */
    public function getSubmissionCount(): ?int
    {
        return $this->submissionCount;
    }

    /**
     * The number of times evidence has been submitted. Typically, you may only submit evidence once.
     *
     * @param int $submissionCount
     *
     * @return self
     */
    public function setSubmissionCount(?int $submissionCount): self
    {
        $this->submissionCount = $submissionCount;

        return $this;
    }
}
