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

class V1AccountPostBodySettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1AccountPostBodySettings';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1AccountPostBodySettings;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1AccountPostBodySettings();
        if (property_exists($data, 'branding')) {
            $object->setBranding($this->denormalizer->denormalize($data->{'branding'}, 'Stripe\\Api\\Model\\V1AccountPostBodySettingsBranding', 'json', $context));
        }
        if (property_exists($data, 'card_payments')) {
            $object->setCardPayments($this->denormalizer->denormalize($data->{'card_payments'}, 'Stripe\\Api\\Model\\V1AccountPostBodySettingsCardPayments', 'json', $context));
        }
        if (property_exists($data, 'payments')) {
            $object->setPayments($this->denormalizer->denormalize($data->{'payments'}, 'Stripe\\Api\\Model\\V1AccountPostBodySettingsPayments', 'json', $context));
        }
        if (property_exists($data, 'payouts')) {
            $object->setPayouts($this->denormalizer->denormalize($data->{'payouts'}, 'Stripe\\Api\\Model\\V1AccountPostBodySettingsPayouts', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBranding()) {
            $data->{'branding'} = $this->normalizer->normalize($object->getBranding(), 'json', $context);
        }
        if (null !== $object->getCardPayments()) {
            $data->{'card_payments'} = $this->normalizer->normalize($object->getCardPayments(), 'json', $context);
        }
        if (null !== $object->getPayments()) {
            $data->{'payments'} = $this->normalizer->normalize($object->getPayments(), 'json', $context);
        }
        if (null !== $object->getPayouts()) {
            $data->{'payouts'} = $this->normalizer->normalize($object->getPayouts(), 'json', $context);
        }

        return $data;
    }
}