<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class GetIssuingCardsCardPin extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $card;

    /**
     * <p>Retrieves the PIN for a card object, subject to cardholder verification, see <a href="/docs/issuing/pin_management">Retrieve and update cardholder PIN</a></p>.
     *
     * @param string $card            The id of the `Card` that the PIN belongs to
     * @param array  $queryParameters {
     *
     *     @var array $expand specifies which fields in the response should be expanded
     *     @var string $verification The id of the `Verification` that was sent and the code entered by the cardholder
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
        return str_replace(['{card}'], [$this->card], '/v1/issuing/cards/{card}/pin');
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
        $optionsResolver->setDefined(['expand', 'verification']);
        $optionsResolver->setRequired(['verification']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('expand', ['array']);
        $optionsResolver->setAllowedTypes('verification', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \Stripe\Api\Model\IssuingCardPin|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\IssuingCardPin', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
