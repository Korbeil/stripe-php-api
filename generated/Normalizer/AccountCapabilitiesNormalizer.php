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

class AccountCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\AccountCapabilities';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\AccountCapabilities;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\AccountCapabilities();
        if (property_exists($data, 'card_payments')) {
            $object->setCardPayments($data->{'card_payments'});
        }
        if (property_exists($data, 'legacy_payments')) {
            $object->setLegacyPayments($data->{'legacy_payments'});
        }
        if (property_exists($data, 'platform_payments')) {
            $object->setPlatformPayments($data->{'platform_payments'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCardPayments()) {
            $data->{'card_payments'} = $object->getCardPayments();
        }
        if (null !== $object->getLegacyPayments()) {
            $data->{'legacy_payments'} = $object->getLegacyPayments();
        }
        if (null !== $object->getPlatformPayments()) {
            $data->{'platform_payments'} = $object->getPlatformPayments();
        }

        return $data;
    }
}
