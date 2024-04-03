<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBusinessEntity201205 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseBusinessEntity201205 extends ResponseBusinessEntity200709
{
    /**
     * The businessName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\OrganisationName[]
     */
    protected ?array $businessName = null;
    /**
     * Constructor method for ResponseBusinessEntity201205
     * @uses ResponseBusinessEntity201205::setBusinessName()
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $businessName
     */
    public function __construct(?array $businessName = null)
    {
        $this
            ->setBusinessName($businessName);
    }
    /**
     * Get businessName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\OrganisationName[]
     */
    public function getBusinessName(): ?array
    {
        return $this->businessName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusinessNameForArrayConstraintFromSetBusinessName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntity201205BusinessNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201205BusinessNameItem instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntity201205BusinessNameItem) ? get_class($responseBusinessEntity201205BusinessNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201205BusinessNameItem), var_export($responseBusinessEntity201205BusinessNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The businessName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set businessName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $businessName
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201205
     */
    public function setBusinessName(?array $businessName = null): self
    {
        // validation for constraint: array
        if ('' !== ($businessNameArrayErrorMessage = self::validateBusinessNameForArrayConstraintFromSetBusinessName($businessName))) {
            throw new InvalidArgumentException($businessNameArrayErrorMessage, __LINE__);
        }
        if (is_null($businessName) || (is_array($businessName) && empty($businessName))) {
            unset($this->businessName);
        } else {
            $this->businessName = $businessName;
        }
        
        return $this;
    }
    /**
     * Add item to businessName value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201205
     */
    public function addToBusinessName(\ABN\AbnServiceAPI\StructType\OrganisationName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
            throw new InvalidArgumentException(sprintf('The businessName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->businessName[] = $item;
        
        return $this;
    }
}
