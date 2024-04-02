<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilterNameType2012 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilterNameType2012 extends AbstractStructBase
{
    /**
     * The tradingName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tradingName = null;
    /**
     * The legalName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $legalName = null;
    /**
     * The businessName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $businessName = null;
    /**
     * Constructor method for ExternalRequestFilterNameType2012
     * @uses ExternalRequestFilterNameType2012::setTradingName()
     * @uses ExternalRequestFilterNameType2012::setLegalName()
     * @uses ExternalRequestFilterNameType2012::setBusinessName()
     * @param string $tradingName
     * @param string $legalName
     * @param string $businessName
     */
    public function __construct(?string $tradingName = null, ?string $legalName = null, ?string $businessName = null)
    {
        $this
            ->setTradingName($tradingName)
            ->setLegalName($legalName)
            ->setBusinessName($businessName);
    }
    /**
     * Get tradingName value
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->tradingName;
    }
    /**
     * Set tradingName value
     * @param string $tradingName
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterNameType2012
     */
    public function setTradingName(?string $tradingName = null): self
    {
        // validation for constraint: string
        if (!is_null($tradingName) && !is_string($tradingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradingName, true), gettype($tradingName)), __LINE__);
        }
        $this->tradingName = $tradingName;
        
        return $this;
    }
    /**
     * Get legalName value
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }
    /**
     * Set legalName value
     * @param string $legalName
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterNameType2012
     */
    public function setLegalName(?string $legalName = null): self
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalName, true), gettype($legalName)), __LINE__);
        }
        $this->legalName = $legalName;
        
        return $this;
    }
    /**
     * Get businessName value
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }
    /**
     * Set businessName value
     * @param string $businessName
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterNameType2012
     */
    public function setBusinessName(?string $businessName = null): self
    {
        // validation for constraint: string
        if (!is_null($businessName) && !is_string($businessName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessName, true), gettype($businessName)), __LINE__);
        }
        $this->businessName = $businessName;
        
        return $this;
    }
}
