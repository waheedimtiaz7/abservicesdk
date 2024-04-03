<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBusinessEntity200506 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseBusinessEntity200506 extends ResponseBusinessEntity
{
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
     * Constructor method for ResponseBusinessEntity200506
     * @uses ResponseBusinessEntity200506::setCharityType()
     * @uses ResponseBusinessEntity200506::setTaxConcessionCharityEndorsement()
     * @uses ResponseBusinessEntity200506::setPublicBenevolentInstitutionEmployer()
     * @param \ABN\AbnServiceAPI\StructType\CharityType[] $charityType
     * @param \ABN\AbnServiceAPI\StructType\CharityConcession[] $taxConcessionCharityEndorsement
     * @param \ABN\AbnServiceAPI\StructType\CharitableFund[] $publicBenevolentInstitutionEmployer
     */
    public function __construct(?array $charityType = null, ?array $taxConcessionCharityEndorsement = null, ?array $publicBenevolentInstitutionEmployer = null)
    {
        $this
            ->setCharityType($charityType)
            ->setTaxConcessionCharityEndorsement($taxConcessionCharityEndorsement)
            ->setPublicBenevolentInstitutionEmployer($publicBenevolentInstitutionEmployer);
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
        foreach ($values as $responseBusinessEntity200506CharityTypeItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity200506CharityTypeItem instanceof \ABN\AbnServiceAPI\StructType\CharityType) {
                $invalidValues[] = is_object($responseBusinessEntity200506CharityTypeItem) ? get_class($responseBusinessEntity200506CharityTypeItem) : sprintf('%s(%s)', gettype($responseBusinessEntity200506CharityTypeItem), var_export($responseBusinessEntity200506CharityTypeItem, true));
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200506
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200506
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
        foreach ($values as $responseBusinessEntity200506TaxConcessionCharityEndorsementItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity200506TaxConcessionCharityEndorsementItem instanceof \ABN\AbnServiceAPI\StructType\CharityConcession) {
                $invalidValues[] = is_object($responseBusinessEntity200506TaxConcessionCharityEndorsementItem) ? get_class($responseBusinessEntity200506TaxConcessionCharityEndorsementItem) : sprintf('%s(%s)', gettype($responseBusinessEntity200506TaxConcessionCharityEndorsementItem), var_export($responseBusinessEntity200506TaxConcessionCharityEndorsementItem, true));
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200506
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200506
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
        foreach ($values as $responseBusinessEntity200506PublicBenevolentInstitutionEmployerItem) {
            // validation for constraint: itemType
            if (!$responseBusinessEntity200506PublicBenevolentInstitutionEmployerItem instanceof \ABN\AbnServiceAPI\StructType\CharitableFund) {
                $invalidValues[] = is_object($responseBusinessEntity200506PublicBenevolentInstitutionEmployerItem) ? get_class($responseBusinessEntity200506PublicBenevolentInstitutionEmployerItem) : sprintf('%s(%s)', gettype($responseBusinessEntity200506PublicBenevolentInstitutionEmployerItem), var_export($responseBusinessEntity200506PublicBenevolentInstitutionEmployerItem, true));
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200506
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
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200506
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
}
