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

class ReportingReportTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\ReportingReportType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\ReportingReportType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\ReportingReportType();
        if (property_exists($data, 'data_available_end')) {
            $object->setDataAvailableEnd($data->{'data_available_end'});
        }
        if (property_exists($data, 'data_available_start')) {
            $object->setDataAvailableStart($data->{'data_available_start'});
        }
        if (property_exists($data, 'default_columns')) {
            $values = [];
            foreach ($data->{'default_columns'} as $value) {
                $values[] = $value;
            }
            $object->setDefaultColumns($values);
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'object')) {
            $object->setObject($data->{'object'});
        }
        if (property_exists($data, 'updated')) {
            $object->setUpdated($data->{'updated'});
        }
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDataAvailableEnd()) {
            $data->{'data_available_end'} = $object->getDataAvailableEnd();
        }
        if (null !== $object->getDataAvailableStart()) {
            $data->{'data_available_start'} = $object->getDataAvailableStart();
        }
        if (null !== $object->getDefaultColumns()) {
            $values = [];
            foreach ($object->getDefaultColumns() as $value) {
                $values[] = $value;
            }
            $data->{'default_columns'} = $values;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getObject()) {
            $data->{'object'} = $object->getObject();
        }
        if (null !== $object->getUpdated()) {
            $data->{'updated'} = $object->getUpdated();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }

        return $data;
    }
}
