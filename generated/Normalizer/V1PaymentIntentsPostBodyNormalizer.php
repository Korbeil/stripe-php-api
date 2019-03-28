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

class V1PaymentIntentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1PaymentIntentsPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1PaymentIntentsPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1PaymentIntentsPostBody();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'application_fee_amount')) {
            $object->setApplicationFeeAmount($data->{'application_fee_amount'});
        }
        if (property_exists($data, 'capture_method')) {
            $object->setCaptureMethod($data->{'capture_method'});
        }
        if (property_exists($data, 'confirm')) {
            $object->setConfirm($data->{'confirm'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'customer')) {
            $object->setCustomer($data->{'customer'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'expand')) {
            $values = [];
            foreach ($data->{'expand'} as $value) {
                $values[] = $value;
            }
            $object->setExpand($values);
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'on_behalf_of')) {
            $object->setOnBehalfOf($data->{'on_behalf_of'});
        }
        if (property_exists($data, 'payment_method')) {
            $object->setPaymentMethod($data->{'payment_method'});
        }
        if (property_exists($data, 'payment_method_types')) {
            $values_1 = [];
            foreach ($data->{'payment_method_types'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPaymentMethodTypes($values_1);
        }
        if (property_exists($data, 'receipt_email')) {
            $object->setReceiptEmail($data->{'receipt_email'});
        }
        if (property_exists($data, 'return_url')) {
            $object->setReturnUrl($data->{'return_url'});
        }
        if (property_exists($data, 'save_payment_method')) {
            $object->setSavePaymentMethod($data->{'save_payment_method'});
        }
        if (property_exists($data, 'shipping')) {
            $object->setShipping($this->denormalizer->denormalize($data->{'shipping'}, 'Stripe\\Api\\Model\\V1PaymentIntentsPostBodyShipping', 'json', $context));
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'statement_descriptor')) {
            $object->setStatementDescriptor($data->{'statement_descriptor'});
        }
        if (property_exists($data, 'transfer_data')) {
            $object->setTransferData($this->denormalizer->denormalize($data->{'transfer_data'}, 'Stripe\\Api\\Model\\V1PaymentIntentsPostBodyTransferData', 'json', $context));
        }
        if (property_exists($data, 'transfer_group')) {
            $object->setTransferGroup($data->{'transfer_group'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getApplicationFeeAmount()) {
            $data->{'application_fee_amount'} = $object->getApplicationFeeAmount();
        }
        if (null !== $object->getCaptureMethod()) {
            $data->{'capture_method'} = $object->getCaptureMethod();
        }
        if (null !== $object->getConfirm()) {
            $data->{'confirm'} = $object->getConfirm();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getCustomer()) {
            $data->{'customer'} = $object->getCustomer();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getExpand()) {
            $values = [];
            foreach ($object->getExpand() as $value) {
                $values[] = $value;
            }
            $data->{'expand'} = $values;
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getOnBehalfOf()) {
            $data->{'on_behalf_of'} = $object->getOnBehalfOf();
        }
        if (null !== $object->getPaymentMethod()) {
            $data->{'payment_method'} = $object->getPaymentMethod();
        }
        if (null !== $object->getPaymentMethodTypes()) {
            $values_1 = [];
            foreach ($object->getPaymentMethodTypes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'payment_method_types'} = $values_1;
        }
        if (null !== $object->getReceiptEmail()) {
            $data->{'receipt_email'} = $object->getReceiptEmail();
        }
        if (null !== $object->getReturnUrl()) {
            $data->{'return_url'} = $object->getReturnUrl();
        }
        if (null !== $object->getSavePaymentMethod()) {
            $data->{'save_payment_method'} = $object->getSavePaymentMethod();
        }
        if (null !== $object->getShipping()) {
            $data->{'shipping'} = $this->normalizer->normalize($object->getShipping(), 'json', $context);
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getStatementDescriptor()) {
            $data->{'statement_descriptor'} = $object->getStatementDescriptor();
        }
        if (null !== $object->getTransferData()) {
            $data->{'transfer_data'} = $this->normalizer->normalize($object->getTransferData(), 'json', $context);
        }
        if (null !== $object->getTransferGroup()) {
            $data->{'transfer_group'} = $object->getTransferGroup();
        }

        return $data;
    }
}