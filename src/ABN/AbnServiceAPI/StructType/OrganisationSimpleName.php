<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganisationSimpleName StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrganisationSimpleName extends Organisation
{
    /**
     * The score
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $score;
    /**
     * The isCurrentIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $isCurrentIndicator = null;
    /**
     * Constructor method for OrganisationSimpleName
     * @uses OrganisationSimpleName::setScore()
     * @uses OrganisationSimpleName::setIsCurrentIndicator()
     * @param int $score
     * @param string $isCurrentIndicator
     */
    public function __construct(int $score, ?string $isCurrentIndicator = null)
    {
        $this
            ->setScore($score)
            ->setIsCurrentIndicator($isCurrentIndicator);
    }
    /**
     * Get score value
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }
    /**
     * Set score value
     * @param int $score
     * @return \ABN\AbnServiceAPI\StructType\OrganisationSimpleName
     */
    public function setScore(int $score): self
    {
        // validation for constraint: int
        if (!is_null($score) && !(is_int($score) || ctype_digit($score))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
        $this->score = $score;
        
        return $this;
    }
    /**
     * Get isCurrentIndicator value
     * @return string|null
     */
    public function getIsCurrentIndicator(): ?string
    {
        return $this->isCurrentIndicator;
    }
    /**
     * Set isCurrentIndicator value
     * @param string $isCurrentIndicator
     * @return \ABN\AbnServiceAPI\StructType\OrganisationSimpleName
     */
    public function setIsCurrentIndicator(?string $isCurrentIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($isCurrentIndicator) && !is_string($isCurrentIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isCurrentIndicator, true), gettype($isCurrentIndicator)), __LINE__);
        }
        $this->isCurrentIndicator = $isCurrentIndicator;
        
        return $this;
    }
}
