<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentifierSummary StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IdentifierSummary extends AbstractStructBase
{
    /**
     * The identifierValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifierValue = null;
    /**
     * The identifierStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifierStatus = null;
    /**
     * Constructor method for IdentifierSummary
     * @uses IdentifierSummary::setIdentifierValue()
     * @uses IdentifierSummary::setIdentifierStatus()
     * @param string $identifierValue
     * @param string $identifierStatus
     */
    public function __construct(?string $identifierValue = null, ?string $identifierStatus = null)
    {
        $this
            ->setIdentifierValue($identifierValue)
            ->setIdentifierStatus($identifierStatus);
    }
    /**
     * Get identifierValue value
     * @return string|null
     */
    public function getIdentifierValue(): ?string
    {
        return $this->identifierValue;
    }
    /**
     * Set identifierValue value
     * @param string $identifierValue
     * @return \AbnServiceSDK\StructType\IdentifierSummary
     */
    public function setIdentifierValue(?string $identifierValue = null): self
    {
        // validation for constraint: string
        if (!is_null($identifierValue) && !is_string($identifierValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifierValue, true), gettype($identifierValue)), __LINE__);
        }
        $this->identifierValue = $identifierValue;
        
        return $this;
    }
    /**
     * Get identifierStatus value
     * @return string|null
     */
    public function getIdentifierStatus(): ?string
    {
        return $this->identifierStatus;
    }
    /**
     * Set identifierStatus value
     * @param string $identifierStatus
     * @return \AbnServiceSDK\StructType\IdentifierSummary
     */
    public function setIdentifierStatus(?string $identifierStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($identifierStatus) && !is_string($identifierStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifierStatus, true), gettype($identifierStatus)), __LINE__);
        }
        $this->identifierStatus = $identifierStatus;
        
        return $this;
    }
}
