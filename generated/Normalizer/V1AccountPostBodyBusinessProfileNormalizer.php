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

class V1AccountPostBodyBusinessProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1AccountPostBodyBusinessProfile';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1AccountPostBodyBusinessProfile;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1AccountPostBodyBusinessProfile();
        if (property_exists($data, 'mcc')) {
            $object->setMcc($data->{'mcc'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'product_description')) {
            $object->setProductDescription($data->{'product_description'});
        }
        if (property_exists($data, 'support_email')) {
            $object->setSupportEmail($data->{'support_email'});
        }
        if (property_exists($data, 'support_phone')) {
            $object->setSupportPhone($data->{'support_phone'});
        }
        if (property_exists($data, 'support_url')) {
            $object->setSupportUrl($data->{'support_url'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMcc()) {
            $data->{'mcc'} = $object->getMcc();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getProductDescription()) {
            $data->{'product_description'} = $object->getProductDescription();
        }
        if (null !== $object->getSupportEmail()) {
            $data->{'support_email'} = $object->getSupportEmail();
        }
        if (null !== $object->getSupportPhone()) {
            $data->{'support_phone'} = $object->getSupportPhone();
        }
        if (null !== $object->getSupportUrl()) {
            $data->{'support_url'} = $object->getSupportUrl();
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }

        return $data;
    }
}
