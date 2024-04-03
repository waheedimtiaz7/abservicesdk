<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilters2017 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilters2017 extends ExternalRequestFilters2012
{
    /**
     * The activeABNsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $activeABNsOnly;
    /**
     * Constructor method for ExternalRequestFilters2017
     * @uses ExternalRequestFilters2017::setActiveABNsOnly()
     * @param string $activeABNsOnly
     */
    public function __construct(?string $activeABNsOnly)
    {
        $this
            ->setActiveABNsOnly($activeABNsOnly);
    }
    /**
     * Get activeABNsOnly value
     * @return string
     */
    public function getActiveABNsOnly(): string
    {
        return $this->activeABNsOnly;
    }
    /**
     * Set activeABNsOnly value
     * @param string $activeABNsOnly
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2017
     */
    public function setActiveABNsOnly(?string $activeABNsOnly): self
    {
        // validation for constraint: string
        if (!is_null($activeABNsOnly) && !is_string($activeABNsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activeABNsOnly, true), gettype($activeABNsOnly)), __LINE__);
        }
        $this->activeABNsOnly = $activeABNsOnly;
        
        return $this;
    }
}
