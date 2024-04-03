<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Activity StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Activity extends AbstractStructBase
{
    /**
     * The Searches
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Searches;
    /**
     * The Method
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Method = null;
    /**
     * Constructor method for Activity
     * @uses Activity::setSearches()
     * @uses Activity::setMethod()
     * @param int $searches
     * @param string $method
     */
    public function __construct(int $searches, ?string $method = null)
    {
        $this
            ->setSearches($searches)
            ->setMethod($method);
    }
    /**
     * Get Searches value
     * @return int
     */
    public function getSearches(): int
    {
        return $this->Searches;
    }
    /**
     * Set Searches value
     * @param int $searches
     * @return \ABN\AbnServiceAPI\StructType\Activity
     */
    public function setSearches(int $searches): self
    {
        // validation for constraint: int
        if (!is_null($searches) && !(is_int($searches) || ctype_digit($searches))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($searches, true), gettype($searches)), __LINE__);
        }
        $this->Searches = $searches;
        
        return $this;
    }
    /**
     * Get Method value
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->Method;
    }
    /**
     * Set Method value
     * @param string $method
     * @return \ABN\AbnServiceAPI\StructType\Activity
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
        $this->Method = $method;
        
        return $this;
    }
}
