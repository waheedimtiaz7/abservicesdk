<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ActivityResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ActivityResponse extends AbstractStructBase
{
    /**
     * The ActivityRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ActivityRequest|null
     */
    protected ?\AbnServiceSDK\StructType\ActivityRequest $ActivityRequest = null;
    /**
     * The Activities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\ArrayType\ArrayOfActivity|null
     */
    protected ?\AbnServiceSDK\ArrayType\ArrayOfActivity $Activities = null;
    /**
     * The Exception
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseException|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseException $Exception = null;
    /**
     * Constructor method for ActivityResponse
     * @uses ActivityResponse::setActivityRequest()
     * @uses ActivityResponse::setActivities()
     * @uses ActivityResponse::setException()
     * @param \AbnServiceSDK\StructType\ActivityRequest $activityRequest
     * @param \AbnServiceSDK\ArrayType\ArrayOfActivity $activities
     * @param \AbnServiceSDK\StructType\ResponseException $exception
     */
    public function __construct(?\AbnServiceSDK\StructType\ActivityRequest $activityRequest = null, ?\AbnServiceSDK\ArrayType\ArrayOfActivity $activities = null, ?\AbnServiceSDK\StructType\ResponseException $exception = null)
    {
        $this
            ->setActivityRequest($activityRequest)
            ->setActivities($activities)
            ->setException($exception);
    }
    /**
     * Get ActivityRequest value
     * @return \AbnServiceSDK\StructType\ActivityRequest|null
     */
    public function getActivityRequest(): ?\AbnServiceSDK\StructType\ActivityRequest
    {
        return $this->ActivityRequest;
    }
    /**
     * Set ActivityRequest value
     * @param \AbnServiceSDK\StructType\ActivityRequest $activityRequest
     * @return \AbnServiceSDK\StructType\ActivityResponse
     */
    public function setActivityRequest(?\AbnServiceSDK\StructType\ActivityRequest $activityRequest = null): self
    {
        $this->ActivityRequest = $activityRequest;
        
        return $this;
    }
    /**
     * Get Activities value
     * @return \AbnServiceSDK\ArrayType\ArrayOfActivity|null
     */
    public function getActivities(): ?\AbnServiceSDK\ArrayType\ArrayOfActivity
    {
        return $this->Activities;
    }
    /**
     * Set Activities value
     * @param \AbnServiceSDK\ArrayType\ArrayOfActivity $activities
     * @return \AbnServiceSDK\StructType\ActivityResponse
     */
    public function setActivities(?\AbnServiceSDK\ArrayType\ArrayOfActivity $activities = null): self
    {
        $this->Activities = $activities;
        
        return $this;
    }
    /**
     * Get Exception value
     * @return \AbnServiceSDK\StructType\ResponseException|null
     */
    public function getException(): ?\AbnServiceSDK\StructType\ResponseException
    {
        return $this->Exception;
    }
    /**
     * Set Exception value
     * @param \AbnServiceSDK\StructType\ResponseException $exception
     * @return \AbnServiceSDK\StructType\ActivityResponse
     */
    public function setException(?\AbnServiceSDK\StructType\ResponseException $exception = null): self
    {
        $this->Exception = $exception;
        
        return $this;
    }
}
