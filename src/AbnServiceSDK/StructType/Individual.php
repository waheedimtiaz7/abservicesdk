<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Individual StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Individual extends AbstractStructBase
{
    /**
     * The fullName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fullName = null;
    /**
     * The givenName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $givenName = null;
    /**
     * The otherGivenName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $otherGivenName = null;
    /**
     * The familyName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $familyName = null;
    /**
     * Constructor method for Individual
     * @uses Individual::setFullName()
     * @uses Individual::setGivenName()
     * @uses Individual::setOtherGivenName()
     * @uses Individual::setFamilyName()
     * @param string $fullName
     * @param string $givenName
     * @param string $otherGivenName
     * @param string $familyName
     */
    public function __construct(?string $fullName = null, ?string $givenName = null, ?string $otherGivenName = null, ?string $familyName = null)
    {
        $this
            ->setFullName($fullName)
            ->setGivenName($givenName)
            ->setOtherGivenName($otherGivenName)
            ->setFamilyName($familyName);
    }
    /**
     * Get fullName value
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }
    /**
     * Set fullName value
     * @param string $fullName
     * @return \AbnServiceSDK\StructType\Individual
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->fullName = $fullName;
        
        return $this;
    }
    /**
     * Get givenName value
     * @return string|null
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }
    /**
     * Set givenName value
     * @param string $givenName
     * @return \AbnServiceSDK\StructType\Individual
     */
    public function setGivenName(?string $givenName = null): self
    {
        // validation for constraint: string
        if (!is_null($givenName) && !is_string($givenName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($givenName, true), gettype($givenName)), __LINE__);
        }
        $this->givenName = $givenName;
        
        return $this;
    }
    /**
     * Get otherGivenName value
     * @return string|null
     */
    public function getOtherGivenName(): ?string
    {
        return $this->otherGivenName;
    }
    /**
     * Set otherGivenName value
     * @param string $otherGivenName
     * @return \AbnServiceSDK\StructType\Individual
     */
    public function setOtherGivenName(?string $otherGivenName = null): self
    {
        // validation for constraint: string
        if (!is_null($otherGivenName) && !is_string($otherGivenName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherGivenName, true), gettype($otherGivenName)), __LINE__);
        }
        $this->otherGivenName = $otherGivenName;
        
        return $this;
    }
    /**
     * Get familyName value
     * @return string|null
     */
    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }
    /**
     * Set familyName value
     * @param string $familyName
     * @return \AbnServiceSDK\StructType\Individual
     */
    public function setFamilyName(?string $familyName = null): self
    {
        // validation for constraint: string
        if (!is_null($familyName) && !is_string($familyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($familyName, true), gettype($familyName)), __LINE__);
        }
        $this->familyName = $familyName;
        
        return $this;
    }
}
