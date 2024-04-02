<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchByABNv201205Response StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchByABNv201205Response extends AbstractStructBase
{
    /**
     * The ABRPayloadSearchResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \AbnServiceSDK\StructType\Payload
     */
    protected ?\AbnServiceSDK\StructType\Payload $ABRPayloadSearchResults;
    /**
     * Constructor method for SearchByABNv201205Response
     * @uses SearchByABNv201205Response::setABRPayloadSearchResults()
     * @param \AbnServiceSDK\StructType\Payload $aBRPayloadSearchResults
     */
    public function __construct(?\AbnServiceSDK\StructType\Payload $aBRPayloadSearchResults)
    {
        $this
            ->setABRPayloadSearchResults($aBRPayloadSearchResults);
    }
    /**
     * Get ABRPayloadSearchResults value
     * @return \AbnServiceSDK\StructType\Payload
     */
    public function getABRPayloadSearchResults(): \AbnServiceSDK\StructType\Payload
    {
        return $this->ABRPayloadSearchResults;
    }
    /**
     * Set ABRPayloadSearchResults value
     * @param \AbnServiceSDK\StructType\Payload $aBRPayloadSearchResults
     * @return \AbnServiceSDK\StructType\SearchByABNv201205Response
     */
    public function setABRPayloadSearchResults(?\AbnServiceSDK\StructType\Payload $aBRPayloadSearchResults): self
    {
        $this->ABRPayloadSearchResults = $aBRPayloadSearchResults;
        
        return $this;
    }
}
