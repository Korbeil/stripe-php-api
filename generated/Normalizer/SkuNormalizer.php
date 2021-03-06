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

class SkuNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\Sku';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\Sku;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\Sku();
        if (property_exists($data, 'active')) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'attributes')) {
            $object->setAttributes($data->{'attributes'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'image')) {
            $object->setImage($data->{'image'});
        }
        if (property_exists($data, 'inventory')) {
            $object->setInventory($this->denormalizer->denormalize($data->{'inventory'}, 'Stripe\\Api\\Model\\Inventory', 'json', $context));
        }
        if (property_exists($data, 'livemode')) {
            $object->setLivemode($data->{'livemode'});
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'object')) {
            $object->setObject($data->{'object'});
        }
        if (property_exists($data, 'package_dimensions')) {
            $object->setPackageDimensions($this->denormalizer->denormalize($data->{'package_dimensions'}, 'Stripe\\Api\\Model\\PackageDimensions', 'json', $context));
        }
        if (property_exists($data, 'price')) {
            $object->setPrice($data->{'price'});
        }
        if (property_exists($data, 'product')) {
            $object->setProduct($data->{'product'});
        }
        if (property_exists($data, 'updated')) {
            $object->setUpdated($data->{'updated'});
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
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getImage()) {
            $data->{'image'} = $object->getImage();
        }
        if (null !== $object->getInventory()) {
            $data->{'inventory'} = $this->normalizer->normalize($object->getInventory(), 'json', $context);
        }
        if (null !== $object->getLivemode()) {
            $data->{'livemode'} = $object->getLivemode();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getObject()) {
            $data->{'object'} = $object->getObject();
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
        if (null !== $object->getUpdated()) {
            $data->{'updated'} = $object->getUpdated();
        }

        return $data;
    }
}
