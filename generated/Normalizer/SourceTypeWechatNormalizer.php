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

class SourceTypeWechatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\SourceTypeWechat';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\SourceTypeWechat;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\SourceTypeWechat();
        if (property_exists($data, 'native_url')) {
            $object->setNativeUrl($data->{'native_url'});
        }
        if (property_exists($data, 'prepay_id')) {
            $object->setPrepayId($data->{'prepay_id'});
        }
        if (property_exists($data, 'qr_code_url')) {
            $object->setQrCodeUrl($data->{'qr_code_url'});
        }
        if (property_exists($data, 'statement_descriptor')) {
            $object->setStatementDescriptor($data->{'statement_descriptor'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNativeUrl()) {
            $data->{'native_url'} = $object->getNativeUrl();
        }
        if (null !== $object->getPrepayId()) {
            $data->{'prepay_id'} = $object->getPrepayId();
        }
        if (null !== $object->getQrCodeUrl()) {
            $data->{'qr_code_url'} = $object->getQrCodeUrl();
        }
        if (null !== $object->getStatementDescriptor()) {
            $data->{'statement_descriptor'} = $object->getStatementDescriptor();
        }

        return $data;
    }
}
