<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1RecipientsIdPostBody
{
    /**
     * A bank account to attach to the recipient. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe-js), or a dictionary containing a user's bank account details, with the options described below.
     *
     * @var string
     */
    protected $bankAccount;
    /**
     * A U.S. Visa or MasterCard debit card (not prepaid) to attach to the recipient. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe-js), or a dictionary containing a user's debit card details, with the options described below. Passing `card` will create a new card, make it the new recipient default card, and delete the old recipient default (if one exists). If you want to add additional debit cards instead of replacing the existing default, use the [card creation API](#create_card). Whenever you attach a card to a recipient, Stripe will automatically validate the debit card.
     *
     * @var string
     */
    protected $card;
    /**
     * ID of the card to set as the recipient's new default for payouts.
     *
     * @var string
     */
    protected $defaultCard;
    /**
     * An arbitrary string which you can attach to a `Recipient` object. It is displayed alongside the recipient in the web interface.
     *
     * @var string
     */
    protected $description;
    /**
     * The recipient's email address. It is displayed alongside the recipient in the web interface, and can be useful for searching and tracking.
     *
     * @var string
     */
    protected $email;
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @var mixed
     */
    protected $metadata;
    /**
     * The recipient's full, legal name. For type `individual`, should be in the format `First Last`, `First Middle Last`, or `First M Last` (no prefixes or suffixes). For `corporation`, the full, incorporated name.
     *
     * @var string
     */
    protected $name;
    /**
     * The recipient's tax ID, as a string. For type `individual`, the full SSN; for type `corporation`, the full EIN.
     *
     * @var string
     */
    protected $taxId;

    /**
     * A bank account to attach to the recipient. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe-js), or a dictionary containing a user's bank account details, with the options described below.
     *
     * @return string
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * A bank account to attach to the recipient. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe-js), or a dictionary containing a user's bank account details, with the options described below.
     *
     * @param string $bankAccount
     *
     * @return self
     */
    public function setBankAccount(?string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * A U.S. Visa or MasterCard debit card (not prepaid) to attach to the recipient. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe-js), or a dictionary containing a user's debit card details, with the options described below. Passing `card` will create a new card, make it the new recipient default card, and delete the old recipient default (if one exists). If you want to add additional debit cards instead of replacing the existing default, use the [card creation API](#create_card). Whenever you attach a card to a recipient, Stripe will automatically validate the debit card.
     *
     * @return string
     */
    public function getCard(): ?string
    {
        return $this->card;
    }

    /**
     * A U.S. Visa or MasterCard debit card (not prepaid) to attach to the recipient. You can provide either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/stripe-js), or a dictionary containing a user's debit card details, with the options described below. Passing `card` will create a new card, make it the new recipient default card, and delete the old recipient default (if one exists). If you want to add additional debit cards instead of replacing the existing default, use the [card creation API](#create_card). Whenever you attach a card to a recipient, Stripe will automatically validate the debit card.
     *
     * @param string $card
     *
     * @return self
     */
    public function setCard(?string $card): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * ID of the card to set as the recipient's new default for payouts.
     *
     * @return string
     */
    public function getDefaultCard(): ?string
    {
        return $this->defaultCard;
    }

    /**
     * ID of the card to set as the recipient's new default for payouts.
     *
     * @param string $defaultCard
     *
     * @return self
     */
    public function setDefaultCard(?string $defaultCard): self
    {
        $this->defaultCard = $defaultCard;

        return $this;
    }

    /**
     * An arbitrary string which you can attach to a `Recipient` object. It is displayed alongside the recipient in the web interface.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * An arbitrary string which you can attach to a `Recipient` object. It is displayed alongside the recipient in the web interface.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The recipient's email address. It is displayed alongside the recipient in the web interface, and can be useful for searching and tracking.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The recipient's email address. It is displayed alongside the recipient in the web interface, and can be useful for searching and tracking.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @return string[]
     */
    public function getExpand(): ?array
    {
        return $this->expand;
    }

    /**
     * Specifies which fields in the response should be expanded.
     *
     * @param string[] $expand
     *
     * @return self
     */
    public function setExpand(?array $expand): self
    {
        $this->expand = $expand;

        return $this;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     *
     * @param mixed $metadata
     *
     * @return self
     */
    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * The recipient's full, legal name. For type `individual`, should be in the format `First Last`, `First Middle Last`, or `First M Last` (no prefixes or suffixes). For `corporation`, the full, incorporated name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The recipient's full, legal name. For type `individual`, should be in the format `First Last`, `First Middle Last`, or `First M Last` (no prefixes or suffixes). For `corporation`, the full, incorporated name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The recipient's tax ID, as a string. For type `individual`, the full SSN; for type `corporation`, the full EIN.
     *
     * @return string
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    /**
     * The recipient's tax ID, as a string. For type `individual`, the full SSN; for type `corporation`, the full EIN.
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(?string $taxId): self
    {
        $this->taxId = $taxId;

        return $this;
    }
}
