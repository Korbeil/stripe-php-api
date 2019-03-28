<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class GetIssuingCardsCardDetails extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $card;

    /**
     * <p>For virtual cards only. Retrieves an Issuing <code>Card_details</code> object that contains <a href="/docs/issuing/cards/management#virtual-card-info">the sensitive details</a> of a virtual card.</p>.
     *
     * @param string $card            the identifier of the virtual card to be retrieved
     * @param array  $queryParameters {
     *
     *     @var array $expand Specifies which fields in the response should be expanded.
     * }
     */
    public function __construct(string $card, array $queryParameters = [])
    {
        $this->card = $card;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{card}'], [$this->card], '/v1/issuing/cards/{card}/details');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['expand']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('expand', ['array']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \Stripe\Api\Model\IssuingCardDetails|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\IssuingCardDetails', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
