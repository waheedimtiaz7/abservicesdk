<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressSimple StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressSimple extends Address
{
    /**
     * The isCurrentIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $isCurrentIndicator = null;
    /**
     * Constructor method for AddressSimple
     * @uses AddressSimple::setIsCurrentIndicator()
     * @param string $isCurrentIndicator
     */
    public function __construct(?string $isCurrentIndicator = null)
    {
        $this
            ->setIsCurrentIndicator($isCurrentIndicator);
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
     * @return \ABN\AbnServiceAPI\StructType\AddressSimple
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
}
