<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchByABNStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchByABNStatus extends AbstractStructBase
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
     * The activeABNsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $activeABNsOnly = null;
    /**
     * The currentGSTRegistrationOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currentGSTRegistrationOnly = null;
    /**
     * The entityTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityTypeCode = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for SearchByABNStatus
     * @uses SearchByABNStatus::setPostcode()
     * @uses SearchByABNStatus::setActiveABNsOnly()
     * @uses SearchByABNStatus::setCurrentGSTRegistrationOnly()
     * @uses SearchByABNStatus::setEntityTypeCode()
     * @uses SearchByABNStatus::setAuthenticationGuid()
     * @param string $postcode
     * @param string $activeABNsOnly
     * @param string $currentGSTRegistrationOnly
     * @param string $entityTypeCode
     * @param string $authenticationGuid
     */
    public function __construct(?string $postcode = null, ?string $activeABNsOnly = null, ?string $currentGSTRegistrationOnly = null, ?string $entityTypeCode = null, ?string $authenticationGuid = null)
    {
        $this
            ->setPostcode($postcode)
            ->setActiveABNsOnly($activeABNsOnly)
            ->setCurrentGSTRegistrationOnly($currentGSTRegistrationOnly)
            ->setEntityTypeCode($entityTypeCode)
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
     * @return \AbnServiceSDK\StructType\SearchByABNStatus
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
     * Get activeABNsOnly value
     * @return string|null
     */
    public function getActiveABNsOnly(): ?string
    {
        return $this->activeABNsOnly;
    }
    /**
     * Set activeABNsOnly value
     * @param string $activeABNsOnly
     * @return \AbnServiceSDK\StructType\SearchByABNStatus
     */
    public function setActiveABNsOnly(?string $activeABNsOnly = null): self
    {
        // validation for constraint: string
        if (!is_null($activeABNsOnly) && !is_string($activeABNsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activeABNsOnly, true), gettype($activeABNsOnly)), __LINE__);
        }
        $this->activeABNsOnly = $activeABNsOnly;
        
        return $this;
    }
    /**
     * Get currentGSTRegistrationOnly value
     * @return string|null
     */
    public function getCurrentGSTRegistrationOnly(): ?string
    {
        return $this->currentGSTRegistrationOnly;
    }
    /**
     * Set currentGSTRegistrationOnly value
     * @param string $currentGSTRegistrationOnly
     * @return \AbnServiceSDK\StructType\SearchByABNStatus
     */
    public function setCurrentGSTRegistrationOnly(?string $currentGSTRegistrationOnly = null): self
    {
        // validation for constraint: string
        if (!is_null($currentGSTRegistrationOnly) && !is_string($currentGSTRegistrationOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentGSTRegistrationOnly, true), gettype($currentGSTRegistrationOnly)), __LINE__);
        }
        $this->currentGSTRegistrationOnly = $currentGSTRegistrationOnly;
        
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
     * @return \AbnServiceSDK\StructType\SearchByABNStatus
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
     * @return \AbnServiceSDK\StructType\SearchByABNStatus
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
