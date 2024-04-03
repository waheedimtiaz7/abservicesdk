<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ABRSearchByNameAdvanced2017Response StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ABRSearchByNameAdvanced2017Response extends AbstractStructBase
{
    /**
     * The ABRPayloadSearchResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \ABN\AbnServiceAPI\StructType\Payload
     */
    protected ?\ABN\AbnServiceAPI\StructType\Payload $ABRPayloadSearchResults;
    /**
     * Constructor method for ABRSearchByNameAdvanced2017Response
     * @uses ABRSearchByNameAdvanced2017Response::setABRPayloadSearchResults()
     * @param \ABN\AbnServiceAPI\StructType\Payload $aBRPayloadSearchResults
     */
    public function __construct(?\ABN\AbnServiceAPI\StructType\Payload $aBRPayloadSearchResults)
    {
        $this
            ->setABRPayloadSearchResults($aBRPayloadSearchResults);
    }
    /**
     * Get ABRPayloadSearchResults value
     * @return \ABN\AbnServiceAPI\StructType\Payload
     */
    public function getABRPayloadSearchResults(): \ABN\AbnServiceAPI\StructType\Payload
    {
        return $this->ABRPayloadSearchResults;
    }
    /**
     * Set ABRPayloadSearchResults value
     * @param \ABN\AbnServiceAPI\StructType\Payload $aBRPayloadSearchResults
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvanced2017Response
     */
    public function setABRPayloadSearchResults(?\ABN\AbnServiceAPI\StructType\Payload $aBRPayloadSearchResults): self
    {
        $this->ABRPayloadSearchResults = $aBRPayloadSearchResults;
        
        return $this;
    }
}
