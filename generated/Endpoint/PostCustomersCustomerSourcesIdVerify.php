<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostCustomersCustomerSourcesIdVerify extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customer;
    protected $id;

    /**
     * <p>Verify a specified bank account for a given customer.</p>.
     *
     * @param string                                                       $customer
     * @param string                                                       $id       the ID of the source to be verified
     * @param \Stripe\Api\Model\V1CustomersCustomerSourcesIdVerifyPostBody $payload  body parameters for the request
     */
    public function __construct(string $customer, string $id, \Stripe\Api\Model\V1CustomersCustomerSourcesIdVerifyPostBody $payload)
    {
        $this->customer = $customer;
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
        return str_replace(['{customer}', '{id}'], [$this->customer, $this->id], '/v1/customers/{customer}/sources/{id}/verify');
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
     * @return \Stripe\Api\Model\BankAccount|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\BankAccount', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
