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

class SubscriptionScheduleRevisionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\SubscriptionScheduleRevision';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\SubscriptionScheduleRevision;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\SubscriptionScheduleRevision();
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'invoice_settings')) {
            $object->setInvoiceSettings($this->denormalizer->denormalize($data->{'invoice_settings'}, 'Stripe\\Api\\Model\\InvoiceSettingSubscriptionScheduleSetting', 'json', $context));
        }
        if (property_exists($data, 'livemode')) {
            $object->setLivemode($data->{'livemode'});
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'object')) {
            $object->setObject($data->{'object'});
        }
        if (property_exists($data, 'phases')) {
            $values = [];
            foreach ($data->{'phases'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Stripe\\Api\\Model\\SubscriptionSchedulePhaseConfiguration', 'json', $context);
            }
            $object->setPhases($values);
        }
        if (property_exists($data, 'previous_revision')) {
            $object->setPreviousRevision($data->{'previous_revision'});
        }
        if (property_exists($data, 'renewal_behavior')) {
            $object->setRenewalBehavior($data->{'renewal_behavior'});
        }
        if (property_exists($data, 'renewal_interval')) {
            $object->setRenewalInterval($this->denormalizer->denormalize($data->{'renewal_interval'}, 'Stripe\\Api\\Model\\SubscriptionScheduleRenewalInterval', 'json', $context));
        }
        if (property_exists($data, 'schedule')) {
            $object->setSchedule($data->{'schedule'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getInvoiceSettings()) {
            $data->{'invoice_settings'} = $this->normalizer->normalize($object->getInvoiceSettings(), 'json', $context);
        }
        if (null !== $object->getLivemode()) {
            $data->{'livemode'} = $object->getLivemode();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getObject()) {
            $data->{'object'} = $object->getObject();
        }
        if (null !== $object->getPhases()) {
            $values = [];
            foreach ($object->getPhases() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'phases'} = $values;
        }
        if (null !== $object->getPreviousRevision()) {
            $data->{'previous_revision'} = $object->getPreviousRevision();
        }
        if (null !== $object->getRenewalBehavior()) {
            $data->{'renewal_behavior'} = $object->getRenewalBehavior();
        }
        if (null !== $object->getRenewalInterval()) {
            $data->{'renewal_interval'} = $this->normalizer->normalize($object->getRenewalInterval(), 'json', $context);
        }
        if (null !== $object->getSchedule()) {
            $data->{'schedule'} = $object->getSchedule();
        }

        return $data;
    }
}
