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

class ReportingReportRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\ReportingReportRun';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\ReportingReportRun;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\ReportingReportRun();
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'error')) {
            $object->setError($data->{'error'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'livemode')) {
            $object->setLivemode($data->{'livemode'});
        }
        if (property_exists($data, 'object')) {
            $object->setObject($data->{'object'});
        }
        if (property_exists($data, 'parameters')) {
            $object->setParameters($this->denormalizer->denormalize($data->{'parameters'}, 'Stripe\\Api\\Model\\FinancialReportingFinanceReportRunRunParameters', 'json', $context));
        }
        if (property_exists($data, 'report_type')) {
            $object->setReportType($data->{'report_type'});
        }
        if (property_exists($data, 'result')) {
            $object->setResult($this->denormalizer->denormalize($data->{'result'}, 'Stripe\\Api\\Model\\File', 'json', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'succeeded_at')) {
            $object->setSucceededAt($data->{'succeeded_at'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getError()) {
            $data->{'error'} = $object->getError();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getLivemode()) {
            $data->{'livemode'} = $object->getLivemode();
        }
        if (null !== $object->getObject()) {
            $data->{'object'} = $object->getObject();
        }
        if (null !== $object->getParameters()) {
            $data->{'parameters'} = $this->normalizer->normalize($object->getParameters(), 'json', $context);
        }
        if (null !== $object->getReportType()) {
            $data->{'report_type'} = $object->getReportType();
        }
        if (null !== $object->getResult()) {
            $data->{'result'} = $this->normalizer->normalize($object->getResult(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getSucceededAt()) {
            $data->{'succeeded_at'} = $object->getSucceededAt();
        }

        return $data;
    }
}
