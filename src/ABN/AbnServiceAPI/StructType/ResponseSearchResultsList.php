<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseSearchResultsList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseSearchResultsList extends ResponseBody
{
    /**
     * The numberOfRecords
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $numberOfRecords;
    /**
     * The exceedsMaximum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $exceedsMaximum = null;
    /**
     * The searchResultsRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\SearchResultsRecord[]
     */
    protected ?array $searchResultsRecord = null;
    /**
     * Constructor method for ResponseSearchResultsList
     * @uses ResponseSearchResultsList::setNumberOfRecords()
     * @uses ResponseSearchResultsList::setExceedsMaximum()
     * @uses ResponseSearchResultsList::setSearchResultsRecord()
     * @param int $numberOfRecords
     * @param string $exceedsMaximum
     * @param \ABN\AbnServiceAPI\StructType\SearchResultsRecord[] $searchResultsRecord
     */
    public function __construct(int $numberOfRecords, ?string $exceedsMaximum = null, ?array $searchResultsRecord = null)
    {
        $this
            ->setNumberOfRecords($numberOfRecords)
            ->setExceedsMaximum($exceedsMaximum)
            ->setSearchResultsRecord($searchResultsRecord);
    }
    /**
     * Get numberOfRecords value
     * @return int
     */
    public function getNumberOfRecords(): int
    {
        return $this->numberOfRecords;
    }
    /**
     * Set numberOfRecords value
     * @param int $numberOfRecords
     * @return \ABN\AbnServiceAPI\StructType\ResponseSearchResultsList
     */
    public function setNumberOfRecords(int $numberOfRecords): self
    {
        // validation for constraint: int
        if (!is_null($numberOfRecords) && !(is_int($numberOfRecords) || ctype_digit($numberOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRecords, true), gettype($numberOfRecords)), __LINE__);
        }
        $this->numberOfRecords = $numberOfRecords;
        
        return $this;
    }
    /**
     * Get exceedsMaximum value
     * @return string|null
     */
    public function getExceedsMaximum(): ?string
    {
        return $this->exceedsMaximum;
    }
    /**
     * Set exceedsMaximum value
     * @param string $exceedsMaximum
     * @return \ABN\AbnServiceAPI\StructType\ResponseSearchResultsList
     */
    public function setExceedsMaximum(?string $exceedsMaximum = null): self
    {
        // validation for constraint: string
        if (!is_null($exceedsMaximum) && !is_string($exceedsMaximum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceedsMaximum, true), gettype($exceedsMaximum)), __LINE__);
        }
        $this->exceedsMaximum = $exceedsMaximum;
        
        return $this;
    }
    /**
     * Get searchResultsRecord value
     * @return \ABN\AbnServiceAPI\StructType\SearchResultsRecord[]
     */
    public function getSearchResultsRecord(): ?array
    {
        return $this->searchResultsRecord;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSearchResultsRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchResultsRecord method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchResultsRecordForArrayConstraintFromSetSearchResultsRecord(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responseSearchResultsListSearchResultsRecordItem) {
            // validation for constraint: itemType
            if (!$responseSearchResultsListSearchResultsRecordItem instanceof \ABN\AbnServiceAPI\StructType\SearchResultsRecord) {
                $invalidValues[] = is_object($responseSearchResultsListSearchResultsRecordItem) ? get_class($responseSearchResultsListSearchResultsRecordItem) : sprintf('%s(%s)', gettype($responseSearchResultsListSearchResultsRecordItem), var_export($responseSearchResultsListSearchResultsRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The searchResultsRecord property can only contain items of type \ABN\AbnServiceAPI\StructType\SearchResultsRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set searchResultsRecord value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\SearchResultsRecord[] $searchResultsRecord
     * @return \ABN\AbnServiceAPI\StructType\ResponseSearchResultsList
     */
    public function setSearchResultsRecord(?array $searchResultsRecord = null): self
    {
        // validation for constraint: array
        if ('' !== ($searchResultsRecordArrayErrorMessage = self::validateSearchResultsRecordForArrayConstraintFromSetSearchResultsRecord($searchResultsRecord))) {
            throw new InvalidArgumentException($searchResultsRecordArrayErrorMessage, __LINE__);
        }
        $this->searchResultsRecord = $searchResultsRecord;
        
        return $this;
    }
    /**
     * Add item to searchResultsRecord value
     * @throws InvalidArgumentException
     * @param \ABN\AbnServiceAPI\StructType\SearchResultsRecord $item
     * @return \ABN\AbnServiceAPI\StructType\ResponseSearchResultsList
     */
    public function addToSearchResultsRecord(\ABN\AbnServiceAPI\StructType\SearchResultsRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ABN\AbnServiceAPI\StructType\SearchResultsRecord) {
            throw new InvalidArgumentException(sprintf('The searchResultsRecord property can only contain items of type \ABN\AbnServiceAPI\StructType\SearchResultsRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->searchResultsRecord[] = $item;
        
        return $this;
    }
}
