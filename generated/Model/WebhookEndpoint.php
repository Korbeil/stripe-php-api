<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class WebhookEndpoint
{
    /**
     * The API version events are rendered as for this webhook endpoint.
     *
     * @var string
     */
    protected $apiVersion;
    /**
     * The ID of the associated Connect application.
     *
     * @var string
     */
    protected $application;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * The list of events to enable for this endpoint. You may specify `['*']` to enable all events.
     *
     * @var string[]
     */
    protected $enabledEvents;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * The endpoint's secret, used to generate [webhook signatures](https://stripe.com/docs/webhooks/signatures). Only returned at creation.
     *
     * @var string
     */
    protected $secret;
    /**
     * The status of the webhook. It can be `enabled` or `disabled`.
     *
     * @var string
     */
    protected $status;
    /**
     * The URL of the webhook endpoint.
     *
     * @var string
     */
    protected $url;

    /**
     * The API version events are rendered as for this webhook endpoint.
     *
     * @return string
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * The API version events are rendered as for this webhook endpoint.
     *
     * @param string $apiVersion
     *
     * @return self
     */
    public function setApiVersion(?string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * The ID of the associated Connect application.
     *
     * @return string
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }

    /**
     * The ID of the associated Connect application.
     *
     * @param string $application
     *
     * @return self
     */
    public function setApplication(?string $application): self
    {
        $this->application = $application;

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
     * The list of events to enable for this endpoint. You may specify `['*']` to enable all events.
     *
     * @return string[]
     */
    public function getEnabledEvents(): ?array
    {
        return $this->enabledEvents;
    }

    /**
     * The list of events to enable for this endpoint. You may specify `['*']` to enable all events.
     *
     * @param string[] $enabledEvents
     *
     * @return self
     */
    public function setEnabledEvents(?array $enabledEvents): self
    {
        $this->enabledEvents = $enabledEvents;

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
     * The endpoint's secret, used to generate [webhook signatures](https://stripe.com/docs/webhooks/signatures). Only returned at creation.
     *
     * @return string
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
     * The endpoint's secret, used to generate [webhook signatures](https://stripe.com/docs/webhooks/signatures). Only returned at creation.
     *
     * @param string $secret
     *
     * @return self
     */
    public function setSecret(?string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * The status of the webhook. It can be `enabled` or `disabled`.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The status of the webhook. It can be `enabled` or `disabled`.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * The URL of the webhook endpoint.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * The URL of the webhook endpoint.
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
