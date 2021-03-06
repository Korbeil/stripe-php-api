<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountPersonsPostBodyDob
{
    /**
     * @var int
     */
    protected $day;
    /**
     * @var int
     */
    protected $month;
    /**
     * @var int
     */
    protected $year;

    /**
     * @return int
     */
    public function getDay(): ?int
    {
        return $this->day;
    }

    /**
     * @param int $day
     *
     * @return self
     */
    public function setDay(?int $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return int
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }

    /**
     * @param int $month
     *
     * @return self
     */
    public function setMonth(?int $month): self
    {
        $this->month = $month;

        return $this;
    }

    /**
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @param int $year
     *
     * @return self
     */
    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }
}
