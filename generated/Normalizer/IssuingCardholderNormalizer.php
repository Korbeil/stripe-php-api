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

class IssuingCardholderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\IssuingCardholder';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\IssuingCardholder;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\IssuingCardholder();
        if (property_exists($data, 'billing')) {
            $object->setBilling($this->denormalizer->denormalize($data->{'billing'}, 'Stripe\\Api\\Model\\IssuingCardholderAddress', 'json', $context));
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'is_default')) {
            $object->setIsDefault($data->{'is_default'});
        }
        if (property_exists($data, 'livemode')) {
            $object->setLivemode($data->{'livemode'});
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'object')) {
            $object->setObject($data->{'object'});
        }
        if (property_exists($data, 'phone_number')) {
            $object->setPhoneNumber($data->{'phone_number'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $this->normalizer->normalize($object->getBilling(), 'json', $context);
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsDefault()) {
            $data->{'is_default'} = $object->getIsDefault();
        }
        if (null !== $object->getLivemode()) {
            $data->{'livemode'} = $object->getLivemode();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getObject()) {
            $data->{'object'} = $object->getObject();
        }
        if (null !== $object->getPhoneNumber()) {
            $data->{'phone_number'} = $object->getPhoneNumber();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }

        return $data;
    }
}
