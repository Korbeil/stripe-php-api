<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1SourcesSourceVerifyPostBody
{
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * The values needed to verify the source.
     *
     * @var string[]
     */
    protected $values;

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @return string[]
     */
    public function getExpand(): ?array
    {
        return $this->expand;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @param string[] $expand
     *
     * @return self
     */
    public function setExpand(?array $expand): self
    {
        $this->expand = $expand;

        return $this;
    }

    /**
     * The values needed to verify the source.
     *
     * @return string[]
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * The values needed to verify the source.
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->values = $values;

        return $this;
    }
}
