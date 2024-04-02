<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequest extends AbstractStructBase
{
    /**
     * The nameSearchRequest
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearch|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearch $nameSearchRequest = null;
    /**
     * The nameSearchRequestAdvanced
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $nameSearchRequestAdvanced = null;
    /**
     * The nameSearchRequestAdvanced2006
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006 $nameSearchRequestAdvanced2006 = null;
    /**
     * The nameSearchRequestAdvanced2012
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $nameSearchRequestAdvanced2012 = null;
    /**
     * The nameSearchRequestAdvanced2017
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017 $nameSearchRequestAdvanced2017 = null;
    /**
     * The nameSearchRequestAdvanced2023
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023 $nameSearchRequestAdvanced2023 = null;
    /**
     * The externalRequestABNFilter
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestABNFilter|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestABNFilter $externalRequestABNFilter = null;
    /**
     * The externalRequestABNEventFilter
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestABNEventFilter|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestABNEventFilter $externalRequestABNEventFilter = null;
    /**
     * The externalRequestABNStatusFilter
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestABNStatusFilter|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestABNStatusFilter $externalRequestABNStatusFilter = null;
    /**
     * The externalRequestABNUpdateEventFilter
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter $externalRequestABNUpdateEventFilter = null;
    /**
     * The externalRequestABNCharityFilter
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestABNCharityFilter|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestABNCharityFilter $externalRequestABNCharityFilter = null;
    /**
     * The identifierSearchRequest
     * Meta information extracted from the WSDL
     * - choice: nameSearchRequest | nameSearchRequestAdvanced | nameSearchRequestAdvanced2006 | nameSearchRequestAdvanced2012 | nameSearchRequestAdvanced2017 | nameSearchRequestAdvanced2023 | externalRequestABNFilter | externalRequestABNEventFilter |
     * externalRequestABNStatusFilter | externalRequestABNUpdateEventFilter | externalRequestABNCharityFilter | identifierSearchRequest
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestIdentifierSearch $identifierSearchRequest = null;
    /**
     * Constructor method for ExternalRequest
     * @uses ExternalRequest::setNameSearchRequest()
     * @uses ExternalRequest::setNameSearchRequestAdvanced()
     * @uses ExternalRequest::setNameSearchRequestAdvanced2006()
     * @uses ExternalRequest::setNameSearchRequestAdvanced2012()
     * @uses ExternalRequest::setNameSearchRequestAdvanced2017()
     * @uses ExternalRequest::setNameSearchRequestAdvanced2023()
     * @uses ExternalRequest::setExternalRequestABNFilter()
     * @uses ExternalRequest::setExternalRequestABNEventFilter()
     * @uses ExternalRequest::setExternalRequestABNStatusFilter()
     * @uses ExternalRequest::setExternalRequestABNUpdateEventFilter()
     * @uses ExternalRequest::setExternalRequestABNCharityFilter()
     * @uses ExternalRequest::setIdentifierSearchRequest()
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearch $nameSearchRequest
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $nameSearchRequestAdvanced
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006 $nameSearchRequestAdvanced2006
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $nameSearchRequestAdvanced2012
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017 $nameSearchRequestAdvanced2017
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023 $nameSearchRequestAdvanced2023
     * @param \AbnServiceSDK\StructType\ExternalRequestABNFilter $externalRequestABNFilter
     * @param \AbnServiceSDK\StructType\ExternalRequestABNEventFilter $externalRequestABNEventFilter
     * @param \AbnServiceSDK\StructType\ExternalRequestABNStatusFilter $externalRequestABNStatusFilter
     * @param \AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter $externalRequestABNUpdateEventFilter
     * @param \AbnServiceSDK\StructType\ExternalRequestABNCharityFilter $externalRequestABNCharityFilter
     * @param \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch $identifierSearchRequest
     */
    public function __construct(?\AbnServiceSDK\StructType\ExternalRequestNameSearch $nameSearchRequest = null, ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $nameSearchRequestAdvanced = null, ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006 $nameSearchRequestAdvanced2006 = null, ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $nameSearchRequestAdvanced2012 = null, ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017 $nameSearchRequestAdvanced2017 = null, ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023 $nameSearchRequestAdvanced2023 = null, ?\AbnServiceSDK\StructType\ExternalRequestABNFilter $externalRequestABNFilter = null, ?\AbnServiceSDK\StructType\ExternalRequestABNEventFilter $externalRequestABNEventFilter = null, ?\AbnServiceSDK\StructType\ExternalRequestABNStatusFilter $externalRequestABNStatusFilter = null, ?\AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter $externalRequestABNUpdateEventFilter = null, ?\AbnServiceSDK\StructType\ExternalRequestABNCharityFilter $externalRequestABNCharityFilter = null, ?\AbnServiceSDK\StructType\ExternalRequestIdentifierSearch $identifierSearchRequest = null)
    {
        $this
            ->setNameSearchRequest($nameSearchRequest)
            ->setNameSearchRequestAdvanced($nameSearchRequestAdvanced)
            ->setNameSearchRequestAdvanced2006($nameSearchRequestAdvanced2006)
            ->setNameSearchRequestAdvanced2012($nameSearchRequestAdvanced2012)
            ->setNameSearchRequestAdvanced2017($nameSearchRequestAdvanced2017)
            ->setNameSearchRequestAdvanced2023($nameSearchRequestAdvanced2023)
            ->setExternalRequestABNFilter($externalRequestABNFilter)
            ->setExternalRequestABNEventFilter($externalRequestABNEventFilter)
            ->setExternalRequestABNStatusFilter($externalRequestABNStatusFilter)
            ->setExternalRequestABNUpdateEventFilter($externalRequestABNUpdateEventFilter)
            ->setExternalRequestABNCharityFilter($externalRequestABNCharityFilter)
            ->setIdentifierSearchRequest($identifierSearchRequest);
    }
    /**
     * Get nameSearchRequest value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearch|null
     */
    public function getNameSearchRequest(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearch
    {
        return $this->nameSearchRequest ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNameSearchRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameSearchRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameSearchRequestForChoiceConstraintFromSetNameSearchRequest($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property nameSearchRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: nameSearchRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set nameSearchRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearch $nameSearchRequest
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setNameSearchRequest(?\AbnServiceSDK\StructType\ExternalRequestNameSearch $nameSearchRequest = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($nameSearchRequestChoiceErrorMessage = self::validateNameSearchRequestForChoiceConstraintFromSetNameSearchRequest($nameSearchRequest))) {
            throw new InvalidArgumentException($nameSearchRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($nameSearchRequest) || (is_array($nameSearchRequest) && empty($nameSearchRequest))) {
            unset($this->nameSearchRequest);
        } else {
            $this->nameSearchRequest = $nameSearchRequest;
        }
        
        return $this;
    }
    /**
     * Get nameSearchRequestAdvanced value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced|null
     */
    public function getNameSearchRequestAdvanced(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced
    {
        return $this->nameSearchRequestAdvanced ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNameSearchRequestAdvanced method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameSearchRequestAdvanced method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameSearchRequestAdvancedForChoiceConstraintFromSetNameSearchRequestAdvanced($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property nameSearchRequestAdvanced can\'t be set as the property %s is already set. Only one property must be set among these properties: nameSearchRequestAdvanced, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set nameSearchRequestAdvanced value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $nameSearchRequestAdvanced
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setNameSearchRequestAdvanced(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $nameSearchRequestAdvanced = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($nameSearchRequestAdvancedChoiceErrorMessage = self::validateNameSearchRequestAdvancedForChoiceConstraintFromSetNameSearchRequestAdvanced($nameSearchRequestAdvanced))) {
            throw new InvalidArgumentException($nameSearchRequestAdvancedChoiceErrorMessage, __LINE__);
        }
        if (is_null($nameSearchRequestAdvanced) || (is_array($nameSearchRequestAdvanced) && empty($nameSearchRequestAdvanced))) {
            unset($this->nameSearchRequestAdvanced);
        } else {
            $this->nameSearchRequestAdvanced = $nameSearchRequestAdvanced;
        }
        
        return $this;
    }
    /**
     * Get nameSearchRequestAdvanced2006 value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006|null
     */
    public function getNameSearchRequestAdvanced2006(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006
    {
        return $this->nameSearchRequestAdvanced2006 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNameSearchRequestAdvanced2006 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameSearchRequestAdvanced2006 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameSearchRequestAdvanced2006ForChoiceConstraintFromSetNameSearchRequestAdvanced2006($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property nameSearchRequestAdvanced2006 can\'t be set as the property %s is already set. Only one property must be set among these properties: nameSearchRequestAdvanced2006, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set nameSearchRequestAdvanced2006 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006 $nameSearchRequestAdvanced2006
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setNameSearchRequestAdvanced2006(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2006 $nameSearchRequestAdvanced2006 = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($nameSearchRequestAdvanced2006ChoiceErrorMessage = self::validateNameSearchRequestAdvanced2006ForChoiceConstraintFromSetNameSearchRequestAdvanced2006($nameSearchRequestAdvanced2006))) {
            throw new InvalidArgumentException($nameSearchRequestAdvanced2006ChoiceErrorMessage, __LINE__);
        }
        if (is_null($nameSearchRequestAdvanced2006) || (is_array($nameSearchRequestAdvanced2006) && empty($nameSearchRequestAdvanced2006))) {
            unset($this->nameSearchRequestAdvanced2006);
        } else {
            $this->nameSearchRequestAdvanced2006 = $nameSearchRequestAdvanced2006;
        }
        
        return $this;
    }
    /**
     * Get nameSearchRequestAdvanced2012 value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012|null
     */
    public function getNameSearchRequestAdvanced2012(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012
    {
        return $this->nameSearchRequestAdvanced2012 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNameSearchRequestAdvanced2012 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameSearchRequestAdvanced2012 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameSearchRequestAdvanced2012ForChoiceConstraintFromSetNameSearchRequestAdvanced2012($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property nameSearchRequestAdvanced2012 can\'t be set as the property %s is already set. Only one property must be set among these properties: nameSearchRequestAdvanced2012, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set nameSearchRequestAdvanced2012 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $nameSearchRequestAdvanced2012
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setNameSearchRequestAdvanced2012(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $nameSearchRequestAdvanced2012 = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($nameSearchRequestAdvanced2012ChoiceErrorMessage = self::validateNameSearchRequestAdvanced2012ForChoiceConstraintFromSetNameSearchRequestAdvanced2012($nameSearchRequestAdvanced2012))) {
            throw new InvalidArgumentException($nameSearchRequestAdvanced2012ChoiceErrorMessage, __LINE__);
        }
        if (is_null($nameSearchRequestAdvanced2012) || (is_array($nameSearchRequestAdvanced2012) && empty($nameSearchRequestAdvanced2012))) {
            unset($this->nameSearchRequestAdvanced2012);
        } else {
            $this->nameSearchRequestAdvanced2012 = $nameSearchRequestAdvanced2012;
        }
        
        return $this;
    }
    /**
     * Get nameSearchRequestAdvanced2017 value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017|null
     */
    public function getNameSearchRequestAdvanced2017(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017
    {
        return $this->nameSearchRequestAdvanced2017 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNameSearchRequestAdvanced2017 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameSearchRequestAdvanced2017 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameSearchRequestAdvanced2017ForChoiceConstraintFromSetNameSearchRequestAdvanced2017($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property nameSearchRequestAdvanced2017 can\'t be set as the property %s is already set. Only one property must be set among these properties: nameSearchRequestAdvanced2017, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set nameSearchRequestAdvanced2017 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017 $nameSearchRequestAdvanced2017
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setNameSearchRequestAdvanced2017(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017 $nameSearchRequestAdvanced2017 = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($nameSearchRequestAdvanced2017ChoiceErrorMessage = self::validateNameSearchRequestAdvanced2017ForChoiceConstraintFromSetNameSearchRequestAdvanced2017($nameSearchRequestAdvanced2017))) {
            throw new InvalidArgumentException($nameSearchRequestAdvanced2017ChoiceErrorMessage, __LINE__);
        }
        if (is_null($nameSearchRequestAdvanced2017) || (is_array($nameSearchRequestAdvanced2017) && empty($nameSearchRequestAdvanced2017))) {
            unset($this->nameSearchRequestAdvanced2017);
        } else {
            $this->nameSearchRequestAdvanced2017 = $nameSearchRequestAdvanced2017;
        }
        
        return $this;
    }
    /**
     * Get nameSearchRequestAdvanced2023 value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023|null
     */
    public function getNameSearchRequestAdvanced2023(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023
    {
        return $this->nameSearchRequestAdvanced2023 ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNameSearchRequestAdvanced2023 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameSearchRequestAdvanced2023 method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNameSearchRequestAdvanced2023ForChoiceConstraintFromSetNameSearchRequestAdvanced2023($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property nameSearchRequestAdvanced2023 can\'t be set as the property %s is already set. Only one property must be set among these properties: nameSearchRequestAdvanced2023, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set nameSearchRequestAdvanced2023 value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023 $nameSearchRequestAdvanced2023
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setNameSearchRequestAdvanced2023(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2023 $nameSearchRequestAdvanced2023 = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($nameSearchRequestAdvanced2023ChoiceErrorMessage = self::validateNameSearchRequestAdvanced2023ForChoiceConstraintFromSetNameSearchRequestAdvanced2023($nameSearchRequestAdvanced2023))) {
            throw new InvalidArgumentException($nameSearchRequestAdvanced2023ChoiceErrorMessage, __LINE__);
        }
        if (is_null($nameSearchRequestAdvanced2023) || (is_array($nameSearchRequestAdvanced2023) && empty($nameSearchRequestAdvanced2023))) {
            unset($this->nameSearchRequestAdvanced2023);
        } else {
            $this->nameSearchRequestAdvanced2023 = $nameSearchRequestAdvanced2023;
        }
        
        return $this;
    }
    /**
     * Get externalRequestABNFilter value
     * @return \AbnServiceSDK\StructType\ExternalRequestABNFilter|null
     */
    public function getExternalRequestABNFilter(): ?\AbnServiceSDK\StructType\ExternalRequestABNFilter
    {
        return $this->externalRequestABNFilter ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalRequestABNFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalRequestABNFilter method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExternalRequestABNFilterForChoiceConstraintFromSetExternalRequestABNFilter($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property externalRequestABNFilter can\'t be set as the property %s is already set. Only one property must be set among these properties: externalRequestABNFilter, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set externalRequestABNFilter value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestABNFilter $externalRequestABNFilter
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setExternalRequestABNFilter(?\AbnServiceSDK\StructType\ExternalRequestABNFilter $externalRequestABNFilter = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($externalRequestABNFilterChoiceErrorMessage = self::validateExternalRequestABNFilterForChoiceConstraintFromSetExternalRequestABNFilter($externalRequestABNFilter))) {
            throw new InvalidArgumentException($externalRequestABNFilterChoiceErrorMessage, __LINE__);
        }
        if (is_null($externalRequestABNFilter) || (is_array($externalRequestABNFilter) && empty($externalRequestABNFilter))) {
            unset($this->externalRequestABNFilter);
        } else {
            $this->externalRequestABNFilter = $externalRequestABNFilter;
        }
        
        return $this;
    }
    /**
     * Get externalRequestABNEventFilter value
     * @return \AbnServiceSDK\StructType\ExternalRequestABNEventFilter|null
     */
    public function getExternalRequestABNEventFilter(): ?\AbnServiceSDK\StructType\ExternalRequestABNEventFilter
    {
        return $this->externalRequestABNEventFilter ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalRequestABNEventFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalRequestABNEventFilter method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExternalRequestABNEventFilterForChoiceConstraintFromSetExternalRequestABNEventFilter($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property externalRequestABNEventFilter can\'t be set as the property %s is already set. Only one property must be set among these properties: externalRequestABNEventFilter, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set externalRequestABNEventFilter value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestABNEventFilter $externalRequestABNEventFilter
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setExternalRequestABNEventFilter(?\AbnServiceSDK\StructType\ExternalRequestABNEventFilter $externalRequestABNEventFilter = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($externalRequestABNEventFilterChoiceErrorMessage = self::validateExternalRequestABNEventFilterForChoiceConstraintFromSetExternalRequestABNEventFilter($externalRequestABNEventFilter))) {
            throw new InvalidArgumentException($externalRequestABNEventFilterChoiceErrorMessage, __LINE__);
        }
        if (is_null($externalRequestABNEventFilter) || (is_array($externalRequestABNEventFilter) && empty($externalRequestABNEventFilter))) {
            unset($this->externalRequestABNEventFilter);
        } else {
            $this->externalRequestABNEventFilter = $externalRequestABNEventFilter;
        }
        
        return $this;
    }
    /**
     * Get externalRequestABNStatusFilter value
     * @return \AbnServiceSDK\StructType\ExternalRequestABNStatusFilter|null
     */
    public function getExternalRequestABNStatusFilter(): ?\AbnServiceSDK\StructType\ExternalRequestABNStatusFilter
    {
        return $this->externalRequestABNStatusFilter ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalRequestABNStatusFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalRequestABNStatusFilter method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExternalRequestABNStatusFilterForChoiceConstraintFromSetExternalRequestABNStatusFilter($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property externalRequestABNStatusFilter can\'t be set as the property %s is already set. Only one property must be set among these properties: externalRequestABNStatusFilter, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set externalRequestABNStatusFilter value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestABNStatusFilter $externalRequestABNStatusFilter
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setExternalRequestABNStatusFilter(?\AbnServiceSDK\StructType\ExternalRequestABNStatusFilter $externalRequestABNStatusFilter = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($externalRequestABNStatusFilterChoiceErrorMessage = self::validateExternalRequestABNStatusFilterForChoiceConstraintFromSetExternalRequestABNStatusFilter($externalRequestABNStatusFilter))) {
            throw new InvalidArgumentException($externalRequestABNStatusFilterChoiceErrorMessage, __LINE__);
        }
        if (is_null($externalRequestABNStatusFilter) || (is_array($externalRequestABNStatusFilter) && empty($externalRequestABNStatusFilter))) {
            unset($this->externalRequestABNStatusFilter);
        } else {
            $this->externalRequestABNStatusFilter = $externalRequestABNStatusFilter;
        }
        
        return $this;
    }
    /**
     * Get externalRequestABNUpdateEventFilter value
     * @return \AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter|null
     */
    public function getExternalRequestABNUpdateEventFilter(): ?\AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter
    {
        return $this->externalRequestABNUpdateEventFilter ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalRequestABNUpdateEventFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalRequestABNUpdateEventFilter method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExternalRequestABNUpdateEventFilterForChoiceConstraintFromSetExternalRequestABNUpdateEventFilter($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNCharityFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property externalRequestABNUpdateEventFilter can\'t be set as the property %s is already set. Only one property must be set among these properties: externalRequestABNUpdateEventFilter, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set externalRequestABNUpdateEventFilter value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter $externalRequestABNUpdateEventFilter
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setExternalRequestABNUpdateEventFilter(?\AbnServiceSDK\StructType\ExternalRequestABNUpdateEventFilter $externalRequestABNUpdateEventFilter = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($externalRequestABNUpdateEventFilterChoiceErrorMessage = self::validateExternalRequestABNUpdateEventFilterForChoiceConstraintFromSetExternalRequestABNUpdateEventFilter($externalRequestABNUpdateEventFilter))) {
            throw new InvalidArgumentException($externalRequestABNUpdateEventFilterChoiceErrorMessage, __LINE__);
        }
        if (is_null($externalRequestABNUpdateEventFilter) || (is_array($externalRequestABNUpdateEventFilter) && empty($externalRequestABNUpdateEventFilter))) {
            unset($this->externalRequestABNUpdateEventFilter);
        } else {
            $this->externalRequestABNUpdateEventFilter = $externalRequestABNUpdateEventFilter;
        }
        
        return $this;
    }
    /**
     * Get externalRequestABNCharityFilter value
     * @return \AbnServiceSDK\StructType\ExternalRequestABNCharityFilter|null
     */
    public function getExternalRequestABNCharityFilter(): ?\AbnServiceSDK\StructType\ExternalRequestABNCharityFilter
    {
        return $this->externalRequestABNCharityFilter ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalRequestABNCharityFilter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalRequestABNCharityFilter method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExternalRequestABNCharityFilterForChoiceConstraintFromSetExternalRequestABNCharityFilter($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'identifierSearchRequest',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property externalRequestABNCharityFilter can\'t be set as the property %s is already set. Only one property must be set among these properties: externalRequestABNCharityFilter, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set externalRequestABNCharityFilter value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestABNCharityFilter $externalRequestABNCharityFilter
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setExternalRequestABNCharityFilter(?\AbnServiceSDK\StructType\ExternalRequestABNCharityFilter $externalRequestABNCharityFilter = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($externalRequestABNCharityFilterChoiceErrorMessage = self::validateExternalRequestABNCharityFilterForChoiceConstraintFromSetExternalRequestABNCharityFilter($externalRequestABNCharityFilter))) {
            throw new InvalidArgumentException($externalRequestABNCharityFilterChoiceErrorMessage, __LINE__);
        }
        if (is_null($externalRequestABNCharityFilter) || (is_array($externalRequestABNCharityFilter) && empty($externalRequestABNCharityFilter))) {
            unset($this->externalRequestABNCharityFilter);
        } else {
            $this->externalRequestABNCharityFilter = $externalRequestABNCharityFilter;
        }
        
        return $this;
    }
    /**
     * Get identifierSearchRequest value
     * @return \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch|null
     */
    public function getIdentifierSearchRequest(): ?\AbnServiceSDK\StructType\ExternalRequestIdentifierSearch
    {
        return $this->identifierSearchRequest ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIdentifierSearchRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdentifierSearchRequest method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIdentifierSearchRequestForChoiceConstraintFromSetIdentifierSearchRequest($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'nameSearchRequest',
            'nameSearchRequestAdvanced',
            'nameSearchRequestAdvanced2006',
            'nameSearchRequestAdvanced2012',
            'nameSearchRequestAdvanced2017',
            'nameSearchRequestAdvanced2023',
            'externalRequestABNFilter',
            'externalRequestABNEventFilter',
            'externalRequestABNStatusFilter',
            'externalRequestABNUpdateEventFilter',
            'externalRequestABNCharityFilter',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property identifierSearchRequest can\'t be set as the property %s is already set. Only one property must be set among these properties: identifierSearchRequest, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set identifierSearchRequest value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch $identifierSearchRequest
     * @return \AbnServiceSDK\StructType\ExternalRequest
     */
    public function setIdentifierSearchRequest(?\AbnServiceSDK\StructType\ExternalRequestIdentifierSearch $identifierSearchRequest = null): self
    {
        // validation for constraint: choice(nameSearchRequest, nameSearchRequestAdvanced, nameSearchRequestAdvanced2006, nameSearchRequestAdvanced2012, nameSearchRequestAdvanced2017, nameSearchRequestAdvanced2023, externalRequestABNFilter, externalRequestABNEventFilter, externalRequestABNStatusFilter, externalRequestABNUpdateEventFilter, externalRequestABNCharityFilter, identifierSearchRequest)
        if ('' !== ($identifierSearchRequestChoiceErrorMessage = self::validateIdentifierSearchRequestForChoiceConstraintFromSetIdentifierSearchRequest($identifierSearchRequest))) {
            throw new InvalidArgumentException($identifierSearchRequestChoiceErrorMessage, __LINE__);
        }
        if (is_null($identifierSearchRequest) || (is_array($identifierSearchRequest) && empty($identifierSearchRequest))) {
            unset($this->identifierSearchRequest);
        } else {
            $this->identifierSearchRequest = $identifierSearchRequest;
        }
        
        return $this;
    }
}
