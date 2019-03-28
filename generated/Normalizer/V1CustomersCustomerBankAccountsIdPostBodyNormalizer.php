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

class V1CustomersCustomerBankAccountsIdPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1CustomersCustomerBankAccountsIdPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1CustomersCustomerBankAccountsIdPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1CustomersCustomerBankAccountsIdPostBody();
        if (property_exists($data, 'account_holder_name')) {
            $object->setAccountHolderName($data->{'account_holder_name'});
        }
        if (property_exists($data, 'account_holder_type')) {
            $object->setAccountHolderType($data->{'account_holder_type'});
        }
        if (property_exists($data, 'address_city')) {
            $object->setAddressCity($data->{'address_city'});
        }
        if (property_exists($data, 'address_country')) {
            $object->setAddressCountry($data->{'address_country'});
        }
        if (property_exists($data, 'address_line1')) {
            $object->setAddressLine1($data->{'address_line1'});
        }
        if (property_exists($data, 'address_line2')) {
            $object->setAddressLine2($data->{'address_line2'});
        }
        if (property_exists($data, 'address_state')) {
            $object->setAddressState($data->{'address_state'});
        }
        if (property_exists($data, 'address_zip')) {
            $object->setAddressZip($data->{'address_zip'});
        }
        if (property_exists($data, 'exp_month')) {
            $object->setExpMonth($data->{'exp_month'});
        }
        if (property_exists($data, 'exp_year')) {
            $object->setExpYear($data->{'exp_year'});
        }
        if (property_exists($data, 'expand')) {
            $values = [];
            foreach ($data->{'expand'} as $value) {
                $values[] = $value;
            }
            $object->setExpand($values);
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Stripe\\Api\\Model\\V1CustomersCustomerBankAccountsIdPostBodyOwner', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountHolderName()) {
            $data->{'account_holder_name'} = $object->getAccountHolderName();
        }
        if (null !== $object->getAccountHolderType()) {
            $data->{'account_holder_type'} = $object->getAccountHolderType();
        }
        if (null !== $object->getAddressCity()) {
            $data->{'address_city'} = $object->getAddressCity();
        }
        if (null !== $object->getAddressCountry()) {
            $data->{'address_country'} = $object->getAddressCountry();
        }
        if (null !== $object->getAddressLine1()) {
            $data->{'address_line1'} = $object->getAddressLine1();
        }
        if (null !== $object->getAddressLine2()) {
            $data->{'address_line2'} = $object->getAddressLine2();
        }
        if (null !== $object->getAddressState()) {
            $data->{'address_state'} = $object->getAddressState();
        }
        if (null !== $object->getAddressZip()) {
            $data->{'address_zip'} = $object->getAddressZip();
        }
        if (null !== $object->getExpMonth()) {
            $data->{'exp_month'} = $object->getExpMonth();
        }
        if (null !== $object->getExpYear()) {
            $data->{'exp_year'} = $object->getExpYear();
        }
        if (null !== $object->getExpand()) {
            $values = [];
            foreach ($object->getExpand() as $value) {
                $values[] = $value;
            }
            $data->{'expand'} = $values;
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }

        return $data;
    }
}
