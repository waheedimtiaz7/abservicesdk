<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GoodsAndServicesTax StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GoodsAndServicesTax extends AbstractStructBase
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
     * Constructor method for GoodsAndServicesTax
     * @uses GoodsAndServicesTax::setEffectiveFrom()
     * @uses GoodsAndServicesTax::setEffectiveTo()
     * @param string $effectiveFrom
     * @param string $effectiveTo
     */
    public function __construct(string $effectiveFrom, string $effectiveTo)
    {
        $this
            ->setEffectiveFrom($effectiveFrom)
            ->setEffectiveTo($effectiveTo);
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
     * @return \AbnServiceSDK\StructType\GoodsAndServicesTax
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
     * @return \AbnServiceSDK\StructType\GoodsAndServicesTax
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
}
