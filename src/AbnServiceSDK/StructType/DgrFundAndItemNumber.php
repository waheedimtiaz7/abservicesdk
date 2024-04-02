<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DgrFundAndItemNumber StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DgrFundAndItemNumber extends DgrFund
{
    /**
     * The itemNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $itemNumber = null;
    /**
     * Constructor method for DgrFundAndItemNumber
     * @uses DgrFundAndItemNumber::setItemNumber()
     * @param string $itemNumber
     */
    public function __construct(?string $itemNumber = null)
    {
        $this
            ->setItemNumber($itemNumber);
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
     * @return \AbnServiceSDK\StructType\DgrFundAndItemNumber
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
