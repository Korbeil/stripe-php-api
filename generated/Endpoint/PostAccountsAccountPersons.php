<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostAccountsAccountPersons extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $account;

    /**
     * <p>Creates a new person.</p>.
     *
     * @param string                                             $account
     * @param \Stripe\Api\Model\V1AccountsAccountPersonsPostBody $payload body parameters for the request
     */
    public function __construct(string $account, \Stripe\Api\Model\V1AccountsAccountPersonsPostBody $payload)
    {
        $this->account = $account;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{account}'], [$this->account], '/v1/accounts/{account}/persons');
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
     * @return \Stripe\Api\Model\Person|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Person', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
