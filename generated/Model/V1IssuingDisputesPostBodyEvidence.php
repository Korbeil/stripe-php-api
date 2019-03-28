<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1IssuingDisputesPostBodyEvidence
{
    /**
     * @var V1IssuingDisputesPostBodyEvidenceFraudulent
     */
    protected $fraudulent;
    /**
     * @var V1IssuingDisputesPostBodyEvidenceOther
     */
    protected $other;

    /**
     * @return V1IssuingDisputesPostBodyEvidenceFraudulent
     */
    public function getFraudulent(): ?V1IssuingDisputesPostBodyEvidenceFraudulent
    {
        return $this->fraudulent;
    }

    /**
     * @param V1IssuingDisputesPostBodyEvidenceFraudulent $fraudulent
     *
     * @return self
     */
    public function setFraudulent(?V1IssuingDisputesPostBodyEvidenceFraudulent $fraudulent): self
    {
        $this->fraudulent = $fraudulent;

        return $this;
    }

    /**
     * @return V1IssuingDisputesPostBodyEvidenceOther
     */
    public function getOther(): ?V1IssuingDisputesPostBodyEvidenceOther
    {
        return $this->other;
    }

    /**
     * @param V1IssuingDisputesPostBodyEvidenceOther $other
     *
     * @return self
     */
    public function setOther(?V1IssuingDisputesPostBodyEvidenceOther $other): self
    {
        $this->other = $other;

        return $this;
    }
}
