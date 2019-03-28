<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostChargesChargeRefund extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $charge;

    /**
     * <p>When you create a new refund, you must specify a charge on which to create it.</p>.

    <p>Creating a new refund will refund a charge that has previously been created but not yet refunded.
    Funds will be refunded to the credit or debit card that was originally charged.</p>

    <p>You can optionally refund only part of a charge.
    You can do so multiple times, until the entire charge has been refunded.</p>

    <p>Once entirely refunded, a charge can’t be refunded again.
    This method will raise an error when called on an already-refunded charge,
    or when trying to refund more money than is left on a charge.</p>
     *
     * @param string                                          $charge
     * @param \Stripe\Api\Model\V1ChargesChargeRefundPostBody $payload body parameters for the request
     */
    public function __construct(string $charge, \Stripe\Api\Model\V1ChargesChargeRefundPostBody $payload)
    {
        $this->charge = $charge;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{charge}'], [$this->charge], '/v1/charges/{charge}/refund');
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
     * @return \Stripe\Api\Model\Charge|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Charge', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}