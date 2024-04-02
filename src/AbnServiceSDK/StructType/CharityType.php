<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CharityType extends AbstractStructBase
{
    /**
     * The effectiveFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $effectiveFrom;
    /**
     * The effectiveTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $effectiveTo;
    /**
     * The charityTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $charityTypeDescription = null;
    /**
     * Constructor method for CharityType
     * @uses CharityType::setEffectiveFrom()
     * @uses CharityType::setEffectiveTo()
     * @uses CharityType::setCharityTypeDescription()
     * @param string $effectiveFrom
     * @param string $effectiveTo
     * @param string $charityTypeDescription
     */
    public function __construct(string $effectiveFrom, string $effectiveTo, ?string $charityTypeDescription = null)
    {
        $this
            ->setEffectiveFrom($effectiveFrom)
            ->setEffectiveTo($effectiveTo)
            ->setCharityTypeDescription($charityTypeDescription);
    }
    /**
     * Get effectiveFrom value
     * @return string
     */
    public function getEffectiveFrom(): string
    {
        return $this->effectiveFrom;
    }
    /**
     * Set effectiveFrom value
     * @param string $effectiveFrom
     * @return \AbnServiceSDK\StructType\CharityType
     */
    public function setEffectiveFrom(string $effectiveFrom): self
    {
        // validation for constraint: string
        if (!is_null($effectiveFrom) && !is_string($effectiveFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveFrom, true), gettype($effectiveFrom)), __LINE__);
        }
        $this->effectiveFrom = $effectiveFrom;
        
        return $this;
    }
    /**
     * Get effectiveTo value
     * @return string
     */
    public function getEffectiveTo(): string
    {
        return $this->effectiveTo;
    }
    /**
     * Set effectiveTo value
     * @param string $effectiveTo
     * @return \AbnServiceSDK\StructType\CharityType
     */
    public function setEffectiveTo(string $effectiveTo): self
    {
        // validation for constraint: string
        if (!is_null($effectiveTo) && !is_string($effectiveTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveTo, true), gettype($effectiveTo)), __LINE__);
        }
        $this->effectiveTo = $effectiveTo;
        
        return $this;
    }
    /**
     * Get charityTypeDescription value
     * @return string|null
     */
    public function getCharityTypeDescription(): ?string
    {
        return $this->charityTypeDescription;
    }
    /**
     * Set charityTypeDescription value
     * @param string $charityTypeDescription
     * @return \AbnServiceSDK\StructType\CharityType
     */
    public function setCharityTypeDescription(?string $charityTypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($charityTypeDescription) && !is_string($charityTypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityTypeDescription, true), gettype($charityTypeDescription)), __LINE__);
        }
        $this->charityTypeDescription = $charityTypeDescription;
        
        return $this;
    }
}
