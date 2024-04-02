<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ABRSearchByName StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ABRSearchByName extends AbstractStructBase
{
    /**
     * The externalNameSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearch|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearch $externalNameSearch = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for ABRSearchByName
     * @uses ABRSearchByName::setExternalNameSearch()
     * @uses ABRSearchByName::setAuthenticationGuid()
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearch $externalNameSearch
     * @param string $authenticationGuid
     */
    public function __construct(?\AbnServiceSDK\StructType\ExternalRequestNameSearch $externalNameSearch = null, ?string $authenticationGuid = null)
    {
        $this
            ->setExternalNameSearch($externalNameSearch)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get externalNameSearch value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearch|null
     */
    public function getExternalNameSearch(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearch
    {
        return $this->externalNameSearch;
    }
    /**
     * Set externalNameSearch value
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearch $externalNameSearch
     * @return \AbnServiceSDK\StructType\ABRSearchByName
     */
    public function setExternalNameSearch(?\AbnServiceSDK\StructType\ExternalRequestNameSearch $externalNameSearch = null): self
    {
        $this->externalNameSearch = $externalNameSearch;
        
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
     * @return \AbnServiceSDK\StructType\ABRSearchByName
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
