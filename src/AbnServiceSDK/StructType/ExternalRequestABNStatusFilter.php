<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestABNStatusFilter StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestABNStatusFilter extends ExternalRequestABNFilter
{
    /**
     * The activeABNs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $activeABNs = null;
    /**
     * The currentGSTRegistrationOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currentGSTRegistrationOnly = null;
    /**
     * Constructor method for ExternalRequestABNStatusFilter
     * @uses ExternalRequestABNStatusFilter::setActiveABNs()
     * @uses ExternalRequestABNStatusFilter::setCurrentGSTRegistrationOnly()
     * @param string $activeABNs
     * @param string $currentGSTRegistrationOnly
     */
    public function __construct(?string $activeABNs = null, ?string $currentGSTRegistrationOnly = null)
    {
        $this
            ->setActiveABNs($activeABNs)
            ->setCurrentGSTRegistrationOnly($currentGSTRegistrationOnly);
    }
    /**
     * Get activeABNs value
     * @return string|null
     */
    public function getActiveABNs(): ?string
    {
        return $this->activeABNs;
    }
    /**
     * Set activeABNs value
     * @param string $activeABNs
     * @return \AbnServiceSDK\StructType\ExternalRequestABNStatusFilter
     */
    public function setActiveABNs(?string $activeABNs = null): self
    {
        // validation for constraint: string
        if (!is_null($activeABNs) && !is_string($activeABNs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activeABNs, true), gettype($activeABNs)), __LINE__);
        }
        $this->activeABNs = $activeABNs;
        
        return $this;
    }
    /**
     * Get currentGSTRegistrationOnly value
     * @return string|null
     */
    public function getCurrentGSTRegistrationOnly(): ?string
    {
        return $this->currentGSTRegistrationOnly;
    }
    /**
     * Set currentGSTRegistrationOnly value
     * @param string $currentGSTRegistrationOnly
     * @return \AbnServiceSDK\StructType\ExternalRequestABNStatusFilter
     */
    public function setCurrentGSTRegistrationOnly(?string $currentGSTRegistrationOnly = null): self
    {
        // validation for constraint: string
        if (!is_null($currentGSTRegistrationOnly) && !is_string($currentGSTRegistrationOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentGSTRegistrationOnly, true), gettype($currentGSTRegistrationOnly)), __LINE__);
        }
        $this->currentGSTRegistrationOnly = $currentGSTRegistrationOnly;
        
        return $this;
    }
}
