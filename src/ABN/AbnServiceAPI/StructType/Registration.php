<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Registration StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Registration extends AbstractStructBase
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
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for Registration
     * @uses Registration::setEffectiveFrom()
     * @uses Registration::setEffectiveTo()
     * @uses Registration::setStatus()
     * @param string $effectiveFrom
     * @param string $effectiveTo
     * @param string $status
     */
    public function __construct(string $effectiveFrom, string $effectiveTo, ?string $status = null)
    {
        $this
            ->setEffectiveFrom($effectiveFrom)
            ->setEffectiveTo($effectiveTo)
            ->setStatus($status);
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
     * @return \ABN\AbnServiceAPI\StructType\Registration
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
     * @return \ABN\AbnServiceAPI\StructType\Registration
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
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \ABN\AbnServiceAPI\StructType\Registration
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
