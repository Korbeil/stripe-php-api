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

class SourceTransactionChfCreditTransferDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\SourceTransactionChfCreditTransferData';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\SourceTransactionChfCreditTransferData;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\SourceTransactionChfCreditTransferData();
        if (property_exists($data, 'reference')) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'sender_address_country')) {
            $object->setSenderAddressCountry($data->{'sender_address_country'});
        }
        if (property_exists($data, 'sender_address_line1')) {
            $object->setSenderAddressLine1($data->{'sender_address_line1'});
        }
        if (property_exists($data, 'sender_iban')) {
            $object->setSenderIban($data->{'sender_iban'});
        }
        if (property_exists($data, 'sender_name')) {
            $object->setSenderName($data->{'sender_name'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getSenderAddressCountry()) {
            $data->{'sender_address_country'} = $object->getSenderAddressCountry();
        }
        if (null !== $object->getSenderAddressLine1()) {
            $data->{'sender_address_line1'} = $object->getSenderAddressLine1();
        }
        if (null !== $object->getSenderIban()) {
            $data->{'sender_iban'} = $object->getSenderIban();
        }
        if (null !== $object->getSenderName()) {
            $data->{'sender_name'} = $object->getSenderName();
        }

        return $data;
    }
}
