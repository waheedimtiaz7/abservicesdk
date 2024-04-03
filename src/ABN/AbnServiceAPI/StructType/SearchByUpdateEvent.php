<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchByUpdateEvent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchByUpdateEvent extends AbstractStructBase
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
     * The entityTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityTypeCode = null;
    /**
     * The updatedate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $updatedate = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * Constructor method for SearchByUpdateEvent
     * @uses SearchByUpdateEvent::setPostcode()
     * @uses SearchByUpdateEvent::setState()
     * @uses SearchByUpdateEvent::setEntityTypeCode()
     * @uses SearchByUpdateEvent::setUpdatedate()
     * @uses SearchByUpdateEvent::setAuthenticationGuid()
     * @param string $postcode
     * @param string $state
     * @param string $entityTypeCode
     * @param string $updatedate
     * @param string $authenticationGuid
     */
    public function __construct(?string $postcode = null, ?string $state = null, ?string $entityTypeCode = null, ?string $updatedate = null, ?string $authenticationGuid = null)
    {
        $this
            ->setPostcode($postcode)
            ->setState($state)
            ->setEntityTypeCode($entityTypeCode)
            ->setUpdatedate($updatedate)
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
     * @return \ABN\AbnServiceAPI\StructType\SearchByUpdateEvent
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
     * @return \ABN\AbnServiceAPI\StructType\SearchByUpdateEvent
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
     * Get entityTypeCode value
     * @return string|null
     */
    public function getEntityTypeCode(): ?string
    {
        return $this->entityTypeCode;
    }
    /**
     * Set entityTypeCode value
     * @param string $entityTypeCode
     * @return \ABN\AbnServiceAPI\StructType\SearchByUpdateEvent
     */
    public function setEntityTypeCode(?string $entityTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($entityTypeCode) && !is_string($entityTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityTypeCode, true), gettype($entityTypeCode)), __LINE__);
        }
        $this->entityTypeCode = $entityTypeCode;
        
        return $this;
    }
    /**
     * Get updatedate value
     * @return string|null
     */
    public function getUpdatedate(): ?string
    {
        return $this->updatedate;
    }
    /**
     * Set updatedate value
     * @param string $updatedate
     * @return \ABN\AbnServiceAPI\StructType\SearchByUpdateEvent
     */
    public function setUpdatedate(?string $updatedate = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedate) && !is_string($updatedate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedate, true), gettype($updatedate)), __LINE__);
        }
        $this->updatedate = $updatedate;
        
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
     * @return \ABN\AbnServiceAPI\StructType\SearchByUpdateEvent
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
