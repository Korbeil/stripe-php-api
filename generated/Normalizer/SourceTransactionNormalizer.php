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

class SourceTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Stripe\\Api\\Model\\SourceTransaction';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Stripe\Api\Model\SourceTransaction;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Stripe\Api\Model\SourceTransaction();
        if (property_exists($data, 'ach_credit_transfer')) {
            $object->setAchCreditTransfer($this->denormalizer->denormalize($data->{'ach_credit_transfer'}, 'Stripe\\Api\\Model\\SourceTransactionAchCreditTransferData', 'json', $context));
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'chf_credit_transfer')) {
            $object->setChfCreditTransfer($this->denormalizer->denormalize($data->{'chf_credit_transfer'}, 'Stripe\\Api\\Model\\SourceTransactionChfCreditTransferData', 'json', $context));
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
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
        if (property_exists($data, 'paper_check')) {
            $object->setPaperCheck($this->denormalizer->denormalize($data->{'paper_check'}, 'Stripe\\Api\\Model\\SourceTransactionPaperCheckData', 'json', $context));
        }
        if (property_exists($data, 'sepa_credit_transfer')) {
            $object->setSepaCreditTransfer($this->denormalizer->denormalize($data->{'sepa_credit_transfer'}, 'Stripe\\Api\\Model\\SourceTransactionSepaCreditTransferData', 'json', $context));
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAchCreditTransfer()) {
            $data->{'ach_credit_transfer'} = $this->normalizer->normalize($object->getAchCreditTransfer(), 'json', $context);
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getChfCreditTransfer()) {
            $data->{'chf_credit_transfer'} = $this->normalizer->normalize($object->getChfCreditTransfer(), 'json', $context);
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
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
        if (null !== $object->getPaperCheck()) {
            $data->{'paper_check'} = $this->normalizer->normalize($object->getPaperCheck(), 'json', $context);
        }
        if (null !== $object->getSepaCreditTransfer()) {
            $data->{'sepa_credit_transfer'} = $this->normalizer->normalize($object->getSepaCreditTransfer(), 'json', $context);
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }

        return $data;
    }
}
