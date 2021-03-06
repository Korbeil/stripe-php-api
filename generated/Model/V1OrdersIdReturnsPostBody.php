<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1OrdersIdReturnsPostBody
{
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * List of items to return.
     *
     * @var mixed
     */
    protected $items;

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
     * List of items to return.
     *
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * List of items to return.
     *
     * @param mixed $items
     *
     * @return self
     */
    public function setItems($items): self
    {
        $this->items = $items;

        return $this;
    }
}
