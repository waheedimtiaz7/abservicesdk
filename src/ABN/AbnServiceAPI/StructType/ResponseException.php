<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseException StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseException extends ResponseBody
{
    /**
     * The exceptionDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $exceptionDescription = null;
    /**
     * The exceptionCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $exceptionCode = null;
    /**
     * Constructor method for ResponseException
     * @uses ResponseException::setExceptionDescription()
     * @uses ResponseException::setExceptionCode()
     * @param string $exceptionDescription
     * @param string $exceptionCode
     */
    public function __construct(?string $exceptionDescription = null, ?string $exceptionCode = null)
    {
        $this
            ->setExceptionDescription($exceptionDescription)
            ->setExceptionCode($exceptionCode);
    }
    /**
     * Get exceptionDescription value
     * @return string|null
     */
    public function getExceptionDescription(): ?string
    {
        return $this->exceptionDescription;
    }
    /**
     * Set exceptionDescription value
     * @param string $exceptionDescription
     * @return \ABN\AbnServiceAPI\StructType\ResponseException
     */
    public function setExceptionDescription(?string $exceptionDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionDescription) && !is_string($exceptionDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionDescription, true), gettype($exceptionDescription)), __LINE__);
        }
        $this->exceptionDescription = $exceptionDescription;
        
        return $this;
    }
    /**
     * Get exceptionCode value
     * @return string|null
     */
    public function getExceptionCode(): ?string
    {
        return $this->exceptionCode;
    }
    /**
     * Set exceptionCode value
     * @param string $exceptionCode
     * @return \ABN\AbnServiceAPI\StructType\ResponseException
     */
    public function setExceptionCode(?string $exceptionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($exceptionCode) && !is_string($exceptionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionCode, true), gettype($exceptionCode)), __LINE__);
        }
        $this->exceptionCode = $exceptionCode;
        
        return $this;
    }
}
