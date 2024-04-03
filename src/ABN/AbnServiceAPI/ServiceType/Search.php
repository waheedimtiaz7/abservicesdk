<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\ServiceType;

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
     * @param \ABN\AbnServiceAPI\StructType\SearchByABNv200506 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByABNv200506Response|bool
     */
    public function SearchByABNv200506(\ABN\AbnServiceAPI\StructType\SearchByABNv200506 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByABNv200709 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByABNv200709Response|bool
     */
    public function SearchByABNv200709(\ABN\AbnServiceAPI\StructType\SearchByABNv200709 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByABNv201205 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByABNv201205Response|bool
     */
    public function SearchByABNv201205(\ABN\AbnServiceAPI\StructType\SearchByABNv201205 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByABNv201408 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByABNv201408Response|bool
     */
    public function SearchByABNv201408(\ABN\AbnServiceAPI\StructType\SearchByABNv201408 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByABNv202001 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByABNv202001Response|bool
     */
    public function SearchByABNv202001(\ABN\AbnServiceAPI\StructType\SearchByABNv202001 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByASICv200506 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByASICv200506Response|bool
     */
    public function SearchByASICv200506(\ABN\AbnServiceAPI\StructType\SearchByASICv200506 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByASICv201205 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByASICv201205Response|bool
     */
    public function SearchByASICv201205(\ABN\AbnServiceAPI\StructType\SearchByASICv201205 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByASICv201408 $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByASICv201408Response|bool
     */
    public function SearchByASICv201408(\ABN\AbnServiceAPI\StructType\SearchByASICv201408 $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByPostcode $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByPostcodeResponse|bool
     */
    public function SearchByPostcode(\ABN\AbnServiceAPI\StructType\SearchByPostcode $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByABNStatus $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByABNStatusResponse|bool
     */
    public function SearchByABNStatus(\ABN\AbnServiceAPI\StructType\SearchByABNStatus $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByRegistrationEvent $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByRegistrationEventResponse|bool
     */
    public function SearchByRegistrationEvent(\ABN\AbnServiceAPI\StructType\SearchByRegistrationEvent $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByUpdateEvent $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByUpdateEventResponse|bool
     */
    public function SearchByUpdateEvent(\ABN\AbnServiceAPI\StructType\SearchByUpdateEvent $parameters)
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
     * @param \ABN\AbnServiceAPI\StructType\SearchByCharity $parameters
     * @return \ABN\AbnServiceAPI\StructType\SearchByCharityResponse|bool
     */
    public function SearchByCharity(\ABN\AbnServiceAPI\StructType\SearchByCharity $parameters)
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
     * @return \ABN\AbnServiceAPI\StructType\SearchByABNStatusResponse|\ABN\AbnServiceAPI\StructType\SearchByABNv200506Response|\ABN\AbnServiceAPI\StructType\SearchByABNv200709Response|\ABN\AbnServiceAPI\StructType\SearchByABNv201205Response|\ABN\AbnServiceAPI\StructType\SearchByABNv201408Response|\ABN\AbnServiceAPI\StructType\SearchByABNv202001Response|\ABN\AbnServiceAPI\StructType\SearchByASICv200506Response|\ABN\AbnServiceAPI\StructType\SearchByASICv201205Response|\ABN\AbnServiceAPI\StructType\SearchByASICv201408Response|\ABN\AbnServiceAPI\StructType\SearchByCharityResponse|\ABN\AbnServiceAPI\StructType\SearchByPostcodeResponse|\ABN\AbnServiceAPI\StructType\SearchByRegistrationEventResponse|\ABN\AbnServiceAPI\StructType\SearchByUpdateEventResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
