<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DgrEndorsementAndItemNumber StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DgrEndorsementAndItemNumber extends DGREndorsement
{
    /**
     * The entityEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $entityEndorsement = null;
    /**
     * The itemNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $itemNumber = null;
    /**
     * Constructor method for DgrEndorsementAndItemNumber
     * @uses DgrEndorsementAndItemNumber::setEntityEndorsement()
     * @uses DgrEndorsementAndItemNumber::setItemNumber()
     * @param string $entityEndorsement
     * @param string $itemNumber
     */
    public function __construct(?string $entityEndorsement = null, ?string $itemNumber = null)
    {
        $this
            ->setEntityEndorsement($entityEndorsement)
            ->setItemNumber($itemNumber);
    }
    /**
     * Get entityEndorsement value
     * @return string|null
     */
    public function getEntityEndorsement(): ?string
    {
        return $this->entityEndorsement;
    }
    /**
     * Set entityEndorsement value
     * @param string $entityEndorsement
     * @return \AbnServiceSDK\StructType\DgrEndorsementAndItemNumber
     */
    public function setEntityEndorsement(?string $entityEndorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($entityEndorsement) && !is_string($entityEndorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityEndorsement, true), gettype($entityEndorsement)), __LINE__);
        }
        $this->entityEndorsement = $entityEndorsement;
        
        return $this;
    }
    /**
     * Get itemNumber value
     * @return string|null
     */
    public function getItemNumber(): ?string
    {
        return $this->itemNumber;
    }
    /**
     * Set itemNumber value
     * @param string $itemNumber
     * @return \AbnServiceSDK\StructType\DgrEndorsementAndItemNumber
     */
    public function setItemNumber(?string $itemNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($itemNumber) && !is_string($itemNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        $this->itemNumber = $itemNumber;
        
        return $this;
    }
}
