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

class V1TokensPostBodyAccountIndividualNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1TokensPostBodyAccountIndividual';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1TokensPostBodyAccountIndividual;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1TokensPostBodyAccountIndividual();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Stripe\\Api\\Model\\V1TokensPostBodyAccountIndividualAddress', 'json', $context));
        }
        if (property_exists($data, 'address_kana')) {
            $object->setAddressKana($this->denormalizer->denormalize($data->{'address_kana'}, 'Stripe\\Api\\Model\\V1TokensPostBodyAccountIndividualAddressKana', 'json', $context));
        }
        if (property_exists($data, 'address_kanji')) {
            $object->setAddressKanji($this->denormalizer->denormalize($data->{'address_kanji'}, 'Stripe\\Api\\Model\\V1TokensPostBodyAccountIndividualAddressKanji', 'json', $context));
        }
        if (property_exists($data, 'dob')) {
            $object->setDob($this->denormalizer->denormalize($data->{'dob'}, 'Stripe\\Api\\Model\\V1TokensPostBodyAccountIndividualDob', 'json', $context));
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'first_name')) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'first_name_kana')) {
            $object->setFirstNameKana($data->{'first_name_kana'});
        }
        if (property_exists($data, 'first_name_kanji')) {
            $object->setFirstNameKanji($data->{'first_name_kanji'});
        }
        if (property_exists($data, 'gender')) {
            $object->setGender($data->{'gender'});
        }
        if (property_exists($data, 'id_number')) {
            $object->setIdNumber($data->{'id_number'});
        }
        if (property_exists($data, 'last_name')) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'last_name_kana')) {
            $object->setLastNameKana($data->{'last_name_kana'});
        }
        if (property_exists($data, 'last_name_kanji')) {
            $object->setLastNameKanji($data->{'last_name_kanji'});
        }
        if (property_exists($data, 'maiden_name')) {
            $object->setMaidenName($data->{'maiden_name'});
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'phone')) {
            $object->setPhone($data->{'phone'});
        }
        if (property_exists($data, 'ssn_last_4')) {
            $object->setSsnLast4($data->{'ssn_last_4'});
        }
        if (property_exists($data, 'verification')) {
            $object->setVerification($this->denormalizer->denormalize($data->{'verification'}, 'Stripe\\Api\\Model\\V1TokensPostBodyAccountIndividualVerification', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getAddressKana()) {
            $data->{'address_kana'} = $this->normalizer->normalize($object->getAddressKana(), 'json', $context);
        }
        if (null !== $object->getAddressKanji()) {
            $data->{'address_kanji'} = $this->normalizer->normalize($object->getAddressKanji(), 'json', $context);
        }
        if (null !== $object->getDob()) {
            $data->{'dob'} = $this->normalizer->normalize($object->getDob(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        if (null !== $object->getFirstNameKana()) {
            $data->{'first_name_kana'} = $object->getFirstNameKana();
        }
        if (null !== $object->getFirstNameKanji()) {
            $data->{'first_name_kanji'} = $object->getFirstNameKanji();
        }
        if (null !== $object->getGender()) {
            $data->{'gender'} = $object->getGender();
        }
        if (null !== $object->getIdNumber()) {
            $data->{'id_number'} = $object->getIdNumber();
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        if (null !== $object->getLastNameKana()) {
            $data->{'last_name_kana'} = $object->getLastNameKana();
        }
        if (null !== $object->getLastNameKanji()) {
            $data->{'last_name_kanji'} = $object->getLastNameKanji();
        }
        if (null !== $object->getMaidenName()) {
            $data->{'maiden_name'} = $object->getMaidenName();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        }
        if (null !== $object->getSsnLast4()) {
            $data->{'ssn_last_4'} = $object->getSsnLast4();
        }
        if (null !== $object->getVerification()) {
            $data->{'verification'} = $this->normalizer->normalize($object->getVerification(), 'json', $context);
        }

        return $data;
    }
}
