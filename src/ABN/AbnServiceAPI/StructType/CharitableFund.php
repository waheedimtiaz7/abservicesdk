<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharitableFund StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CharitableFund extends AbstractStructBase
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
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $effectiveTo;
    /**
     * The pbiName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[]
     */
    protected ?array $pbiName = null;
    /**
     * Constructor method for CharitableFund
     * @uses CharitableFund::setEffectiveFrom()
     * @uses CharitableFund::setEffectiveTo()
     * @uses CharitableFund::setPbiName()
     * @param string $effectiveFrom
     * @param string $effectiveTo
     * @param \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[] $pbiName
     */
    public function __construct(string $effectiveFrom, string $effectiveTo, ?array $pbiName = null)
    {
        $this
            ->setEffectiveFrom($effectiveFrom)
            ->setEffectiveTo($effectiveTo)
            ->setPbiName($pbiName);
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
     * @return \ABN\AbnServiceAPI\StructType\CharitableFund
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
     * @return string
     */
    public function getEffectiveTo(): string
    {
        return $this->effectiveTo;
    }
    /**
     * Set effectiveTo value
     * @param string $effectiveTo
     * @return \ABN\AbnServiceAPI\StructType\CharitableFund
     */
    public function setEffectiveTo(string $effectiveTo): self
    {
        // validation for constraint: string
        if (!is_null($effectiveTo) && !is_string($effectiveTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveTo, true), gettype($effectiveTo)), __LINE__);
        }
        $this->effectiveTo = $effectiveTo;
        
        return $this;
    }
    /**
     * Get pbiName value
     * @return \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[]
     */
    public function getPbiName(): ?array
    {
        return $this->pbiName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPbiName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPbiName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePbiNameForArrayConstraintFromSetPbiName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $charitableFundPbiNameItem) {
            // validation for constraint: itemType
            if (!$charitableFundPbiNameItem instanceof \ABN\AbnServiceAPI\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($charitableFundPbiNameItem) ? get_class($charitableFundPbiNameItem) : sprintf('%s(%s)', gettype($charitableFundPbiNameItem), var_export($charitableFundPbiNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pbiName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set pbiName value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[] $pbiName
     * @return \ABN\AbnServiceAPI\StructType\CharitableFund
     */
    public function setPbiName(?array $pbiName = null): self
    {
        // validation for constraint: array
        if ('' !== ($pbiNameArrayErrorMessage = self::validatePbiNameForArrayConstraintFromSetPbiName($pbiName))) {
            throw new InvalidArgumentException($pbiNameArrayErrorMessage, __LINE__);
        }
        $this->pbiName = $pbiName;
        
        return $this;
    }
    /**
     * Add item to pbiName value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationSimpleName $item
     * @return \ABN\AbnServiceAPI\StructType\CharitableFund
     */
    public function addToPbiName(\ABN\AbnServiceAPI\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The pbiName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->pbiName[] = $item;
        
        return $this;
    }
}
