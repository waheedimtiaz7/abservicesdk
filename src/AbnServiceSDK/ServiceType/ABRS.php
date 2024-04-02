<?php

declare(strict_types=1);

namespace AbnServiceSDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for ABRS ServiceType
 * @subpackage Services
 */
class ABRS extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ABRSearchByABN
     * Meta information extracted from the WSDL
     * - documentation: Search By ABN e.g. 51835430479
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByABN $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByABNResponse|bool
     */
    public function ABRSearchByABN(\AbnServiceSDK\StructType\ABRSearchByABN $parameters)
    {
        try {
            $this->setResult($resultABRSearchByABN = $this->getSoapClient()->__soapCall('ABRSearchByABN', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByABN;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByASIC
     * Meta information extracted from the WSDL
     * - documentation: Search By ASIC number e.g. 080036693
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByASIC $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByASICResponse|bool
     */
    public function ABRSearchByASIC(\AbnServiceSDK\StructType\ABRSearchByASIC $parameters)
    {
        try {
            $this->setResult($resultABRSearchByASIC = $this->getSoapClient()->__soapCall('ABRSearchByASIC', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByASIC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByName
     * Meta information extracted from the WSDL
     * - documentation: Search By Name.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByName $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameResponse|bool
     */
    public function ABRSearchByName(\AbnServiceSDK\StructType\ABRSearchByName $parameters)
    {
        try {
            $this->setResult($resultABRSearchByName = $this->getSoapClient()->__soapCall('ABRSearchByName', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByNameAdvanced
     * Meta information extracted from the WSDL
     * - documentation: Advanced Search By Name - allows you to specify a search width and minimum score.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvanced $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvancedResponse|bool
     */
    public function ABRSearchByNameAdvanced(\AbnServiceSDK\StructType\ABRSearchByNameAdvanced $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvanced = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvanced', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvanced;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByNameAdvanced2006
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced but also allows you to set your own upper limit on the number of rows returned from the search (default is 200).
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2006 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2006Response|bool
     */
    public function ABRSearchByNameAdvanced2006(\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2006 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvanced2006 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvanced2006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvanced2006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByNameAdvanced2012
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced2006 but also allows you to filter by business names.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2012 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2012Response|bool
     */
    public function ABRSearchByNameAdvanced2012(\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2012 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvanced2012 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvanced2012', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvanced2012;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByNameAdvanced2017
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced2012 but also allows you to filter by Active ABNs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2017 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2017Response|bool
     */
    public function ABRSearchByNameAdvanced2017(\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2017 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvanced2017 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvanced2017', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvanced2017;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByNameAdvanced2023
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced2017 but without trading name.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2023 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2023Response|bool
     */
    public function ABRSearchByNameAdvanced2023(\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2023 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvanced2023 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvanced2023', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvanced2023;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ABRSearchByNameSimpleProtocol
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByName but allows you to call the method using http-get/post as well as SOAP.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocolResponse|bool
     */
    public function ABRSearchByNameSimpleProtocol(\AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameSimpleProtocol = $this->getSoapClient()->__soapCall('ABRSearchByNameSimpleProtocol', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameSimpleProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ABRSearchByNameAdvancedSimpleProtocol
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced but allows you to call the method using http-get/post as well as SOAP.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocolResponse|bool
     */
    public function ABRSearchByNameAdvancedSimpleProtocol(\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvancedSimpleProtocol = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvancedSimpleProtocol', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvancedSimpleProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ABRSearchByNameAdvancedSimpleProtocol2006
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced2006 but allows you to call the method using http-get/post as well as SOAP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2006 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2006Response|bool
     */
    public function ABRSearchByNameAdvancedSimpleProtocol2006(\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2006 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvancedSimpleProtocol2006 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvancedSimpleProtocol2006', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvancedSimpleProtocol2006;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ABRSearchByNameAdvancedSimpleProtocol2012
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced2012 but allows you to call the method using http-get/post as well as SOAP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2012 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2012Response|bool
     */
    public function ABRSearchByNameAdvancedSimpleProtocol2012(\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2012 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvancedSimpleProtocol2012 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvancedSimpleProtocol2012', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvancedSimpleProtocol2012;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ABRSearchByNameAdvancedSimpleProtocol2017
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced2012 but allows you to call the method using http-get/post as well as SOAP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2017 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2017Response|bool
     */
    public function ABRSearchByNameAdvancedSimpleProtocol2017(\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2017 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvancedSimpleProtocol2017 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvancedSimpleProtocol2017', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvancedSimpleProtocol2017;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ABRSearchByNameAdvancedSimpleProtocol2023
     * Meta information extracted from the WSDL
     * - documentation: Same as ABRSearchByNameAdvanced2017 but allows you to call the method using http-get/post as well as SOAP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2023 $parameters
     * @return \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2023Response|bool
     */
    public function ABRSearchByNameAdvancedSimpleProtocol2023(\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2023 $parameters)
    {
        try {
            $this->setResult($resultABRSearchByNameAdvancedSimpleProtocol2023 = $this->getSoapClient()->__soapCall('ABRSearchByNameAdvancedSimpleProtocol2023', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultABRSearchByNameAdvancedSimpleProtocol2023;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbnServiceSDK\StructType\ABRSearchByABNResponse|\AbnServiceSDK\StructType\ABRSearchByASICResponse|\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2006Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2012Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2017Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvanced2023Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvancedResponse|\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2006Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2012Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2017Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2023Response|\AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocolResponse|\AbnServiceSDK\StructType\ABRSearchByNameResponse|\AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocolResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
