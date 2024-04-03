<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organisation StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Organisation extends AbstractStructBase
{
    /**
     * The organisationName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $organisationName = null;
    /**
     * Constructor method for Organisation
     * @uses Organisation::setOrganisationName()
     * @param string $organisationName
     */
    public function __construct(?string $organisationName = null)
    {
        $this
            ->setOrganisationName($organisationName);
    }
    /**
     * Get organisationName value
     * @return string|null
     */
    public function getOrganisationName(): ?string
    {
        return $this->organisationName;
    }
    /**
     * Set organisationName value
     * @param string $organisationName
     * @return \ABN\AbnServiceAPI\StructType\Organisation
     */
    public function setOrganisationName(?string $organisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationName) && !is_string($organisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationName, true), gettype($organisationName)), __LINE__);
        }
        $this->organisationName = $organisationName;
        
        return $this;
    }
}
