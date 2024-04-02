<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuperannuationStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SuperannuationStatus extends AbstractStructBase
{
    /**
     * The complyingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $complyingCode = null;
    /**
     * The complyingDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $complyingDescription = null;
    /**
     * The regulator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $regulator = null;
    /**
     * The exceptionMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $exceptionMessage = null;
    /**
     * Constructor method for SuperannuationStatus
     * @uses SuperannuationStatus::setComplyingCode()
     * @uses SuperannuationStatus::setComplyingDescription()
     * @uses SuperannuationStatus::setRegulator()
     * @uses SuperannuationStatus::setExceptionMessage()
     * @param string $complyingCode
     * @param string $complyingDescription
     * @param string $regulator
     * @param string $exceptionMessage
     */
    public function __construct(?string $complyingCode = null, ?string $complyingDescription = null, ?string $regulator = null, ?string $exceptionMessage = null)
    {
        $this
            ->setComplyingCode($complyingCode)
            ->setComplyingDescription($complyingDescription)
            ->setRegulator($regulator)
            ->setExceptionMessage($exceptionMessage);
    }
    /**
     * Get complyingCode value
     * @return string|null
     */
    public function getComplyingCode(): ?string
    {
        return $this->complyingCode;
    }
    /**
     * Set complyingCode value
     * @param string $complyingCode
     * @return \AbnServiceSDK\StructType\SuperannuationStatus
     */
    public function setComplyingCode(?string $complyingCode = null): self
    {
        // validation for constraint: string
        if (!is_null($complyingCode) && !is_string($complyingCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($complyingCode, true), gettype($complyingCode)), __LINE__);
        }
        $this->complyingCode = $complyingCode;
        
        return $this;
    }
    /**
     * Get complyingDescription value
     * @return string|null
     */
    public function getComplyingDescription(): ?string
    {
        return $this->complyingDescription;
    }
    /**
     * Set complyingDescription value
     * @param string $complyingDescription
     * @return \AbnServiceSDK\StructType\SuperannuationStatus
     */
    public function setComplyingDescription(?string $complyingDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($complyingDescription) && !is_string($complyingDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($complyingDescription, true), gettype($complyingDescription)), __LINE__);
        }
        $this->complyingDescription = $complyingDescription;
        
        return $this;
    }
    /**
     * Get regulator value
     * @return string|null
     */
    public function getRegulator(): ?string
    {
        return $this->regulator;
    }
    /**
     * Set regulator value
     * @param string $regulator
     * @return \AbnServiceSDK\StructType\SuperannuationStatus
     */
    public function setRegulator(?string $regulator = null): self
    {
        // validation for constraint: string
        if (!is_null($regulator) && !is_string($regulator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regulator, true), gettype($regulator)), __LINE__);
        }
        $this->regulator = $regulator;
        
        return $this;
    }
    /**
     * Get exceptionMessage value
     * @return string|null
     */
    public function getExceptionMessage(): ?string
    {
        return $this->exceptionMessage;
    }
    /**
     * Set exceptionMessage value
     * @param string $exceptionMessage
     * @return \AbnServiceSDK\StructType\SuperannuationStatus
     */
    public function setExceptionMessage(?string $exceptionMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionMessage) && !is_string($exceptionMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionMessage, true), gettype($exceptionMessage)), __LINE__);
        }
        $this->exceptionMessage = $exceptionMessage;
        
        return $this;
    }
}
