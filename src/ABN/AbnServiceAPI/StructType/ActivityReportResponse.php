<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityReportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ActivityReportResponse extends AbstractStructBase
{
    /**
     * The ActivityReportResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\ActivityResponse|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\ActivityResponse $ActivityReportResult = null;
    /**
     * Constructor method for ActivityReportResponse
     * @uses ActivityReportResponse::setActivityReportResult()
     * @param \ABN\AbnServiceAPI\StructType\ActivityResponse $activityReportResult
     */
    public function __construct(?\ABN\AbnServiceAPI\StructType\ActivityResponse $activityReportResult = null)
    {
        $this
            ->setActivityReportResult($activityReportResult);
    }
    /**
     * Get ActivityReportResult value
     * @return \ABN\AbnServiceAPI\StructType\ActivityResponse|null
     */
    public function getActivityReportResult(): ?\ABN\AbnServiceAPI\StructType\ActivityResponse
    {
        return $this->ActivityReportResult;
    }
    /**
     * Set ActivityReportResult value
     * @param \ABN\AbnServiceAPI\StructType\ActivityResponse $activityReportResult
     * @return \ABN\AbnServiceAPI\StructType\ActivityReportResponse
     */
    public function setActivityReportResult(?\ABN\AbnServiceAPI\StructType\ActivityResponse $activityReportResult = null): self
    {
        $this->ActivityReportResult = $activityReportResult;
        
        return $this;
    }
}
