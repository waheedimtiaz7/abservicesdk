<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestABNUpdateEventFilter StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestABNUpdateEventFilter extends ExternalRequestABNFilter
{
    /**
     * The updateDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $updateDate;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * Constructor method for ExternalRequestABNUpdateEventFilter
     * @uses ExternalRequestABNUpdateEventFilter::setUpdateDate()
     * @uses ExternalRequestABNUpdateEventFilter::setState()
     * @param string $updateDate
     * @param string $state
     */
    public function __construct(string $updateDate, ?string $state = null)
    {
        $this
            ->setUpdateDate($updateDate)
            ->setState($state);
    }
    /**
     * Get updateDate value
     * @return string
     */
    public function getUpdateDate(): string
    {
        return $this->updateDate;
    }
    /**
     * Set updateDate value
     * @param string $updateDate
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNUpdateEventFilter
     */
    public function setUpdateDate(string $updateDate): self
    {
        // validation for constraint: string
        if (!is_null($updateDate) && !is_string($updateDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateDate, true), gettype($updateDate)), __LINE__);
        }
        $this->updateDate = $updateDate;
        
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
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestABNUpdateEventFilter
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
}
