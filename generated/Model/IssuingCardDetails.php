<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class IssuingCardDetails
{
    /**
     * @var IssuingCard
     */
    protected $card;
    /**
     * The CVC number for the card.
     *
     * @var string
     */
    protected $cvc;
    /**
     * The expiration month of the card.
     *
     * @var int
     */
    protected $expMonth;
    /**
     * The expiration year of the card.
     *
     * @var int
     */
    protected $expYear;
    /**
     * The card number.
     *
     * @var string
     */
    protected $number;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;

    /**
     * @return IssuingCard
     */
    public function getCard(): ?IssuingCard
    {
        return $this->card;
    }

    /**
     * @param IssuingCard $card
     *
     * @return self
     */
    public function setCard(?IssuingCard $card): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * The CVC number for the card.
     *
     * @return string
     */
    public function getCvc(): ?string
    {
        return $this->cvc;
    }

    /**
     * The CVC number for the card.
     *
     * @param string $cvc
     *
     * @return self
     */
    public function setCvc(?string $cvc): self
    {
        $this->cvc = $cvc;

        return $this;
    }

    /**
     * The expiration month of the card.
     *
     * @return int
     */
    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    /**
     * The expiration month of the card.
     *
     * @param int $expMonth
     *
     * @return self
     */
    public function setExpMonth(?int $expMonth): self
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    /**
     * The expiration year of the card.
     *
     * @return int
     */
    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    /**
     * The expiration year of the card.
     *
     * @param int $expYear
     *
     * @return self
     */
    public function setExpYear(?int $expYear): self
    {
        $this->expYear = $expYear;

        return $this;
    }

    /**
     * The card number.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * The card number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @return string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }
}