<?php

declare(strict_types=1);

namespace AbnServiceSDK\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Activity ServiceType
 * @subpackage Services
 */
class Activity extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ActivityReport
     * Meta information extracted from the WSDL
     * - documentation: Report number of searches for period.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbnServiceSDK\StructType\ActivityReport $parameters
     * @return \AbnServiceSDK\StructType\ActivityReportResponse|bool
     */
    public function ActivityReport(\AbnServiceSDK\StructType\ActivityReport $parameters)
    {
        try {
            $this->setResult($resultActivityReport = $this->getSoapClient()->__soapCall('ActivityReport', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultActivityReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbnServiceSDK\StructType\ActivityReportResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
