<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestNameSearch StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestNameSearch extends ExternalRequest
{
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
     * The filters
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \AbnServiceSDK\StructType\ExternalRequestFilters
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestFilters $filters;
    /**
     * Constructor method for ExternalRequestNameSearch
     * @uses ExternalRequestNameSearch::setAuthenticationGUID()
     * @uses ExternalRequestNameSearch::setName()
     * @uses ExternalRequestNameSearch::setFilters()
     * @param string $authenticationGUID
     * @param string $name
     * @param \AbnServiceSDK\StructType\ExternalRequestFilters $filters
     */
    public function __construct(?string $authenticationGUID = null, ?string $name = null, ?\AbnServiceSDK\StructType\ExternalRequestFilters $filters)
    {
        $this
            ->setAuthenticationGUID($authenticationGUID)
            ->setName($name)
            ->setFilters($filters);
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
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearch
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
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearch
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
     * Get filters value
     * @return \AbnServiceSDK\StructType\ExternalRequestFilters
     */
    public function getFilters(): \AbnServiceSDK\StructType\ExternalRequestFilters
    {
        return $this->filters;
    }
    /**
     * Set filters value
     * @param \AbnServiceSDK\StructType\ExternalRequestFilters $filters
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearch
     */
    public function setFilters(?\AbnServiceSDK\StructType\ExternalRequestFilters $filters): self
    {
        $this->filters = $filters;
        
        return $this;
    }
}
