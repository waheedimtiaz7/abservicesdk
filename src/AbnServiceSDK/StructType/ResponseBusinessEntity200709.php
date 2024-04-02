<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBusinessEntity200709 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResponseBusinessEntity200709 extends ResponseBusinessEntity200506
{
    /**
     * The superannuationStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\SuperannuationStatus|null
     */
    protected ?\AbnServiceSDK\StructType\SuperannuationStatus $superannuationStatus = null;
    /**
     * The mainPostalPhysicalAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AbnServiceSDK\StructType\AddressFull|null
     */
    protected ?\AbnServiceSDK\StructType\AddressFull $mainPostalPhysicalAddress = null;
    /**
     * Constructor method for ResponseBusinessEntity200709
     * @uses ResponseBusinessEntity200709::setSuperannuationStatus()
     * @uses ResponseBusinessEntity200709::setMainPostalPhysicalAddress()
     * @param \AbnServiceSDK\StructType\SuperannuationStatus $superannuationStatus
     * @param \AbnServiceSDK\StructType\AddressFull $mainPostalPhysicalAddress
     */
    public function __construct(?\AbnServiceSDK\StructType\SuperannuationStatus $superannuationStatus = null, ?\AbnServiceSDK\StructType\AddressFull $mainPostalPhysicalAddress = null)
    {
        $this
            ->setSuperannuationStatus($superannuationStatus)
            ->setMainPostalPhysicalAddress($mainPostalPhysicalAddress);
    }
    /**
     * Get superannuationStatus value
     * @return \AbnServiceSDK\StructType\SuperannuationStatus|null
     */
    public function getSuperannuationStatus(): ?\AbnServiceSDK\StructType\SuperannuationStatus
    {
        return $this->superannuationStatus;
    }
    /**
     * Set superannuationStatus value
     * @param \AbnServiceSDK\StructType\SuperannuationStatus $superannuationStatus
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity200709
     */
    public function setSuperannuationStatus(?\AbnServiceSDK\StructType\SuperannuationStatus $superannuationStatus = null): self
    {
        $this->superannuationStatus = $superannuationStatus;
        
        return $this;
    }
    /**
     * Get mainPostalPhysicalAddress value
     * @return \AbnServiceSDK\StructType\AddressFull|null
     */
    public function getMainPostalPhysicalAddress(): ?\AbnServiceSDK\StructType\AddressFull
    {
        return $this->mainPostalPhysicalAddress;
    }
    /**
     * Set mainPostalPhysicalAddress value
     * @param \AbnServiceSDK\StructType\AddressFull $mainPostalPhysicalAddress
     * @return \AbnServiceSDK\StructType\ResponseBusinessEntity200709
     */
    public function setMainPostalPhysicalAddress(?\AbnServiceSDK\StructType\AddressFull $mainPostalPhysicalAddress = null): self
    {
        $this->mainPostalPhysicalAddress = $mainPostalPhysicalAddress;
        
        return $this;
    }
}
