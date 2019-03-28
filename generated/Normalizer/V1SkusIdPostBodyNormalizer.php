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

class V1SkusIdPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1SkusIdPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1SkusIdPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1SkusIdPostBody();
        if (property_exists($data, 'active')) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'attributes')) {
            $object->setAttributes($data->{'attributes'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'expand')) {
            $values = [];
            foreach ($data->{'expand'} as $value) {
                $values[] = $value;
            }
            $object->setExpand($values);
        }
        if (property_exists($data, 'image')) {
            $object->setImage($data->{'image'});
        }
        if (property_exists($data, 'inventory')) {
            $object->setInventory($this->denormalizer->denormalize($data->{'inventory'}, 'Stripe\\Api\\Model\\V1SkusIdPostBodyInventory', 'json', $context));
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'package_dimensions')) {
            $object->setPackageDimensions($this->denormalizer->denormalize($data->{'package_dimensions'}, 'Stripe\\Api\\Model\\V1SkusIdPostBodyPackageDimensions', 'json', $context));
        }
        if (property_exists($data, 'price')) {
            $object->setPrice($data->{'price'});
        }
        if (property_exists($data, 'product')) {
            $object->setProduct($data->{'product'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getActive()) {
            $data->{'active'} = $object->getActive();
        }
        if (null !== $object->getAttributes()) {
            $data->{'attributes'} = $object->getAttributes();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getExpand()) {
            $values = [];
            foreach ($object->getExpand() as $value) {
                $values[] = $value;
            }
            $data->{'expand'} = $values;
        }
        if (null !== $object->getImage()) {
            $data->{'image'} = $object->getImage();
        }
        if (null !== $object->getInventory()) {
            $data->{'inventory'} = $this->normalizer->normalize($object->getInventory(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getPackageDimensions()) {
            $data->{'package_dimensions'} = $this->normalizer->normalize($object->getPackageDimensions(), 'json', $context);
        }
        if (null !== $object->getPrice()) {
            $data->{'price'} = $object->getPrice();
        }
        if (null !== $object->getProduct()) {
            $data->{'product'} = $object->getProduct();
        }

        return $data;
    }
}
