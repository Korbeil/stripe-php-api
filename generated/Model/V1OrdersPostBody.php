<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1OrdersPostBody
{
    /**
     * A coupon code that represents a discount to be applied to this order. Must be one-time duration and in same currency as the order.
     *
     * @var string
     */
    protected $coupon;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @var string
     */
    protected $currency;
    /**
     * The ID of an existing customer to use for this order. If provided, the customer email and shipping address will be used to create the order. Subsequently, the customer will also be charged to pay the order. If `email` or `shipping` are also provided, they will override the values retrieved from the customer object.
     *
     * @var string
     */
    protected $customer;
    /**
     * The email address of the customer placing the order.
     *
     * @var string
     */
    protected $email;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * List of items constituting the order. An order can have up to 25 items.
     *
     * @var V1OrdersPostBodyItemsItem[]
     */
    protected $items;
    /**
     * A set of key-value pairs that you can attach to an order object. Limited to 500 characters. Metadata can be useful for storing additional information about the order in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * Shipping address for the order. Required if any of the SKUs are for products that have `shippable` set to true.
     *
     * @var V1OrdersPostBodyShipping
     */
    protected $shipping;

    /**
     * A coupon code that represents a discount to be applied to this order. Must be one-time duration and in same currency as the order.
     *
     * @return string
     */
    public function getCoupon(): ?string
    {
        return $this->coupon;
    }

    /**
     * A coupon code that represents a discount to be applied to this order. Must be one-time duration and in same currency as the order.
     *
     * @param string $coupon
     *
     * @return self
     */
    public function setCoupon(?string $coupon): self
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * The ID of an existing customer to use for this order. If provided, the customer email and shipping address will be used to create the order. Subsequently, the customer will also be charged to pay the order. If `email` or `shipping` are also provided, they will override the values retrieved from the customer object.
     *
     * @return string
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * The ID of an existing customer to use for this order. If provided, the customer email and shipping address will be used to create the order. Subsequently, the customer will also be charged to pay the order. If `email` or `shipping` are also provided, they will override the values retrieved from the customer object.
     *
     * @param string $customer
     *
     * @return self
     */
    public function setCustomer(?string $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * The email address of the customer placing the order.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The email address of the customer placing the order.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

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
     * List of items constituting the order. An order can have up to 25 items.
     *
     * @return V1OrdersPostBodyItemsItem[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * List of items constituting the order. An order can have up to 25 items.
     *
     * @param V1OrdersPostBodyItemsItem[] $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * A set of key-value pairs that you can attach to an order object. Limited to 500 characters. Metadata can be useful for storing additional information about the order in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * A set of key-value pairs that you can attach to an order object. Limited to 500 characters. Metadata can be useful for storing additional information about the order in a structured format.
     *
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Shipping address for the order. Required if any of the SKUs are for products that have `shippable` set to true.
     *
     * @return V1OrdersPostBodyShipping
     */
    public function getShipping(): ?V1OrdersPostBodyShipping
    {
        return $this->shipping;
    }

    /**
     * Shipping address for the order. Required if any of the SKUs are for products that have `shippable` set to true.
     *
     * @param V1OrdersPostBodyShipping $shipping
     *
     * @return self
     */
    public function setShipping(?V1OrdersPostBodyShipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }
}
