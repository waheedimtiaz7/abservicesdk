<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseABNList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseABNList extends ResponseBody
{
    /**
     * The numberOfRecords
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $numberOfRecords;
    /**
     * The abn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $abn = null;
    /**
     * Constructor method for ResponseABNList
     * @uses ResponseABNList::setNumberOfRecords()
     * @uses ResponseABNList::setAbn()
     * @param int $numberOfRecords
     * @param string[] $abn
     */
    public function __construct(int $numberOfRecords, ?array $abn = null)
    {
        $this
            ->setNumberOfRecords($numberOfRecords)
            ->setAbn($abn);
    }
    /**
     * Get numberOfRecords value
     * @return int
     */
    public function getNumberOfRecords(): int
    {
        return $this->numberOfRecords;
    }
    /**
     * Set numberOfRecords value
     * @param int $numberOfRecords
     * @return \ABN\AbnServiceAPI\StructType\ResponseABNList
     */
    public function setNumberOfRecords(int $numberOfRecords): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRecords) && !(is_int($numberOfRecords) || ctype_digit($numberOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRecords, true), gettype($numberOfRecords)), __LINE__);
        }
        $this->numberOfRecords = $numberOfRecords;
        
        return $this;
    }
    /**
     * Get abn value
     * @return string[]
     */
    public function getAbn(): ?array
    {
        return $this->abn;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAbn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAbn method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAbnForArrayConstraintFromSetAbn(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseABNListAbnItem) {
            // validation for constraint: itemType
            if (!is_string($responseABNListAbnItem)) {
                $invalidValues[] = is_object($responseABNListAbnItem) ? get_class($responseABNListAbnItem) : sprintf('%s(%s)', gettype($responseABNListAbnItem), var_export($responseABNListAbnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The abn property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set abn value
     * @throws InvalidArgumentException
     * @param string[] $abn
     * @return \ABN\AbnServiceAPI\StructType\ResponseABNList
     */
    public function setAbn(?array $abn = null): self
    {
        // validation for constraint: array
        if ('' !== ($abnArrayErrorMessage = self::validateAbnForArrayConstraintFromSetAbn($abn))) {
            throw new InvalidArgumentException($abnArrayErrorMessage, __LINE__);
        }
        $this->abn = $abn;
        
        return $this;
    }
    /**
     * Add item to abn value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseABNList
     */
    public function addToAbn(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The abn property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->abn[] = $item;
        
        return $this;
    }
}
