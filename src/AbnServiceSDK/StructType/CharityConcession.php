<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityConcession StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CharityConcession extends AbstractStructBase
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
     * The endorsementType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endorsementType = null;
    /**
     * Constructor method for CharityConcession
     * @uses CharityConcession::setEffectiveFrom()
     * @uses CharityConcession::setEffectiveTo()
     * @uses CharityConcession::setEndorsementType()
     * @param string $effectiveFrom
     * @param string $effectiveTo
     * @param string $endorsementType
     */
    public function __construct(string $effectiveFrom, string $effectiveTo, ?string $endorsementType = null)
    {
        $this
            ->setEffectiveFrom($effectiveFrom)
            ->setEffectiveTo($effectiveTo)
            ->setEndorsementType($endorsementType);
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
     * @return \AbnServiceSDK\StructType\CharityConcession
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
     * @return \AbnServiceSDK\StructType\CharityConcession
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
     * Get endorsementType value
     * @return string|null
     */
    public function getEndorsementType(): ?string
    {
        return $this->endorsementType;
    }
    /**
     * Set endorsementType value
     * @param string $endorsementType
     * @return \AbnServiceSDK\StructType\CharityConcession
     */
    public function setEndorsementType(?string $endorsementType = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsementType) && !is_string($endorsementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsementType, true), gettype($endorsementType)), __LINE__);
        }
        $this->endorsementType = $endorsementType;
        
        return $this;
    }
}
