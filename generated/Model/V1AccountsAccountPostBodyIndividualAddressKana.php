<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountPostBodyIndividualAddressKana
{
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $line1;
    /**
     * @var string
     */
    protected $line2;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $town;

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getLine1(): ?string
    {
        return $this->line1;
    }

    /**
     * @param string $line1
     *
     * @return self
     */
    public function setLine1(?string $line1): self
    {
        $this->line1 = $line1;

        return $this;
    }

    /**
     * @return string
     */
    public function getLine2(): ?string
    {
        return $this->line2;
    }

    /**
     * @param string $line2
     *
     * @return self
     */
    public function setLine2(?string $line2): self
    {
        $this->line2 = $line2;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getTown(): ?string
    {
        return $this->town;
    }

    /**
     * @param string $town
     *
     * @return self
     */
    public function setTown(?string $town): self
    {
        $this->town = $town;

        return $this;
    }
}
