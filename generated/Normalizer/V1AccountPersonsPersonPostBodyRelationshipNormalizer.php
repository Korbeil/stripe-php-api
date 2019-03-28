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

class V1AccountPersonsPersonPostBodyRelationshipNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1AccountPersonsPersonPostBodyRelationship';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1AccountPersonsPersonPostBodyRelationship;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1AccountPersonsPersonPostBodyRelationship();
        if (property_exists($data, 'account_opener')) {
            $object->setAccountOpener($data->{'account_opener'});
        }
        if (property_exists($data, 'director')) {
            $object->setDirector($data->{'director'});
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($data->{'owner'});
        }
        if (property_exists($data, 'percent_ownership')) {
            $object->setPercentOwnership($data->{'percent_ownership'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountOpener()) {
            $data->{'account_opener'} = $object->getAccountOpener();
        }
        if (null !== $object->getDirector()) {
            $data->{'director'} = $object->getDirector();
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $object->getOwner();
        }
        if (null !== $object->getPercentOwnership()) {
            $data->{'percent_ownership'} = $object->getPercentOwnership();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }

        return $data;
    }
}
