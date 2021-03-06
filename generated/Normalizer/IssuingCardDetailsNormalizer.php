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

class IssuingCardDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\IssuingCardDetails';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\IssuingCardDetails;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\IssuingCardDetails();
        if (property_exists($data, 'card')) {
            $object->setCard($this->denormalizer->denormalize($data->{'card'}, 'Stripe\\Api\\Model\\IssuingCard', 'json', $context));
        }
        if (property_exists($data, 'cvc')) {
            $object->setCvc($data->{'cvc'});
        }
        if (property_exists($data, 'exp_month')) {
            $object->setExpMonth($data->{'exp_month'});
        }
        if (property_exists($data, 'exp_year')) {
            $object->setExpYear($data->{'exp_year'});
        }
        if (property_exists($data, 'number')) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'object')) {
            $object->setObject($data->{'object'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCard()) {
            $data->{'card'} = $this->normalizer->normalize($object->getCard(), 'json', $context);
        }
        if (null !== $object->getCvc()) {
            $data->{'cvc'} = $object->getCvc();
        }
        if (null !== $object->getExpMonth()) {
            $data->{'exp_month'} = $object->getExpMonth();
        }
        if (null !== $object->getExpYear()) {
            $data->{'exp_year'} = $object->getExpYear();
        }
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }
        if (null !== $object->getObject()) {
            $data->{'object'} = $object->getObject();
        }

        return $data;
    }
}
