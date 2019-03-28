<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1AccountsAccountPersonsPersonPostBodyRelationship
{
    /**
     * @var bool
     */
    protected $accountOpener;
    /**
     * @var bool
     */
    protected $director;
    /**
     * @var bool
     */
    protected $owner;
    /**
     * @var mixed
     */
    protected $percentOwnership;
    /**
     * @var string
     */
    protected $title;

    /**
     * @return bool
     */
    public function getAccountOpener(): ?bool
    {
        return $this->accountOpener;
    }

    /**
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
     * @return bool
     */
    public function getDirector(): ?bool
    {
        return $this->director;
    }

    /**
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
     * @return bool
     */
    public function getOwner(): ?bool
    {
        return $this->owner;
    }

    /**
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
     * @return mixed
     */
    public function getPercentOwnership()
    {
        return $this->percentOwnership;
    }

    /**
     * @param mixed $percentOwnership
     *
     * @return self
     */
    public function setPercentOwnership($percentOwnership): self
    {
        $this->percentOwnership = $percentOwnership;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
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
