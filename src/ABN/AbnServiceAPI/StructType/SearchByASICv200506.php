<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchByASICv200506 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchByASICv200506 extends AbstractStructBase
{
    /**
     * The searchString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $searchString = null;
    /**
     * The includeHistoricalDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $includeHistoricalDetails = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for SearchByASICv200506
     * @uses SearchByASICv200506::setSearchString()
     * @uses SearchByASICv200506::setIncludeHistoricalDetails()
     * @uses SearchByASICv200506::setAuthenticationGuid()
     * @param string $searchString
     * @param string $includeHistoricalDetails
     * @param string $authenticationGuid
     */
    public function __construct(?string $searchString = null, ?string $includeHistoricalDetails = null, ?string $authenticationGuid = null)
    {
        $this
            ->setSearchString($searchString)
            ->setIncludeHistoricalDetails($includeHistoricalDetails)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get searchString value
     * @return string|null
     */
    public function getSearchString(): ?string
    {
        return $this->searchString;
    }
    /**
     * Set searchString value
     * @param string $searchString
     * @return \ABN\AbnServiceAPI\StructType\SearchByASICv200506
     */
    public function setSearchString(?string $searchString = null): self
    {
        // validation for constraint: string
        if (!is_null($searchString) && !is_string($searchString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchString, true), gettype($searchString)), __LINE__);
        }
        $this->searchString = $searchString;
        
        return $this;
    }
    /**
     * Get includeHistoricalDetails value
     * @return string|null
     */
    public function getIncludeHistoricalDetails(): ?string
    {
        return $this->includeHistoricalDetails;
    }
    /**
     * Set includeHistoricalDetails value
     * @param string $includeHistoricalDetails
     * @return \ABN\AbnServiceAPI\StructType\SearchByASICv200506
     */
    public function setIncludeHistoricalDetails(?string $includeHistoricalDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($includeHistoricalDetails) && !is_string($includeHistoricalDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($includeHistoricalDetails, true), gettype($includeHistoricalDetails)), __LINE__);
        }
        $this->includeHistoricalDetails = $includeHistoricalDetails;
        
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
     * @return \ABN\AbnServiceAPI\StructType\SearchByASICv200506
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
