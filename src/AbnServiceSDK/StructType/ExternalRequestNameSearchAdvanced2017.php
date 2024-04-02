<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestNameSearchAdvanced2017 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestNameSearchAdvanced2017 extends ExternalRequest
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
     * @var \AbnServiceSDK\StructType\ExternalRequestFilters2017
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestFilters2017 $filters;
    /**
     * Constructor method for ExternalRequestNameSearchAdvanced2017
     * @uses ExternalRequestNameSearchAdvanced2017::setMinimumScore()
     * @uses ExternalRequestNameSearchAdvanced2017::setAuthenticationGUID()
     * @uses ExternalRequestNameSearchAdvanced2017::setName()
     * @uses ExternalRequestNameSearchAdvanced2017::setSearchWidth()
     * @uses ExternalRequestNameSearchAdvanced2017::setMaxSearchResults()
     * @uses ExternalRequestNameSearchAdvanced2017::setFilters()
     * @param int $minimumScore
     * @param string $authenticationGUID
     * @param string $name
     * @param string $searchWidth
     * @param string $maxSearchResults
     * @param \AbnServiceSDK\StructType\ExternalRequestFilters2017 $filters
     */
    public function __construct(int $minimumScore, ?string $authenticationGUID = null, ?string $name = null, ?string $searchWidth = null, ?string $maxSearchResults = null, ?\AbnServiceSDK\StructType\ExternalRequestFilters2017 $filters)
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
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017
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
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017
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
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017
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
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017
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
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters2017
     */
    public function getFilters(): \AbnServiceSDK\StructType\ExternalRequestFilters2017
    {
        return $this->filters;
    }
    /**
     * Set filters value
     * @param \AbnServiceSDK\StructType\ExternalRequestFilters2017 $filters
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2017
     */
    public function setFilters(?\AbnServiceSDK\StructType\ExternalRequestFilters2017 $filters): self
    {
        $this->filters = $filters;
        
        return $this;
    }
}
