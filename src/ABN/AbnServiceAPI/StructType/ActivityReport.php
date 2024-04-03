<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityReport StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ActivityReport extends AbstractStructBase
{
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $startDate;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $endDate;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for ActivityReport
     * @uses ActivityReport::setStartDate()
     * @uses ActivityReport::setEndDate()
     * @uses ActivityReport::setAuthenticationGuid()
     * @param string $startDate
     * @param string $endDate
     * @param string $authenticationGuid
     */
    public function __construct(string $startDate, string $endDate, ?string $authenticationGuid = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get startDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \ABN\AbnServiceAPI\StructType\ActivityReport
     */
    public function setStartDate(string $startDate): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \ABN\AbnServiceAPI\StructType\ActivityReport
     */
    public function setEndDate(string $endDate): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get authenticationGuid value
     * @return string|null
     */
    public function getAuthenticationGuid(): ?string
    {
        return $this->authenticationGuid;
    }
    /**
     * Set authenticationGuid value
     * @param string $authenticationGuid
     * @return \ABN\AbnServiceAPI\StructType\ActivityReport
     */
    public function setAuthenticationGuid(?string $authenticationGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($authenticationGuid) && !is_string($authenticationGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationGuid, true), gettype($authenticationGuid)), __LINE__);
        }
        $this->authenticationGuid = $authenticationGuid;
        
        return $this;
    }
}
