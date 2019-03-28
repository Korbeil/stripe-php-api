<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostDisputesDisputeClose extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $dispute;

    /**
     * <p>Closing the dispute for a charge indicates that you do not have any evidence to submit and are essentially dismissing the dispute, acknowledging it as lost.</p>.

    <p>The status of the dispute will change from <code>needs_response</code> to <code>lost</code>. <em>Closing a dispute is irreversible</em>.</p>
     *
     * @param string                                           $dispute ID of the dispute to close
     * @param \Stripe\Api\Model\V1DisputesDisputeClosePostBody $payload body parameters for the request
     */
    public function __construct(string $dispute, \Stripe\Api\Model\V1DisputesDisputeClosePostBody $payload)
    {
        $this->dispute = $dispute;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{dispute}'], [$this->dispute], '/v1/disputes/{dispute}/close');
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
     * @return \Stripe\Api\Model\Dispute|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Dispute', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
