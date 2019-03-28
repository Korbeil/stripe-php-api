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

class V1SubscriptionsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1SubscriptionsPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1SubscriptionsPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1SubscriptionsPostBody();
        if (property_exists($data, 'application_fee_percent')) {
            $object->setApplicationFeePercent($data->{'application_fee_percent'});
        }
        if (property_exists($data, 'billing')) {
            $object->setBilling($data->{'billing'});
        }
        if (property_exists($data, 'billing_cycle_anchor')) {
            $object->setBillingCycleAnchor($data->{'billing_cycle_anchor'});
        }
        if (property_exists($data, 'billing_thresholds')) {
            $object->setBillingThresholds($data->{'billing_thresholds'});
        }
        if (property_exists($data, 'cancel_at_period_end')) {
            $object->setCancelAtPeriodEnd($data->{'cancel_at_period_end'});
        }
        if (property_exists($data, 'coupon')) {
            $object->setCoupon($data->{'coupon'});
        }
        if (property_exists($data, 'customer')) {
            $object->setCustomer($data->{'customer'});
        }
        if (property_exists($data, 'days_until_due')) {
            $object->setDaysUntilDue($data->{'days_until_due'});
        }
        if (property_exists($data, 'default_source')) {
            $object->setDefaultSource($data->{'default_source'});
        }
        if (property_exists($data, 'expand')) {
            $values = [];
            foreach ($data->{'expand'} as $value) {
                $values[] = $value;
            }
            $object->setExpand($values);
        }
        if (property_exists($data, 'items')) {
            $values_1 = [];
            foreach ($data->{'items'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Stripe\\Api\\Model\\V1SubscriptionsPostBodyItemsItem', 'json', $context);
            }
            $object->setItems($values_1);
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'prorate')) {
            $object->setProrate($data->{'prorate'});
        }
        if (property_exists($data, 'tax_percent')) {
            $object->setTaxPercent($data->{'tax_percent'});
        }
        if (property_exists($data, 'trial_end')) {
            $object->setTrialEnd($data->{'trial_end'});
        }
        if (property_exists($data, 'trial_from_plan')) {
            $object->setTrialFromPlan($data->{'trial_from_plan'});
        }
        if (property_exists($data, 'trial_period_days')) {
            $object->setTrialPeriodDays($data->{'trial_period_days'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApplicationFeePercent()) {
            $data->{'application_fee_percent'} = $object->getApplicationFeePercent();
        }
        if (null !== $object->getBilling()) {
            $data->{'billing'} = $object->getBilling();
        }
        if (null !== $object->getBillingCycleAnchor()) {
            $data->{'billing_cycle_anchor'} = $object->getBillingCycleAnchor();
        }
        if (null !== $object->getBillingThresholds()) {
            $data->{'billing_thresholds'} = $object->getBillingThresholds();
        }
        if (null !== $object->getCancelAtPeriodEnd()) {
            $data->{'cancel_at_period_end'} = $object->getCancelAtPeriodEnd();
        }
        if (null !== $object->getCoupon()) {
            $data->{'coupon'} = $object->getCoupon();
        }
        if (null !== $object->getCustomer()) {
            $data->{'customer'} = $object->getCustomer();
        }
        if (null !== $object->getDaysUntilDue()) {
            $data->{'days_until_due'} = $object->getDaysUntilDue();
        }
        if (null !== $object->getDefaultSource()) {
            $data->{'default_source'} = $object->getDefaultSource();
        }
        if (null !== $object->getExpand()) {
            $values = [];
            foreach ($object->getExpand() as $value) {
                $values[] = $value;
            }
            $data->{'expand'} = $values;
        }
        if (null !== $object->getItems()) {
            $values_1 = [];
            foreach ($object->getItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'items'} = $values_1;
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getProrate()) {
            $data->{'prorate'} = $object->getProrate();
        }
        if (null !== $object->getTaxPercent()) {
            $data->{'tax_percent'} = $object->getTaxPercent();
        }
        if (null !== $object->getTrialEnd()) {
            $data->{'trial_end'} = $object->getTrialEnd();
        }
        if (null !== $object->getTrialFromPlan()) {
            $data->{'trial_from_plan'} = $object->getTrialFromPlan();
        }
        if (null !== $object->getTrialPeriodDays()) {
            $data->{'trial_period_days'} = $object->getTrialPeriodDays();
        }

        return $data;
    }
}
