<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EntityStatus extends AbstractStructBase
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
     * The entityStatusCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityStatusCode = null;
    /**
     * Constructor method for EntityStatus
     * @uses EntityStatus::setEffectiveFrom()
     * @uses EntityStatus::setEffectiveTo()
     * @uses EntityStatus::setEntityStatusCode()
     * @param string $effectiveFrom
     * @param string $effectiveTo
     * @param string $entityStatusCode
     */
    public function __construct(string $effectiveFrom, string $effectiveTo, ?string $entityStatusCode = null)
    {
        $this
            ->setEffectiveFrom($effectiveFrom)
            ->setEffectiveTo($effectiveTo)
            ->setEntityStatusCode($entityStatusCode);
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
     * @return \ABN\AbnServiceAPI\StructType\EntityStatus
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
     * @return \ABN\AbnServiceAPI\StructType\EntityStatus
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
     * Get entityStatusCode value
     * @return string|null
     */
    public function getEntityStatusCode(): ?string
    {
        return $this->entityStatusCode;
    }
    /**
     * Set entityStatusCode value
     * @param string $entityStatusCode
     * @return \ABN\AbnServiceAPI\StructType\EntityStatus
     */
    public function setEntityStatusCode(?string $entityStatusCode = null): self
    {
        // validation for constraint: string
        if (!is_null($entityStatusCode) && !is_string($entityStatusCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityStatusCode, true), gettype($entityStatusCode)), __LINE__);
        }
        $this->entityStatusCode = $entityStatusCode;
        
        return $this;
    }
}
