<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Identifier StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Identifier extends AbstractStructBase
{
    /**
     * The replacedFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $replacedFrom;
    /**
     * The identifierValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifierValue = null;
    /**
     * The isCurrentIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $isCurrentIndicator = null;
    /**
     * The replacedIdentifierValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $replacedIdentifierValue = null;
    /**
     * Constructor method for Identifier
     * @uses Identifier::setReplacedFrom()
     * @uses Identifier::setIdentifierValue()
     * @uses Identifier::setIsCurrentIndicator()
     * @uses Identifier::setReplacedIdentifierValue()
     * @param string $replacedFrom
     * @param string $identifierValue
     * @param string $isCurrentIndicator
     * @param string $replacedIdentifierValue
     */
    public function __construct(string $replacedFrom, ?string $identifierValue = null, ?string $isCurrentIndicator = null, ?string $replacedIdentifierValue = null)
    {
        $this
            ->setReplacedFrom($replacedFrom)
            ->setIdentifierValue($identifierValue)
            ->setIsCurrentIndicator($isCurrentIndicator)
            ->setReplacedIdentifierValue($replacedIdentifierValue);
    }
    /**
     * Get replacedFrom value
     * @return string
     */
    public function getReplacedFrom(): string
    {
        return $this->replacedFrom;
    }
    /**
     * Set replacedFrom value
     * @param string $replacedFrom
     * @return \AbnServiceSDK\StructType\Identifier
     */
    public function setReplacedFrom(string $replacedFrom): self
    {
        // validation for constraint: string
        if (!is_null($replacedFrom) && !is_string($replacedFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replacedFrom, true), gettype($replacedFrom)), __LINE__);
        }
        $this->replacedFrom = $replacedFrom;
        
        return $this;
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
     * @return \AbnServiceSDK\StructType\Identifier
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
     * Get isCurrentIndicator value
     * @return string|null
     */
    public function getIsCurrentIndicator(): ?string
    {
        return $this->isCurrentIndicator;
    }
    /**
     * Set isCurrentIndicator value
     * @param string $isCurrentIndicator
     * @return \AbnServiceSDK\StructType\Identifier
     */
    public function setIsCurrentIndicator(?string $isCurrentIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($isCurrentIndicator) && !is_string($isCurrentIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isCurrentIndicator, true), gettype($isCurrentIndicator)), __LINE__);
        }
        $this->isCurrentIndicator = $isCurrentIndicator;
        
        return $this;
    }
    /**
     * Get replacedIdentifierValue value
     * @return string|null
     */
    public function getReplacedIdentifierValue(): ?string
    {
        return $this->replacedIdentifierValue;
    }
    /**
     * Set replacedIdentifierValue value
     * @param string $replacedIdentifierValue
     * @return \AbnServiceSDK\StructType\Identifier
     */
    public function setReplacedIdentifierValue(?string $replacedIdentifierValue = null): self
    {
        // validation for constraint: string
        if (!is_null($replacedIdentifierValue) && !is_string($replacedIdentifierValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replacedIdentifierValue, true), gettype($replacedIdentifierValue)), __LINE__);
        }
        $this->replacedIdentifierValue = $replacedIdentifierValue;
        
        return $this;
    }
}
