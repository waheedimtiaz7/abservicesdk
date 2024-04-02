<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestIdentifierSearch StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestIdentifierSearch extends ExternalRequest
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
     * The identifierType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifierType = null;
    /**
     * The identifierValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identifierValue = null;
    /**
     * The history
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $history = null;
    /**
     * Constructor method for ExternalRequestIdentifierSearch
     * @uses ExternalRequestIdentifierSearch::setAuthenticationGUID()
     * @uses ExternalRequestIdentifierSearch::setIdentifierType()
     * @uses ExternalRequestIdentifierSearch::setIdentifierValue()
     * @uses ExternalRequestIdentifierSearch::setHistory()
     * @param string $authenticationGUID
     * @param string $identifierType
     * @param string $identifierValue
     * @param string $history
     */
    public function __construct(?string $authenticationGUID = null, ?string $identifierType = null, ?string $identifierValue = null, ?string $history = null)
    {
        $this
            ->setAuthenticationGUID($authenticationGUID)
            ->setIdentifierType($identifierType)
            ->setIdentifierValue($identifierValue)
            ->setHistory($history);
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
     * @return \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch
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
     * Get identifierType value
     * @return string|null
     */
    public function getIdentifierType(): ?string
    {
        return $this->identifierType;
    }
    /**
     * Set identifierType value
     * @param string $identifierType
     * @return \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch
     */
    public function setIdentifierType(?string $identifierType = null): self
    {
        // validation for constraint: string
        if (!is_null($identifierType) && !is_string($identifierType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifierType, true), gettype($identifierType)), __LINE__);
        }
        $this->identifierType = $identifierType;
        
        return $this;
    }
    /**
     * Get identifierValue value
     * @return string|null
     */
    public function getIdentifierValue(): ?string
    {
        return $this->identifierValue;
    }
    /**
     * Set identifierValue value
     * @param string $identifierValue
     * @return \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch
     */
    public function setIdentifierValue(?string $identifierValue = null): self
    {
        // validation for constraint: string
        if (!is_null($identifierValue) && !is_string($identifierValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifierValue, true), gettype($identifierValue)), __LINE__);
        }
        $this->identifierValue = $identifierValue;
        
        return $this;
    }
    /**
     * Get history value
     * @return string|null
     */
    public function getHistory(): ?string
    {
        return $this->history;
    }
    /**
     * Set history value
     * @param string $history
     * @return \AbnServiceSDK\StructType\ExternalRequestIdentifierSearch
     */
    public function setHistory(?string $history = null): self
    {
        // validation for constraint: string
        if (!is_null($history) && !is_string($history)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($history, true), gettype($history)), __LINE__);
        }
        $this->history = $history;
        
        return $this;
    }
}
