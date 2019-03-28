<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1EventsGetResponse200
{
    /**
     * @var Event[]
     */
    protected $data;
    /**
     * True if this list has another page of items after this one that can be fetched.
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * String representing the object's type. Objects of the same type share the same value. Always has the value `list`.
     *
     * @var string
     */
    protected $object;
    /**
     * The URL where this list can be accessed.
     *
     * @var string
     */
    protected $url;

    /**
     * @return Event[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param Event[] $data
     *
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * True if this list has another page of items after this one that can be fetched.
     *
     * @return bool
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * True if this list has another page of items after this one that can be fetched.
     *
     * @param bool $hasMore
     *
     * @return self
     */
    public function setHasMore(?bool $hasMore): self
    {
        $this->hasMore = $hasMore;

        return $this;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value. Always has the value `list`.
     *
     * @return string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value. Always has the value `list`.
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

    /**
     * The URL where this list can be accessed.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * The URL where this list can be accessed.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
