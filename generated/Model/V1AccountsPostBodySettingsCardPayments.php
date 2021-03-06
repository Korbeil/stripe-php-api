<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsPostBodySettingsCardPayments
{
    /**
     * @var V1AccountsPostBodySettingsCardPaymentsDeclineOn
     */
    protected $declineOn;
    /**
     * @var string
     */
    protected $statementDescriptorPrefix;

    /**
     * @return V1AccountsPostBodySettingsCardPaymentsDeclineOn
     */
    public function getDeclineOn(): ?V1AccountsPostBodySettingsCardPaymentsDeclineOn
    {
        return $this->declineOn;
    }

    /**
     * @param V1AccountsPostBodySettingsCardPaymentsDeclineOn $declineOn
     *
     * @return self
     */
    public function setDeclineOn(?V1AccountsPostBodySettingsCardPaymentsDeclineOn $declineOn): self
    {
        $this->declineOn = $declineOn;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatementDescriptorPrefix(): ?string
    {
        return $this->statementDescriptorPrefix;
    }

    /**
     * @param string $statementDescriptorPrefix
     *
     * @return self
     */
    public function setStatementDescriptorPrefix(?string $statementDescriptorPrefix): self
    {
        $this->statementDescriptorPrefix = $statementDescriptorPrefix;

        return $this;
    }
}
