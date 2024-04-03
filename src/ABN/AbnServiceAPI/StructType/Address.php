<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class Address extends AbstractStructBase
{
    /**
     * The stateCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $stateCode = null;
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * Constructor method for Address
     * @uses Address::setStateCode()
     * @uses Address::setPostcode()
     * @param string $stateCode
     * @param string $postcode
     */
    public function __construct(?string $stateCode = null, ?string $postcode = null)
    {
        $this
            ->setStateCode($stateCode)
            ->setPostcode($postcode);
    }
    /**
     * Get stateCode value
     * @return string|null
     */
    public function getStateCode(): ?string
    {
        return $this->stateCode;
    }
    /**
     * Set stateCode value
     * @param string $stateCode
     * @return \ABN\AbnServiceAPI\StructType\Address
     */
    public function setStateCode(?string $stateCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stateCode) && !is_string($stateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateCode, true), gettype($stateCode)), __LINE__);
        }
        $this->stateCode = $stateCode;
        
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \ABN\AbnServiceAPI\StructType\Address
     */
    public function setPostcode(?string $postcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        
        return $this;
    }
}
