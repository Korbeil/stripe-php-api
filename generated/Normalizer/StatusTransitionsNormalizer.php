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

class StatusTransitionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\StatusTransitions';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\StatusTransitions;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\StatusTransitions();
        if (property_exists($data, 'canceled')) {
            $object->setCanceled($data->{'canceled'});
        }
        if (property_exists($data, 'fulfiled')) {
            $object->setFulfiled($data->{'fulfiled'});
        }
        if (property_exists($data, 'paid')) {
            $object->setPaid($data->{'paid'});
        }
        if (property_exists($data, 'returned')) {
            $object->setReturned($data->{'returned'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCanceled()) {
            $data->{'canceled'} = $object->getCanceled();
        }
        if (null !== $object->getFulfiled()) {
            $data->{'fulfiled'} = $object->getFulfiled();
        }
        if (null !== $object->getPaid()) {
            $data->{'paid'} = $object->getPaid();
        }
        if (null !== $object->getReturned()) {
            $data->{'returned'} = $object->getReturned();
        }

        return $data;
    }
}