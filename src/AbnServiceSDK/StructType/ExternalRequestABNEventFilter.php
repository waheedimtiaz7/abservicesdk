<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestABNEventFilter StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestABNEventFilter extends ExternalRequestABNFilter
{
    /**
     * The month
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $month;
    /**
     * The year
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $year;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * Constructor method for ExternalRequestABNEventFilter
     * @uses ExternalRequestABNEventFilter::setMonth()
     * @uses ExternalRequestABNEventFilter::setYear()
     * @uses ExternalRequestABNEventFilter::setState()
     * @param int $month
     * @param int $year
     * @param string $state
     */
    public function __construct(int $month, int $year, ?string $state = null)
    {
        $this
            ->setMonth($month)
            ->setYear($year)
            ->setState($state);
    }
    /**
     * Get month value
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \AbnServiceSDK\StructType\ExternalRequestABNEventFilter
     */
    public function setMonth(int $month): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get year value
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \AbnServiceSDK\StructType\ExternalRequestABNEventFilter
     */
    public function setYear(int $year): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
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
     * @return \AbnServiceSDK\StructType\ExternalRequestABNEventFilter
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
