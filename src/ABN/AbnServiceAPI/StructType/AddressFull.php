<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressFull StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressFull extends Address
{
    /**
     * The addressLine1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $addressLine1 = null;
    /**
     * The addressLine2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $addressLine2 = null;
    /**
     * The suburb
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $suburb = null;
    /**
     * The countryName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryName = null;
    /**
     * Constructor method for AddressFull
     * @uses AddressFull::setAddressLine1()
     * @uses AddressFull::setAddressLine2()
     * @uses AddressFull::setSuburb()
     * @uses AddressFull::setCountryName()
     * @param string $addressLine1
     * @param string $addressLine2
     * @param string $suburb
     * @param string $countryName
     */
    public function __construct(?string $addressLine1 = null, ?string $addressLine2 = null, ?string $suburb = null, ?string $countryName = null)
    {
        $this
            ->setAddressLine1($addressLine1)
            ->setAddressLine2($addressLine2)
            ->setSuburb($suburb)
            ->setCountryName($countryName);
    }
    /**
     * Get addressLine1 value
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }
    /**
     * Set addressLine1 value
     * @param string $addressLine1
     * @return \ABN\AbnServiceAPI\StructType\AddressFull
     */
    public function setAddressLine1(?string $addressLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine1) && !is_string($addressLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine1, true), gettype($addressLine1)), __LINE__);
        }
        $this->addressLine1 = $addressLine1;
        
        return $this;
    }
    /**
     * Get addressLine2 value
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }
    /**
     * Set addressLine2 value
     * @param string $addressLine2
     * @return \ABN\AbnServiceAPI\StructType\AddressFull
     */
    public function setAddressLine2(?string $addressLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine2) && !is_string($addressLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine2, true), gettype($addressLine2)), __LINE__);
        }
        $this->addressLine2 = $addressLine2;
        
        return $this;
    }
    /**
     * Get suburb value
     * @return string|null
     */
    public function getSuburb(): ?string
    {
        return $this->suburb;
    }
    /**
     * Set suburb value
     * @param string $suburb
     * @return \ABN\AbnServiceAPI\StructType\AddressFull
     */
    public function setSuburb(?string $suburb = null): self
    {
        // validation for constraint: string
        if (!is_null($suburb) && !is_string($suburb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suburb, true), gettype($suburb)), __LINE__);
        }
        $this->suburb = $suburb;
        
        return $this;
    }
    /**
     * Get countryName value
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }
    /**
     * Set countryName value
     * @param string $countryName
     * @return \ABN\AbnServiceAPI\StructType\AddressFull
     */
    public function setCountryName(?string $countryName = null): self
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryName, true), gettype($countryName)), __LINE__);
        }
        $this->countryName = $countryName;
        
        return $this;
    }
}
