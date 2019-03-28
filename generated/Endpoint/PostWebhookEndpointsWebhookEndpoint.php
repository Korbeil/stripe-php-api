<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostWebhookEndpointsWebhookEndpoint extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $webhook_endpoint;

    /**
     * <p>Updates the webhook endpoint. You may edit the <code>url</code>, the list of <code>enabled_events</code>, and the status of your endpoint.</p>.
     *
     * @param string                                                      $webhookEndpoint the ID of the desired webhook endpoint
     * @param \Stripe\Api\Model\V1WebhookEndpointsWebhookEndpointPostBody $payload         body parameters for the request
     */
    public function __construct(string $webhookEndpoint, \Stripe\Api\Model\V1WebhookEndpointsWebhookEndpointPostBody $payload)
    {
        $this->webhookEndpoint = $webhookEndpoint;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{webhook_endpoint}'], [$this->webhook_endpoint], '/v1/webhook_endpoints/{webhook_endpoint}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \Stripe\Api\Model\WebhookEndpoint|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\WebhookEndpoint', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
