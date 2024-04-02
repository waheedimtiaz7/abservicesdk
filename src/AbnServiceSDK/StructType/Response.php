<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Response StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Response extends AbstractStructBase
{
    /**
     * The dateRegisterLastUpdated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $dateRegisterLastUpdated;
    /**
     * The dateTimeRetrieved
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $dateTimeRetrieved;
    /**
     * The usageStatement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $usageStatement = null;
    /**
     * The businessEntity
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseBusinessEntity|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseBusinessEntity $businessEntity = null;
    /**
     * The businessEntity200506
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseBusinessEntity200506|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseBusinessEntity200506 $businessEntity200506 = null;
    /**
     * The businessEntity200709
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseBusinessEntity200709|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseBusinessEntity200709 $businessEntity200709 = null;
    /**
     * The businessEntity201205
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseBusinessEntity201205|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseBusinessEntity201205 $businessEntity201205 = null;
    /**
     * The businessEntity201408
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseBusinessEntity201408|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseBusinessEntity201408 $businessEntity201408 = null;
    /**
     * The businessEntity202001
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseBusinessEntity202001|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseBusinessEntity202001 $businessEntity202001 = null;
    /**
     * The exception
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseException|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseException $exception = null;
    /**
     * The abnList
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseABNList|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseABNList $abnList = null;
    /**
     * The searchResultsList
     * Meta information extracted from the WSDL
     * - choice: businessEntity | businessEntity200506 | businessEntity200709 | businessEntity201205 | businessEntity201408 | businessEntity202001 | exception | abnList | searchResultsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ResponseSearchResultsList|null
     */
    protected ?\AbnServiceSDK\StructType\ResponseSearchResultsList $searchResultsList = null;
    /**
     * Constructor method for Response
     * @uses Response::setDateRegisterLastUpdated()
     * @uses Response::setDateTimeRetrieved()
     * @uses Response::setUsageStatement()
     * @uses Response::setBusinessEntity()
     * @uses Response::setBusinessEntity200506()
     * @uses Response::setBusinessEntity200709()
     * @uses Response::setBusinessEntity201205()
     * @uses Response::setBusinessEntity201408()
     * @uses Response::setBusinessEntity202001()
     * @uses Response::setException()
     * @uses Response::setAbnList()
     * @uses Response::setSearchResultsList()
     * @param string $dateRegisterLastUpdated
     * @param string $dateTimeRetrieved
     * @param string $usageStatement
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity $businessEntity
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity200506 $businessEntity200506
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity200709 $businessEntity200709
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity201205 $businessEntity201205
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity201408 $businessEntity201408
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity202001 $businessEntity202001
     * @param \AbnServiceSDK\StructType\ResponseException $exception
     * @param \AbnServiceSDK\StructType\ResponseABNList $abnList
     * @param \AbnServiceSDK\StructType\ResponseSearchResultsList $searchResultsList
     */
    public function __construct(string $dateRegisterLastUpdated, string $dateTimeRetrieved, ?string $usageStatement = null, ?\AbnServiceSDK\StructType\ResponseBusinessEntity $businessEntity = null, ?\AbnServiceSDK\StructType\ResponseBusinessEntity200506 $businessEntity200506 = null, ?\AbnServiceSDK\StructType\ResponseBusinessEntity200709 $businessEntity200709 = null, ?\AbnServiceSDK\StructType\ResponseBusinessEntity201205 $businessEntity201205 = null, ?\AbnServiceSDK\StructType\ResponseBusinessEntity201408 $businessEntity201408 = null, ?\AbnServiceSDK\StructType\ResponseBusinessEntity202001 $businessEntity202001 = null, ?\AbnServiceSDK\StructType\ResponseException $exception = null, ?\AbnServiceSDK\StructType\ResponseABNList $abnList = null, ?\AbnServiceSDK\StructType\ResponseSearchResultsList $searchResultsList = null)
    {
        $this
            ->setDateRegisterLastUpdated($dateRegisterLastUpdated)
            ->setDateTimeRetrieved($dateTimeRetrieved)
            ->setUsageStatement($usageStatement)
            ->setBusinessEntity($businessEntity)
            ->setBusinessEntity200506($businessEntity200506)
            ->setBusinessEntity200709($businessEntity200709)
            ->setBusinessEntity201205($businessEntity201205)
            ->setBusinessEntity201408($businessEntity201408)
            ->setBusinessEntity202001($businessEntity202001)
            ->setException($exception)
            ->setAbnList($abnList)
            ->setSearchResultsList($searchResultsList);
    }
    /**
     * Get dateRegisterLastUpdated value
     * @return string
     */
    public function getDateRegisterLastUpdated(): string
    {
        return $this->dateRegisterLastUpdated;
    }
    /**
     * Set dateRegisterLastUpdated value
     * @param string $dateRegisterLastUpdated
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setDateRegisterLastUpdated(string $dateRegisterLastUpdated): self
    {
        // validation for constraint: string
        if (!is_null($dateRegisterLastUpdated) && !is_string($dateRegisterLastUpdated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateRegisterLastUpdated, true), gettype($dateRegisterLastUpdated)), __LINE__);
        }
        $this->dateRegisterLastUpdated = $dateRegisterLastUpdated;
        
        return $this;
    }
    /**
     * Get dateTimeRetrieved value
     * @return string
     */
    public function getDateTimeRetrieved(): string
    {
        return $this->dateTimeRetrieved;
    }
    /**
     * Set dateTimeRetrieved value
     * @param string $dateTimeRetrieved
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setDateTimeRetrieved(string $dateTimeRetrieved): self
    {
        // validation for constraint: string
        if (!is_null($dateTimeRetrieved) && !is_string($dateTimeRetrieved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTimeRetrieved, true), gettype($dateTimeRetrieved)), __LINE__);
        }
        $this->dateTimeRetrieved = $dateTimeRetrieved;
        
        return $this;
    }
    /**
     * Get usageStatement value
     * @return string|null
     */
    public function getUsageStatement(): ?string
    {
        return $this->usageStatement;
    }
    /**
     * Set usageStatement value
     * @param string $usageStatement
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setUsageStatement(?string $usageStatement = null): self
    {
        // validation for constraint: string
        if (!is_null($usageStatement) && !is_string($usageStatement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usageStatement, true), gettype($usageStatement)), __LINE__);
        }
        $this->usageStatement = $usageStatement;
        
        return $this;
    }
    /**
     * Get businessEntity value
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity|null
     */
    public function getBusinessEntity(): ?\AbnServiceSDK\StructType\ResponseBusinessEntity
    {
        return $this->businessEntity ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessEntity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessEntity method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBusinessEntityForChoiceConstraintFromSetBusinessEntity($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity200506',
            'businessEntity200709',
            'businessEntity201205',
            'businessEntity201408',
            'businessEntity202001',
            'exception',
            'abnList',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessEntity can\'t be set as the property %s is already set. Only one property must be set among these properties: businessEntity, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set businessEntity value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity $businessEntity
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setBusinessEntity(?\AbnServiceSDK\StructType\ResponseBusinessEntity $businessEntity = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($businessEntityChoiceErrorMessage = self::validateBusinessEntityForChoiceConstraintFromSetBusinessEntity($businessEntity))) {
            throw new InvalidArgumentException($businessEntityChoiceErrorMessage, __LINE__);
        }
        if (is_null($businessEntity) || (is_array($businessEntity) && empty($businessEntity))) {
            unset($this->businessEntity);
        } else {
            $this->businessEntity = $businessEntity;
        }
        
        return $this;
    }
    /**
     * Get businessEntity200506 value
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity200506|null
     */
    public function getBusinessEntity200506(): ?\AbnServiceSDK\StructType\ResponseBusinessEntity200506
    {
        return $this->businessEntity200506 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessEntity200506 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessEntity200506 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBusinessEntity200506ForChoiceConstraintFromSetBusinessEntity200506($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200709',
            'businessEntity201205',
            'businessEntity201408',
            'businessEntity202001',
            'exception',
            'abnList',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessEntity200506 can\'t be set as the property %s is already set. Only one property must be set among these properties: businessEntity200506, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set businessEntity200506 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity200506 $businessEntity200506
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setBusinessEntity200506(?\AbnServiceSDK\StructType\ResponseBusinessEntity200506 $businessEntity200506 = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($businessEntity200506ChoiceErrorMessage = self::validateBusinessEntity200506ForChoiceConstraintFromSetBusinessEntity200506($businessEntity200506))) {
            throw new InvalidArgumentException($businessEntity200506ChoiceErrorMessage, __LINE__);
        }
        if (is_null($businessEntity200506) || (is_array($businessEntity200506) && empty($businessEntity200506))) {
            unset($this->businessEntity200506);
        } else {
            $this->businessEntity200506 = $businessEntity200506;
        }
        
        return $this;
    }
    /**
     * Get businessEntity200709 value
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity200709|null
     */
    public function getBusinessEntity200709(): ?\AbnServiceSDK\StructType\ResponseBusinessEntity200709
    {
        return $this->businessEntity200709 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessEntity200709 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessEntity200709 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBusinessEntity200709ForChoiceConstraintFromSetBusinessEntity200709($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200506',
            'businessEntity201205',
            'businessEntity201408',
            'businessEntity202001',
            'exception',
            'abnList',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessEntity200709 can\'t be set as the property %s is already set. Only one property must be set among these properties: businessEntity200709, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set businessEntity200709 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity200709 $businessEntity200709
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setBusinessEntity200709(?\AbnServiceSDK\StructType\ResponseBusinessEntity200709 $businessEntity200709 = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($businessEntity200709ChoiceErrorMessage = self::validateBusinessEntity200709ForChoiceConstraintFromSetBusinessEntity200709($businessEntity200709))) {
            throw new InvalidArgumentException($businessEntity200709ChoiceErrorMessage, __LINE__);
        }
        if (is_null($businessEntity200709) || (is_array($businessEntity200709) && empty($businessEntity200709))) {
            unset($this->businessEntity200709);
        } else {
            $this->businessEntity200709 = $businessEntity200709;
        }
        
        return $this;
    }
    /**
     * Get businessEntity201205 value
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity201205|null
     */
    public function getBusinessEntity201205(): ?\AbnServiceSDK\StructType\ResponseBusinessEntity201205
    {
        return $this->businessEntity201205 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessEntity201205 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessEntity201205 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBusinessEntity201205ForChoiceConstraintFromSetBusinessEntity201205($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200506',
            'businessEntity200709',
            'businessEntity201408',
            'businessEntity202001',
            'exception',
            'abnList',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessEntity201205 can\'t be set as the property %s is already set. Only one property must be set among these properties: businessEntity201205, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set businessEntity201205 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity201205 $businessEntity201205
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setBusinessEntity201205(?\AbnServiceSDK\StructType\ResponseBusinessEntity201205 $businessEntity201205 = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($businessEntity201205ChoiceErrorMessage = self::validateBusinessEntity201205ForChoiceConstraintFromSetBusinessEntity201205($businessEntity201205))) {
            throw new InvalidArgumentException($businessEntity201205ChoiceErrorMessage, __LINE__);
        }
        if (is_null($businessEntity201205) || (is_array($businessEntity201205) && empty($businessEntity201205))) {
            unset($this->businessEntity201205);
        } else {
            $this->businessEntity201205 = $businessEntity201205;
        }
        
        return $this;
    }
    /**
     * Get businessEntity201408 value
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity201408|null
     */
    public function getBusinessEntity201408(): ?\AbnServiceSDK\StructType\ResponseBusinessEntity201408
    {
        return $this->businessEntity201408 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessEntity201408 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessEntity201408 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBusinessEntity201408ForChoiceConstraintFromSetBusinessEntity201408($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200506',
            'businessEntity200709',
            'businessEntity201205',
            'businessEntity202001',
            'exception',
            'abnList',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessEntity201408 can\'t be set as the property %s is already set. Only one property must be set among these properties: businessEntity201408, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set businessEntity201408 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity201408 $businessEntity201408
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setBusinessEntity201408(?\AbnServiceSDK\StructType\ResponseBusinessEntity201408 $businessEntity201408 = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($businessEntity201408ChoiceErrorMessage = self::validateBusinessEntity201408ForChoiceConstraintFromSetBusinessEntity201408($businessEntity201408))) {
            throw new InvalidArgumentException($businessEntity201408ChoiceErrorMessage, __LINE__);
        }
        if (is_null($businessEntity201408) || (is_array($businessEntity201408) && empty($businessEntity201408))) {
            unset($this->businessEntity201408);
        } else {
            $this->businessEntity201408 = $businessEntity201408;
        }
        
        return $this;
    }
    /**
     * Get businessEntity202001 value
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity202001|null
     */
    public function getBusinessEntity202001(): ?\AbnServiceSDK\StructType\ResponseBusinessEntity202001
    {
        return $this->businessEntity202001 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBusinessEntity202001 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessEntity202001 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBusinessEntity202001ForChoiceConstraintFromSetBusinessEntity202001($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200506',
            'businessEntity200709',
            'businessEntity201205',
            'businessEntity201408',
            'exception',
            'abnList',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property businessEntity202001 can\'t be set as the property %s is already set. Only one property must be set among these properties: businessEntity202001, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set businessEntity202001 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseBusinessEntity202001 $businessEntity202001
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setBusinessEntity202001(?\AbnServiceSDK\StructType\ResponseBusinessEntity202001 $businessEntity202001 = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($businessEntity202001ChoiceErrorMessage = self::validateBusinessEntity202001ForChoiceConstraintFromSetBusinessEntity202001($businessEntity202001))) {
            throw new InvalidArgumentException($businessEntity202001ChoiceErrorMessage, __LINE__);
        }
        if (is_null($businessEntity202001) || (is_array($businessEntity202001) && empty($businessEntity202001))) {
            unset($this->businessEntity202001);
        } else {
            $this->businessEntity202001 = $businessEntity202001;
        }
        
        return $this;
    }
    /**
     * Get exception value
     * @return \AbnServiceSDK\StructType\ResponseException|null
     */
    public function getException(): ?\AbnServiceSDK\StructType\ResponseException
    {
        return $this->exception ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setException method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExceptionForChoiceConstraintFromSetException($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200506',
            'businessEntity200709',
            'businessEntity201205',
            'businessEntity201408',
            'businessEntity202001',
            'abnList',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property exception can\'t be set as the property %s is already set. Only one property must be set among these properties: exception, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set exception value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseException $exception
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setException(?\AbnServiceSDK\StructType\ResponseException $exception = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($exceptionChoiceErrorMessage = self::validateExceptionForChoiceConstraintFromSetException($exception))) {
            throw new InvalidArgumentException($exceptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($exception) || (is_array($exception) && empty($exception))) {
            unset($this->exception);
        } else {
            $this->exception = $exception;
        }
        
        return $this;
    }
    /**
     * Get abnList value
     * @return \AbnServiceSDK\StructType\ResponseABNList|null
     */
    public function getAbnList(): ?\AbnServiceSDK\StructType\ResponseABNList
    {
        return $this->abnList ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAbnList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAbnList method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAbnListForChoiceConstraintFromSetAbnList($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200506',
            'businessEntity200709',
            'businessEntity201205',
            'businessEntity201408',
            'businessEntity202001',
            'exception',
            'searchResultsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property abnList can\'t be set as the property %s is already set. Only one property must be set among these properties: abnList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set abnList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseABNList $abnList
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setAbnList(?\AbnServiceSDK\StructType\ResponseABNList $abnList = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($abnListChoiceErrorMessage = self::validateAbnListForChoiceConstraintFromSetAbnList($abnList))) {
            throw new InvalidArgumentException($abnListChoiceErrorMessage, __LINE__);
        }
        if (is_null($abnList) || (is_array($abnList) && empty($abnList))) {
            unset($this->abnList);
        } else {
            $this->abnList = $abnList;
        }
        
        return $this;
    }
    /**
     * Get searchResultsList value
     * @return \AbnServiceSDK\StructType\ResponseSearchResultsList|null
     */
    public function getSearchResultsList(): ?\AbnServiceSDK\StructType\ResponseSearchResultsList
    {
        return $this->searchResultsList ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchResultsList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchResultsList method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSearchResultsListForChoiceConstraintFromSetSearchResultsList($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'businessEntity',
            'businessEntity200506',
            'businessEntity200709',
            'businessEntity201205',
            'businessEntity201408',
            'businessEntity202001',
            'exception',
            'abnList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property searchResultsList can\'t be set as the property %s is already set. Only one property must be set among these properties: searchResultsList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set searchResultsList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ResponseSearchResultsList $searchResultsList
     * @return \AbnServiceSDK\StructType\Response
     */
    public function setSearchResultsList(?\AbnServiceSDK\StructType\ResponseSearchResultsList $searchResultsList = null): self
    {
        // validation for constraint: choice(businessEntity, businessEntity200506, businessEntity200709, businessEntity201205, businessEntity201408, businessEntity202001, exception, abnList, searchResultsList)
        if ('' !== ($searchResultsListChoiceErrorMessage = self::validateSearchResultsListForChoiceConstraintFromSetSearchResultsList($searchResultsList))) {
            throw new InvalidArgumentException($searchResultsListChoiceErrorMessage, __LINE__);
        }
        if (is_null($searchResultsList) || (is_array($searchResultsList) && empty($searchResultsList))) {
            unset($this->searchResultsList);
        } else {
            $this->searchResultsList = $searchResultsList;
        }
        
        return $this;
    }
}
