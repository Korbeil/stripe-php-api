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

class IssuingCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\IssuingCard';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\IssuingCard;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\IssuingCard();
        if (property_exists($data, 'authorization_controls')) {
            $object->setAuthorizationControls($this->denormalizer->denormalize($data->{'authorization_controls'}, 'Stripe\\Api\\Model\\IssuingCardAuthorizationControls', 'json', $context));
        }
        if (property_exists($data, 'brand')) {
            $object->setBrand($data->{'brand'});
        }
        if (property_exists($data, 'cardholder')) {
            $object->setCardholder($this->denormalizer->denormalize($data->{'cardholder'}, 'Stripe\\Api\\Model\\IssuingCardholder', 'json', $context));
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'exp_month')) {
            $object->setExpMonth($data->{'exp_month'});
        }
        if (property_exists($data, 'exp_year')) {
            $object->setExpYear($data->{'exp_year'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'last4')) {
            $object->setLast4($data->{'last4'});
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
        if (property_exists($data, 'shipping')) {
            $object->setShipping($this->denormalizer->denormalize($data->{'shipping'}, 'Stripe\\Api\\Model\\IssuingCardShipping', 'json', $context));
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
        if (null !== $object->getAuthorizationControls()) {
            $data->{'authorization_controls'} = $this->normalizer->normalize($object->getAuthorizationControls(), 'json', $context);
        }
        if (null !== $object->getBrand()) {
            $data->{'brand'} = $object->getBrand();
        }
        if (null !== $object->getCardholder()) {
            $data->{'cardholder'} = $this->normalizer->normalize($object->getCardholder(), 'json', $context);
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getExpMonth()) {
            $data->{'exp_month'} = $object->getExpMonth();
        }
        if (null !== $object->getExpYear()) {
            $data->{'exp_year'} = $object->getExpYear();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getLast4()) {
            $data->{'last4'} = $object->getLast4();
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
        if (null !== $object->getShipping()) {
            $data->{'shipping'} = $this->normalizer->normalize($object->getShipping(), 'json', $context);
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
