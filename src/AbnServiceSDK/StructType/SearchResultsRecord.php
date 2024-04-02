<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchResultsRecord StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchResultsRecord extends AbstractStructBase
{
    /**
     * The ABN
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\IdentifierSummary[]
     */
    protected ?array $ABN = null;
    /**
     * The legalName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\IndividualSimpleName[]
     */
    protected ?array $legalName = null;
    /**
     * The mainName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationSimpleName[]
     */
    protected ?array $mainName = null;
    /**
     * The mainTradingName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationSimpleName[]
     */
    protected ?array $mainTradingName = null;
    /**
     * The otherTradingName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationSimpleName[]
     */
    protected ?array $otherTradingName = null;
    /**
     * The PBIEName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationSimpleName[]
     */
    protected ?array $PBIEName = null;
    /**
     * The AWEFName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationSimpleName[]
     */
    protected ?array $AWEFName = null;
    /**
     * The businessName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationSimpleName[]
     */
    protected ?array $businessName = null;
    /**
     * The dgrFundName
     * Meta information extracted from the WSDL
     * - choice: legalName | mainName | mainTradingName | otherTradingName | PBIEName | AWEFName | businessName | dgrFundName
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\OrganisationSimpleName[]
     */
    protected ?array $dgrFundName = null;
    /**
     * The mainBusinessPhysicalAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AbnServiceSDK\StructType\AddressSimple[]
     */
    protected ?array $mainBusinessPhysicalAddress = null;
    /**
     * Constructor method for SearchResultsRecord
     * @uses SearchResultsRecord::setABN()
     * @uses SearchResultsRecord::setLegalName()
     * @uses SearchResultsRecord::setMainName()
     * @uses SearchResultsRecord::setMainTradingName()
     * @uses SearchResultsRecord::setOtherTradingName()
     * @uses SearchResultsRecord::setPBIEName()
     * @uses SearchResultsRecord::setAWEFName()
     * @uses SearchResultsRecord::setBusinessName()
     * @uses SearchResultsRecord::setDgrFundName()
     * @uses SearchResultsRecord::setMainBusinessPhysicalAddress()
     * @param \AbnServiceSDK\StructType\IdentifierSummary[] $aBN
     * @param \AbnServiceSDK\StructType\IndividualSimpleName[] $legalName
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $mainName
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $mainTradingName
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $otherTradingName
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $pBIEName
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $aWEFName
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $businessName
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $dgrFundName
     * @param \AbnServiceSDK\StructType\AddressSimple[] $mainBusinessPhysicalAddress
     */
    public function __construct(?array $aBN = null, ?array $legalName = null, ?array $mainName = null, ?array $mainTradingName = null, ?array $otherTradingName = null, ?array $pBIEName = null, ?array $aWEFName = null, ?array $businessName = null, ?array $dgrFundName = null, ?array $mainBusinessPhysicalAddress = null)
    {
        $this
            ->setABN($aBN)
            ->setLegalName($legalName)
            ->setMainName($mainName)
            ->setMainTradingName($mainTradingName)
            ->setOtherTradingName($otherTradingName)
            ->setPBIEName($pBIEName)
            ->setAWEFName($aWEFName)
            ->setBusinessName($businessName)
            ->setDgrFundName($dgrFundName)
            ->setMainBusinessPhysicalAddress($mainBusinessPhysicalAddress);
    }
    /**
     * Get ABN value
     * @return \AbnServiceSDK\StructType\IdentifierSummary[]
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
        foreach ($values as $searchResultsRecordABNItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordABNItem instanceof \AbnServiceSDK\StructType\IdentifierSummary) {
                $invalidValues[] = is_object($searchResultsRecordABNItem) ? get_class($searchResultsRecordABNItem) : sprintf('%s(%s)', gettype($searchResultsRecordABNItem), var_export($searchResultsRecordABNItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ABN property can only contain items of type \AbnServiceSDK\StructType\IdentifierSummary, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ABN value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\IdentifierSummary[] $aBN
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
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
     * @param \AbnServiceSDK\StructType\IdentifierSummary $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToABN(\AbnServiceSDK\StructType\IdentifierSummary $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\IdentifierSummary) {
            throw new InvalidArgumentException(sprintf('The ABN property can only contain items of type \AbnServiceSDK\StructType\IdentifierSummary, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ABN[] = $item;
        
        return $this;
    }
    /**
     * Get legalName value
     * @return \AbnServiceSDK\StructType\IndividualSimpleName[]|null
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
        foreach ($values as $searchResultsRecordLegalNameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordLegalNameItem instanceof \AbnServiceSDK\StructType\IndividualSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordLegalNameItem) ? get_class($searchResultsRecordLegalNameItem) : sprintf('%s(%s)', gettype($searchResultsRecordLegalNameItem), var_export($searchResultsRecordLegalNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The legalName property can only contain items of type \AbnServiceSDK\StructType\IndividualSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
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
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
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
     * @param \AbnServiceSDK\StructType\IndividualSimpleName[] $legalName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setLegalName(?array $legalName = null): self
    {
        // validation for constraint: array
        if ('' !== ($legalNameArrayErrorMessage = self::validateLegalNameForArrayConstraintFromSetLegalName($legalName))) {
            throw new InvalidArgumentException($legalNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
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
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
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
     * @param \AbnServiceSDK\StructType\IndividualSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToLegalName(\AbnServiceSDK\StructType\IndividualSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\IndividualSimpleName) {
            throw new InvalidArgumentException(sprintf('The legalName property can only contain items of type \AbnServiceSDK\StructType\IndividualSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
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
     * @return \AbnServiceSDK\StructType\OrganisationSimpleName[]|null
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
        foreach ($values as $searchResultsRecordMainNameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordMainNameItem instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordMainNameItem) ? get_class($searchResultsRecordMainNameItem) : sprintf('%s(%s)', gettype($searchResultsRecordMainNameItem), var_export($searchResultsRecordMainNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
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
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
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
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $mainName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setMainName(?array $mainName = null): self
    {
        // validation for constraint: array
        if ('' !== ($mainNameArrayErrorMessage = self::validateMainNameForArrayConstraintFromSetMainName($mainName))) {
            throw new InvalidArgumentException($mainNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
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
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
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
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToMainName(\AbnServiceSDK\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The mainName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
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
     * Get mainTradingName value
     * @return \AbnServiceSDK\StructType\OrganisationSimpleName[]|null
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
        foreach ($values as $searchResultsRecordMainTradingNameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordMainTradingNameItem instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordMainTradingNameItem) ? get_class($searchResultsRecordMainTradingNameItem) : sprintf('%s(%s)', gettype($searchResultsRecordMainTradingNameItem), var_export($searchResultsRecordMainTradingNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMainTradingName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMainTradingName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMainTradingNameForChoiceConstraintFromSetMainTradingName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property mainTradingName can\'t be set as the property %s is already set. Only one property must be set among these properties: mainTradingName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set mainTradingName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $mainTradingName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setMainTradingName(?array $mainTradingName = null): self
    {
        // validation for constraint: array
        if ('' !== ($mainTradingNameArrayErrorMessage = self::validateMainTradingNameForArrayConstraintFromSetMainTradingName($mainTradingName))) {
            throw new InvalidArgumentException($mainTradingNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($mainTradingNameChoiceErrorMessage = self::validateMainTradingNameForChoiceConstraintFromSetMainTradingName($mainTradingName))) {
            throw new InvalidArgumentException($mainTradingNameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($mainTradingName) && count($mainTradingName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($mainTradingName)), __LINE__);
        }
        if (is_null($mainTradingName) || (is_array($mainTradingName) && empty($mainTradingName))) {
            unset($this->mainTradingName);
        } else {
            $this->mainTradingName = $mainTradingName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToMainTradingName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToMainTradingName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToMainTradingName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property mainTradingName can\'t be set as the property %s is already set. Only one property must be set among these properties: mainTradingName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to mainTradingName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToMainTradingName(\AbnServiceSDK\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The mainTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToMainTradingName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->mainTradingName) && count($this->mainTradingName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->mainTradingName)), __LINE__);
        }
        $this->mainTradingName[] = $item;
        
        return $this;
    }
    /**
     * Get otherTradingName value
     * @return \AbnServiceSDK\StructType\OrganisationSimpleName[]|null
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
        foreach ($values as $searchResultsRecordOtherTradingNameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordOtherTradingNameItem instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordOtherTradingNameItem) ? get_class($searchResultsRecordOtherTradingNameItem) : sprintf('%s(%s)', gettype($searchResultsRecordOtherTradingNameItem), var_export($searchResultsRecordOtherTradingNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The otherTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOtherTradingName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOtherTradingName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOtherTradingNameForChoiceConstraintFromSetOtherTradingName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property otherTradingName can\'t be set as the property %s is already set. Only one property must be set among these properties: otherTradingName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set otherTradingName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $otherTradingName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setOtherTradingName(?array $otherTradingName = null): self
    {
        // validation for constraint: array
        if ('' !== ($otherTradingNameArrayErrorMessage = self::validateOtherTradingNameForArrayConstraintFromSetOtherTradingName($otherTradingName))) {
            throw new InvalidArgumentException($otherTradingNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($otherTradingNameChoiceErrorMessage = self::validateOtherTradingNameForChoiceConstraintFromSetOtherTradingName($otherTradingName))) {
            throw new InvalidArgumentException($otherTradingNameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($otherTradingName) && count($otherTradingName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($otherTradingName)), __LINE__);
        }
        if (is_null($otherTradingName) || (is_array($otherTradingName) && empty($otherTradingName))) {
            unset($this->otherTradingName);
        } else {
            $this->otherTradingName = $otherTradingName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToOtherTradingName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToOtherTradingName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToOtherTradingName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property otherTradingName can\'t be set as the property %s is already set. Only one property must be set among these properties: otherTradingName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to otherTradingName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToOtherTradingName(\AbnServiceSDK\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The otherTradingName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToOtherTradingName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->otherTradingName) && count($this->otherTradingName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->otherTradingName)), __LINE__);
        }
        $this->otherTradingName[] = $item;
        
        return $this;
    }
    /**
     * Get PBIEName value
     * @return \AbnServiceSDK\StructType\OrganisationSimpleName[]|null
     */
    public function getPBIEName(): ?array
    {
        return $this->PBIEName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPBIEName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPBIEName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePBIENameForArrayConstraintFromSetPBIEName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchResultsRecordPBIENameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordPBIENameItem instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordPBIENameItem) ? get_class($searchResultsRecordPBIENameItem) : sprintf('%s(%s)', gettype($searchResultsRecordPBIENameItem), var_export($searchResultsRecordPBIENameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PBIEName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPBIEName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPBIEName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePBIENameForChoiceConstraintFromSetPBIEName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'AWEFName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PBIEName can\'t be set as the property %s is already set. Only one property must be set among these properties: PBIEName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PBIEName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $pBIEName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setPBIEName(?array $pBIEName = null): self
    {
        // validation for constraint: array
        if ('' !== ($pBIENameArrayErrorMessage = self::validatePBIENameForArrayConstraintFromSetPBIEName($pBIEName))) {
            throw new InvalidArgumentException($pBIENameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($pBIENameChoiceErrorMessage = self::validatePBIENameForChoiceConstraintFromSetPBIEName($pBIEName))) {
            throw new InvalidArgumentException($pBIENameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($pBIEName) && count($pBIEName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($pBIEName)), __LINE__);
        }
        if (is_null($pBIEName) || (is_array($pBIEName) && empty($pBIEName))) {
            unset($this->PBIEName);
        } else {
            $this->PBIEName = $pBIEName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToPBIEName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPBIEName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToPBIEName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'AWEFName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PBIEName can\'t be set as the property %s is already set. Only one property must be set among these properties: PBIEName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to PBIEName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToPBIEName(\AbnServiceSDK\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The PBIEName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToPBIEName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->PBIEName) && count($this->PBIEName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PBIEName)), __LINE__);
        }
        $this->PBIEName[] = $item;
        
        return $this;
    }
    /**
     * Get AWEFName value
     * @return \AbnServiceSDK\StructType\OrganisationSimpleName[]|null
     */
    public function getAWEFName(): ?array
    {
        return $this->AWEFName ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAWEFName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAWEFName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAWEFNameForArrayConstraintFromSetAWEFName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchResultsRecordAWEFNameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordAWEFNameItem instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordAWEFNameItem) ? get_class($searchResultsRecordAWEFNameItem) : sprintf('%s(%s)', gettype($searchResultsRecordAWEFNameItem), var_export($searchResultsRecordAWEFNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AWEFName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAWEFName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAWEFName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAWEFNameForChoiceConstraintFromSetAWEFName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AWEFName can\'t be set as the property %s is already set. Only one property must be set among these properties: AWEFName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AWEFName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $aWEFName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setAWEFName(?array $aWEFName = null): self
    {
        // validation for constraint: array
        if ('' !== ($aWEFNameArrayErrorMessage = self::validateAWEFNameForArrayConstraintFromSetAWEFName($aWEFName))) {
            throw new InvalidArgumentException($aWEFNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($aWEFNameChoiceErrorMessage = self::validateAWEFNameForChoiceConstraintFromSetAWEFName($aWEFName))) {
            throw new InvalidArgumentException($aWEFNameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($aWEFName) && count($aWEFName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($aWEFName)), __LINE__);
        }
        if (is_null($aWEFName) || (is_array($aWEFName) && empty($aWEFName))) {
            unset($this->AWEFName);
        } else {
            $this->AWEFName = $aWEFName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToAWEFName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAWEFName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToAWEFName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'businessName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AWEFName can\'t be set as the property %s is already set. Only one property must be set among these properties: AWEFName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to AWEFName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToAWEFName(\AbnServiceSDK\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The AWEFName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToAWEFName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->AWEFName) && count($this->AWEFName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->AWEFName)), __LINE__);
        }
        $this->AWEFName[] = $item;
        
        return $this;
    }
    /**
     * Get businessName value
     * @return \AbnServiceSDK\StructType\OrganisationSimpleName[]|null
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
        foreach ($values as $searchResultsRecordBusinessNameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordBusinessNameItem instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordBusinessNameItem) ? get_class($searchResultsRecordBusinessNameItem) : sprintf('%s(%s)', gettype($searchResultsRecordBusinessNameItem), var_export($searchResultsRecordBusinessNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The businessName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBusinessNameForChoiceConstraintFromSetBusinessName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessName can\'t be set as the property %s is already set. Only one property must be set among these properties: businessName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set businessName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $businessName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setBusinessName(?array $businessName = null): self
    {
        // validation for constraint: array
        if ('' !== ($businessNameArrayErrorMessage = self::validateBusinessNameForArrayConstraintFromSetBusinessName($businessName))) {
            throw new InvalidArgumentException($businessNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($businessNameChoiceErrorMessage = self::validateBusinessNameForChoiceConstraintFromSetBusinessName($businessName))) {
            throw new InvalidArgumentException($businessNameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($businessName) && count($businessName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($businessName)), __LINE__);
        }
        if (is_null($businessName) || (is_array($businessName) && empty($businessName))) {
            unset($this->businessName);
        } else {
            $this->businessName = $businessName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToBusinessName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToBusinessName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToBusinessName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'dgrFundName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessName can\'t be set as the property %s is already set. Only one property must be set among these properties: businessName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to businessName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToBusinessName(\AbnServiceSDK\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The businessName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToBusinessName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->businessName) && count($this->businessName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->businessName)), __LINE__);
        }
        $this->businessName[] = $item;
        
        return $this;
    }
    /**
     * Get dgrFundName value
     * @return \AbnServiceSDK\StructType\OrganisationSimpleName[]|null
     */
    public function getDgrFundName(): ?array
    {
        return $this->dgrFundName ?? null;
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
        foreach ($values as $searchResultsRecordDgrFundNameItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordDgrFundNameItem instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
                $invalidValues[] = is_object($searchResultsRecordDgrFundNameItem) ? get_class($searchResultsRecordDgrFundNameItem) : sprintf('%s(%s)', gettype($searchResultsRecordDgrFundNameItem), var_export($searchResultsRecordDgrFundNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dgrFundName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDgrFundName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDgrFundName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDgrFundNameForChoiceConstraintFromSetDgrFundName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property dgrFundName can\'t be set as the property %s is already set. Only one property must be set among these properties: dgrFundName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set dgrFundName value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName[] $dgrFundName
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function setDgrFundName(?array $dgrFundName = null): self
    {
        // validation for constraint: array
        if ('' !== ($dgrFundNameArrayErrorMessage = self::validateDgrFundNameForArrayConstraintFromSetDgrFundName($dgrFundName))) {
            throw new InvalidArgumentException($dgrFundNameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($dgrFundNameChoiceErrorMessage = self::validateDgrFundNameForChoiceConstraintFromSetDgrFundName($dgrFundName))) {
            throw new InvalidArgumentException($dgrFundNameChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($dgrFundName) && count($dgrFundName) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($dgrFundName)), __LINE__);
        }
        if (is_null($dgrFundName) || (is_array($dgrFundName) && empty($dgrFundName))) {
            unset($this->dgrFundName);
        } else {
            $this->dgrFundName = $dgrFundName;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToDgrFundName method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToDgrFundName method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToDgrFundName($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'legalName',
            'mainName',
            'mainTradingName',
            'otherTradingName',
            'PBIEName',
            'AWEFName',
            'businessName',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property dgrFundName can\'t be set as the property %s is already set. Only one property must be set among these properties: dgrFundName, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to dgrFundName value
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\OrganisationSimpleName $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToDgrFundName(\AbnServiceSDK\StructType\OrganisationSimpleName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\OrganisationSimpleName) {
            throw new InvalidArgumentException(sprintf('The dgrFundName property can only contain items of type \AbnServiceSDK\StructType\OrganisationSimpleName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(legalName, mainName, mainTradingName, otherTradingName, PBIEName, AWEFName, businessName, dgrFundName)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToDgrFundName($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1)
        if (is_array($this->dgrFundName) && count($this->dgrFundName) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->dgrFundName)), __LINE__);
        }
        $this->dgrFundName[] = $item;
        
        return $this;
    }
    /**
     * Get mainBusinessPhysicalAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AbnServiceSDK\StructType\AddressSimple[]
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
        foreach ($values as $searchResultsRecordMainBusinessPhysicalAddressItem) {
            // validation for constraint: itemType
            if (!$searchResultsRecordMainBusinessPhysicalAddressItem instanceof \AbnServiceSDK\StructType\AddressSimple) {
                $invalidValues[] = is_object($searchResultsRecordMainBusinessPhysicalAddressItem) ? get_class($searchResultsRecordMainBusinessPhysicalAddressItem) : sprintf('%s(%s)', gettype($searchResultsRecordMainBusinessPhysicalAddressItem), var_export($searchResultsRecordMainBusinessPhysicalAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainBusinessPhysicalAddress property can only contain items of type \AbnServiceSDK\StructType\AddressSimple, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mainBusinessPhysicalAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\AddressSimple[] $mainBusinessPhysicalAddress
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
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
     * @param \AbnServiceSDK\StructType\AddressSimple $item
     * @return \AbnServiceSDK\StructType\SearchResultsRecord
     */
    public function addToMainBusinessPhysicalAddress(\AbnServiceSDK\StructType\AddressSimple $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \AbnServiceSDK\StructType\AddressSimple) {
            throw new InvalidArgumentException(sprintf('The mainBusinessPhysicalAddress property can only contain items of type \AbnServiceSDK\StructType\AddressSimple, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mainBusinessPhysicalAddress[] = $item;
        
        return $this;
    }
}
