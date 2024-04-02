<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBusinessEntity StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseBusinessEntity extends ResponseBody
{
    /**
     * The recordLastUpdatedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $recordLastUpdatedDate;
    /**
     * The ABN
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\Identifier[]
     */
    protected ?array $ABN = null;
    /**
     * The entityStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\EntityStatus[]
     */
    protected ?array $entityStatus = null;
    /**
     * The ASICNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ASICNumber = null;
    /**
     * The legalName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\IndividualName[]
     */
    protected ?array $legalName = null;
    /**
     * The mainName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationName[]
     */
    protected ?array $mainName = null;
    /**
     * The entityType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \AbnServiceSDK\StructType\EntityType
     */
    protected ?\AbnServiceSDK\StructType\EntityType $entityType;
    /**
     * The goodsAndServicesTax
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AbnServiceSDK\StructType\GoodsAndServicesTax[]
     */
    protected ?array $goodsAndServicesTax = null;
    /**
     * The dgrEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AbnServiceSDK\StructType\DGREndorsement[]
     */
    protected ?array $dgrEndorsement = null;
    /**
     * The mainTradingName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AbnServiceSDK\StructType\OrganisationName[]
     */
    protected ?array $mainTradingName = null;
    /**
     * The otherTradingName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AbnServiceSDK\StructType\OrganisationName[]
     */
    protected ?array $otherTradingName = null;
    /**
     * The mainBusinessPhysicalAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AbnServiceSDK\StructType\AddressDetails[]
     */
    protected ?array $mainBusinessPhysicalAddress = null;
    /**
     * The dgrFund
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AbnServiceSDK\StructType\DgrFund[]
     */
    protected ?array $dgrFund = null;
    /**
     * Constructor method for ResponseBusinessEntity
     * @uses ResponseBusinessEntity::setRecordLastUpdatedDate()
     * @uses ResponseBusinessEntity::setABN()
     * @uses ResponseBusinessEntity::setEntityStatus()
     * @uses ResponseBusinessEntity::setASICNumber()
     * @uses ResponseBusinessEntity::setLegalName()
     * @uses ResponseBusinessEntity::setMainName()
     * @uses ResponseBusinessEntity::setEntityType()
     * @uses ResponseBusinessEntity::setGoodsAndServicesTax()
     * @uses ResponseBusinessEntity::setDgrEndorsement()
     * @uses ResponseBusinessEntity::setMainTradingName()
     * @uses ResponseBusinessEntity::setOtherTradingName()
     * @uses ResponseBusinessEntity::setMainBusinessPhysicalAddress()
     * @uses ResponseBusinessEntity::setDgrFund()
     * @param string $recordLastUpdatedDate
     * @param \AbnServiceSDK\StructType\Identifier[] $aBN
     * @param \AbnServiceSDK\StructType\EntityStatus[] $entityStatus
     * @param string $aSICNumber
     * @param \AbnServiceSDK\StructType\IndividualName[] $legalName
     * @param \AbnServiceSDK\StructType\OrganisationName[] $mainName
     * @param \AbnServiceSDK\StructType\EntityType $entityType
     * @param \AbnServiceSDK\StructType\GoodsAndServicesTax[] $goodsAndServicesTax
     * @param \AbnServiceSDK\StructType\DGREndorsement[] $dgrEndorsement
     * @param \AbnServiceSDK\StructType\OrganisationName[] $mainTradingName
     * @param \AbnServiceSDK\StructType\OrganisationName[] $otherTradingName
     * @param \AbnServiceSDK\StructType\AddressDetails[] $mainBusinessPhysicalAddress
     * @param \AbnServiceSDK\StructType\DgrFund[] $dgrFund
     */
    public function __construct(string $recordLastUpdatedDate, ?array $aBN = null, ?array $entityStatus = null, ?string $aSICNumber = null, ?array $legalName = null, ?array $mainName = null, ?\AbnServiceSDK\StructType\EntityType $entityType, ?array $goodsAndServicesTax = null, ?array $dgrEndorsement = null, ?array $mainTradingName = null, ?array $otherTradingName = null, ?array $mainBusinessPhysicalAddress = null, ?array $dgrFund = null)
    {
        $this
            ->setRecordLastUpdatedDate($recordLastUpdatedDate)
            ->setABN($aBN)
            ->setEntityStatus($entityStatus)
            ->setASICNumber($aSICNumber)
            ->setLegalName($legalName)
            ->setMainName($mainName)
            ->setEntityType($entityType)
            ->setGoodsAndServicesTax($goodsAndServicesTax)
            ->setDgrEndorsement($dgrEndorsement)
            ->setMainTradingName($mainTradingName)
            ->setOtherTradingName($otherTradingName)
            ->setMainBusinessPhysicalAddress($mainBusinessPhysicalAddress)
            ->setDgrFund($dgrFund);
    }
    /**
     * Get recordLastUpdatedDate value
     * @return string
     */
    public function getRecordLastUpdatedDate(): string
    {
        return $this->recordLastUpdatedDate;
    }
    /**
     * Set recordLastUpdatedDate value
     * @param string $recordLastUpdatedDate
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setRecordLastUpdatedDate(string $recordLastUpdatedDate): self
    {
        // validation for constraint: string
        if (!is_null($recordLastUpdatedDate) && !is_string($recordLastUpdatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordLastUpdatedDate, true), gettype($recordLastUpdatedDate)), __LINE__);
        }
        $this->recordLastUpdatedDate = $recordLastUpdatedDate;
        
        return $this;
    }
    /**
     * Get ABN value
     * @return \AbnServiceSDK\StructType\Identifier[]
     */
    public function getABN(): ?array
    {
        return $this->ABN;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setABN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setABN method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateABNForArrayConstraintFromSetABN(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityABNItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityABNItem instanceof \AbnServiceSDK\StructType\Identifier) {
                $invalidValues[] = is_object($responseBusinessEntityABNItem) ? get_class($responseBusinessEntityABNItem) : sprintf('%s(%s)', gettype($responseBusinessEntityABNItem), var_export($responseBusinessEntityABNItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ABN property can only contain items of type \AbnServiceSDK\StructType\Identifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ABN value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\Identifier[] $aBN
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setABN(?array $aBN = null): self
    {
        // validation for constraint: array
        if ('' !== ($aBNArrayErrorMessage = self::validateABNForArrayConstraintFromSetABN($aBN))) {
            throw new InvalidArgumentException($aBNArrayErrorMessage, __LINE__);
        }
        $this->ABN = $aBN;
        
        return $this;
    }
    /**
     * Add item to ABN value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\Identifier $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToABN(\AbnServiceSDK\StructType\Identifier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\Identifier) {
            throw new InvalidArgumentException(sprintf('The ABN property can only contain items of type \AbnServiceSDK\StructType\Identifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ABN[] = $item;
        
        return $this;
    }
    /**
     * Get entityStatus value
     * @return \AbnServiceSDK\StructType\EntityStatus[]
     */
    public function getEntityStatus(): ?array
    {
        return $this->entityStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEntityStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityStatusForArrayConstraintFromSetEntityStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityEntityStatusItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityEntityStatusItem instanceof \AbnServiceSDK\StructType\EntityStatus) {
                $invalidValues[] = is_object($responseBusinessEntityEntityStatusItem) ? get_class($responseBusinessEntityEntityStatusItem) : sprintf('%s(%s)', gettype($responseBusinessEntityEntityStatusItem), var_export($responseBusinessEntityEntityStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entityStatus property can only contain items of type \AbnServiceSDK\StructType\EntityStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set entityStatus value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\EntityStatus[] $entityStatus
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setEntityStatus(?array $entityStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($entityStatusArrayErrorMessage = self::validateEntityStatusForArrayConstraintFromSetEntityStatus($entityStatus))) {
            throw new InvalidArgumentException($entityStatusArrayErrorMessage, __LINE__);
        }
        $this->entityStatus = $entityStatus;
        
        return $this;
    }
    /**
     * Add item to entityStatus value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\EntityStatus $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToEntityStatus(\AbnServiceSDK\StructType\EntityStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\EntityStatus) {
            throw new InvalidArgumentException(sprintf('The entityStatus property can only contain items of type \AbnServiceSDK\StructType\EntityStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entityStatus[] = $item;
        
        return $this;
    }
    /**
     * Get ASICNumber value
     * @return string|null
     */
    public function getASICNumber(): ?string
    {
        return $this->ASICNumber;
    }
    /**
     * Set ASICNumber value
     * @param string $aSICNumber
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setASICNumber(?string $aSICNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($aSICNumber) && !is_string($aSICNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aSICNumber, true), gettype($aSICNumber)), __LINE__);
        }
        $this->ASICNumber = $aSICNumber;
        
        return $this;
    }
    /**
     * Get legalName value
     * @return \AbnServiceSDK\StructType\IndividualName[]|null
     */
    public function getLegalName(): ?array
    {
        return $this->legalName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLegalName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegalName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegalNameForArrayConstraintFromSetLegalName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityLegalNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityLegalNameItem instanceof \AbnServiceSDK\StructType\IndividualName) {
                $invalidValues[] = is_object($responseBusinessEntityLegalNameItem) ? get_class($responseBusinessEntityLegalNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntityLegalNameItem), var_export($responseBusinessEntityLegalNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The legalName property can only contain items of type \AbnServiceSDK\StructType\IndividualName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLegalName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegalName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLegalNameForChoiceConstraintFromSetLegalName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'mainName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property legalName can\'t be set as the property %s is already set. Only one property must be set among these properties: legalName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set legalName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\IndividualName[] $legalName
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setLegalName(?array $legalName = null): self
    {
        // validation for constraint: array
        if ('' !== ($legalNameArrayErrorMessage = self::validateLegalNameForArrayConstraintFromSetLegalName($legalName))) {
            throw new InvalidArgumentException($legalNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName)
        if ('' !== ($legalNameChoiceErrorMessage = self::validateLegalNameForChoiceConstraintFromSetLegalName($legalName))) {
            throw new InvalidArgumentException($legalNameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($legalName) && count($legalName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($legalName)), __LINE__);
        }
        if (is_null($legalName) || (is_array($legalName) && empty($legalName))) {
            unset($this->legalName);
        } else {
            $this->legalName = $legalName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToLegalName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToLegalName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToLegalName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'mainName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property legalName can\'t be set as the property %s is already set. Only one property must be set among these properties: legalName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to legalName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\IndividualName $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToLegalName(\AbnServiceSDK\StructType\IndividualName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\IndividualName) {
            throw new InvalidArgumentException(sprintf('The legalName property can only contain items of type \AbnServiceSDK\StructType\IndividualName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToLegalName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->legalName) && count($this->legalName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->legalName)), __LINE__);
        }
        $this->legalName[] = $item;
        
        return $this;
    }
    /**
     * Get mainName value
     * @return \AbnServiceSDK\StructType\OrganisationName[]|null
     */
    public function getMainName(): ?array
    {
        return $this->mainName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMainName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMainName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMainNameForArrayConstraintFromSetMainName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityMainNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityMainNameItem instanceof \AbnServiceSDK\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntityMainNameItem) ? get_class($responseBusinessEntityMainNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntityMainNameItem), var_export($responseBusinessEntityMainNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainName property can only contain items of type \AbnServiceSDK\StructType\OrganisationName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMainName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMainName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMainNameForChoiceConstraintFromSetMainName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property mainName can\'t be set as the property %s is already set. Only one property must be set among these properties: mainName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set mainName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationName[] $mainName
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setMainName(?array $mainName = null): self
    {
        // validation for constraint: array
        if ('' !== ($mainNameArrayErrorMessage = self::validateMainNameForArrayConstraintFromSetMainName($mainName))) {
            throw new InvalidArgumentException($mainNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName)
        if ('' !== ($mainNameChoiceErrorMessage = self::validateMainNameForChoiceConstraintFromSetMainName($mainName))) {
            throw new InvalidArgumentException($mainNameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($mainName) && count($mainName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($mainName)), __LINE__);
        }
        if (is_null($mainName) || (is_array($mainName) && empty($mainName))) {
            unset($this->mainName);
        } else {
            $this->mainName = $mainName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToMainName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToMainName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToMainName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property mainName can\'t be set as the property %s is already set. Only one property must be set among these properties: mainName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to mainName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationName $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToMainName(\AbnServiceSDK\StructType\OrganisationName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationName) {
            throw new InvalidArgumentException(sprintf('The mainName property can only contain items of type \AbnServiceSDK\StructType\OrganisationName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToMainName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->mainName) && count($this->mainName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->mainName)), __LINE__);
        }
        $this->mainName[] = $item;
        
        return $this;
    }
    /**
     * Get entityType value
     * @return \AbnServiceSDK\StructType\EntityType
     */
    public function getEntityType(): \AbnServiceSDK\StructType\EntityType
    {
        return $this->entityType;
    }
    /**
     * Set entityType value
     * @param \AbnServiceSDK\StructType\EntityType $entityType
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setEntityType(?\AbnServiceSDK\StructType\EntityType $entityType): self
    {
        $this->entityType = $entityType;
        
        return $this;
    }
    /**
     * Get goodsAndServicesTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AbnServiceSDK\StructType\GoodsAndServicesTax[]
     */
    public function getGoodsAndServicesTax(): ?array
    {
        return $this->goodsAndServicesTax ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGoodsAndServicesTax method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGoodsAndServicesTax method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGoodsAndServicesTaxForArrayConstraintFromSetGoodsAndServicesTax(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityGoodsAndServicesTaxItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityGoodsAndServicesTaxItem instanceof \AbnServiceSDK\StructType\GoodsAndServicesTax) {
                $invalidValues[] = is_object($responseBusinessEntityGoodsAndServicesTaxItem) ? get_class($responseBusinessEntityGoodsAndServicesTaxItem) : sprintf('%s(%s)', gettype($responseBusinessEntityGoodsAndServicesTaxItem), var_export($responseBusinessEntityGoodsAndServicesTaxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The goodsAndServicesTax property can only contain items of type \AbnServiceSDK\StructType\GoodsAndServicesTax, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set goodsAndServicesTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\GoodsAndServicesTax[] $goodsAndServicesTax
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setGoodsAndServicesTax(?array $goodsAndServicesTax = null): self
    {
        // validation for constraint: array
        if ('' !== ($goodsAndServicesTaxArrayErrorMessage = self::validateGoodsAndServicesTaxForArrayConstraintFromSetGoodsAndServicesTax($goodsAndServicesTax))) {
            throw new InvalidArgumentException($goodsAndServicesTaxArrayErrorMessage, __LINE__);
        }
        if (is_null($goodsAndServicesTax) || (is_array($goodsAndServicesTax) && empty($goodsAndServicesTax))) {
            unset($this->goodsAndServicesTax);
        } else {
            $this->goodsAndServicesTax = $goodsAndServicesTax;
        }
        
        return $this;
    }
    /**
     * Add item to goodsAndServicesTax value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\GoodsAndServicesTax $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToGoodsAndServicesTax(\AbnServiceSDK\StructType\GoodsAndServicesTax $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\GoodsAndServicesTax) {
            throw new InvalidArgumentException(sprintf('The goodsAndServicesTax property can only contain items of type \AbnServiceSDK\StructType\GoodsAndServicesTax, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->goodsAndServicesTax[] = $item;
        
        return $this;
    }
    /**
     * Get dgrEndorsement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AbnServiceSDK\StructType\DGREndorsement[]
     */
    public function getDgrEndorsement(): ?array
    {
        return $this->dgrEndorsement ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDgrEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDgrEndorsement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDgrEndorsementForArrayConstraintFromSetDgrEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityDgrEndorsementItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityDgrEndorsementItem instanceof \AbnServiceSDK\StructType\DGREndorsement) {
                $invalidValues[] = is_object($responseBusinessEntityDgrEndorsementItem) ? get_class($responseBusinessEntityDgrEndorsementItem) : sprintf('%s(%s)', gettype($responseBusinessEntityDgrEndorsementItem), var_export($responseBusinessEntityDgrEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dgrEndorsement property can only contain items of type \AbnServiceSDK\StructType\DGREndorsement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dgrEndorsement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\DGREndorsement[] $dgrEndorsement
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setDgrEndorsement(?array $dgrEndorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($dgrEndorsementArrayErrorMessage = self::validateDgrEndorsementForArrayConstraintFromSetDgrEndorsement($dgrEndorsement))) {
            throw new InvalidArgumentException($dgrEndorsementArrayErrorMessage, __LINE__);
        }
        if (is_null($dgrEndorsement) || (is_array($dgrEndorsement) && empty($dgrEndorsement))) {
            unset($this->dgrEndorsement);
        } else {
            $this->dgrEndorsement = $dgrEndorsement;
        }
        
        return $this;
    }
    /**
     * Add item to dgrEndorsement value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\DGREndorsement $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToDgrEndorsement(\AbnServiceSDK\StructType\DGREndorsement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\DGREndorsement) {
            throw new InvalidArgumentException(sprintf('The dgrEndorsement property can only contain items of type \AbnServiceSDK\StructType\DGREndorsement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dgrEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get mainTradingName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AbnServiceSDK\StructType\OrganisationName[]
     */
    public function getMainTradingName(): ?array
    {
        return $this->mainTradingName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMainTradingName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMainTradingName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMainTradingNameForArrayConstraintFromSetMainTradingName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityMainTradingNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityMainTradingNameItem instanceof \AbnServiceSDK\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntityMainTradingNameItem) ? get_class($responseBusinessEntityMainTradingNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntityMainTradingNameItem), var_export($responseBusinessEntityMainTradingNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mainTradingName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationName[] $mainTradingName
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setMainTradingName(?array $mainTradingName = null): self
    {
        // validation for constraint: array
        if ('' !== ($mainTradingNameArrayErrorMessage = self::validateMainTradingNameForArrayConstraintFromSetMainTradingName($mainTradingName))) {
            throw new InvalidArgumentException($mainTradingNameArrayErrorMessage, __LINE__);
        }
        if (is_null($mainTradingName) || (is_array($mainTradingName) && empty($mainTradingName))) {
            unset($this->mainTradingName);
        } else {
            $this->mainTradingName = $mainTradingName;
        }
        
        return $this;
    }
    /**
     * Add item to mainTradingName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationName $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToMainTradingName(\AbnServiceSDK\StructType\OrganisationName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationName) {
            throw new InvalidArgumentException(sprintf('The mainTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mainTradingName[] = $item;
        
        return $this;
    }
    /**
     * Get otherTradingName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AbnServiceSDK\StructType\OrganisationName[]
     */
    public function getOtherTradingName(): ?array
    {
        return $this->otherTradingName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOtherTradingName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOtherTradingName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOtherTradingNameForArrayConstraintFromSetOtherTradingName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityOtherTradingNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityOtherTradingNameItem instanceof \AbnServiceSDK\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntityOtherTradingNameItem) ? get_class($responseBusinessEntityOtherTradingNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntityOtherTradingNameItem), var_export($responseBusinessEntityOtherTradingNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The otherTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set otherTradingName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationName[] $otherTradingName
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setOtherTradingName(?array $otherTradingName = null): self
    {
        // validation for constraint: array
        if ('' !== ($otherTradingNameArrayErrorMessage = self::validateOtherTradingNameForArrayConstraintFromSetOtherTradingName($otherTradingName))) {
            throw new InvalidArgumentException($otherTradingNameArrayErrorMessage, __LINE__);
        }
        if (is_null($otherTradingName) || (is_array($otherTradingName) && empty($otherTradingName))) {
            unset($this->otherTradingName);
        } else {
            $this->otherTradingName = $otherTradingName;
        }
        
        return $this;
    }
    /**
     * Add item to otherTradingName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationName $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToOtherTradingName(\AbnServiceSDK\StructType\OrganisationName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationName) {
            throw new InvalidArgumentException(sprintf('The otherTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->otherTradingName[] = $item;
        
        return $this;
    }
    /**
     * Get mainBusinessPhysicalAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AbnServiceSDK\StructType\AddressDetails[]
     */
    public function getMainBusinessPhysicalAddress(): ?array
    {
        return $this->mainBusinessPhysicalAddress ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMainBusinessPhysicalAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMainBusinessPhysicalAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMainBusinessPhysicalAddressForArrayConstraintFromSetMainBusinessPhysicalAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityMainBusinessPhysicalAddressItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityMainBusinessPhysicalAddressItem instanceof \AbnServiceSDK\StructType\AddressDetails) {
                $invalidValues[] = is_object($responseBusinessEntityMainBusinessPhysicalAddressItem) ? get_class($responseBusinessEntityMainBusinessPhysicalAddressItem) : sprintf('%s(%s)', gettype($responseBusinessEntityMainBusinessPhysicalAddressItem), var_export($responseBusinessEntityMainBusinessPhysicalAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainBusinessPhysicalAddress property can only contain items of type \AbnServiceSDK\StructType\AddressDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mainBusinessPhysicalAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\AddressDetails[] $mainBusinessPhysicalAddress
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setMainBusinessPhysicalAddress(?array $mainBusinessPhysicalAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($mainBusinessPhysicalAddressArrayErrorMessage = self::validateMainBusinessPhysicalAddressForArrayConstraintFromSetMainBusinessPhysicalAddress($mainBusinessPhysicalAddress))) {
            throw new InvalidArgumentException($mainBusinessPhysicalAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($mainBusinessPhysicalAddress) || (is_array($mainBusinessPhysicalAddress) && empty($mainBusinessPhysicalAddress))) {
            unset($this->mainBusinessPhysicalAddress);
        } else {
            $this->mainBusinessPhysicalAddress = $mainBusinessPhysicalAddress;
        }
        
        return $this;
    }
    /**
     * Add item to mainBusinessPhysicalAddress value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\AddressDetails $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToMainBusinessPhysicalAddress(\AbnServiceSDK\StructType\AddressDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\AddressDetails) {
            throw new InvalidArgumentException(sprintf('The mainBusinessPhysicalAddress property can only contain items of type \AbnServiceSDK\StructType\AddressDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mainBusinessPhysicalAddress[] = $item;
        
        return $this;
    }
    /**
     * Get dgrFund value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AbnServiceSDK\StructType\DgrFund[]
     */
    public function getDgrFund(): ?array
    {
        return $this->dgrFund ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDgrFund method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDgrFund method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDgrFundForArrayConstraintFromSetDgrFund(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntityDgrFundItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntityDgrFundItem instanceof \AbnServiceSDK\StructType\DgrFund) {
                $invalidValues[] = is_object($responseBusinessEntityDgrFundItem) ? get_class($responseBusinessEntityDgrFundItem) : sprintf('%s(%s)', gettype($responseBusinessEntityDgrFundItem), var_export($responseBusinessEntityDgrFundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dgrFund property can only contain items of type \AbnServiceSDK\StructType\DgrFund, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dgrFund value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\DgrFund[] $dgrFund
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function setDgrFund(?array $dgrFund = null): self
    {
        // validation for constraint: array
        if ('' !== ($dgrFundArrayErrorMessage = self::validateDgrFundForArrayConstraintFromSetDgrFund($dgrFund))) {
            throw new InvalidArgumentException($dgrFundArrayErrorMessage, __LINE__);
        }
        if (is_null($dgrFund) || (is_array($dgrFund) && empty($dgrFund))) {
            unset($this->dgrFund);
        } else {
            $this->dgrFund = $dgrFund;
        }
        
        return $this;
    }
    /**
     * Add item to dgrFund value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\DgrFund $item
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity
     */
    public function addToDgrFund(\AbnServiceSDK\StructType\DgrFund $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\DgrFund) {
            throw new InvalidArgumentException(sprintf('The dgrFund property can only contain items of type \AbnServiceSDK\StructType\DgrFund, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dgrFund[] = $item;
        
        return $this;
    }
}
