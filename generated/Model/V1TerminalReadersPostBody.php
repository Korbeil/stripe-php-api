<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class V1TerminalReadersPostBody
{
    /**
     * Specifies which fields in the response should be expanded.
     *
     * @var string[]
     */
    protected $expand;
    /**
     * Custom label given to the reader for easier identification. If no label is specified, the registration code will be used.
     *
     * @var string
     */
    protected $label;
    /**
     * The location to assign the reader to. If no location is specified, the reader will be assigned to the account's default location.
     *
     * @var string
     */
    protected $location;
    /**
     * To group objects on your platform account by connected account, set this parameter to the connected account operating your application.
     *
     * @var string
     */
    protected $operatorAccount;
    /**
     * A code generated by the reader used for registering to an account.
     *
     * @var string
     */
    protected $registrationCode;

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
     * Custom label given to the reader for easier identification. If no label is specified, the registration code will be used.
     *
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Custom label given to the reader for easier identification. If no label is specified, the registration code will be used.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * The location to assign the reader to. If no location is specified, the reader will be assigned to the account's default location.
     *
     * @return string
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * The location to assign the reader to. If no location is specified, the reader will be assigned to the account's default location.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * To group objects on your platform account by connected account, set this parameter to the connected account operating your application.
     *
     * @return string
     */
    public function getOperatorAccount(): ?string
    {
        return $this->operatorAccount;
    }

    /**
     * To group objects on your platform account by connected account, set this parameter to the connected account operating your application.
     *
     * @param string $operatorAccount
     *
     * @return self
     */
    public function setOperatorAccount(?string $operatorAccount): self
    {
        $this->operatorAccount = $operatorAccount;

        return $this;
    }

    /**
     * A code generated by the reader used for registering to an account.
     *
     * @return string
     */
    public function getRegistrationCode(): ?string
    {
        return $this->registrationCode;
    }

    /**
     * A code generated by the reader used for registering to an account.
     *
     * @param string $registrationCode
     *
     * @return self
     */
    public function setRegistrationCode(?string $registrationCode): self
    {
        $this->registrationCode = $registrationCode;

        return $this;
    }
}