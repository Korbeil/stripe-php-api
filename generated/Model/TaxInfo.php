<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class TaxInfo
{
    /**
     * The customer's tax ID number.
     *
     * @var string
     */
    protected $taxId;
    /**
     * The type of ID number.
     *
     * @var string
     */
    protected $type;

    /**
     * The customer's tax ID number.
     *
     * @return string
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    /**
     * The customer's tax ID number.
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(?string $taxId): self
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * The type of ID number.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of ID number.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}