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

class CountrySpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\CountrySpec';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\CountrySpec;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\CountrySpec();
        if (property_exists($data, 'default_currency')) {
            $object->setDefaultCurrency($data->{'default_currency'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'object')) {
            $object->setObject($data->{'object'});
        }
        if (property_exists($data, 'supported_bank_account_currencies')) {
            $object->setSupportedBankAccountCurrencies($data->{'supported_bank_account_currencies'});
        }
        if (property_exists($data, 'supported_payment_currencies')) {
            $values = [];
            foreach ($data->{'supported_payment_currencies'} as $value) {
                $values[] = $value;
            }
            $object->setSupportedPaymentCurrencies($values);
        }
        if (property_exists($data, 'supported_payment_methods')) {
            $values_1 = [];
            foreach ($data->{'supported_payment_methods'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSupportedPaymentMethods($values_1);
        }
        if (property_exists($data, 'supported_transfer_countries')) {
            $values_2 = [];
            foreach ($data->{'supported_transfer_countries'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSupportedTransferCountries($values_2);
        }
        if (property_exists($data, 'verification_fields')) {
            $object->setVerificationFields($this->denormalizer->denormalize($data->{'verification_fields'}, 'Stripe\\Api\\Model\\CountrySpecVerificationFields', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDefaultCurrency()) {
            $data->{'default_currency'} = $object->getDefaultCurrency();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getObject()) {
            $data->{'object'} = $object->getObject();
        }
        if (null !== $object->getSupportedBankAccountCurrencies()) {
            $data->{'supported_bank_account_currencies'} = $object->getSupportedBankAccountCurrencies();
        }
        if (null !== $object->getSupportedPaymentCurrencies()) {
            $values = [];
            foreach ($object->getSupportedPaymentCurrencies() as $value) {
                $values[] = $value;
            }
            $data->{'supported_payment_currencies'} = $values;
        }
        if (null !== $object->getSupportedPaymentMethods()) {
            $values_1 = [];
            foreach ($object->getSupportedPaymentMethods() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'supported_payment_methods'} = $values_1;
        }
        if (null !== $object->getSupportedTransferCountries()) {
            $values_2 = [];
            foreach ($object->getSupportedTransferCountries() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'supported_transfer_countries'} = $values_2;
        }
        if (null !== $object->getVerificationFields()) {
            $data->{'verification_fields'} = $this->normalizer->normalize($object->getVerificationFields(), 'json', $context);
        }

        return $data;
    }
}