<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilterNameType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilterNameType extends AbstractStructBase
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
     * Constructor method for ExternalRequestFilterNameType
     * @uses ExternalRequestFilterNameType::setTradingName()
     * @uses ExternalRequestFilterNameType::setLegalName()
     * @param string $tradingName
     * @param string $legalName
     */
    public function __construct(?string $tradingName = null, ?string $legalName = null)
    {
        $this
            ->setTradingName($tradingName)
            ->setLegalName($legalName);
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType
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
}
