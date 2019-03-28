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

class V1AccountPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1AccountPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1AccountPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1AccountPostBody();
        if (property_exists($data, 'account_token')) {
            $object->setAccountToken($data->{'account_token'});
        }
        if (property_exists($data, 'bank_account')) {
            $object->setBankAccount($data->{'bank_account'});
        }
        if (property_exists($data, 'business_profile')) {
            $object->setBusinessProfile($this->denormalizer->denormalize($data->{'business_profile'}, 'Stripe\\Api\\Model\\V1AccountPostBodyBusinessProfile', 'json', $context));
        }
        if (property_exists($data, 'business_type')) {
            $object->setBusinessType($data->{'business_type'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'Stripe\\Api\\Model\\V1AccountPostBodyCompany', 'json', $context));
        }
        if (property_exists($data, 'default_currency')) {
            $object->setDefaultCurrency($data->{'default_currency'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'expand')) {
            $values = [];
            foreach ($data->{'expand'} as $value) {
                $values[] = $value;
            }
            $object->setExpand($values);
        }
        if (property_exists($data, 'external_account')) {
            $object->setExternalAccount($data->{'external_account'});
        }
        if (property_exists($data, 'individual')) {
            $object->setIndividual($this->denormalizer->denormalize($data->{'individual'}, 'Stripe\\Api\\Model\\V1AccountPostBodyIndividual', 'json', $context));
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'requested_capabilities')) {
            $values_1 = [];
            foreach ($data->{'requested_capabilities'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRequestedCapabilities($values_1);
        }
        if (property_exists($data, 'settings')) {
            $object->setSettings($this->denormalizer->denormalize($data->{'settings'}, 'Stripe\\Api\\Model\\V1AccountPostBodySettings', 'json', $context));
        }
        if (property_exists($data, 'tos_acceptance')) {
            $object->setTosAcceptance($this->denormalizer->denormalize($data->{'tos_acceptance'}, 'Stripe\\Api\\Model\\V1AccountPostBodyTosAcceptance', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountToken()) {
            $data->{'account_token'} = $object->getAccountToken();
        }
        if (null !== $object->getBankAccount()) {
            $data->{'bank_account'} = $object->getBankAccount();
        }
        if (null !== $object->getBusinessProfile()) {
            $data->{'business_profile'} = $this->normalizer->normalize($object->getBusinessProfile(), 'json', $context);
        }
        if (null !== $object->getBusinessType()) {
            $data->{'business_type'} = $object->getBusinessType();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getDefaultCurrency()) {
            $data->{'default_currency'} = $object->getDefaultCurrency();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getExpand()) {
            $values = [];
            foreach ($object->getExpand() as $value) {
                $values[] = $value;
            }
            $data->{'expand'} = $values;
        }
        if (null !== $object->getExternalAccount()) {
            $data->{'external_account'} = $object->getExternalAccount();
        }
        if (null !== $object->getIndividual()) {
            $data->{'individual'} = $this->normalizer->normalize($object->getIndividual(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getRequestedCapabilities()) {
            $values_1 = [];
            foreach ($object->getRequestedCapabilities() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'requested_capabilities'} = $values_1;
        }
        if (null !== $object->getSettings()) {
            $data->{'settings'} = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if (null !== $object->getTosAcceptance()) {
            $data->{'tos_acceptance'} = $this->normalizer->normalize($object->getTosAcceptance(), 'json', $context);
        }

        return $data;
    }
}