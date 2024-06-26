<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilterNameType2023 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilterNameType2023 extends AbstractStructBase
{
    /**
     * The legalName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $legalName = null;
    /**
     * The businessName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $businessName = null;
    /**
     * Constructor method for ExternalRequestFilterNameType2023
     * @uses ExternalRequestFilterNameType2023::setLegalName()
     * @uses ExternalRequestFilterNameType2023::setBusinessName()
     * @param string $legalName
     * @param string $businessName
     */
    public function __construct(?string $legalName = null, ?string $businessName = null)
    {
        $this
            ->setLegalName($legalName)
            ->setBusinessName($businessName);
    }
    /**
     * Get legalName value
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }
    /**
     * Set legalName value
     * @param string $legalName
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2023
     */
    public function setLegalName(?string $legalName = null): self
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalName, true), gettype($legalName)), __LINE__);
        }
        $this->legalName = $legalName;
        
        return $this;
    }
    /**
     * Get businessName value
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }
    /**
     * Set businessName value
     * @param string $businessName
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilterNameType2023
     */
    public function setBusinessName(?string $businessName = null): self
    {
        // validation for constraint: string
        if (!is_null($businessName) && !is_string($businessName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessName, true), gettype($businessName)), __LINE__);
        }
        $this->businessName = $businessName;
        
        return $this;
    }
}
