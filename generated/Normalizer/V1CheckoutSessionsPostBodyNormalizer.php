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

class V1CheckoutSessionsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1CheckoutSessionsPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1CheckoutSessionsPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1CheckoutSessionsPostBody();
        if (property_exists($data, 'billing_address_collection')) {
            $object->setBillingAddressCollection($data->{'billing_address_collection'});
        }
        if (property_exists($data, 'cancel_url')) {
            $object->setCancelUrl($data->{'cancel_url'});
        }
        if (property_exists($data, 'client_reference_id')) {
            $object->setClientReferenceId($data->{'client_reference_id'});
        }
        if (property_exists($data, 'customer')) {
            $object->setCustomer($data->{'customer'});
        }
        if (property_exists($data, 'customer_email')) {
            $object->setCustomerEmail($data->{'customer_email'});
        }
        if (property_exists($data, 'expand')) {
            $values = [];
            foreach ($data->{'expand'} as $value) {
                $values[] = $value;
            }
            $object->setExpand($values);
        }
        if (property_exists($data, 'line_items')) {
            $values_1 = [];
            foreach ($data->{'line_items'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Stripe\\Api\\Model\\V1CheckoutSessionsPostBodyLineItemsItem', 'json', $context);
            }
            $object->setLineItems($values_1);
        }
        if (property_exists($data, 'locale')) {
            $object->setLocale($data->{'locale'});
        }
        if (property_exists($data, 'payment_intent_data')) {
            $object->setPaymentIntentData($this->denormalizer->denormalize($data->{'payment_intent_data'}, 'Stripe\\Api\\Model\\V1CheckoutSessionsPostBodyPaymentIntentData', 'json', $context));
        }
        if (property_exists($data, 'payment_method_types')) {
            $values_2 = [];
            foreach ($data->{'payment_method_types'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPaymentMethodTypes($values_2);
        }
        if (property_exists($data, 'subscription_data')) {
            $object->setSubscriptionData($this->denormalizer->denormalize($data->{'subscription_data'}, 'Stripe\\Api\\Model\\V1CheckoutSessionsPostBodySubscriptionData', 'json', $context));
        }
        if (property_exists($data, 'success_url')) {
            $object->setSuccessUrl($data->{'success_url'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBillingAddressCollection()) {
            $data->{'billing_address_collection'} = $object->getBillingAddressCollection();
        }
        if (null !== $object->getCancelUrl()) {
            $data->{'cancel_url'} = $object->getCancelUrl();
        }
        if (null !== $object->getClientReferenceId()) {
            $data->{'client_reference_id'} = $object->getClientReferenceId();
        }
        if (null !== $object->getCustomer()) {
            $data->{'customer'} = $object->getCustomer();
        }
        if (null !== $object->getCustomerEmail()) {
            $data->{'customer_email'} = $object->getCustomerEmail();
        }
        if (null !== $object->getExpand()) {
            $values = [];
            foreach ($object->getExpand() as $value) {
                $values[] = $value;
            }
            $data->{'expand'} = $values;
        }
        if (null !== $object->getLineItems()) {
            $values_1 = [];
            foreach ($object->getLineItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'line_items'} = $values_1;
        }
        if (null !== $object->getLocale()) {
            $data->{'locale'} = $object->getLocale();
        }
        if (null !== $object->getPaymentIntentData()) {
            $data->{'payment_intent_data'} = $this->normalizer->normalize($object->getPaymentIntentData(), 'json', $context);
        }
        if (null !== $object->getPaymentMethodTypes()) {
            $values_2 = [];
            foreach ($object->getPaymentMethodTypes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'payment_method_types'} = $values_2;
        }
        if (null !== $object->getSubscriptionData()) {
            $data->{'subscription_data'} = $this->normalizer->normalize($object->getSubscriptionData(), 'json', $context);
        }
        if (null !== $object->getSuccessUrl()) {
            $data->{'success_url'} = $object->getSuccessUrl();
        }

        return $data;
    }
}
