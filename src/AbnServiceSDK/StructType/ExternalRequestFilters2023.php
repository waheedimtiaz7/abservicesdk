<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilters2023 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilters2023 extends AbstractStructBase
{
    /**
     * The nameType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \AbnServiceSDK\StructType\ExternalRequestFilterNameType2023
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestFilterNameType2023 $nameType;
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $postcode;
    /**
     * The stateCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode;
    /**
     * The activeABNsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $activeABNsOnly;
    /**
     * Constructor method for ExternalRequestFilters2023
     * @uses ExternalRequestFilters2023::setNameType()
     * @uses ExternalRequestFilters2023::setPostcode()
     * @uses ExternalRequestFilters2023::setStateCode()
     * @uses ExternalRequestFilters2023::setActiveABNsOnly()
     * @param \AbnServiceSDK\StructType\ExternalRequestFilterNameType2023 $nameType
     * @param string $postcode
     * @param \AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode
     * @param string $activeABNsOnly
     */
    public function __construct(?\AbnServiceSDK\StructType\ExternalRequestFilterNameType2023 $nameType, ?string $postcode, ?\AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode, ?string $activeABNsOnly)
    {
        $this
            ->setNameType($nameType)
            ->setPostcode($postcode)
            ->setStateCode($stateCode)
            ->setActiveABNsOnly($activeABNsOnly);
    }
    /**
     * Get nameType value
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterNameType2023
     */
    public function getNameType(): \AbnServiceSDK\StructType\ExternalRequestFilterNameType2023
    {
        return $this->nameType;
    }
    /**
     * Set nameType value
     * @param \AbnServiceSDK\StructType\ExternalRequestFilterNameType2023 $nameType
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters2023
     */
    public function setNameType(?\AbnServiceSDK\StructType\ExternalRequestFilterNameType2023 $nameType): self
    {
        $this->nameType = $nameType;
        
        return $this;
    }
    /**
     * Get postcode value
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters2023
     */
    public function setPostcode(?string $postcode): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        
        return $this;
    }
    /**
     * Get stateCode value
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
     */
    public function getStateCode(): \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
    {
        return $this->stateCode;
    }
    /**
     * Set stateCode value
     * @param \AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters2023
     */
    public function setStateCode(?\AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode): self
    {
        $this->stateCode = $stateCode;
        
        return $this;
    }
    /**
     * Get activeABNsOnly value
     * @return string
     */
    public function getActiveABNsOnly(): string
    {
        return $this->activeABNsOnly;
    }
    /**
     * Set activeABNsOnly value
     * @param string $activeABNsOnly
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters2023
     */
    public function setActiveABNsOnly(?string $activeABNsOnly): self
    {
        // validation for constraint: string
        if (!is_null($activeABNsOnly) && !is_string($activeABNsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activeABNsOnly, true), gettype($activeABNsOnly)), __LINE__);
        }
        $this->activeABNsOnly = $activeABNsOnly;
        
        return $this;
    }
}
