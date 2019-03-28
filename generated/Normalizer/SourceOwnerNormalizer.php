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

class SourceOwnerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\SourceOwner';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\SourceOwner;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\SourceOwner();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Stripe\\Api\\Model\\Address', 'json', $context));
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'phone')) {
            $object->setPhone($data->{'phone'});
        }
        if (property_exists($data, 'verified_address')) {
            $object->setVerifiedAddress($this->denormalizer->denormalize($data->{'verified_address'}, 'Stripe\\Api\\Model\\Address', 'json', $context));
        }
        if (property_exists($data, 'verified_email')) {
            $object->setVerifiedEmail($data->{'verified_email'});
        }
        if (property_exists($data, 'verified_name')) {
            $object->setVerifiedName($data->{'verified_name'});
        }
        if (property_exists($data, 'verified_phone')) {
            $object->setVerifiedPhone($data->{'verified_phone'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        }
        if (null !== $object->getVerifiedAddress()) {
            $data->{'verified_address'} = $this->normalizer->normalize($object->getVerifiedAddress(), 'json', $context);
        }
        if (null !== $object->getVerifiedEmail()) {
            $data->{'verified_email'} = $object->getVerifiedEmail();
        }
        if (null !== $object->getVerifiedName()) {
            $data->{'verified_name'} = $object->getVerifiedName();
        }
        if (null !== $object->getVerifiedPhone()) {
            $data->{'verified_phone'} = $object->getVerifiedPhone();
        }

        return $data;
    }
}