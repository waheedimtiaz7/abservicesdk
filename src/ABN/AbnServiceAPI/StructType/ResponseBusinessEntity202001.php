<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBusinessEntity202001 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseBusinessEntity202001 extends ResponseBusinessEntity201408
{
    /**
     * The awefEntity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\AwefEntity[]
     */
    protected ?array $awefEntity = null;
    /**
     * The awefOperator
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\AwefEntity[]
     */
    protected ?array $awefOperator = null;
    /**
     * Constructor method for ResponseBusinessEntity202001
     * @uses ResponseBusinessEntity202001::setAwefEntity()
     * @uses ResponseBusinessEntity202001::setAwefOperator()
     * @param \ABN\AbnServiceAPI\StructType\AwefEntity[] $awefEntity
     * @param \ABN\AbnServiceAPI\StructType\AwefEntity[] $awefOperator
     */
    public function __construct(?array $awefEntity = null, ?array $awefOperator = null)
    {
        $this
            ->setAwefEntity($awefEntity)
            ->setAwefOperator($awefOperator);
    }
    /**
     * Get awefEntity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\AwefEntity[]
     */
    public function getAwefEntity(): ?array
    {
        return $this->awefEntity ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAwefEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAwefEntity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAwefEntityForArrayConstraintFromSetAwefEntity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntity202001AwefEntityItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity202001AwefEntityItem instanceof \ABN\AbnServiceAPI\StructType\AwefEntity) {
                $invalidValues[] = is_object($responseBusinessEntity202001AwefEntityItem) ? get_class($responseBusinessEntity202001AwefEntityItem) : sprintf('%s(%s)', gettype($responseBusinessEntity202001AwefEntityItem), var_export($responseBusinessEntity202001AwefEntityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The awefEntity property can only contain items of type \ABN\AbnServiceAPI\StructType\AwefEntity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set awefEntity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\AwefEntity[] $awefEntity
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity202001
     */
    public function setAwefEntity(?array $awefEntity = null): self
    {
        // validation for constraint: array
        if ('' !== ($awefEntityArrayErrorMessage = self::validateAwefEntityForArrayConstraintFromSetAwefEntity($awefEntity))) {
            throw new InvalidArgumentException($awefEntityArrayErrorMessage, __LINE__);
        }
        if (is_null($awefEntity) || (is_array($awefEntity) && empty($awefEntity))) {
            unset($this->awefEntity);
        } else {
            $this->awefEntity = $awefEntity;
        }
        
        return $this;
    }
    /**
     * Add item to awefEntity value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\AwefEntity $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity202001
     */
    public function addToAwefEntity(\ABN\AbnServiceAPI\StructType\AwefEntity $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\AwefEntity) {
            throw new InvalidArgumentException(sprintf('The awefEntity property can only contain items of type \ABN\AbnServiceAPI\StructType\AwefEntity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->awefEntity[] = $item;
        
        return $this;
    }
    /**
     * Get awefOperator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\AwefEntity[]
     */
    public function getAwefOperator(): ?array
    {
        return $this->awefOperator ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAwefOperator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAwefOperator method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAwefOperatorForArrayConstraintFromSetAwefOperator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntity202001AwefOperatorItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity202001AwefOperatorItem instanceof \ABN\AbnServiceAPI\StructType\AwefEntity) {
                $invalidValues[] = is_object($responseBusinessEntity202001AwefOperatorItem) ? get_class($responseBusinessEntity202001AwefOperatorItem) : sprintf('%s(%s)', gettype($responseBusinessEntity202001AwefOperatorItem), var_export($responseBusinessEntity202001AwefOperatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The awefOperator property can only contain items of type \ABN\AbnServiceAPI\StructType\AwefEntity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set awefOperator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\AwefEntity[] $awefOperator
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity202001
     */
    public function setAwefOperator(?array $awefOperator = null): self
    {
        // validation for constraint: array
        if ('' !== ($awefOperatorArrayErrorMessage = self::validateAwefOperatorForArrayConstraintFromSetAwefOperator($awefOperator))) {
            throw new InvalidArgumentException($awefOperatorArrayErrorMessage, __LINE__);
        }
        if (is_null($awefOperator) || (is_array($awefOperator) && empty($awefOperator))) {
            unset($this->awefOperator);
        } else {
            $this->awefOperator = $awefOperator;
        }
        
        return $this;
    }
    /**
     * Add item to awefOperator value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\AwefEntity $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity202001
     */
    public function addToAwefOperator(\ABN\AbnServiceAPI\StructType\AwefEntity $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\AwefEntity) {
            throw new InvalidArgumentException(sprintf('The awefOperator property can only contain items of type \ABN\AbnServiceAPI\StructType\AwefEntity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->awefOperator[] = $item;
        
        return $this;
    }
}
