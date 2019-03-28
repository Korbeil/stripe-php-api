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

class V1SourcesSourcePostBodyMandateAcceptanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1SourcesSourcePostBodyMandateAcceptance';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1SourcesSourcePostBodyMandateAcceptance;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1SourcesSourcePostBodyMandateAcceptance();
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }
        if (property_exists($data, 'ip')) {
            $object->setIp($data->{'ip'});
        }
        if (property_exists($data, 'offline')) {
            $object->setOffline($this->denormalizer->denormalize($data->{'offline'}, 'Stripe\\Api\\Model\\V1SourcesSourcePostBodyMandateAcceptanceOffline', 'json', $context));
        }
        if (property_exists($data, 'online')) {
            $object->setOnline($this->denormalizer->denormalize($data->{'online'}, 'Stripe\\Api\\Model\\V1SourcesSourcePostBodyMandateAcceptanceOnline', 'json', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'user_agent')) {
            $object->setUserAgent($data->{'user_agent'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        }
        if (null !== $object->getIp()) {
            $data->{'ip'} = $object->getIp();
        }
        if (null !== $object->getOffline()) {
            $data->{'offline'} = $this->normalizer->normalize($object->getOffline(), 'json', $context);
        }
        if (null !== $object->getOnline()) {
            $data->{'online'} = $this->normalizer->normalize($object->getOnline(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUserAgent()) {
            $data->{'user_agent'} = $object->getUserAgent();
        }

        return $data;
    }
}
