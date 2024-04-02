<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ABRSearchByNameAdvanced StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ABRSearchByNameAdvanced extends AbstractStructBase
{
    /**
     * The externalNameSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $externalNameSearch = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for ABRSearchByNameAdvanced
     * @uses ABRSearchByNameAdvanced::setExternalNameSearch()
     * @uses ABRSearchByNameAdvanced::setAuthenticationGuid()
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $externalNameSearch
     * @param string $authenticationGuid
     */
    public function __construct(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $externalNameSearch = null, ?string $authenticationGuid = null)
    {
        $this
            ->setExternalNameSearch($externalNameSearch)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get externalNameSearch value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced|null
     */
    public function getExternalNameSearch(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced
    {
        return $this->externalNameSearch;
    }
    /**
     * Set externalNameSearch value
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $externalNameSearch
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced
     */
    public function setExternalNameSearch(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced $externalNameSearch = null): self
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced
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
