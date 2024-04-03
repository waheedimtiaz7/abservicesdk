<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestNameSearchAdvanced2023 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestNameSearchAdvanced2023 extends ExternalRequest
{
    /**
     * The minimumScore
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $minimumScore;
    /**
     * The authenticationGUID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGUID = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The searchWidth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $searchWidth = null;
    /**
     * The maxSearchResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxSearchResults = null;
    /**
     * The filters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023
     */
    protected ?\ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023 $filters;
    /**
     * Constructor method for ExternalRequestNameSearchAdvanced2023
     * @uses ExternalRequestNameSearchAdvanced2023::setMinimumScore()
     * @uses ExternalRequestNameSearchAdvanced2023::setAuthenticationGUID()
     * @uses ExternalRequestNameSearchAdvanced2023::setName()
     * @uses ExternalRequestNameSearchAdvanced2023::setSearchWidth()
     * @uses ExternalRequestNameSearchAdvanced2023::setMaxSearchResults()
     * @uses ExternalRequestNameSearchAdvanced2023::setFilters()
     * @param int $minimumScore
     * @param string $authenticationGUID
     * @param string $name
     * @param string $searchWidth
     * @param string $maxSearchResults
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023 $filters
     */
    public function __construct(int $minimumScore, ?string $authenticationGUID = null, ?string $name = null, ?string $searchWidth = null, ?string $maxSearchResults = null, ?\ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023 $filters)
    {
        $this
            ->setMinimumScore($minimumScore)
            ->setAuthenticationGUID($authenticationGUID)
            ->setName($name)
            ->setSearchWidth($searchWidth)
            ->setMaxSearchResults($maxSearchResults)
            ->setFilters($filters);
    }
    /**
     * Get minimumScore value
     * @return int
     */
    public function getMinimumScore(): int
    {
        return $this->minimumScore;
    }
    /**
     * Set minimumScore value
     * @param int $minimumScore
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced2023
     */
    public function setMinimumScore(int $minimumScore): self
    {
        // validation for constraint: int
        if (!is_null($minimumScore) && !(is_int($minimumScore) || ctype_digit($minimumScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minimumScore, true), gettype($minimumScore)), __LINE__);
        }
        $this->minimumScore = $minimumScore;
        
        return $this;
    }
    /**
     * Get authenticationGUID value
     * @return string|null
     */
    public function getAuthenticationGUID(): ?string
    {
        return $this->authenticationGUID;
    }
    /**
     * Set authenticationGUID value
     * @param string $authenticationGUID
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced2023
     */
    public function setAuthenticationGUID(?string $authenticationGUID = null): self
    {
        // validation for constraint: string
        if (!is_null($authenticationGUID) && !is_string($authenticationGUID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationGUID, true), gettype($authenticationGUID)), __LINE__);
        }
        $this->authenticationGUID = $authenticationGUID;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced2023
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get searchWidth value
     * @return string|null
     */
    public function getSearchWidth(): ?string
    {
        return $this->searchWidth;
    }
    /**
     * Set searchWidth value
     * @param string $searchWidth
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced2023
     */
    public function setSearchWidth(?string $searchWidth = null): self
    {
        // validation for constraint: string
        if (!is_null($searchWidth) && !is_string($searchWidth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchWidth, true), gettype($searchWidth)), __LINE__);
        }
        $this->searchWidth = $searchWidth;
        
        return $this;
    }
    /**
     * Get maxSearchResults value
     * @return string|null
     */
    public function getMaxSearchResults(): ?string
    {
        return $this->maxSearchResults;
    }
    /**
     * Set maxSearchResults value
     * @param string $maxSearchResults
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced2023
     */
    public function setMaxSearchResults(?string $maxSearchResults = null): self
    {
        // validation for constraint: string
        if (!is_null($maxSearchResults) && !is_string($maxSearchResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxSearchResults, true), gettype($maxSearchResults)), __LINE__);
        }
        $this->maxSearchResults = $maxSearchResults;
        
        return $this;
    }
    /**
     * Get filters value
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023
     */
    public function getFilters(): \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023
    {
        return $this->filters;
    }
    /**
     * Set filters value
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023 $filters
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced2023
     */
    public function setFilters(?\ABN\AbnServiceAPI\StructType\ExternalRequestFilters2023 $filters): self
    {
        $this->filters = $filters;
        
        return $this;
    }
}
