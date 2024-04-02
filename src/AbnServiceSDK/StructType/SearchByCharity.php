<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchByCharity StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchByCharity extends AbstractStructBase
{
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The charityTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $charityTypeCode = null;
    /**
     * The concessionTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $concessionTypeCode = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for SearchByCharity
     * @uses SearchByCharity::setPostcode()
     * @uses SearchByCharity::setState()
     * @uses SearchByCharity::setCharityTypeCode()
     * @uses SearchByCharity::setConcessionTypeCode()
     * @uses SearchByCharity::setAuthenticationGuid()
     * @param string $postcode
     * @param string $state
     * @param string $charityTypeCode
     * @param string $concessionTypeCode
     * @param string $authenticationGuid
     */
    public function __construct(?string $postcode = null, ?string $state = null, ?string $charityTypeCode = null, ?string $concessionTypeCode = null, ?string $authenticationGuid = null)
    {
        $this
            ->setPostcode($postcode)
            ->setState($state)
            ->setCharityTypeCode($charityTypeCode)
            ->setConcessionTypeCode($concessionTypeCode)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \AbnServiceSDK\StructType\SearchByCharity
     */
    public function setPostcode(?string $postcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \AbnServiceSDK\StructType\SearchByCharity
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get charityTypeCode value
     * @return string|null
     */
    public function getCharityTypeCode(): ?string
    {
        return $this->charityTypeCode;
    }
    /**
     * Set charityTypeCode value
     * @param string $charityTypeCode
     * @return \AbnServiceSDK\StructType\SearchByCharity
     */
    public function setCharityTypeCode(?string $charityTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($charityTypeCode) && !is_string($charityTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityTypeCode, true), gettype($charityTypeCode)), __LINE__);
        }
        $this->charityTypeCode = $charityTypeCode;
        
        return $this;
    }
    /**
     * Get concessionTypeCode value
     * @return string|null
     */
    public function getConcessionTypeCode(): ?string
    {
        return $this->concessionTypeCode;
    }
    /**
     * Set concessionTypeCode value
     * @param string $concessionTypeCode
     * @return \AbnServiceSDK\StructType\SearchByCharity
     */
    public function setConcessionTypeCode(?string $concessionTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($concessionTypeCode) && !is_string($concessionTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($concessionTypeCode, true), gettype($concessionTypeCode)), __LINE__);
        }
        $this->concessionTypeCode = $concessionTypeCode;
        
        return $this;
    }
    /**
     * Get authenticationGuid value
     * @return string|null
     */
    public function getAuthenticationGuid(): ?string
    {
        return $this->authenticationGuid;
    }
    /**
     * Set authenticationGuid value
     * @param string $authenticationGuid
     * @return \AbnServiceSDK\StructType\SearchByCharity
     */
    public function setAuthenticationGuid(?string $authenticationGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($authenticationGuid) && !is_string($authenticationGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationGuid, true), gettype($authenticationGuid)), __LINE__);
        }
        $this->authenticationGuid = $authenticationGuid;
        
        return $this;
    }
}
