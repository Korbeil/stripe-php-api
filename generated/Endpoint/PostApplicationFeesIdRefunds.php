<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostApplicationFeesIdRefunds extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;

    /**
     * <p>Refunds an application fee that has previously been collected but not yet refunded.
    Funds will be refunded to the Stripe account from which the fee was originally collected.</p>

    <p>You can optionally refund only part of an application fee.
    You can do so multiple times, until the entire fee has been refunded.</p>

    <p>Once entirely refunded, an application fee can’t be refunded again.
    This method will raise an error when called on an already-refunded application fee,
    or when trying to refund more money than is left on an application fee.</p>
     *
     * @param string                                               $id      the identifier of the application fee to be refunded
     * @param \Stripe\Api\Model\V1ApplicationFeesIdRefundsPostBody $payload body parameters for the request
     */
    public function __construct(string $id, \Stripe\Api\Model\V1ApplicationFeesIdRefundsPostBody $payload)
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
        return str_replace(['{id}'], [$this->id], '/v1/application_fees/{id}/refunds');
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
     * @return \Stripe\Api\Model\FeeRefund|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\FeeRefund', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}