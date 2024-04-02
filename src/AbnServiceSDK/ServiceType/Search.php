<?php

declare(strict_types=1);

namespace AbnServiceSDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SearchByABNv200506
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByABN but returns charity tax concession information if it exists for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByABNv200506 $parameters
     * @return \AbnServiceSDK\StructType\SearchByABNv200506Response|bool
     */
    public function SearchByABNv200506(\AbnServiceSDK\StructType\SearchByABNv200506 $parameters)
    {
        try {
            $this->setResult($resultSearchByABNv200506 = $this->getSoapClient()->__soapCall('SearchByABNv200506', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByABNv200506;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByABNv200709
     * Meta information extracted from the WSDL
     * - documentation: Same as SearchByABNv200506 but returns superannuation information if it exists for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByABNv200709 $parameters
     * @return \AbnServiceSDK\StructType\SearchByABNv200709Response|bool
     */
    public function SearchByABNv200709(\AbnServiceSDK\StructType\SearchByABNv200709 $parameters)
    {
        try {
            $this->setResult($resultSearchByABNv200709 = $this->getSoapClient()->__soapCall('SearchByABNv200709', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByABNv200709;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByABNv201205
     * Meta information extracted from the WSDL
     * - documentation: Same as SearchByABNv200709 but returns business names if they exist for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByABNv201205 $parameters
     * @return \AbnServiceSDK\StructType\SearchByABNv201205Response|bool
     */
    public function SearchByABNv201205(\AbnServiceSDK\StructType\SearchByABNv201205 $parameters)
    {
        try {
            $this->setResult($resultSearchByABNv201205 = $this->getSoapClient()->__soapCall('SearchByABNv201205', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByABNv201205;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByABNv201408
     * Meta information extracted from the WSDL
     * - documentation: Same as SearchByABNv201205 but returns DGR Item number and ACNC registration if they exist for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByABNv201408 $parameters
     * @return \AbnServiceSDK\StructType\SearchByABNv201408Response|bool
     */
    public function SearchByABNv201408(\AbnServiceSDK\StructType\SearchByABNv201408 $parameters)
    {
        try {
            $this->setResult($resultSearchByABNv201408 = $this->getSoapClient()->__soapCall('SearchByABNv201408', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByABNv201408;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByABNv202001
     * Meta information extracted from the WSDL
     * - documentation: Same as SearchByABNv201408 but returns AWEF Entity if they exist for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByABNv202001 $parameters
     * @return \AbnServiceSDK\StructType\SearchByABNv202001Response|bool
     */
    public function SearchByABNv202001(\AbnServiceSDK\StructType\SearchByABNv202001 $parameters)
    {
        try {
            $this->setResult($resultSearchByABNv202001 = $this->getSoapClient()->__soapCall('SearchByABNv202001', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByABNv202001;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByASICv200506
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByASIC but returns charity tax concession information if it exists for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByASICv200506 $parameters
     * @return \AbnServiceSDK\StructType\SearchByASICv200506Response|bool
     */
    public function SearchByASICv200506(\AbnServiceSDK\StructType\SearchByASICv200506 $parameters)
    {
        try {
            $this->setResult($resultSearchByASICv200506 = $this->getSoapClient()->__soapCall('SearchByASICv200506', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByASICv200506;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByASICv201205
     * Meta information extracted from the WSDL
     * - documentation: Same as SearchByASICv200506 but returns business names if they exist for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByASICv201205 $parameters
     * @return \AbnServiceSDK\StructType\SearchByASICv201205Response|bool
     */
    public function SearchByASICv201205(\AbnServiceSDK\StructType\SearchByASICv201205 $parameters)
    {
        try {
            $this->setResult($resultSearchByASICv201205 = $this->getSoapClient()->__soapCall('SearchByASICv201205', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByASICv201205;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByASICv201408
     * Meta information extracted from the WSDL
     * - documentation: Same as SearchByASICv201205 but returns DGR Item number and ACNC registration if they exist for the ABN.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByASICv201408 $parameters
     * @return \AbnServiceSDK\StructType\SearchByASICv201408Response|bool
     */
    public function SearchByASICv201408(\AbnServiceSDK\StructType\SearchByASICv201408 $parameters)
    {
        try {
            $this->setResult($resultSearchByASICv201408 = $this->getSoapClient()->__soapCall('SearchByASICv201408', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByASICv201408;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByPostcode
     * Meta information extracted from the WSDL
     * - documentation: Search for currently active ABNs for a postcode. Returns a list of matching ABNs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByPostcode $parameters
     * @return \AbnServiceSDK\StructType\SearchByPostcodeResponse|bool
     */
    public function SearchByPostcode(\AbnServiceSDK\StructType\SearchByPostcode $parameters)
    {
        try {
            $this->setResult($resultSearchByPostcode = $this->getSoapClient()->__soapCall('SearchByPostcode', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByPostcode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByABNStatus
     * Meta information extracted from the WSDL
     * - documentation: Search for ABNs by postcode and selected status. Returns a list of matching ABNs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByABNStatus $parameters
     * @return \AbnServiceSDK\StructType\SearchByABNStatusResponse|bool
     */
    public function SearchByABNStatus(\AbnServiceSDK\StructType\SearchByABNStatus $parameters)
    {
        try {
            $this->setResult($resultSearchByABNStatus = $this->getSoapClient()->__soapCall('SearchByABNStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByABNStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByRegistrationEvent
     * Meta information extracted from the WSDL
     * - documentation: Search for ABNs that have been registered/re-activated of month and year. Returns a list of matching ABNs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByRegistrationEvent $parameters
     * @return \AbnServiceSDK\StructType\SearchByRegistrationEventResponse|bool
     */
    public function SearchByRegistrationEvent(\AbnServiceSDK\StructType\SearchByRegistrationEvent $parameters)
    {
        try {
            $this->setResult($resultSearchByRegistrationEvent = $this->getSoapClient()->__soapCall('SearchByRegistrationEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByRegistrationEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByUpdateEvent
     * Meta information extracted from the WSDL
     * - documentation: Search for ABNs by update event (includes registrations). Returns a list of matching ABNs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByUpdateEvent $parameters
     * @return \AbnServiceSDK\StructType\SearchByUpdateEventResponse|bool
     */
    public function SearchByUpdateEvent(\AbnServiceSDK\StructType\SearchByUpdateEvent $parameters)
    {
        try {
            $this->setResult($resultSearchByUpdateEvent = $this->getSoapClient()->__soapCall('SearchByUpdateEvent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByUpdateEvent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SearchByCharity
     * Meta information extracted from the WSDL
     * - documentation: Search for ABNs that have charities tax concessions. Returns a list of matching ABNs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\SearchByCharity $parameters
     * @return \AbnServiceSDK\StructType\SearchByCharityResponse|bool
     */
    public function SearchByCharity(\AbnServiceSDK\StructType\SearchByCharity $parameters)
    {
        try {
            $this->setResult($resultSearchByCharity = $this->getSoapClient()->__soapCall('SearchByCharity', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchByCharity;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbnServiceSDK\StructType\SearchByABNStatusResponse|\AbnServiceSDK\StructType\SearchByABNv200506Response|\AbnServiceSDK\StructType\SearchByABNv200709Response|\AbnServiceSDK\StructType\SearchByABNv201205Response|\AbnServiceSDK\StructType\SearchByABNv201408Response|\AbnServiceSDK\StructType\SearchByABNv202001Response|\AbnServiceSDK\StructType\SearchByASICv200506Response|\AbnServiceSDK\StructType\SearchByASICv201205Response|\AbnServiceSDK\StructType\SearchByASICv201408Response|\AbnServiceSDK\StructType\SearchByCharityResponse|\AbnServiceSDK\StructType\SearchByPostcodeResponse|\AbnServiceSDK\StructType\SearchByRegistrationEventResponse|\AbnServiceSDK\StructType\SearchByUpdateEventResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
