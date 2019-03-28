<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class ScheduledQueryRun
{
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * When the query was run, Sigma contained a snapshot of your Stripe data at this time.
     *
     * @var int
     */
    protected $dataLoadTime;
    /**
     * @var SigmaScheduledQueryRunError
     */
    protected $error;
    /**
     * @var File
     */
    protected $file;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @var bool
     */
    protected $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @var string
     */
    protected $object;
    /**
     * Time at which the result expires and is no longer available for download.
     *
     * @var int
     */
    protected $resultAvailableUntil;
    /**
     * SQL for the query.
     *
     * @var string
     */
    protected $sql;
    /**
     * The query's execution status, which will be `completed` for successful runs, and `canceled`, `failed`, or `timed_out` otherwise.
     *
     * @var string
     */
    protected $status;
    /**
     * Title of the query.
     *
     * @var string
     */
    protected $title;

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * When the query was run, Sigma contained a snapshot of your Stripe data at this time.
     *
     * @return int
     */
    public function getDataLoadTime(): ?int
    {
        return $this->dataLoadTime;
    }

    /**
     * When the query was run, Sigma contained a snapshot of your Stripe data at this time.
     *
     * @param int $dataLoadTime
     *
     * @return self
     */
    public function setDataLoadTime(?int $dataLoadTime): self
    {
        $this->dataLoadTime = $dataLoadTime;

        return $this;
    }

    /**
     * @return SigmaScheduledQueryRunError
     */
    public function getError(): ?SigmaScheduledQueryRunError
    {
        return $this->error;
    }

    /**
     * @param SigmaScheduledQueryRunError $error
     *
     * @return self
     */
    public function setError(?SigmaScheduledQueryRunError $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return File
     */
    public function getFile(): ?File
    {
        return $this->file;
    }

    /**
     * @param File $file
     *
     * @return self
     */
    public function setFile(?File $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Unique identifier for the object.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier for the object.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @return bool
     */
    public function getLivemode(): ?bool
    {
        return $this->livemode;
    }

    /**
     * Has the value `true` if the object exists in live mode or the value `false` if the object exists in test mode.
     *
     * @param bool $livemode
     *
     * @return self
     */
    public function setLivemode(?bool $livemode): self
    {
        $this->livemode = $livemode;

        return $this;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @return string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * String representing the object's type. Objects of the same type share the same value.
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Time at which the result expires and is no longer available for download.
     *
     * @return int
     */
    public function getResultAvailableUntil(): ?int
    {
        return $this->resultAvailableUntil;
    }

    /**
     * Time at which the result expires and is no longer available for download.
     *
     * @param int $resultAvailableUntil
     *
     * @return self
     */
    public function setResultAvailableUntil(?int $resultAvailableUntil): self
    {
        $this->resultAvailableUntil = $resultAvailableUntil;

        return $this;
    }

    /**
     * SQL for the query.
     *
     * @return string
     */
    public function getSql(): ?string
    {
        return $this->sql;
    }

    /**
     * SQL for the query.
     *
     * @param string $sql
     *
     * @return self
     */
    public function setSql(?string $sql): self
    {
        $this->sql = $sql;

        return $this;
    }

    /**
     * The query's execution status, which will be `completed` for successful runs, and `canceled`, `failed`, or `timed_out` otherwise.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The query's execution status, which will be `completed` for successful runs, and `canceled`, `failed`, or `timed_out` otherwise.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Title of the query.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Title of the query.
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