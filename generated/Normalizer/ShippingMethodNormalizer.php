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

class ShippingMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\ShippingMethod';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\ShippingMethod;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\ShippingMethod();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'delivery_estimate')) {
            $object->setDeliveryEstimate($this->denormalizer->denormalize($data->{'delivery_estimate'}, 'Stripe\\Api\\Model\\DeliveryEstimate', 'json', $context));
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getDeliveryEstimate()) {
            $data->{'delivery_estimate'} = $this->normalizer->normalize($object->getDeliveryEstimate(), 'json', $context);
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }

        return $data;
    }
}
