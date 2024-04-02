<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganisationName StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrganisationName extends Organisation
{
    /**
     * The effectiveFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $effectiveFrom;
    /**
     * The effectiveTo
     * Meta information extracted from the WSDL
     * - choice: effectiveTo | effectiveToBlank
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $effectiveTo;
    /**
     * The effectiveToBlank
     * Meta information extracted from the WSDL
     * - choice: effectiveTo | effectiveToBlank
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $effectiveToBlank = null;
    /**
     * Constructor method for OrganisationName
     * @uses OrganisationName::setEffectiveFrom()
     * @uses OrganisationName::setEffectiveTo()
     * @uses OrganisationName::setEffectiveToBlank()
     * @param string $effectiveFrom
     * @param string $effectiveTo
     * @param string $effectiveToBlank
     */
    public function __construct(string $effectiveFrom, string $effectiveTo = null, ?string $effectiveToBlank = null)
    {
        $this
            ->setEffectiveFrom($effectiveFrom)
            ->setEffectiveTo($effectiveTo)
            ->setEffectiveToBlank($effectiveToBlank);
    }
    /**
     * Get effectiveFrom value
     * @return string
     */
    public function getEffectiveFrom(): string
    {
        return $this->effectiveFrom;
    }
    /**
     * Set effectiveFrom value
     * @param string $effectiveFrom
     * @return \AbnServiceSDK\StructType\OrganisationName
     */
    public function setEffectiveFrom(string $effectiveFrom): self
    {
        // validation for constraint: string
        if (!is_null($effectiveFrom) && !is_string($effectiveFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveFrom, true), gettype($effectiveFrom)), __LINE__);
        }
        $this->effectiveFrom = $effectiveFrom;
        
        return $this;
    }
    /**
     * Get effectiveTo value
     * @return string|null
     */
    public function getEffectiveTo(): ?string
    {
        return $this->effectiveTo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEffectiveTo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEffectiveTo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEffectiveToForChoiceConstraintFromSetEffectiveTo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'effectiveToBlank',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property effectiveTo can\'t be set as the property %s is already set. Only one property must be set among these properties: effectiveTo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set effectiveTo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $effectiveTo
     * @return \AbnServiceSDK\StructType\OrganisationName
     */
    public function setEffectiveTo(string $effectiveTo = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveTo) && !is_string($effectiveTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveTo, true), gettype($effectiveTo)), __LINE__);
        }
        // validation for constraint: choice(effectiveTo, effectiveToBlank)
        if ('' !== ($effectiveToChoiceErrorMessage = self::validateEffectiveToForChoiceConstraintFromSetEffectiveTo($effectiveTo))) {
            throw new InvalidArgumentException($effectiveToChoiceErrorMessage, __LINE__);
        }
        if (is_null($effectiveTo) || (is_array($effectiveTo) && empty($effectiveTo))) {
            unset($this->effectiveTo);
        } else {
            $this->effectiveTo = $effectiveTo;
        }
        
        return $this;
    }
    /**
     * Get effectiveToBlank value
     * @return string|null
     */
    public function getEffectiveToBlank(): ?string
    {
        return $this->effectiveToBlank ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEffectiveToBlank method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEffectiveToBlank method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEffectiveToBlankForChoiceConstraintFromSetEffectiveToBlank($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'effectiveTo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property effectiveToBlank can\'t be set as the property %s is already set. Only one property must be set among these properties: effectiveToBlank, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set effectiveToBlank value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $effectiveToBlank
     * @return \AbnServiceSDK\StructType\OrganisationName
     */
    public function setEffectiveToBlank(?string $effectiveToBlank = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveToBlank) && !is_string($effectiveToBlank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveToBlank, true), gettype($effectiveToBlank)), __LINE__);
        }
        // validation for constraint: choice(effectiveTo, effectiveToBlank)
        if ('' !== ($effectiveToBlankChoiceErrorMessage = self::validateEffectiveToBlankForChoiceConstraintFromSetEffectiveToBlank($effectiveToBlank))) {
            throw new InvalidArgumentException($effectiveToBlankChoiceErrorMessage, __LINE__);
        }
        if (is_null($effectiveToBlank) || (is_array($effectiveToBlank) && empty($effectiveToBlank))) {
            unset($this->effectiveToBlank);
        } else {
            $this->effectiveToBlank = $effectiveToBlank;
        }
        
        return $this;
    }
}
