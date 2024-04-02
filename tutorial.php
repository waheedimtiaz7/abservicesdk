<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://abr.business.gov.au//abrxmlsearch/AbrXmlSearch.asmx?WSDL',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://abr.business.gov.au//abrxmlsearch/AbrXmlSearch.asmx?WSDL',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \AbnServiceSDK\ClassMap::get(),
];
/**
 * Samples for ABRS ServiceType
 */
$aBRS = new \AbnServiceSDK\ServiceType\ABRS($options);
/**
 * Sample call for ABRSearchByABN operation/method
 */
if ($aBRS->ABRSearchByABN(new \AbnServiceSDK\StructType\ABRSearchByABN()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByASIC operation/method
 */
if ($aBRS->ABRSearchByASIC(new \AbnServiceSDK\StructType\ABRSearchByASIC()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByName operation/method
 */
if ($aBRS->ABRSearchByName(new \AbnServiceSDK\StructType\ABRSearchByName()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvanced operation/method
 */
if ($aBRS->ABRSearchByNameAdvanced(new \AbnServiceSDK\StructType\ABRSearchByNameAdvanced()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvanced2006 operation/method
 */
if ($aBRS->ABRSearchByNameAdvanced2006(new \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2006()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvanced2012 operation/method
 */
if ($aBRS->ABRSearchByNameAdvanced2012(new \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2012()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvanced2017 operation/method
 */
if ($aBRS->ABRSearchByNameAdvanced2017(new \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2017()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvanced2023 operation/method
 */
if ($aBRS->ABRSearchByNameAdvanced2023(new \AbnServiceSDK\StructType\ABRSearchByNameAdvanced2023()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameSimpleProtocol operation/method
 */
if ($aBRS->ABRSearchByNameSimpleProtocol(new \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvancedSimpleProtocol operation/method
 */
if ($aBRS->ABRSearchByNameAdvancedSimpleProtocol(new \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvancedSimpleProtocol2006 operation/method
 */
if ($aBRS->ABRSearchByNameAdvancedSimpleProtocol2006(new \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2006()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvancedSimpleProtocol2012 operation/method
 */
if ($aBRS->ABRSearchByNameAdvancedSimpleProtocol2012(new \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2012()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvancedSimpleProtocol2017 operation/method
 */
if ($aBRS->ABRSearchByNameAdvancedSimpleProtocol2017(new \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2017()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Sample call for ABRSearchByNameAdvancedSimpleProtocol2023 operation/method
 */
if ($aBRS->ABRSearchByNameAdvancedSimpleProtocol2023(new \AbnServiceSDK\StructType\ABRSearchByNameAdvancedSimpleProtocol2023()) !== false) {
    print_r($aBRS->getResult());
} else {
    print_r($aBRS->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \AbnServiceSDK\ServiceType\Search($options);
/**
 * Sample call for SearchByABNv200506 operation/method
 */
if ($search->SearchByABNv200506(new \AbnServiceSDK\StructType\SearchByABNv200506()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByABNv200709 operation/method
 */
if ($search->SearchByABNv200709(new \AbnServiceSDK\StructType\SearchByABNv200709()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByABNv201205 operation/method
 */
if ($search->SearchByABNv201205(new \AbnServiceSDK\StructType\SearchByABNv201205()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByABNv201408 operation/method
 */
if ($search->SearchByABNv201408(new \AbnServiceSDK\StructType\SearchByABNv201408()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByABNv202001 operation/method
 */
if ($search->SearchByABNv202001(new \AbnServiceSDK\StructType\SearchByABNv202001()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByASICv200506 operation/method
 */
if ($search->SearchByASICv200506(new \AbnServiceSDK\StructType\SearchByASICv200506()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByASICv201205 operation/method
 */
if ($search->SearchByASICv201205(new \AbnServiceSDK\StructType\SearchByASICv201205()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByASICv201408 operation/method
 */
if ($search->SearchByASICv201408(new \AbnServiceSDK\StructType\SearchByASICv201408()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByPostcode operation/method
 */
if ($search->SearchByPostcode(new \AbnServiceSDK\StructType\SearchByPostcode()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByABNStatus operation/method
 */
if ($search->SearchByABNStatus(new \AbnServiceSDK\StructType\SearchByABNStatus()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByRegistrationEvent operation/method
 */
if ($search->SearchByRegistrationEvent(new \AbnServiceSDK\StructType\SearchByRegistrationEvent()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByUpdateEvent operation/method
 */
if ($search->SearchByUpdateEvent(new \AbnServiceSDK\StructType\SearchByUpdateEvent()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for SearchByCharity operation/method
 */
if ($search->SearchByCharity(new \AbnServiceSDK\StructType\SearchByCharity()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Activity ServiceType
 */
$activity = new \AbnServiceSDK\ServiceType\Activity($options);
/**
 * Sample call for ActivityReport operation/method
 */
if ($activity->ActivityReport(new \AbnServiceSDK\StructType\ActivityReport()) !== false) {
    print_r($activity->getResult());
} else {
    print_r($activity->getLastError());
}
