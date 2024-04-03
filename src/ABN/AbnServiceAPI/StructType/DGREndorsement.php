<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DGREndorsement StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DGREndorsement extends AbstractStructBase
{
    /**
     * The endorsedFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $endorsedFrom;
    /**
     * The endorsedTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $endorsedTo;
    /**
     * The isCurrentIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $isCurrentIndicator = null;
    /**
     * Constructor method for DGREndorsement
     * @uses DGREndorsement::setEndorsedFrom()
     * @uses DGREndorsement::setEndorsedTo()
     * @uses DGREndorsement::setIsCurrentIndicator()
     * @param string $endorsedFrom
     * @param string $endorsedTo
     * @param string $isCurrentIndicator
     */
    public function __construct(string $endorsedFrom, string $endorsedTo, ?string $isCurrentIndicator = null)
    {
        $this
            ->setEndorsedFrom($endorsedFrom)
            ->setEndorsedTo($endorsedTo)
            ->setIsCurrentIndicator($isCurrentIndicator);
    }
    /**
     * Get endorsedFrom value
     * @return string
     */
    public function getEndorsedFrom(): string
    {
        return $this->endorsedFrom;
    }
    /**
     * Set endorsedFrom value
     * @param string $endorsedFrom
     * @return \ABN\AbnServiceAPI\StructType\DGREndorsement
     */
    public function setEndorsedFrom(string $endorsedFrom): self
    {
        // validation for constraint: string
        if (!is_null($endorsedFrom) && !is_string($endorsedFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsedFrom, true), gettype($endorsedFrom)), __LINE__);
        }
        $this->endorsedFrom = $endorsedFrom;
        
        return $this;
    }
    /**
     * Get endorsedTo value
     * @return string
     */
    public function getEndorsedTo(): string
    {
        return $this->endorsedTo;
    }
    /**
     * Set endorsedTo value
     * @param string $endorsedTo
     * @return \ABN\AbnServiceAPI\StructType\DGREndorsement
     */
    public function setEndorsedTo(string $endorsedTo): self
    {
        // validation for constraint: string
        if (!is_null($endorsedTo) && !is_string($endorsedTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsedTo, true), gettype($endorsedTo)), __LINE__);
        }
        $this->endorsedTo = $endorsedTo;
        
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
     * @return \ABN\AbnServiceAPI\StructType\DGREndorsement
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
