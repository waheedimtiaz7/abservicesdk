<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBusinessEntity201408 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseBusinessEntity201408 extends ResponseBody
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
     * @var \ABN\AbnServiceAPI\StructType\Identifier[]
     */
    protected ?array $ABN = null;
    /**
     * The entityStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\EntityStatus[]
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
     * @var \ABN\AbnServiceAPI\StructType\IndividualName[]
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
     * @var \ABN\AbnServiceAPI\StructType\OrganisationName[]
     */
    protected ?array $mainName = null;
    /**
     * The superannuationStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\SuperannuationStatus|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus = null;
    /**
     * The mainPostalPhysicalAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\AddressFull|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress = null;
    /**
     * The ACNCRegistration
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\Registration[]
     */
    protected ?array $ACNCRegistration = null;
    /**
     * The entityType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\EntityType
     */
    protected ?\ABN\AbnServiceAPI\StructType\EntityType $entityType;
    /**
     * The goodsAndServicesTax
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax[]
     */
    protected ?array $goodsAndServicesTax = null;
    /**
     * The dgrEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber[]
     */
    protected ?array $dgrEndorsement = null;
    /**
     * The mainTradingName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\OrganisationName[]
     */
    protected ?array $mainTradingName = null;
    /**
     * The otherTradingName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\OrganisationName[]
     */
    protected ?array $otherTradingName = null;
    /**
     * The mainBusinessPhysicalAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\AddressDetails[]
     */
    protected ?array $mainBusinessPhysicalAddress = null;
    /**
     * The dgrFund
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber[]
     */
    protected ?array $dgrFund = null;
    /**
     * The charityType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\CharityType[]
     */
    protected ?array $charityType = null;
    /**
     * The taxConcessionCharityEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\CharityConcession[]
     */
    protected ?array $taxConcessionCharityEndorsement = null;
    /**
     * The publicBenevolentInstitutionEmployer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\CharitableFund[]
     */
    protected ?array $publicBenevolentInstitutionEmployer = null;
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
     * Constructor method for ResponseBusinessEntity201408
     * @uses ResponseBusinessEntity201408::setRecordLastUpdatedDate()
     * @uses ResponseBusinessEntity201408::setABN()
     * @uses ResponseBusinessEntity201408::setEntityStatus()
     * @uses ResponseBusinessEntity201408::setASICNumber()
     * @uses ResponseBusinessEntity201408::setLegalName()
     * @uses ResponseBusinessEntity201408::setMainName()
     * @uses ResponseBusinessEntity201408::setSuperannuationStatus()
     * @uses ResponseBusinessEntity201408::setMainPostalPhysicalAddress()
     * @uses ResponseBusinessEntity201408::setACNCRegistration()
     * @uses ResponseBusinessEntity201408::setEntityType()
     * @uses ResponseBusinessEntity201408::setGoodsAndServicesTax()
     * @uses ResponseBusinessEntity201408::setDgrEndorsement()
     * @uses ResponseBusinessEntity201408::setMainTradingName()
     * @uses ResponseBusinessEntity201408::setOtherTradingName()
     * @uses ResponseBusinessEntity201408::setMainBusinessPhysicalAddress()
     * @uses ResponseBusinessEntity201408::setDgrFund()
     * @uses ResponseBusinessEntity201408::setCharityType()
     * @uses ResponseBusinessEntity201408::setTaxConcessionCharityEndorsement()
     * @uses ResponseBusinessEntity201408::setPublicBenevolentInstitutionEmployer()
     * @uses ResponseBusinessEntity201408::setBusinessName()
     * @param string $recordLastUpdatedDate
     * @param \ABN\AbnServiceAPI\StructType\Identifier[] $aBN
     * @param \ABN\AbnServiceAPI\StructType\EntityStatus[] $entityStatus
     * @param string $aSICNumber
     * @param \ABN\AbnServiceAPI\StructType\IndividualName[] $legalName
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $mainName
     * @param \ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus
     * @param \ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress
     * @param \ABN\AbnServiceAPI\StructType\Registration[] $aCNCRegistration
     * @param \ABN\AbnServiceAPI\StructType\EntityType $entityType
     * @param \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax[] $goodsAndServicesTax
     * @param \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber[] $dgrEndorsement
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $mainTradingName
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $otherTradingName
     * @param \ABN\AbnServiceAPI\StructType\AddressDetails[] $mainBusinessPhysicalAddress
     * @param \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber[] $dgrFund
     * @param \ABN\AbnServiceAPI\StructType\CharityType[] $charityType
     * @param \ABN\AbnServiceAPI\StructType\CharityConcession[] $taxConcessionCharityEndorsement
     * @param \ABN\AbnServiceAPI\StructType\CharitableFund[] $publicBenevolentInstitutionEmployer
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $businessName
     */
    public function __construct(string $recordLastUpdatedDate, ?array $aBN = null, ?array $entityStatus = null, ?string $aSICNumber = null, ?array $legalName = null, ?array $mainName = null, ?\ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus = null, ?\ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress = null, ?array $aCNCRegistration = null, ?\ABN\AbnServiceAPI\StructType\EntityType $entityType, ?array $goodsAndServicesTax = null, ?array $dgrEndorsement = null, ?array $mainTradingName = null, ?array $otherTradingName = null, ?array $mainBusinessPhysicalAddress = null, ?array $dgrFund = null, ?array $charityType = null, ?array $taxConcessionCharityEndorsement = null, ?array $publicBenevolentInstitutionEmployer = null, ?array $businessName = null)
    {
        $this
            ->setRecordLastUpdatedDate($recordLastUpdatedDate)
            ->setABN($aBN)
            ->setEntityStatus($entityStatus)
            ->setASICNumber($aSICNumber)
            ->setLegalName($legalName)
            ->setMainName($mainName)
            ->setSuperannuationStatus($superannuationStatus)
            ->setMainPostalPhysicalAddress($mainPostalPhysicalAddress)
            ->setACNCRegistration($aCNCRegistration)
            ->setEntityType($entityType)
            ->setGoodsAndServicesTax($goodsAndServicesTax)
            ->setDgrEndorsement($dgrEndorsement)
            ->setMainTradingName($mainTradingName)
            ->setOtherTradingName($otherTradingName)
            ->setMainBusinessPhysicalAddress($mainBusinessPhysicalAddress)
            ->setDgrFund($dgrFund)
            ->setCharityType($charityType)
            ->setTaxConcessionCharityEndorsement($taxConcessionCharityEndorsement)
            ->setPublicBenevolentInstitutionEmployer($publicBenevolentInstitutionEmployer)
            ->setBusinessName($businessName);
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @return \ABN\AbnServiceAPI\StructType\Identifier[]
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
        foreach ($values as $responseBusinessEntity201408ABNItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408ABNItem instanceof \ABN\AbnServiceAPI\StructType\Identifier) {
                $invalidValues[] = is_object($responseBusinessEntity201408ABNItem) ? get_class($responseBusinessEntity201408ABNItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408ABNItem), var_export($responseBusinessEntity201408ABNItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ABN property can only contain items of type \ABN\AbnServiceAPI\StructType\Identifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ABN value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\Identifier[] $aBN
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\Identifier $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToABN(\ABN\AbnServiceAPI\StructType\Identifier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\Identifier) {
            throw new InvalidArgumentException(sprintf('The ABN property can only contain items of type \ABN\AbnServiceAPI\StructType\Identifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ABN[] = $item;
        
        return $this;
    }
    /**
     * Get entityStatus value
     * @return \ABN\AbnServiceAPI\StructType\EntityStatus[]
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
        foreach ($values as $responseBusinessEntity201408EntityStatusItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408EntityStatusItem instanceof \ABN\AbnServiceAPI\StructType\EntityStatus) {
                $invalidValues[] = is_object($responseBusinessEntity201408EntityStatusItem) ? get_class($responseBusinessEntity201408EntityStatusItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408EntityStatusItem), var_export($responseBusinessEntity201408EntityStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entityStatus property can only contain items of type \ABN\AbnServiceAPI\StructType\EntityStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set entityStatus value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\EntityStatus[] $entityStatus
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\EntityStatus $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToEntityStatus(\ABN\AbnServiceAPI\StructType\EntityStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\EntityStatus) {
            throw new InvalidArgumentException(sprintf('The entityStatus property can only contain items of type \ABN\AbnServiceAPI\StructType\EntityStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @return \ABN\AbnServiceAPI\StructType\IndividualName[]|null
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
        foreach ($values as $responseBusinessEntity201408LegalNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408LegalNameItem instanceof \ABN\AbnServiceAPI\StructType\IndividualName) {
                $invalidValues[] = is_object($responseBusinessEntity201408LegalNameItem) ? get_class($responseBusinessEntity201408LegalNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408LegalNameItem), var_export($responseBusinessEntity201408LegalNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The legalName property can only contain items of type \ABN\AbnServiceAPI\StructType\IndividualName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
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
     * @param \ABN\AbnServiceAPI\StructType\IndividualName[] $legalName
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\IndividualName $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToLegalName(\ABN\AbnServiceAPI\StructType\IndividualName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\IndividualName) {
            throw new InvalidArgumentException(sprintf('The legalName property can only contain items of type \ABN\AbnServiceAPI\StructType\IndividualName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \ABN\AbnServiceAPI\StructType\OrganisationName[]|null
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
        foreach ($values as $responseBusinessEntity201408MainNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408MainNameItem instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntity201408MainNameItem) ? get_class($responseBusinessEntity201408MainNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408MainNameItem), var_export($responseBusinessEntity201408MainNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
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
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $mainName
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToMainName(\ABN\AbnServiceAPI\StructType\OrganisationName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
            throw new InvalidArgumentException(sprintf('The mainName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * Get superannuationStatus value
     * @return \ABN\AbnServiceAPI\StructType\SuperannuationStatus|null
     */
    public function getSuperannuationStatus(): ?\ABN\AbnServiceAPI\StructType\SuperannuationStatus
    {
        return $this->superannuationStatus;
    }
    /**
     * Set superannuationStatus value
     * @param \ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function setSuperannuationStatus(?\ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus = null): self
    {
        $this->superannuationStatus = $superannuationStatus;
        
        return $this;
    }
    /**
     * Get mainPostalPhysicalAddress value
     * @return \ABN\AbnServiceAPI\StructType\AddressFull|null
     */
    public function getMainPostalPhysicalAddress(): ?\ABN\AbnServiceAPI\StructType\AddressFull
    {
        return $this->mainPostalPhysicalAddress;
    }
    /**
     * Set mainPostalPhysicalAddress value
     * @param \ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function setMainPostalPhysicalAddress(?\ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress = null): self
    {
        $this->mainPostalPhysicalAddress = $mainPostalPhysicalAddress;
        
        return $this;
    }
    /**
     * Get ACNCRegistration value
     * @return \ABN\AbnServiceAPI\StructType\Registration[]
     */
    public function getACNCRegistration(): ?array
    {
        return $this->ACNCRegistration;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setACNCRegistration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setACNCRegistration method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateACNCRegistrationForArrayConstraintFromSetACNCRegistration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntity201408ACNCRegistrationItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408ACNCRegistrationItem instanceof \ABN\AbnServiceAPI\StructType\Registration) {
                $invalidValues[] = is_object($responseBusinessEntity201408ACNCRegistrationItem) ? get_class($responseBusinessEntity201408ACNCRegistrationItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408ACNCRegistrationItem), var_export($responseBusinessEntity201408ACNCRegistrationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ACNCRegistration property can only contain items of type \ABN\AbnServiceAPI\StructType\Registration, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ACNCRegistration value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\Registration[] $aCNCRegistration
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function setACNCRegistration(?array $aCNCRegistration = null): self
    {
        // validation for constraint: array
        if ('' !== ($aCNCRegistrationArrayErrorMessage = self::validateACNCRegistrationForArrayConstraintFromSetACNCRegistration($aCNCRegistration))) {
            throw new InvalidArgumentException($aCNCRegistrationArrayErrorMessage, __LINE__);
        }
        $this->ACNCRegistration = $aCNCRegistration;
        
        return $this;
    }
    /**
     * Add item to ACNCRegistration value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\Registration $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToACNCRegistration(\ABN\AbnServiceAPI\StructType\Registration $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\Registration) {
            throw new InvalidArgumentException(sprintf('The ACNCRegistration property can only contain items of type \ABN\AbnServiceAPI\StructType\Registration, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ACNCRegistration[] = $item;
        
        return $this;
    }
    /**
     * Get entityType value
     * @return \ABN\AbnServiceAPI\StructType\EntityType
     */
    public function getEntityType(): \ABN\AbnServiceAPI\StructType\EntityType
    {
        return $this->entityType;
    }
    /**
     * Set entityType value
     * @param \ABN\AbnServiceAPI\StructType\EntityType $entityType
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function setEntityType(?\ABN\AbnServiceAPI\StructType\EntityType $entityType): self
    {
        $this->entityType = $entityType;
        
        return $this;
    }
    /**
     * Get goodsAndServicesTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax[]
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
        foreach ($values as $responseBusinessEntity201408GoodsAndServicesTaxItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408GoodsAndServicesTaxItem instanceof \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax) {
                $invalidValues[] = is_object($responseBusinessEntity201408GoodsAndServicesTaxItem) ? get_class($responseBusinessEntity201408GoodsAndServicesTaxItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408GoodsAndServicesTaxItem), var_export($responseBusinessEntity201408GoodsAndServicesTaxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The goodsAndServicesTax property can only contain items of type \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set goodsAndServicesTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax[] $goodsAndServicesTax
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToGoodsAndServicesTax(\ABN\AbnServiceAPI\StructType\GoodsAndServicesTax $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax) {
            throw new InvalidArgumentException(sprintf('The goodsAndServicesTax property can only contain items of type \ABN\AbnServiceAPI\StructType\GoodsAndServicesTax, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->goodsAndServicesTax[] = $item;
        
        return $this;
    }
    /**
     * Get dgrEndorsement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber[]
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
        foreach ($values as $responseBusinessEntity201408DgrEndorsementItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408DgrEndorsementItem instanceof \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber) {
                $invalidValues[] = is_object($responseBusinessEntity201408DgrEndorsementItem) ? get_class($responseBusinessEntity201408DgrEndorsementItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408DgrEndorsementItem), var_export($responseBusinessEntity201408DgrEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dgrEndorsement property can only contain items of type \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dgrEndorsement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber[] $dgrEndorsement
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToDgrEndorsement(\ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber) {
            throw new InvalidArgumentException(sprintf('The dgrEndorsement property can only contain items of type \ABN\AbnServiceAPI\StructType\DgrEndorsementAndItemNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dgrEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get mainTradingName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\OrganisationName[]
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
        foreach ($values as $responseBusinessEntity201408MainTradingNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408MainTradingNameItem instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntity201408MainTradingNameItem) ? get_class($responseBusinessEntity201408MainTradingNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408MainTradingNameItem), var_export($responseBusinessEntity201408MainTradingNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainTradingName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mainTradingName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $mainTradingName
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToMainTradingName(\ABN\AbnServiceAPI\StructType\OrganisationName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
            throw new InvalidArgumentException(sprintf('The mainTradingName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mainTradingName[] = $item;
        
        return $this;
    }
    /**
     * Get otherTradingName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\OrganisationName[]
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
        foreach ($values as $responseBusinessEntity201408OtherTradingNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408OtherTradingNameItem instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntity201408OtherTradingNameItem) ? get_class($responseBusinessEntity201408OtherTradingNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408OtherTradingNameItem), var_export($responseBusinessEntity201408OtherTradingNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The otherTradingName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set otherTradingName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName[] $otherTradingName
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\OrganisationName $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToOtherTradingName(\ABN\AbnServiceAPI\StructType\OrganisationName $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
            throw new InvalidArgumentException(sprintf('The otherTradingName property can only contain items of type \ABN\AbnServiceAPI\StructType\OrganisationName, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->otherTradingName[] = $item;
        
        return $this;
    }
    /**
     * Get mainBusinessPhysicalAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\AddressDetails[]
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
        foreach ($values as $responseBusinessEntity201408MainBusinessPhysicalAddressItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408MainBusinessPhysicalAddressItem instanceof \ABN\AbnServiceAPI\StructType\AddressDetails) {
                $invalidValues[] = is_object($responseBusinessEntity201408MainBusinessPhysicalAddressItem) ? get_class($responseBusinessEntity201408MainBusinessPhysicalAddressItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408MainBusinessPhysicalAddressItem), var_export($responseBusinessEntity201408MainBusinessPhysicalAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mainBusinessPhysicalAddress property can only contain items of type \ABN\AbnServiceAPI\StructType\AddressDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mainBusinessPhysicalAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\AddressDetails[] $mainBusinessPhysicalAddress
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\AddressDetails $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToMainBusinessPhysicalAddress(\ABN\AbnServiceAPI\StructType\AddressDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\AddressDetails) {
            throw new InvalidArgumentException(sprintf('The mainBusinessPhysicalAddress property can only contain items of type \ABN\AbnServiceAPI\StructType\AddressDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mainBusinessPhysicalAddress[] = $item;
        
        return $this;
    }
    /**
     * Get dgrFund value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber[]
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
        foreach ($values as $responseBusinessEntity201408DgrFundItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408DgrFundItem instanceof \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber) {
                $invalidValues[] = is_object($responseBusinessEntity201408DgrFundItem) ? get_class($responseBusinessEntity201408DgrFundItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408DgrFundItem), var_export($responseBusinessEntity201408DgrFundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dgrFund property can only contain items of type \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dgrFund value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber[] $dgrFund
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @param \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToDgrFund(\ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber) {
            throw new InvalidArgumentException(sprintf('The dgrFund property can only contain items of type \ABN\AbnServiceAPI\StructType\DgrFundAndItemNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dgrFund[] = $item;
        
        return $this;
    }
    /**
     * Get charityType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\CharityType[]
     */
    public function getCharityType(): ?array
    {
        return $this->charityType ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCharityType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharityType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityTypeForArrayConstraintFromSetCharityType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntity201408CharityTypeItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408CharityTypeItem instanceof \ABN\AbnServiceAPI\StructType\CharityType) {
                $invalidValues[] = is_object($responseBusinessEntity201408CharityTypeItem) ? get_class($responseBusinessEntity201408CharityTypeItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408CharityTypeItem), var_export($responseBusinessEntity201408CharityTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The charityType property can only contain items of type \ABN\AbnServiceAPI\StructType\CharityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set charityType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\CharityType[] $charityType
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function setCharityType(?array $charityType = null): self
    {
        // validation for constraint: array
        if ('' !== ($charityTypeArrayErrorMessage = self::validateCharityTypeForArrayConstraintFromSetCharityType($charityType))) {
            throw new InvalidArgumentException($charityTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($charityType) || (is_array($charityType) && empty($charityType))) {
            unset($this->charityType);
        } else {
            $this->charityType = $charityType;
        }
        
        return $this;
    }
    /**
     * Add item to charityType value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\CharityType $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToCharityType(\ABN\AbnServiceAPI\StructType\CharityType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\CharityType) {
            throw new InvalidArgumentException(sprintf('The charityType property can only contain items of type \ABN\AbnServiceAPI\StructType\CharityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->charityType[] = $item;
        
        return $this;
    }
    /**
     * Get taxConcessionCharityEndorsement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\CharityConcession[]
     */
    public function getTaxConcessionCharityEndorsement(): ?array
    {
        return $this->taxConcessionCharityEndorsement ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaxConcessionCharityEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxConcessionCharityEndorsement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxConcessionCharityEndorsementForArrayConstraintFromSetTaxConcessionCharityEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntity201408TaxConcessionCharityEndorsementItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408TaxConcessionCharityEndorsementItem instanceof \ABN\AbnServiceAPI\StructType\CharityConcession) {
                $invalidValues[] = is_object($responseBusinessEntity201408TaxConcessionCharityEndorsementItem) ? get_class($responseBusinessEntity201408TaxConcessionCharityEndorsementItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408TaxConcessionCharityEndorsementItem), var_export($responseBusinessEntity201408TaxConcessionCharityEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The taxConcessionCharityEndorsement property can only contain items of type \ABN\AbnServiceAPI\StructType\CharityConcession, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set taxConcessionCharityEndorsement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\CharityConcession[] $taxConcessionCharityEndorsement
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function setTaxConcessionCharityEndorsement(?array $taxConcessionCharityEndorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxConcessionCharityEndorsementArrayErrorMessage = self::validateTaxConcessionCharityEndorsementForArrayConstraintFromSetTaxConcessionCharityEndorsement($taxConcessionCharityEndorsement))) {
            throw new InvalidArgumentException($taxConcessionCharityEndorsementArrayErrorMessage, __LINE__);
        }
        if (is_null($taxConcessionCharityEndorsement) || (is_array($taxConcessionCharityEndorsement) && empty($taxConcessionCharityEndorsement))) {
            unset($this->taxConcessionCharityEndorsement);
        } else {
            $this->taxConcessionCharityEndorsement = $taxConcessionCharityEndorsement;
        }
        
        return $this;
    }
    /**
     * Add item to taxConcessionCharityEndorsement value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\CharityConcession $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToTaxConcessionCharityEndorsement(\ABN\AbnServiceAPI\StructType\CharityConcession $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\CharityConcession) {
            throw new InvalidArgumentException(sprintf('The taxConcessionCharityEndorsement property can only contain items of type \ABN\AbnServiceAPI\StructType\CharityConcession, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->taxConcessionCharityEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get publicBenevolentInstitutionEmployer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ABN\AbnServiceAPI\StructType\CharitableFund[]
     */
    public function getPublicBenevolentInstitutionEmployer(): ?array
    {
        return $this->publicBenevolentInstitutionEmployer ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPublicBenevolentInstitutionEmployer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPublicBenevolentInstitutionEmployer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePublicBenevolentInstitutionEmployerForArrayConstraintFromSetPublicBenevolentInstitutionEmployer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseBusinessEntity201408PublicBenevolentInstitutionEmployerItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408PublicBenevolentInstitutionEmployerItem instanceof \ABN\AbnServiceAPI\StructType\CharitableFund) {
                $invalidValues[] = is_object($responseBusinessEntity201408PublicBenevolentInstitutionEmployerItem) ? get_class($responseBusinessEntity201408PublicBenevolentInstitutionEmployerItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408PublicBenevolentInstitutionEmployerItem), var_export($responseBusinessEntity201408PublicBenevolentInstitutionEmployerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The publicBenevolentInstitutionEmployer property can only contain items of type \ABN\AbnServiceAPI\StructType\CharitableFund, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set publicBenevolentInstitutionEmployer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\CharitableFund[] $publicBenevolentInstitutionEmployer
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function setPublicBenevolentInstitutionEmployer(?array $publicBenevolentInstitutionEmployer = null): self
    {
        // validation for constraint: array
        if ('' !== ($publicBenevolentInstitutionEmployerArrayErrorMessage = self::validatePublicBenevolentInstitutionEmployerForArrayConstraintFromSetPublicBenevolentInstitutionEmployer($publicBenevolentInstitutionEmployer))) {
            throw new InvalidArgumentException($publicBenevolentInstitutionEmployerArrayErrorMessage, __LINE__);
        }
        if (is_null($publicBenevolentInstitutionEmployer) || (is_array($publicBenevolentInstitutionEmployer) && empty($publicBenevolentInstitutionEmployer))) {
            unset($this->publicBenevolentInstitutionEmployer);
        } else {
            $this->publicBenevolentInstitutionEmployer = $publicBenevolentInstitutionEmployer;
        }
        
        return $this;
    }
    /**
     * Add item to publicBenevolentInstitutionEmployer value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\CharitableFund $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
     */
    public function addToPublicBenevolentInstitutionEmployer(\ABN\AbnServiceAPI\StructType\CharitableFund $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\CharitableFund) {
            throw new InvalidArgumentException(sprintf('The publicBenevolentInstitutionEmployer property can only contain items of type \ABN\AbnServiceAPI\StructType\CharitableFund, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->publicBenevolentInstitutionEmployer[] = $item;
        
        return $this;
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
        foreach ($values as $responseBusinessEntity201408BusinessNameItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity201408BusinessNameItem instanceof \ABN\AbnServiceAPI\StructType\OrganisationName) {
                $invalidValues[] = is_object($responseBusinessEntity201408BusinessNameItem) ? get_class($responseBusinessEntity201408BusinessNameItem) : sprintf('%s(%s)', gettype($responseBusinessEntity201408BusinessNameItem), var_export($responseBusinessEntity201408BusinessNameItem, true));
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity201408
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
