<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilters2012 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilters2012 extends AbstractStructBase
{
    /**
     * The nameType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012
     */
    protected ?\ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012 $nameType;
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
     * @var \ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode
     */
    protected ?\ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode $stateCode;
    /**
     * Constructor method for ExternalRequestFilters2012
     * @uses ExternalRequestFilters2012::setNameType()
     * @uses ExternalRequestFilters2012::setPostcode()
     * @uses ExternalRequestFilters2012::setStateCode()
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012 $nameType
     * @param string $postcode
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode $stateCode
     */
    public function __construct(?\ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012 $nameType, ?string $postcode, ?\ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode $stateCode)
    {
        $this
            ->setNameType($nameType)
            ->setPostcode($postcode)
            ->setStateCode($stateCode);
    }
    /**
     * Get nameType value
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012
     */
    public function getNameType(): \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012
    {
        return $this->nameType;
    }
    /**
     * Set nameType value
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012 $nameType
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2012
     */
    public function setNameType(?\ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2012 $nameType): self
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2012
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode
     */
    public function getStateCode(): \ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode
    {
        return $this->stateCode;
    }
    /**
     * Set stateCode value
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode $stateCode
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2012
     */
    public function setStateCode(?\ABN\AbnServiceAPI\StructType\ExternalRequestFilterStateCode $stateCode): self
    {
        $this->stateCode = $stateCode;
        
        return $this;
    }
}
