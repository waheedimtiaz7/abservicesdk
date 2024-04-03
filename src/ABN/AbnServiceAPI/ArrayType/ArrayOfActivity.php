<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfActivity ArrayType
 * @subpackage Arrays
 */
class ArrayOfActivity extends AbstractStructArrayBase
{
    /**
     * The Activity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\Activity[]
     */
    protected ?array $Activity = null;
    /**
     * Constructor method for ArrayOfActivity
     * @uses ArrayOfActivity::setActivity()
     * @param \ABN\AbnServiceAPI\StructType\Activity[] $activity
     */
    public function __construct(?array $activity = null)
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\Activity[]
     */
    public function getActivity(): ?array
    {
        return $this->Activity ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setActivity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActivity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActivityForArrayConstraintFromSetActivity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfActivityActivityItem) {
            // validation for constraint: itemType
            if (!$arrayOfActivityActivityItem instanceof \ABN\AbnServiceAPI\StructType\Activity) {
                $invalidValues[] = is_object($arrayOfActivityActivityItem) ? get_class($arrayOfActivityActivityItem) : sprintf('%s(%s)', gettype($arrayOfActivityActivityItem), var_export($arrayOfActivityActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Activity property can only contain items of type \ABN\AbnServiceAPI\StructType\Activity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Activity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\Activity[] $activity
     * @return \ABN\AbnServiceAPI\ArrayType\ArrayOfActivity
     */
    public function setActivity(?array $activity = null): self
    {
        // validation for constraint: array
        if ('' !== ($activityArrayErrorMessage = self::validateActivityForArrayConstraintFromSetActivity($activity))) {
            throw new InvalidArgumentException($activityArrayErrorMessage, __LINE__);
        }
        if (is_null($activity) || (is_array($activity) && empty($activity))) {
            unset($this->Activity);
        } else {
            $this->Activity = $activity;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ABN\AbnServiceAPI\StructType\Activity|null
     */
    public function current(): ?\ABN\AbnServiceAPI\StructType\Activity
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ABN\AbnServiceAPI\StructType\Activity|null
     */
    public function item($index): ?\ABN\AbnServiceAPI\StructType\Activity
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ABN\AbnServiceAPI\StructType\Activity|null
     */
    public function first(): ?\ABN\AbnServiceAPI\StructType\Activity
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ABN\AbnServiceAPI\StructType\Activity|null
     */
    public function last(): ?\ABN\AbnServiceAPI\StructType\Activity
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ABN\AbnServiceAPI\StructType\Activity|null
     */
    public function offsetGet($offset): ?\ABN\AbnServiceAPI\StructType\Activity
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\Activity $item
     * @return \ABN\AbnServiceAPI\ArrayType\ArrayOfActivity
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\Activity) {
            throw new InvalidArgumentException(sprintf('The Activity property can only contain items of type \ABN\AbnServiceAPI\StructType\Activity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Activity
     */
    public function getAttributeName(): string
    {
        return 'Activity';
    }
}
