<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ABRSearchByNameAdvanced2012 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ABRSearchByNameAdvanced2012 extends AbstractStructBase
{
    /**
     * The externalNameSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012|null
     */
    protected ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $externalNameSearch = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for ABRSearchByNameAdvanced2012
     * @uses ABRSearchByNameAdvanced2012::setExternalNameSearch()
     * @uses ABRSearchByNameAdvanced2012::setAuthenticationGuid()
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $externalNameSearch
     * @param string $authenticationGuid
     */
    public function __construct(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $externalNameSearch = null, ?string $authenticationGuid = null)
    {
        $this
            ->setExternalNameSearch($externalNameSearch)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get externalNameSearch value
     * @return \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012|null
     */
    public function getExternalNameSearch(): ?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012
    {
        return $this->externalNameSearch;
    }
    /**
     * Set externalNameSearch value
     * @param \AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $externalNameSearch
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2012
     */
    public function setExternalNameSearch(?\AbnServiceSDK\StructType\ExternalRequestNameSearchAdvanced2012 $externalNameSearch = null): self
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2012
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
