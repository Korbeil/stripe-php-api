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

class V1AccountsAccountPostBodySettingsCardPaymentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1AccountsAccountPostBodySettingsCardPayments';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1AccountsAccountPostBodySettingsCardPayments;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1AccountsAccountPostBodySettingsCardPayments();
        if (property_exists($data, 'decline_on')) {
            $object->setDeclineOn($this->denormalizer->denormalize($data->{'decline_on'}, 'Stripe\\Api\\Model\\V1AccountsAccountPostBodySettingsCardPaymentsDeclineOn', 'json', $context));
        }
        if (property_exists($data, 'statement_descriptor_prefix')) {
            $object->setStatementDescriptorPrefix($data->{'statement_descriptor_prefix'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDeclineOn()) {
            $data->{'decline_on'} = $this->normalizer->normalize($object->getDeclineOn(), 'json', $context);
        }
        if (null !== $object->getStatementDescriptorPrefix()) {
            $data->{'statement_descriptor_prefix'} = $object->getStatementDescriptorPrefix();
        }

        return $data;
    }
}
