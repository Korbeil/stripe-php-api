<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostCustomersCustomerSubscriptionsSubscriptionExposedId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $customer;
    protected $subscription_exposed_id;

    /**
     * <p>Updates an existing subscription on a customer to match the specified parameters. When changing plans or quantities, we will optionally prorate the price we charge next month to make up for any price changes. To preview how the proration will be calculated, use the <a href="#upcoming_invoice">upcoming invoice</a> endpoint.</p>.
     *
     * @param string                                                                          $customer              the identifier of the customer to subscribe
     * @param string                                                                          $subscriptionExposedId the identifier of the subscription to update
     * @param \Stripe\Api\Model\V1CustomersCustomerSubscriptionsSubscriptionExposedIdPostBody $payload               body parameters for the request
     */
    public function __construct(string $customer, string $subscriptionExposedId, \Stripe\Api\Model\V1CustomersCustomerSubscriptionsSubscriptionExposedIdPostBody $payload)
    {
        $this->customer = $customer;
        $this->subscriptionExposedId = $subscriptionExposedId;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{customer}', '{subscription_exposed_id}'], [$this->customer, $this->subscription_exposed_id], '/v1/customers/{customer}/subscriptions/{subscription_exposed_id}');
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
     * @return \Stripe\Api\Model\Subscription|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Subscription', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
