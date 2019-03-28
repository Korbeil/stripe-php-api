<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class GetCountrySpecsCountry extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $country;

    /**
     * <p>Returns a Country Spec for a given Country code.</p>.
     *
     * @param string $country         An ISO 3166-1 alpha-2 country code. Available country codes can be listed with the [List Country Specs](https://stripe.com/docs/api#list_country_specs) endpoint.
     * @param array  $queryParameters {
     *
     *     @var array $expand Specifies which fields in the response should be expanded.
     * }
     */
    public function __construct(string $country, array $queryParameters = [])
    {
        $this->country = $country;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{country}'], [$this->country], '/v1/country_specs/{country}');
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
     * @return \Stripe\Api\Model\CountrySpec|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\CountrySpec', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
