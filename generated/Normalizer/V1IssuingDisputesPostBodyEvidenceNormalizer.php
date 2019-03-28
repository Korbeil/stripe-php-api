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

class V1IssuingDisputesPostBodyEvidenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1IssuingDisputesPostBodyEvidence';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1IssuingDisputesPostBodyEvidence;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1IssuingDisputesPostBodyEvidence();
        if (property_exists($data, 'fraudulent')) {
            $object->setFraudulent($this->denormalizer->denormalize($data->{'fraudulent'}, 'Stripe\\Api\\Model\\V1IssuingDisputesPostBodyEvidenceFraudulent', 'json', $context));
        }
        if (property_exists($data, 'other')) {
            $object->setOther($this->denormalizer->denormalize($data->{'other'}, 'Stripe\\Api\\Model\\V1IssuingDisputesPostBodyEvidenceOther', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFraudulent()) {
            $data->{'fraudulent'} = $this->normalizer->normalize($object->getFraudulent(), 'json', $context);
        }
        if (null !== $object->getOther()) {
            $data->{'other'} = $this->normalizer->normalize($object->getOther(), 'json', $context);
        }

        return $data;
    }
}
