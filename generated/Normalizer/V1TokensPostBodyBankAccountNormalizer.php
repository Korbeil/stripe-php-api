<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class V1TokensPostBodyBankAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1TokensPostBodyBankAccount';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1TokensPostBodyBankAccount;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1TokensPostBodyBankAccount();
        if (property_exists($data, 'account_holder_name')) {
            $object->setAccountHolderName($data->{'account_holder_name'});
        }
        if (property_exists($data, 'account_holder_type')) {
            $object->setAccountHolderType($data->{'account_holder_type'});
        }
        if (property_exists($data, 'account_number')) {
            $object->setAccountNumber($data->{'account_number'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'routing_number')) {
            $object->setRoutingNumber($data->{'routing_number'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountHolderName()) {
            $data->{'account_holder_name'} = $object->getAccountHolderName();
        }
        if (null !== $object->getAccountHolderType()) {
            $data->{'account_holder_type'} = $object->getAccountHolderType();
        }
        if (null !== $object->getAccountNumber()) {
            $data->{'account_number'} = $object->getAccountNumber();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getRoutingNumber()) {
            $data->{'routing_number'} = $object->getRoutingNumber();
        }

        return $data;
    }
}
