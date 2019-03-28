<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class Product
{
    /**
     * Whether the product is currently available for purchase.
     *
     * @var bool
     */
    protected $active;
    /**
     * A list of up to 5 attributes that each SKU can provide values for (e.g., `["color", "size"]`). Only applicable to products of `type=good`.
     *
     * @var string[]
     */
    protected $attributes;
    /**
     * A short one-line description of the product, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @var string
     */
    protected $caption;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * An array of connect application identifiers that cannot purchase this product. Only applicable to products of `type=good`.
     *
     * @var string[]
     */
    protected $deactivateOn;
    /**
     * The product's description, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @var string
     */
    protected $description;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * A list of up to 8 URLs of images for this product, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @var string[]
     */
    protected $images;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The product's name, meant to be displayable to the customer. Applicable to both `service` and `good` types.
     *
     * @var string
     */
    protected $name;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * @var PackageDimensions
     */
    protected $packageDimensions;
    /**
     * Whether this product is a shipped good. Only applicable to products of `type=good`.
     *
     * @var bool
     */
    protected $shippable;
    /**
     * Extra information about a product which will appear on your customer's credit card statement. In the case that multiple products are billed at once, the first statement descriptor will be used. Only available on products of type=`service`.
     *
     * @var string
     */
    protected $statementDescriptor;
    /**
     * The type of the product. The product is either of type `good`, which is eligible for use with Orders and SKUs, or `service`, which is eligible for use with Subscriptions and Plans.
     *
     * @var string
     */
    protected $type;
    /**
     * A label that represents units of this product, such as seat(s), in Stripe and on customers’ receipts and invoices. Only available on products of type=`service`.
     *
     * @var string
     */
    protected $unitLabel;
    /**
     * @var int
     */
    protected $updated;
    /**
     * A URL of a publicly-accessible webpage for this product. Only applicable to products of `type=good`.
     *
     * @var string
     */
    protected $url;

    /**
     * Whether the product is currently available for purchase.
     *
     * @return bool
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Whether the product is currently available for purchase.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * A list of up to 5 attributes that each SKU can provide values for (e.g., `["color", "size"]`). Only applicable to products of `type=good`.
     *
     * @return string[]
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    /**
     * A list of up to 5 attributes that each SKU can provide values for (e.g., `["color", "size"]`). Only applicable to products of `type=good`.
     *
     * @param string[] $attributes
     *
     * @return self
     */
    public function setAttributes(?array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * A short one-line description of the product, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @return string
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * A short one-line description of the product, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @param string $caption
     *
     * @return self
     */
    public function setCaption(?string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * An array of connect application identifiers that cannot purchase this product. Only applicable to products of `type=good`.
     *
     * @return string[]
     */
    public function getDeactivateOn(): ?array
    {
        return $this->deactivateOn;
    }

    /**
     * An array of connect application identifiers that cannot purchase this product. Only applicable to products of `type=good`.
     *
     * @param string[] $deactivateOn
     *
     * @return self
     */
    public function setDeactivateOn(?array $deactivateOn): self
    {
        $this->deactivateOn = $deactivateOn;

        return $this;
    }

    /**
     * The product's description, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * The product's description, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Unique identifier for the object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier for the object.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of up to 8 URLs of images for this product, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @return string[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * A list of up to 8 URLs of images for this product, meant to be displayable to the customer. Only applicable to products of `type=good`.
     *
     * @param string[] $images
     *
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @return bool
     */
    public function getLivemode(): ?bool
    {
        return $this->livemode;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @param bool $livemode
     *
     * @return self
     */
    public function setLivemode(?bool $livemode): self
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
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
     * The product's name, meant to be displayable to the customer. Applicable to both `service` and `good` types.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The product's name, meant to be displayable to the customer. Applicable to both `service` and `good` types.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

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

    /**
     * @return PackageDimensions
     */
    public function getPackageDimensions(): ?PackageDimensions
    {
        return $this->packageDimensions;
    }

    /**
     * @param PackageDimensions $packageDimensions
     *
     * @return self
     */
    public function setPackageDimensions(?PackageDimensions $packageDimensions): self
    {
        $this->packageDimensions = $packageDimensions;

        return $this;
    }

    /**
     * Whether this product is a shipped good. Only applicable to products of `type=good`.
     *
     * @return bool
     */
    public function getShippable(): ?bool
    {
        return $this->shippable;
    }

    /**
     * Whether this product is a shipped good. Only applicable to products of `type=good`.
     *
     * @param bool $shippable
     *
     * @return self
     */
    public function setShippable(?bool $shippable): self
    {
        $this->shippable = $shippable;

        return $this;
    }

    /**
     * Extra information about a product which will appear on your customer's credit card statement. In the case that multiple products are billed at once, the first statement descriptor will be used. Only available on products of type=`service`.
     *
     * @return string
     */
    public function getStatementDescriptor(): ?string
    {
        return $this->statementDescriptor;
    }

    /**
     * Extra information about a product which will appear on your customer's credit card statement. In the case that multiple products are billed at once, the first statement descriptor will be used. Only available on products of type=`service`.
     *
     * @param string $statementDescriptor
     *
     * @return self
     */
    public function setStatementDescriptor(?string $statementDescriptor): self
    {
        $this->statementDescriptor = $statementDescriptor;

        return $this;
    }

    /**
     * The type of the product. The product is either of type `good`, which is eligible for use with Orders and SKUs, or `service`, which is eligible for use with Subscriptions and Plans.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the product. The product is either of type `good`, which is eligible for use with Orders and SKUs, or `service`, which is eligible for use with Subscriptions and Plans.
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

    /**
     * A label that represents units of this product, such as seat(s), in Stripe and on customers’ receipts and invoices. Only available on products of type=`service`.
     *
     * @return string
     */
    public function getUnitLabel(): ?string
    {
        return $this->unitLabel;
    }

    /**
     * A label that represents units of this product, such as seat(s), in Stripe and on customers’ receipts and invoices. Only available on products of type=`service`.
     *
     * @param string $unitLabel
     *
     * @return self
     */
    public function setUnitLabel(?string $unitLabel): self
    {
        $this->unitLabel = $unitLabel;

        return $this;
    }

    /**
     * @return int
     */
    public function getUpdated(): ?int
    {
        return $this->updated;
    }

    /**
     * @param int $updated
     *
     * @return self
     */
    public function setUpdated(?int $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * A URL of a publicly-accessible webpage for this product. Only applicable to products of `type=good`.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * A URL of a publicly-accessible webpage for this product. Only applicable to products of `type=good`.
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