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

class V1TokensPostBodyAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1TokensPostBodyAccount';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1TokensPostBodyAccount;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1TokensPostBodyAccount();
        if (property_exists($data, 'business_type')) {
            $object->setBusinessType($data->{'business_type'});
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'Stripe\\Api\\Model\\V1TokensPostBodyAccountCompany', 'json', $context));
        }
        if (property_exists($data, 'individual')) {
            $object->setIndividual($this->denormalizer->denormalize($data->{'individual'}, 'Stripe\\Api\\Model\\V1TokensPostBodyAccountIndividual', 'json', $context));
        }
        if (property_exists($data, 'tos_shown_and_accepted')) {
            $object->setTosShownAndAccepted($data->{'tos_shown_and_accepted'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBusinessType()) {
            $data->{'business_type'} = $object->getBusinessType();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getIndividual()) {
            $data->{'individual'} = $this->normalizer->normalize($object->getIndividual(), 'json', $context);
        }
        if (null !== $object->getTosShownAndAccepted()) {
            $data->{'tos_shown_and_accepted'} = $object->getTosShownAndAccepted();
        }

        return $data;
    }
}
