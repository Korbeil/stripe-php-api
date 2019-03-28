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

class V1CustomersCustomerPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\V1CustomersCustomerPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\V1CustomersCustomerPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\V1CustomersCustomerPostBody();
        if (property_exists($data, 'account_balance')) {
            $object->setAccountBalance($data->{'account_balance'});
        }
        if (property_exists($data, 'bank_account')) {
            $object->setBankAccount($data->{'bank_account'});
        }
        if (property_exists($data, 'card')) {
            $object->setCard($data->{'card'});
        }
        if (property_exists($data, 'coupon')) {
            $object->setCoupon($data->{'coupon'});
        }
        if (property_exists($data, 'default_alipay_account')) {
            $object->setDefaultAlipayAccount($data->{'default_alipay_account'});
        }
        if (property_exists($data, 'default_bank_account')) {
            $object->setDefaultBankAccount($data->{'default_bank_account'});
        }
        if (property_exists($data, 'default_card')) {
            $object->setDefaultCard($data->{'default_card'});
        }
        if (property_exists($data, 'default_source')) {
            $object->setDefaultSource($data->{'default_source'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'expand')) {
            $values = [];
            foreach ($data->{'expand'} as $value) {
                $values[] = $value;
            }
            $object->setExpand($values);
        }
        if (property_exists($data, 'invoice_prefix')) {
            $object->setInvoicePrefix($data->{'invoice_prefix'});
        }
        if (property_exists($data, 'invoice_settings')) {
            $object->setInvoiceSettings($this->denormalizer->denormalize($data->{'invoice_settings'}, 'Stripe\\Api\\Model\\V1CustomersCustomerPostBodyInvoiceSettings', 'json', $context));
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'shipping')) {
            $object->setShipping($data->{'shipping'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'tax_info')) {
            $object->setTaxInfo($this->denormalizer->denormalize($data->{'tax_info'}, 'Stripe\\Api\\Model\\V1CustomersCustomerPostBodyTaxInfo', 'json', $context));
        }
        if (property_exists($data, 'trial_end')) {
            $object->setTrialEnd($data->{'trial_end'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountBalance()) {
            $data->{'account_balance'} = $object->getAccountBalance();
        }
        if (null !== $object->getBankAccount()) {
            $data->{'bank_account'} = $object->getBankAccount();
        }
        if (null !== $object->getCard()) {
            $data->{'card'} = $object->getCard();
        }
        if (null !== $object->getCoupon()) {
            $data->{'coupon'} = $object->getCoupon();
        }
        if (null !== $object->getDefaultAlipayAccount()) {
            $data->{'default_alipay_account'} = $object->getDefaultAlipayAccount();
        }
        if (null !== $object->getDefaultBankAccount()) {
            $data->{'default_bank_account'} = $object->getDefaultBankAccount();
        }
        if (null !== $object->getDefaultCard()) {
            $data->{'default_card'} = $object->getDefaultCard();
        }
        if (null !== $object->getDefaultSource()) {
            $data->{'default_source'} = $object->getDefaultSource();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getExpand()) {
            $values = [];
            foreach ($object->getExpand() as $value) {
                $values[] = $value;
            }
            $data->{'expand'} = $values;
        }
        if (null !== $object->getInvoicePrefix()) {
            $data->{'invoice_prefix'} = $object->getInvoicePrefix();
        }
        if (null !== $object->getInvoiceSettings()) {
            $data->{'invoice_settings'} = $this->normalizer->normalize($object->getInvoiceSettings(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getShipping()) {
            $data->{'shipping'} = $object->getShipping();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getTaxInfo()) {
            $data->{'tax_info'} = $this->normalizer->normalize($object->getTaxInfo(), 'json', $context);
        }
        if (null !== $object->getTrialEnd()) {
            $data->{'trial_end'} = $object->getTrialEnd();
        }

        return $data;
    }
}