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

class SourceTypeBancontactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\SourceTypeBancontact';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\SourceTypeBancontact;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\SourceTypeBancontact();
        if (property_exists($data, 'bank_code')) {
            $object->setBankCode($data->{'bank_code'});
        }
        if (property_exists($data, 'bank_name')) {
            $object->setBankName($data->{'bank_name'});
        }
        if (property_exists($data, 'bic')) {
            $object->setBic($data->{'bic'});
        }
        if (property_exists($data, 'iban_last4')) {
            $object->setIbanLast4($data->{'iban_last4'});
        }
        if (property_exists($data, 'preferred_language')) {
            $object->setPreferredLanguage($data->{'preferred_language'});
        }
        if (property_exists($data, 'statement_descriptor')) {
            $object->setStatementDescriptor($data->{'statement_descriptor'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBankCode()) {
            $data->{'bank_code'} = $object->getBankCode();
        }
        if (null !== $object->getBankName()) {
            $data->{'bank_name'} = $object->getBankName();
        }
        if (null !== $object->getBic()) {
            $data->{'bic'} = $object->getBic();
        }
        if (null !== $object->getIbanLast4()) {
            $data->{'iban_last4'} = $object->getIbanLast4();
        }
        if (null !== $object->getPreferredLanguage()) {
            $data->{'preferred_language'} = $object->getPreferredLanguage();
        }
        if (null !== $object->getStatementDescriptor()) {
            $data->{'statement_descriptor'} = $object->getStatementDescriptor();
        }

        return $data;
    }
}
