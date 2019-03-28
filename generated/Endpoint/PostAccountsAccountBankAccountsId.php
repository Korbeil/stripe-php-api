<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Endpoint;

class PostAccountsAccountBankAccountsId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $account;
    protected $id;

    /**
     * <p>Updates the metadata, account holder name, and account holder type of a bank account belonging to a <a href="/docs/connect/custom-accounts">Custom account</a>, and optionally sets it as the default for its currency. Other bank account details are not editable by design.</p>.
    <p>You can re-enable a disabled bank account by performing an update call without providing any arguments or changes.</p>
     *
     * @param string                                                    $account
     * @param string                                                    $id      The ID of the external account to update
     * @param \Stripe\Api\Model\V1AccountsAccountBankAccountsIdPostBody $payload body parameters for the request
     */
    public function __construct(string $account, string $id, \Stripe\Api\Model\V1AccountsAccountBankAccountsIdPostBody $payload)
    {
        $this->account = $account;
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
        return str_replace(['{account}', '{id}'], [$this->account, $this->id], '/v1/accounts/{account}/bank_accounts/{id}');
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
     * @return \Stripe\Api\Model\ExternalAccount|\Stripe\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Stripe\\Api\\Model\\ExternalAccount', 'json');
        }

        return $serializer->deserialize($body, 'Stripe\\Api\\Model\\Error', 'json');
    }
}
