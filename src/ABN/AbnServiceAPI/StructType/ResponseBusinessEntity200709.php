<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

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
     * @var \ABN\AbnServiceAPI\StructType\SuperannuationStatus|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus = null;
    /**
     * The mainPostalPhysicalAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ABN\AbnServiceAPI\StructType\AddressFull|null
     */
    protected ?\ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress = null;
    /**
     * Constructor method for ResponseBusinessEntity200709
     * @uses ResponseBusinessEntity200709::setSuperannuationStatus()
     * @uses ResponseBusinessEntity200709::setMainPostalPhysicalAddress()
     * @param \ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus
     * @param \ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress
     */
    public function __construct(?\ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus = null, ?\ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress = null)
    {
        $this
            ->setSuperannuationStatus($superannuationStatus)
            ->setMainPostalPhysicalAddress($mainPostalPhysicalAddress);
    }
    /**
     * Get superannuationStatus value
     * @return \ABN\AbnServiceAPI\StructType\SuperannuationStatus|null
     */
    public function getSuperannuationStatus(): ?\ABN\AbnServiceAPI\StructType\SuperannuationStatus
    {
        return $this->superannuationStatus;
    }
    /**
     * Set superannuationStatus value
     * @param \ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200709
     */
    public function setSuperannuationStatus(?\ABN\AbnServiceAPI\StructType\SuperannuationStatus $superannuationStatus = null): self
    {
        $this->superannuationStatus = $superannuationStatus;
        
        return $this;
    }
    /**
     * Get mainPostalPhysicalAddress value
     * @return \ABN\AbnServiceAPI\StructType\AddressFull|null
     */
    public function getMainPostalPhysicalAddress(): ?\ABN\AbnServiceAPI\StructType\AddressFull
    {
        return $this->mainPostalPhysicalAddress;
    }
    /**
     * Set mainPostalPhysicalAddress value
     * @param \ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress
     * @return \ABN\AbnServiceAPI\StructType\ResponseBusinessEntity200709
     */
    public function setMainPostalPhysicalAddress(?\ABN\AbnServiceAPI\StructType\AddressFull $mainPostalPhysicalAddress = null): self
    {
        $this->mainPostalPhysicalAddress = $mainPostalPhysicalAddress;
        
        return $this;
    }
}
