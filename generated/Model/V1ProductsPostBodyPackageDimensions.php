<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1ProductsPostBodyPackageDimensions
{
    /**
     * @var float
     */
    protected $height;
    /**
     * @var float
     */
    protected $length;
    /**
     * @var float
     */
    protected $weight;
    /**
     * @var float
     */
    protected $width;

    /**
     * @return float
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * @param float $height
     *
     * @return self
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return float
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * @param float $length
     *
     * @return self
     */
    public function setLength(?float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return float
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * @param float $width
     *
     * @return self
     */
    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
