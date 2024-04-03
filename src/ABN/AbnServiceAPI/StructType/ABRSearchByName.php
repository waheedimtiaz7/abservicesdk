<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

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
     * @var \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch $externalNameSearch = null;
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
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch $externalNameSearch
     * @param string $authenticationGuid
     */
    public function __construct(?\ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch $externalNameSearch = null, ?string $authenticationGuid = null)
    {
        $this
            ->setExternalNameSearch($externalNameSearch)
            ->setAuthenticationGuid($authenticationGuid);
    }
    /**
     * Get externalNameSearch value
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch|null
     */
    public function getExternalNameSearch(): ?\ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch
    {
        return $this->externalNameSearch;
    }
    /**
     * Set externalNameSearch value
     * @param \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch $externalNameSearch
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByName
     */
    public function setExternalNameSearch(?\ABN\AbnServiceAPI\StructType\ExternalRequestNameSearch $externalNameSearch = null): self
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
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByName
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
