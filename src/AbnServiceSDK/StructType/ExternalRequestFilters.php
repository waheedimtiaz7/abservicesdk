<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilters StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilters extends AbstractStructBase
{
    /**
     * The nameType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \AbnServiceSDK\StructType\ExternalRequestFilterNameType
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestFilterNameType $nameType;
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
     * Constructor method for ExternalRequestFilters
     * @uses ExternalRequestFilters::setNameType()
     * @uses ExternalRequestFilters::setPostcode()
     * @uses ExternalRequestFilters::setStateCode()
     * @param \AbnServiceSDK\StructType\ExternalRequestFilterNameType $nameType
     * @param string $postcode
     * @param \AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode
     */
    public function __construct(?\AbnServiceSDK\StructType\ExternalRequestFilterNameType $nameType, ?string $postcode, ?\AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode)
    {
        $this
            ->setNameType($nameType)
            ->setPostcode($postcode)
            ->setStateCode($stateCode);
    }
    /**
     * Get nameType value
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterNameType
     */
    public function getNameType(): \AbnServiceSDK\StructType\ExternalRequestFilterNameType
    {
        return $this->nameType;
    }
    /**
     * Set nameType value
     * @param \AbnServiceSDK\StructType\ExternalRequestFilterNameType $nameType
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters
     */
    public function setNameType(?\AbnServiceSDK\StructType\ExternalRequestFilterNameType $nameType): self
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters
     */
    public function setStateCode(?\AbnServiceSDK\StructType\ExternalRequestFilterStateCode $stateCode): self
    {
        $this->stateCode = $stateCode;
        
        return $this;
    }
}
