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

class V1IssuingCardsPostBodyAuthorizationControlsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1IssuingCardsPostBodyAuthorizationControls';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1IssuingCardsPostBodyAuthorizationControls;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1IssuingCardsPostBodyAuthorizationControls();
        if (property_exists($data, 'allowed_categories')) {
            $values = [];
            foreach ($data->{'allowed_categories'} as $value) {
                $values[] = $value;
            }
            $object->setAllowedCategories($values);
        }
        if (property_exists($data, 'blocked_categories')) {
            $values_1 = [];
            foreach ($data->{'blocked_categories'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBlockedCategories($values_1);
        }
        if (property_exists($data, 'max_amount')) {
            $object->setMaxAmount($data->{'max_amount'});
        }
        if (property_exists($data, 'max_approvals')) {
            $object->setMaxApprovals($data->{'max_approvals'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowedCategories()) {
            $values = [];
            foreach ($object->getAllowedCategories() as $value) {
                $values[] = $value;
            }
            $data->{'allowed_categories'} = $values;
        }
        if (null !== $object->getBlockedCategories()) {
            $values_1 = [];
            foreach ($object->getBlockedCategories() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'blocked_categories'} = $values_1;
        }
        if (null !== $object->getMaxAmount()) {
            $data->{'max_amount'} = $object->getMaxAmount();
        }
        if (null !== $object->getMaxApprovals()) {
            $data->{'max_approvals'} = $object->getMaxApprovals();
        }

        return $data;
    }
}