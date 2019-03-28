<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostIssuingCardsCardPin extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $card;

    /**
     * <p>Updates the PIN for a card, subject to cardholder verification. See <a href="/docs/issuing/pin_management">Retrieve and update cardholder PIN</a></p>.
     *
     * @param string                                          $card    The id of the `Card` that the PIN belongs to
     * @param \Stripe\Api\Model\V1IssuingCardsCardPinPostBody $payload body parameters for the request
     */
    public function __construct(string $card, \Stripe\Api\Model\V1IssuingCardsCardPinPostBody $payload)
    {
        $this->card = $card;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{card}'], [$this->card], '/v1/issuing/cards/{card}/pin');
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