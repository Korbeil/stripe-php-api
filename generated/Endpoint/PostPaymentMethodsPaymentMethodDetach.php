<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostPaymentMethodsPaymentMethodDetach extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $payment_method;

    /**
     * <p>Detaches a PaymentMethod object from a Customer.</p>.
     *
     * @param string                                                        $paymentMethod
     * @param \Stripe\Api\Model\V1PaymentMethodsPaymentMethodDetachPostBody $payload       body parameters for the request
     */
    public function __construct(string $paymentMethod, \Stripe\Api\Model\V1PaymentMethodsPaymentMethodDetachPostBody $payload)
    {
        $this->paymentMethod = $paymentMethod;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{payment_method}'], [$this->payment_method], '/v1/payment_methods/{payment_method}/detach');
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
     * @return \Stripe\Api\Model\PaymentMethod|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\PaymentMethod', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
