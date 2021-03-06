<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class PersonRelationship
{
    /**
     * Whether the person opened the account. This person provides information about themselves, and general information about the account.
     *
     * @var bool
     */
    protected $accountOpener;
    /**
     * Whether the person is a director of the account's legal entity.
     *
     * @var bool
     */
    protected $director;
    /**
     * Whether the person is an owner of the account’s legal entity.
     *
     * @var bool
     */
    protected $owner;
    /**
     * The percent owned by the person of the account's legal entity.
     *
     * @var float
     */
    protected $percentOwnership;
    /**
     * The person's title (e.g., CEO, Support Engineer).
     *
     * @var string
     */
    protected $title;

    /**
     * Whether the person opened the account. This person provides information about themselves, and general information about the account.
     *
     * @return bool
     */
    public function getAccountOpener(): ?bool
    {
        return $this->accountOpener;
    }

    /**
     * Whether the person opened the account. This person provides information about themselves, and general information about the account.
     *
     * @param bool $accountOpener
     *
     * @return self
     */
    public function setAccountOpener(?bool $accountOpener): self
    {
        $this->accountOpener = $accountOpener;

        return $this;
    }

    /**
     * Whether the person is a director of the account's legal entity.
     *
     * @return bool
     */
    public function getDirector(): ?bool
    {
        return $this->director;
    }

    /**
     * Whether the person is a director of the account's legal entity.
     *
     * @param bool $director
     *
     * @return self
     */
    public function setDirector(?bool $director): self
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Whether the person is an owner of the account’s legal entity.
     *
     * @return bool
     */
    public function getOwner(): ?bool
    {
        return $this->owner;
    }

    /**
     * Whether the person is an owner of the account’s legal entity.
     *
     * @param bool $owner
     *
     * @return self
     */
    public function setOwner(?bool $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * The percent owned by the person of the account's legal entity.
     *
     * @return float
     */
    public function getPercentOwnership(): ?float
    {
        return $this->percentOwnership;
    }

    /**
     * The percent owned by the person of the account's legal entity.
     *
     * @param float $percentOwnership
     *
     * @return self
     */
    public function setPercentOwnership(?float $percentOwnership): self
    {
        $this->percentOwnership = $percentOwnership;

        return $this;
    }

    /**
     * The person's title (e.g., CEO, Support Engineer).
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * The person's title (e.g., CEO, Support Engineer).
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
