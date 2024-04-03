<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestNameSearchAdvanced StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestNameSearchAdvanced extends ExternalRequestNameSearch
{
    /**
     * The minimumScore
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $minimumScore;
    /**
     * The searchWidth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $searchWidth = null;
    /**
     * Constructor method for ExternalRequestNameSearchAdvanced
     * @uses ExternalRequestNameSearchAdvanced::setMinimumScore()
     * @uses ExternalRequestNameSearchAdvanced::setSearchWidth()
     * @param int $minimumScore
     * @param string $searchWidth
     */
    public function __construct(int $minimumScore, ?string $searchWidth = null)
    {
        $this
            ->setMinimumScore($minimumScore)
            ->setSearchWidth($searchWidth);
    }
    /**
     * Get minimumScore value
     * @return int
     */
    public function getMinimumScore(): int
    {
        return $this->minimumScore;
    }
    /**
     * Set minimumScore value
     * @param int $minimumScore
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced
     */
    public function setMinimumScore(int $minimumScore): self
    {
        // validation for constraint: int
        if (!is_null($minimumScore) && !(is_int($minimumScore) || ctype_digit($minimumScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minimumScore, true), gettype($minimumScore)), __LINE__);
        }
        $this->minimumScore = $minimumScore;
        
        return $this;
    }
    /**
     * Get searchWidth value
     * @return string|null
     */
    public function getSearchWidth(): ?string
    {
        return $this->searchWidth;
    }
    /**
     * Set searchWidth value
     * @param string $searchWidth
     * @return \ABN\AbnServiceAPI\StructType\ExternalRequestNameSearchAdvanced
     */
    public function setSearchWidth(?string $searchWidth = null): self
    {
        // validation for constraint: string
        if (!is_null($searchWidth) && !is_string($searchWidth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchWidth, true), gettype($searchWidth)), __LINE__);
        }
        $this->searchWidth = $searchWidth;
        
        return $this;
    }
}
