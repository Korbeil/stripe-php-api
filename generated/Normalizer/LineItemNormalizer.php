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

class LineItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\LineItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\LineItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\LineItem();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'discountable')) {
            $object->setDiscountable($data->{'discountable'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'invoice_item')) {
            $object->setInvoiceItem($data->{'invoice_item'});
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
        if (property_exists($data, 'period')) {
            $object->setPeriod($this->denormalizer->denormalize($data->{'period'}, 'Stripe\\Api\\Model\\InvoiceLineItemPeriod', 'json', $context));
        }
        if (property_exists($data, 'plan')) {
            $object->setPlan($this->denormalizer->denormalize($data->{'plan'}, 'Stripe\\Api\\Model\\Plan', 'json', $context));
        }
        if (property_exists($data, 'proration')) {
            $object->setProration($data->{'proration'});
        }
        if (property_exists($data, 'quantity')) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'subscription')) {
            $object->setSubscription($data->{'subscription'});
        }
        if (property_exists($data, 'subscription_item')) {
            $object->setSubscriptionItem($data->{'subscription_item'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getDiscountable()) {
            $data->{'discountable'} = $object->getDiscountable();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getInvoiceItem()) {
            $data->{'invoice_item'} = $object->getInvoiceItem();
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
        if (null !== $object->getPeriod()) {
            $data->{'period'} = $this->normalizer->normalize($object->getPeriod(), 'json', $context);
        }
        if (null !== $object->getPlan()) {
            $data->{'plan'} = $this->normalizer->normalize($object->getPlan(), 'json', $context);
        }
        if (null !== $object->getProration()) {
            $data->{'proration'} = $object->getProration();
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getSubscription()) {
            $data->{'subscription'} = $object->getSubscription();
        }
        if (null !== $object->getSubscriptionItem()) {
            $data->{'subscription_item'} = $object->getSubscriptionItem();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }

        return $data;
    }
}