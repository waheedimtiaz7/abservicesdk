<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestABNCharityFilter StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestABNCharityFilter extends ExternalRequestABNFilter
{
    /**
     * The state
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The charityTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $charityTypeCode = null;
    /**
     * The concessionTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $concessionTypeCode = null;
    /**
     * Constructor method for ExternalRequestABNCharityFilter
     * @uses ExternalRequestABNCharityFilter::setState()
     * @uses ExternalRequestABNCharityFilter::setCharityTypeCode()
     * @uses ExternalRequestABNCharityFilter::setConcessionTypeCode()
     * @param string $state
     * @param string $charityTypeCode
     * @param string $concessionTypeCode
     */
    public function __construct(?string $state = null, ?string $charityTypeCode = null, ?string $concessionTypeCode = null)
    {
        $this
            ->setState($state)
            ->setCharityTypeCode($charityTypeCode)
            ->setConcessionTypeCode($concessionTypeCode);
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNCharityFilter
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
     * Get charityTypeCode value
     * @return string|null
     */
    public function getCharityTypeCode(): ?string
    {
        return $this->charityTypeCode;
    }
    /**
     * Set charityTypeCode value
     * @param string $charityTypeCode
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNCharityFilter
     */
    public function setCharityTypeCode(?string $charityTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($charityTypeCode) && !is_string($charityTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityTypeCode, true), gettype($charityTypeCode)), __LINE__);
        }
        $this->charityTypeCode = $charityTypeCode;
        
        return $this;
    }
    /**
     * Get concessionTypeCode value
     * @return string|null
     */
    public function getConcessionTypeCode(): ?string
    {
        return $this->concessionTypeCode;
    }
    /**
     * Set concessionTypeCode value
     * @param string $concessionTypeCode
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNCharityFilter
     */
    public function setConcessionTypeCode(?string $concessionTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($concessionTypeCode) && !is_string($concessionTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($concessionTypeCode, true), gettype($concessionTypeCode)), __LINE__);
        }
        $this->concessionTypeCode = $concessionTypeCode;
        
        return $this;
    }
}
