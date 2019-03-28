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

class SubscriptionScheduleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\SubscriptionSchedule';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\SubscriptionSchedule;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\SubscriptionSchedule();
        if (property_exists($data, 'billing')) {
            $object->setBilling($data->{'billing'});
        }
        if (property_exists($data, 'billing_thresholds')) {
            $object->setBillingThresholds($this->denormalizer->denormalize($data->{'billing_thresholds'}, 'Stripe\\Api\\Model\\SubscriptionBillingThresholds', 'json', $context));
        }
        if (property_exists($data, 'canceled_at')) {
            $object->setCanceledAt($data->{'canceled_at'});
        }
        if (property_exists($data, 'completed_at')) {
            $object->setCompletedAt($data->{'completed_at'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'current_phase')) {
            $object->setCurrentPhase($this->denormalizer->denormalize($data->{'current_phase'}, 'Stripe\\Api\\Model\\SubscriptionScheduleCurrentPhase', 'json', $context));
        }
        if (property_exists($data, 'customer')) {
            $object->setCustomer($data->{'customer'});
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
        if (property_exists($data, 'released_at')) {
            $object->setReleasedAt($data->{'released_at'});
        }
        if (property_exists($data, 'released_subscription')) {
            $object->setReleasedSubscription($data->{'released_subscription'});
        }
        if (property_exists($data, 'renewal_behavior')) {
            $object->setRenewalBehavior($data->{'renewal_behavior'});
        }
        if (property_exists($data, 'renewal_interval')) {
            $object->setRenewalInterval($this->denormalizer->denormalize($data->{'renewal_interval'}, 'Stripe\\Api\\Model\\SubscriptionScheduleRenewalInterval', 'json', $context));
        }
        if (property_exists($data, 'revision')) {
            $object->setRevision($data->{'revision'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'subscription')) {
            $object->setSubscription($data->{'subscription'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $object->getBilling();
        }
        if (null !== $object->getBillingThresholds()) {
            $data->{'billing_thresholds'} = $this->normalizer->normalize($object->getBillingThresholds(), 'json', $context);
        }
        if (null !== $object->getCanceledAt()) {
            $data->{'canceled_at'} = $object->getCanceledAt();
        }
        if (null !== $object->getCompletedAt()) {
            $data->{'completed_at'} = $object->getCompletedAt();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCurrentPhase()) {
            $data->{'current_phase'} = $this->normalizer->normalize($object->getCurrentPhase(), 'json', $context);
        }
        if (null !== $object->getCustomer()) {
            $data->{'customer'} = $object->getCustomer();
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
        if (null !== $object->getReleasedAt()) {
            $data->{'released_at'} = $object->getReleasedAt();
        }
        if (null !== $object->getReleasedSubscription()) {
            $data->{'released_subscription'} = $object->getReleasedSubscription();
        }
        if (null !== $object->getRenewalBehavior()) {
            $data->{'renewal_behavior'} = $object->getRenewalBehavior();
        }
        if (null !== $object->getRenewalInterval()) {
            $data->{'renewal_interval'} = $this->normalizer->normalize($object->getRenewalInterval(), 'json', $context);
        }
        if (null !== $object->getRevision()) {
            $data->{'revision'} = $object->getRevision();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getSubscription()) {
            $data->{'subscription'} = $object->getSubscription();
        }

        return $data;
    }
}
