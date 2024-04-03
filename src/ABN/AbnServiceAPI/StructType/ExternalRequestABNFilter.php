<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestABNFilter StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class ExternalRequestABNFilter extends ExternalRequest
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
     * The postcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The entityTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityTypeCode = null;
    /**
     * Constructor method for ExternalRequestABNFilter
     * @uses ExternalRequestABNFilter::setAuthenticationGUID()
     * @uses ExternalRequestABNFilter::setPostcode()
     * @uses ExternalRequestABNFilter::setEntityTypeCode()
     * @param string $authenticationGUID
     * @param string $postcode
     * @param string $entityTypeCode
     */
    public function __construct(?string $authenticationGUID = null, ?string $postcode = null, ?string $entityTypeCode = null)
    {
        $this
            ->setAuthenticationGUID($authenticationGUID)
            ->setPostcode($postcode)
            ->setEntityTypeCode($entityTypeCode);
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNFilter
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNFilter
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNFilter
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
}
