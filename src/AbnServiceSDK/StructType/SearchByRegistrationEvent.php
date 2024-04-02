<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchByRegistrationEvent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchByRegistrationEvent extends AbstractStructBase
{
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The entityTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityTypeCode = null;
    /**
     * The month
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $month = null;
    /**
     * The year
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $year = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for SearchByRegistrationEvent
     * @uses SearchByRegistrationEvent::setPostcode()
     * @uses SearchByRegistrationEvent::setState()
     * @uses SearchByRegistrationEvent::setEntityTypeCode()
     * @uses SearchByRegistrationEvent::setMonth()
     * @uses SearchByRegistrationEvent::setYear()
     * @uses SearchByRegistrationEvent::setAuthenticationGuid()
     * @param string $postcode
     * @param string $state
     * @param string $entityTypeCode
     * @param string $month
     * @param string $year
     * @param string $authenticationGuid
     */
    public function __construct(?string $postcode = null, ?string $state = null, ?string $entityTypeCode = null, ?string $month = null, ?string $year = null, ?string $authenticationGuid = null)
    {
        $this
            ->setPostcode($postcode)
            ->setState($state)
            ->setEntityTypeCode($entityTypeCode)
            ->setMonth($month)
            ->setYear($year)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \AbnServiceSDK\StructType\SearchByRegistrationEvent
     */
    public function setPostcode(?string $postcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \AbnServiceSDK\StructType\SearchByRegistrationEvent
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get entityTypeCode value
     * @return string|null
     */
    public function getEntityTypeCode(): ?string
    {
        return $this->entityTypeCode;
    }
    /**
     * Set entityTypeCode value
     * @param string $entityTypeCode
     * @return \AbnServiceSDK\StructType\SearchByRegistrationEvent
     */
    public function setEntityTypeCode(?string $entityTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($entityTypeCode) && !is_string($entityTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityTypeCode, true), gettype($entityTypeCode)), __LINE__);
        }
        $this->entityTypeCode = $entityTypeCode;
        
        return $this;
    }
    /**
     * Get month value
     * @return string|null
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param string $month
     * @return \AbnServiceSDK\StructType\SearchByRegistrationEvent
     */
    public function setMonth(?string $month = null): self
    {
        // validation for constraint: string
        if (!is_null($month) && !is_string($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get year value
     * @return string|null
     */
    public function getYear(): ?string
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param string $year
     * @return \AbnServiceSDK\StructType\SearchByRegistrationEvent
     */
    public function setYear(?string $year = null): self
    {
        // validation for constraint: string
        if (!is_null($year) && !is_string($year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
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
     * @return \AbnServiceSDK\StructType\SearchByRegistrationEvent
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
