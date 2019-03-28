<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostRecipientsId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;

    /**
     * <p>Updates the specified recipient by setting the values of the parameters passed.
    Any parameters not provided will be left unchanged.</p>

    <p>If you update the name or tax ID, the identity verification will automatically be rerun.
    If you update the bank account, the bank account validation will automatically be rerun.</p>
     *
     * @param string                                   $id
     * @param \Stripe\Api\Model\V1RecipientsIdPostBody $payload body parameters for the request
     */
    public function __construct(string $id, \Stripe\Api\Model\V1RecipientsIdPostBody $payload)
    {
        $this->id = $id;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v1/recipients/{id}');
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
     * @return \Stripe\Api\Model\Recipient|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Recipient', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}