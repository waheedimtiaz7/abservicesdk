<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

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
     * @var \AbnServiceSDK\StructType\ActivityResponse|null
     */
    protected ?\AbnServiceSDK\StructType\ActivityResponse $ActivityReportResult = null;
    /**
     * Constructor method for ActivityReportResponse
     * @uses ActivityReportResponse::setActivityReportResult()
     * @param \AbnServiceSDK\StructType\ActivityResponse $activityReportResult
     */
    public function __construct(?\AbnServiceSDK\StructType\ActivityResponse $activityReportResult = null)
    {
        $this
            ->setActivityReportResult($activityReportResult);
    }
    /**
     * Get ActivityReportResult value
     * @return \AbnServiceSDK\StructType\ActivityResponse|null
     */
    public function getActivityReportResult(): ?\AbnServiceSDK\StructType\ActivityResponse
    {
        return $this->ActivityReportResult;
    }
    /**
     * Set ActivityReportResult value
     * @param \AbnServiceSDK\StructType\ActivityResponse $activityReportResult
     * @return \AbnServiceSDK\StructType\ActivityReportResponse
     */
    public function setActivityReportResult(?\AbnServiceSDK\StructType\ActivityResponse $activityReportResult = null): self
    {
        $this->ActivityReportResult = $activityReportResult;
        
        return $this;
    }
}
