<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

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
     * @var \ABN\AbnServiceAPI\StructType\ActivityRequest|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\ActivityRequest $ActivityRequest = null;
    /**
     * The Activities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\ArrayType\ArrayOfActivity|null
     */
    protected ?\ABN\AbnServiceAPI\ArrayType\ArrayOfActivity $Activities = null;
    /**
     * The Exception
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\ResponseException|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\ResponseException $Exception = null;
    /**
     * Constructor method for ActivityResponse
     * @uses ActivityResponse::setActivityRequest()
     * @uses ActivityResponse::setActivities()
     * @uses ActivityResponse::setException()
     * @param \ABN\AbnServiceAPI\StructType\ActivityRequest $activityRequest
     * @param \ABN\AbnServiceAPI\ArrayType\ArrayOfActivity $activities
     * @param \ABN\AbnServiceAPI\StructType\ResponseException $exception
     */
    public function __construct(?\ABN\AbnServiceAPI\StructType\ActivityRequest $activityRequest = null, ?\ABN\AbnServiceAPI\ArrayType\ArrayOfActivity $activities = null, ?\ABN\AbnServiceAPI\StructType\ResponseException $exception = null)
    {
        $this
            ->setActivityRequest($activityRequest)
            ->setActivities($activities)
            ->setException($exception);
    }
    /**
     * Get ActivityRequest value
     * @return \ABN\AbnServiceAPI\StructType\ActivityRequest|null
     */
    public function getActivityRequest(): ?\ABN\AbnServiceAPI\StructType\ActivityRequest
    {
        return $this->ActivityRequest;
    }
    /**
     * Set ActivityRequest value
     * @param \ABN\AbnServiceAPI\StructType\ActivityRequest $activityRequest
     * @return \ABN\AbnServiceAPI\StructType\ActivityResponse
     */
    public function setActivityRequest(?\ABN\AbnServiceAPI\StructType\ActivityRequest $activityRequest = null): self
    {
        $this->ActivityRequest = $activityRequest;
        
        return $this;
    }
    /**
     * Get Activities value
     * @return \ABN\AbnServiceAPI\ArrayType\ArrayOfActivity|null
     */
    public function getActivities(): ?\ABN\AbnServiceAPI\ArrayType\ArrayOfActivity
    {
        return $this->Activities;
    }
    /**
     * Set Activities value
     * @param \ABN\AbnServiceAPI\ArrayType\ArrayOfActivity $activities
     * @return \ABN\AbnServiceAPI\StructType\ActivityResponse
     */
    public function setActivities(?\ABN\AbnServiceAPI\ArrayType\ArrayOfActivity $activities = null): self
    {
        $this->Activities = $activities;
        
        return $this;
    }
    /**
     * Get Exception value
     * @return \ABN\AbnServiceAPI\StructType\ResponseException|null
     */
    public function getException(): ?\ABN\AbnServiceAPI\StructType\ResponseException
    {
        return $this->Exception;
    }
    /**
     * Set Exception value
     * @param \ABN\AbnServiceAPI\StructType\ResponseException $exception
     * @return \ABN\AbnServiceAPI\StructType\ActivityResponse
     */
    public function setException(?\ABN\AbnServiceAPI\StructType\ResponseException $exception = null): self
    {
        $this->Exception = $exception;
        
        return $this;
    }
}
