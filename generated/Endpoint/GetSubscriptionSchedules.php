<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class GetSubscriptionSchedules extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * <p>Retrieves the list of your subscription schedules.</p>.
     *
     * @param array $queryParameters {
     *
     *     @var array $expand specifies which fields in the response should be expanded
     *     @var int $canceled_at only return subscription schedules that were created canceled the given date interval
     *     @var int $completed_at only return subscription schedules that completed during the given date interval
     *     @var int $created only return subscription schedules that were created during the given date interval
     *     @var string $customer only return subscription schedules for the given customer
     *     @var string $ending_before A cursor for use in pagination. `ending_before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with `obj_bar`, your subsequent call can include `ending_before=obj_bar` in order to fetch the previous page of the list.
     *     @var int $limit A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 10.
     *     @var int $released_at only return subscription schedules that were released during the given date interval
     *     @var bool $scheduled only return subscription schedules that have not started yet
     *     @var string $starting_after A cursor for use in pagination. `starting_after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with `obj_foo`, your subsequent call can include `starting_after=obj_foo` in order to fetch the next page of the list.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/v1/subscription_schedules';
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
        $optionsResolver->setDefined(['expand', 'canceled_at', 'completed_at', 'created', 'customer', 'ending_before', 'limit', 'released_at', 'scheduled', 'starting_after']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('expand', ['array']);
        $optionsResolver->setAllowedTypes('canceled_at', ['int']);
        $optionsResolver->setAllowedTypes('completed_at', ['int']);
        $optionsResolver->setAllowedTypes('created', ['int']);
        $optionsResolver->setAllowedTypes('customer', ['string']);
        $optionsResolver->setAllowedTypes('ending_before', ['string']);
        $optionsResolver->setAllowedTypes('limit', ['int']);
        $optionsResolver->setAllowedTypes('released_at', ['int']);
        $optionsResolver->setAllowedTypes('scheduled', ['bool']);
        $optionsResolver->setAllowedTypes('starting_after', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \Stripe\Api\Model\V1SubscriptionSchedulesGetResponse200|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\V1SubscriptionSchedulesGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
