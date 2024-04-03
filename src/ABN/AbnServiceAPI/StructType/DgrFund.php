<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DgrFund StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DgrFund extends AbstractStructBase
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
     * The dgrFundName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[]
     */
    protected ?array $dgrFundName = null;
    /**
     * Constructor method for DgrFund
     * @uses DgrFund::setEndorsedFrom()
     * @uses DgrFund::setEndorsedTo()
     * @uses DgrFund::setDgrFundName()
     * @param string $endorsedFrom
     * @param string $endorsedTo
     * @param \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[] $dgrFundName
     */
    public function __construct(string $endorsedFrom, string $endorsedTo, ?array $dgrFundName = null)
    {
        $this
            ->setEndorsedFrom($endorsedFrom)
            ->setEndorsedTo($endorsedTo)
            ->setDgrFundName($dgrFundName);
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
     * @return \ABN\AbnServiceAPI\StructType\DgrFund
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
     * @return \ABN\AbnServiceAPI\StructType\DgrFund
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
     * Get dgrFundName value
     * @return \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[]
     */
    public function getDgrFundName(): ?array
    {
        return $this->dgrFundName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDgrFundName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDgrFundName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDgrFundNameForArrayConstraintFromSetDgrFundName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $dgrFundDgrFundNameItem) {
            // validation for constraint: itemType
            if (!$dgrFundDgrFundNameItem instanceof \ABN\AbnServiceAPI\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($dgrFundDgrFundNameItem) ? get_class($dgrFundDgrFundNameItem) : sprintf('%s(%s)', gettype($dgrFundDgrFundNameItem), var_export($dgrFundDgrFundNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dgrFundName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dgrFundName value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationSimpleName[] $dgrFundName
     * @return \ABN\AbnServiceAPI\StructType\DgrFund
     */
    public function setDgrFundName(?array $dgrFundName = null): self
    {
        // validation for constraint: array
        if ('' !== ($dgrFundNameArrayErrorMessage = self::validateDgrFundNameForArrayConstraintFromSetDgrFundName($dgrFundName))) {
            throw new InvalidArgumentException($dgrFundNameArrayErrorMessage, __LINE__);
        }
        $this->dgrFundName = $dgrFundName;
        
        return $this;
    }
    /**
     * Add item to dgrFundName value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationSimpleName $item
     * @return \ABN\AbnServiceAPI\StructType\DgrFund
     */
    public function addToDgrFundName(\ABN\AbnServiceAPI\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The dgrFundName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dgrFundName[] = $item;
        
        return $this;
    }
}
