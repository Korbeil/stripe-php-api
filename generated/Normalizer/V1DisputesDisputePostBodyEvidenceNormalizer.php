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

class V1DisputesDisputePostBodyEvidenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1DisputesDisputePostBodyEvidence';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1DisputesDisputePostBodyEvidence;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1DisputesDisputePostBodyEvidence();
        if (property_exists($data, 'access_activity_log')) {
            $object->setAccessActivityLog($data->{'access_activity_log'});
        }
        if (property_exists($data, 'billing_address')) {
            $object->setBillingAddress($data->{'billing_address'});
        }
        if (property_exists($data, 'cancellation_policy')) {
            $object->setCancellationPolicy($data->{'cancellation_policy'});
        }
        if (property_exists($data, 'cancellation_policy_disclosure')) {
            $object->setCancellationPolicyDisclosure($data->{'cancellation_policy_disclosure'});
        }
        if (property_exists($data, 'cancellation_rebuttal')) {
            $object->setCancellationRebuttal($data->{'cancellation_rebuttal'});
        }
        if (property_exists($data, 'customer_communication')) {
            $object->setCustomerCommunication($data->{'customer_communication'});
        }
        if (property_exists($data, 'customer_email_address')) {
            $object->setCustomerEmailAddress($data->{'customer_email_address'});
        }
        if (property_exists($data, 'customer_name')) {
            $object->setCustomerName($data->{'customer_name'});
        }
        if (property_exists($data, 'customer_purchase_ip')) {
            $object->setCustomerPurchaseIp($data->{'customer_purchase_ip'});
        }
        if (property_exists($data, 'customer_signature')) {
            $object->setCustomerSignature($data->{'customer_signature'});
        }
        if (property_exists($data, 'duplicate_charge_documentation')) {
            $object->setDuplicateChargeDocumentation($data->{'duplicate_charge_documentation'});
        }
        if (property_exists($data, 'duplicate_charge_explanation')) {
            $object->setDuplicateChargeExplanation($data->{'duplicate_charge_explanation'});
        }
        if (property_exists($data, 'duplicate_charge_id')) {
            $object->setDuplicateChargeId($data->{'duplicate_charge_id'});
        }
        if (property_exists($data, 'product_description')) {
            $object->setProductDescription($data->{'product_description'});
        }
        if (property_exists($data, 'receipt')) {
            $object->setReceipt($data->{'receipt'});
        }
        if (property_exists($data, 'refund_policy')) {
            $object->setRefundPolicy($data->{'refund_policy'});
        }
        if (property_exists($data, 'refund_policy_disclosure')) {
            $object->setRefundPolicyDisclosure($data->{'refund_policy_disclosure'});
        }
        if (property_exists($data, 'refund_refusal_explanation')) {
            $object->setRefundRefusalExplanation($data->{'refund_refusal_explanation'});
        }
        if (property_exists($data, 'service_date')) {
            $object->setServiceDate($data->{'service_date'});
        }
        if (property_exists($data, 'service_documentation')) {
            $object->setServiceDocumentation($data->{'service_documentation'});
        }
        if (property_exists($data, 'shipping_address')) {
            $object->setShippingAddress($data->{'shipping_address'});
        }
        if (property_exists($data, 'shipping_carrier')) {
            $object->setShippingCarrier($data->{'shipping_carrier'});
        }
        if (property_exists($data, 'shipping_date')) {
            $object->setShippingDate($data->{'shipping_date'});
        }
        if (property_exists($data, 'shipping_documentation')) {
            $object->setShippingDocumentation($data->{'shipping_documentation'});
        }
        if (property_exists($data, 'shipping_tracking_number')) {
            $object->setShippingTrackingNumber($data->{'shipping_tracking_number'});
        }
        if (property_exists($data, 'uncategorized_file')) {
            $object->setUncategorizedFile($data->{'uncategorized_file'});
        }
        if (property_exists($data, 'uncategorized_text')) {
            $object->setUncategorizedText($data->{'uncategorized_text'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessActivityLog()) {
            $data->{'access_activity_log'} = $object->getAccessActivityLog();
        }
        if (null !== $object->getBillingAddress()) {
            $data->{'billing_address'} = $object->getBillingAddress();
        }
        if (null !== $object->getCancellationPolicy()) {
            $data->{'cancellation_policy'} = $object->getCancellationPolicy();
        }
        if (null !== $object->getCancellationPolicyDisclosure()) {
            $data->{'cancellation_policy_disclosure'} = $object->getCancellationPolicyDisclosure();
        }
        if (null !== $object->getCancellationRebuttal()) {
            $data->{'cancellation_rebuttal'} = $object->getCancellationRebuttal();
        }
        if (null !== $object->getCustomerCommunication()) {
            $data->{'customer_communication'} = $object->getCustomerCommunication();
        }
        if (null !== $object->getCustomerEmailAddress()) {
            $data->{'customer_email_address'} = $object->getCustomerEmailAddress();
        }
        if (null !== $object->getCustomerName()) {
            $data->{'customer_name'} = $object->getCustomerName();
        }
        if (null !== $object->getCustomerPurchaseIp()) {
            $data->{'customer_purchase_ip'} = $object->getCustomerPurchaseIp();
        }
        if (null !== $object->getCustomerSignature()) {
            $data->{'customer_signature'} = $object->getCustomerSignature();
        }
        if (null !== $object->getDuplicateChargeDocumentation()) {
            $data->{'duplicate_charge_documentation'} = $object->getDuplicateChargeDocumentation();
        }
        if (null !== $object->getDuplicateChargeExplanation()) {
            $data->{'duplicate_charge_explanation'} = $object->getDuplicateChargeExplanation();
        }
        if (null !== $object->getDuplicateChargeId()) {
            $data->{'duplicate_charge_id'} = $object->getDuplicateChargeId();
        }
        if (null !== $object->getProductDescription()) {
            $data->{'product_description'} = $object->getProductDescription();
        }
        if (null !== $object->getReceipt()) {
            $data->{'receipt'} = $object->getReceipt();
        }
        if (null !== $object->getRefundPolicy()) {
            $data->{'refund_policy'} = $object->getRefundPolicy();
        }
        if (null !== $object->getRefundPolicyDisclosure()) {
            $data->{'refund_policy_disclosure'} = $object->getRefundPolicyDisclosure();
        }
        if (null !== $object->getRefundRefusalExplanation()) {
            $data->{'refund_refusal_explanation'} = $object->getRefundRefusalExplanation();
        }
        if (null !== $object->getServiceDate()) {
            $data->{'service_date'} = $object->getServiceDate();
        }
        if (null !== $object->getServiceDocumentation()) {
            $data->{'service_documentation'} = $object->getServiceDocumentation();
        }
        if (null !== $object->getShippingAddress()) {
            $data->{'shipping_address'} = $object->getShippingAddress();
        }
        if (null !== $object->getShippingCarrier()) {
            $data->{'shipping_carrier'} = $object->getShippingCarrier();
        }
        if (null !== $object->getShippingDate()) {
            $data->{'shipping_date'} = $object->getShippingDate();
        }
        if (null !== $object->getShippingDocumentation()) {
            $data->{'shipping_documentation'} = $object->getShippingDocumentation();
        }
        if (null !== $object->getShippingTrackingNumber()) {
            $data->{'shipping_tracking_number'} = $object->getShippingTrackingNumber();
        }
        if (null !== $object->getUncategorizedFile()) {
            $data->{'uncategorized_file'} = $object->getUncategorizedFile();
        }
        if (null !== $object->getUncategorizedText()) {
            $data->{'uncategorized_text'} = $object->getUncategorizedText();
        }

        return $data;
    }
}
