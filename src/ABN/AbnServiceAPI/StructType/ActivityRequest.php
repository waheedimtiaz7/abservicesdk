<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ActivityRequest extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StartDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EndDate;
    /**
     * The Guid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Guid = null;
    /**
     * Constructor method for ActivityRequest
     * @uses ActivityRequest::setStartDate()
     * @uses ActivityRequest::setEndDate()
     * @uses ActivityRequest::setGuid()
     * @param string $startDate
     * @param string $endDate
     * @param string $guid
     */
    public function __construct(string $startDate, string $endDate, ?string $guid = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setGuid($guid);
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \ABN\AbnServiceAPI\StructType\ActivityRequest
     */
    public function setStartDate(string $startDate): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \ABN\AbnServiceAPI\StructType\ActivityRequest
     */
    public function setEndDate(string $endDate): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get Guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->Guid;
    }
    /**
     * Set Guid value
     * @param string $guid
     * @return \ABN\AbnServiceAPI\StructType\ActivityRequest
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        $this->Guid = $guid;
        
        return $this;
    }
}
