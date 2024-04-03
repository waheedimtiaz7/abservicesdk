<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EntityType extends AbstractStructBase
{
    /**
     * The entityTypeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityTypeCode = null;
    /**
     * The entityDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityDescription = null;
    /**
     * Constructor method for EntityType
     * @uses EntityType::setEntityTypeCode()
     * @uses EntityType::setEntityDescription()
     * @param string $entityTypeCode
     * @param string $entityDescription
     */
    public function __construct(?string $entityTypeCode = null, ?string $entityDescription = null)
    {
        $this
            ->setEntityTypeCode($entityTypeCode)
            ->setEntityDescription($entityDescription);
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
     * @return \ABN\AbnServiceAPI\StructType\EntityType
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
     * Get entityDescription value
     * @return string|null
     */
    public function getEntityDescription(): ?string
    {
        return $this->entityDescription;
    }
    /**
     * Set entityDescription value
     * @param string $entityDescription
     * @return \ABN\AbnServiceAPI\StructType\EntityType
     */
    public function setEntityDescription(?string $entityDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($entityDescription) && !is_string($entityDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityDescription, true), gettype($entityDescription)), __LINE__);
        }
        $this->entityDescription = $entityDescription;
        
        return $this;
    }
}
