<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Stripe\Api\Model;

class ReportingReportRun
{
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $created;
    /**
     * If something should go wrong during the run, a message about the failure (populated when.
    `status=failed`).
     *
     * @var string
     */
    protected $error;
    /**
     * Unique identifier for the object.
     *
     * @var string
     */
    protected $id;
    /**
     * Always `true`: reports can only be run on live-mode data.
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
     * @var FinancialReportingFinanceReportRunRunParameters
     */
    protected $parameters;
    /**
     * The ID of the [report type](https://stripe.com/docs/reporting/statements/api#report-types) to run, such as `"balance.summary.1"`.
     *
     * @var string
     */
    protected $reportType;
    /**
     * @var File
     */
    protected $result;
    /**
     * Status of this report run. This will be `pending` when the run is initially created.
    When the run finishes, this will be set to `succeeded` and the `result` field will be populated.
    Rarely, we may encounter an error, at which point this will be set to `failed` and the `error` field will be populated.
     *
     * @var string
     */
    protected $status;
    /**
     * Timestamp at which this run successfully finished (populated when.
    `status=succeeded`). Measured in seconds since the Unix epoch.
     *
     * @var int
     */
    protected $succeededAt;

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
     * If something should go wrong during the run, a message about the failure (populated when.
    `status=failed`).
     *
     * @return string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * If something should go wrong during the run, a message about the failure (populated when.
    `status=failed`).
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

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
     * Always `true`: reports can only be run on live-mode data.
     *
     * @return bool
     */
    public function getLivemode(): ?bool
    {
        return $this->livemode;
    }

    /**
     * Always `true`: reports can only be run on live-mode data.
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
     * @return FinancialReportingFinanceReportRunRunParameters
     */
    public function getParameters(): ?FinancialReportingFinanceReportRunRunParameters
    {
        return $this->parameters;
    }

    /**
     * @param FinancialReportingFinanceReportRunRunParameters $parameters
     *
     * @return self
     */
    public function setParameters(?FinancialReportingFinanceReportRunRunParameters $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * The ID of the [report type](https://stripe.com/docs/reporting/statements/api#report-types) to run, such as `"balance.summary.1"`.
     *
     * @return string
     */
    public function getReportType(): ?string
    {
        return $this->reportType;
    }

    /**
     * The ID of the [report type](https://stripe.com/docs/reporting/statements/api#report-types) to run, such as `"balance.summary.1"`.
     *
     * @param string $reportType
     *
     * @return self
     */
    public function setReportType(?string $reportType): self
    {
        $this->reportType = $reportType;

        return $this;
    }

    /**
     * @return File
     */
    public function getResult(): ?File
    {
        return $this->result;
    }

    /**
     * @param File $result
     *
     * @return self
     */
    public function setResult(?File $result): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Status of this report run. This will be `pending` when the run is initially created.
    When the run finishes, this will be set to `succeeded` and the `result` field will be populated.
    Rarely, we may encounter an error, at which point this will be set to `failed` and the `error` field will be populated.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status of this report run. This will be `pending` when the run is initially created.
    When the run finishes, this will be set to `succeeded` and the `result` field will be populated.
    Rarely, we may encounter an error, at which point this will be set to `failed` and the `error` field will be populated.
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
     * Timestamp at which this run successfully finished (populated when.
    `status=succeeded`). Measured in seconds since the Unix epoch.
     *
     * @return int
     */
    public function getSucceededAt(): ?int
    {
        return $this->succeededAt;
    }

    /**
     * Timestamp at which this run successfully finished (populated when.
    `status=succeeded`). Measured in seconds since the Unix epoch.
     *
     * @param int $succeededAt
     *
     * @return self
     */
    public function setSucceededAt(?int $succeededAt): self
    {
        $this->succeededAt = $succeededAt;

        return $this;
    }
}