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

class V1AccountPersonsPostBodyVerificationDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1AccountPersonsPostBodyVerificationDocument';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1AccountPersonsPostBodyVerificationDocument;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1AccountPersonsPostBodyVerificationDocument();
        if (property_exists($data, 'back')) {
            $object->setBack($data->{'back'});
        }
        if (property_exists($data, 'front')) {
            $object->setFront($data->{'front'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBack()) {
            $data->{'back'} = $object->getBack();
        }
        if (null !== $object->getFront()) {
            $data->{'front'} = $object->getFront();
        }

        return $data;
    }
}
