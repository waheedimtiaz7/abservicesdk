<?php

declare(strict_types=1);

namespace ABN\AbnServiceAPI\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ABRSearchByNameAdvancedSimpleProtocol2012 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ABRSearchByNameAdvancedSimpleProtocol2012 extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The postcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postcode = null;
    /**
     * The legalName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $legalName = null;
    /**
     * The tradingName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tradingName = null;
    /**
     * The businessName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $businessName = null;
    /**
     * The NSW
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NSW = null;
    /**
     * The SA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SA = null;
    /**
     * The ACT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ACT = null;
    /**
     * The VIC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VIC = null;
    /**
     * The WA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WA = null;
    /**
     * The NT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NT = null;
    /**
     * The QLD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QLD = null;
    /**
     * The TAS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TAS = null;
    /**
     * The authenticationGuid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authenticationGuid = null;
    /**
     * The searchWidth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $searchWidth = null;
    /**
     * The minimumScore
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $minimumScore = null;
    /**
     * The maxSearchResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxSearchResults = null;
    /**
     * Constructor method for ABRSearchByNameAdvancedSimpleProtocol2012
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setName()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setPostcode()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setLegalName()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setTradingName()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setBusinessName()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setNSW()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setSA()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setACT()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setVIC()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setWA()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setNT()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setQLD()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setTAS()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setAuthenticationGuid()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setSearchWidth()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setMinimumScore()
     * @uses ABRSearchByNameAdvancedSimpleProtocol2012::setMaxSearchResults()
     * @param string $name
     * @param string $postcode
     * @param string $legalName
     * @param string $tradingName
     * @param string $businessName
     * @param string $nSW
     * @param string $sA
     * @param string $aCT
     * @param string $vIC
     * @param string $wA
     * @param string $nT
     * @param string $qLD
     * @param string $tAS
     * @param string $authenticationGuid
     * @param string $searchWidth
     * @param string $minimumScore
     * @param string $maxSearchResults
     */
    public function __construct(?string $name = null, ?string $postcode = null, ?string $legalName = null, ?string $tradingName = null, ?string $businessName = null, ?string $nSW = null, ?string $sA = null, ?string $aCT = null, ?string $vIC = null, ?string $wA = null, ?string $nT = null, ?string $qLD = null, ?string $tAS = null, ?string $authenticationGuid = null, ?string $searchWidth = null, ?string $minimumScore = null, ?string $maxSearchResults = null)
    {
        $this
            ->setName($name)
            ->setPostcode($postcode)
            ->setLegalName($legalName)
            ->setTradingName($tradingName)
            ->setBusinessName($businessName)
            ->setNSW($nSW)
            ->setSA($sA)
            ->setACT($aCT)
            ->setVIC($vIC)
            ->setWA($wA)
            ->setNT($nT)
            ->setQLD($qLD)
            ->setTAS($tAS)
            ->setAuthenticationGuid($authenticationGuid)
            ->setSearchWidth($searchWidth)
            ->setMinimumScore($minimumScore)
            ->setMaxSearchResults($maxSearchResults);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setPostcode(?string $postcode = null): self
    {
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postcode, true), gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        
        return $this;
    }
    /**
     * Get legalName value
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }
    /**
     * Set legalName value
     * @param string $legalName
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setLegalName(?string $legalName = null): self
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalName, true), gettype($legalName)), __LINE__);
        }
        $this->legalName = $legalName;
        
        return $this;
    }
    /**
     * Get tradingName value
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->tradingName;
    }
    /**
     * Set tradingName value
     * @param string $tradingName
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setTradingName(?string $tradingName = null): self
    {
        // validation for constraint: string
        if (!is_null($tradingName) && !is_string($tradingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradingName, true), gettype($tradingName)), __LINE__);
        }
        $this->tradingName = $tradingName;
        
        return $this;
    }
    /**
     * Get businessName value
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }
    /**
     * Set businessName value
     * @param string $businessName
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setBusinessName(?string $businessName = null): self
    {
        // validation for constraint: string
        if (!is_null($businessName) && !is_string($businessName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessName, true), gettype($businessName)), __LINE__);
        }
        $this->businessName = $businessName;
        
        return $this;
    }
    /**
     * Get NSW value
     * @return string|null
     */
    public function getNSW(): ?string
    {
        return $this->NSW;
    }
    /**
     * Set NSW value
     * @param string $nSW
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setNSW(?string $nSW = null): self
    {
        // validation for constraint: string
        if (!is_null($nSW) && !is_string($nSW)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nSW, true), gettype($nSW)), __LINE__);
        }
        $this->NSW = $nSW;
        
        return $this;
    }
    /**
     * Get SA value
     * @return string|null
     */
    public function getSA(): ?string
    {
        return $this->SA;
    }
    /**
     * Set SA value
     * @param string $sA
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setSA(?string $sA = null): self
    {
        // validation for constraint: string
        if (!is_null($sA) && !is_string($sA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sA, true), gettype($sA)), __LINE__);
        }
        $this->SA = $sA;
        
        return $this;
    }
    /**
     * Get ACT value
     * @return string|null
     */
    public function getACT(): ?string
    {
        return $this->ACT;
    }
    /**
     * Set ACT value
     * @param string $aCT
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setACT(?string $aCT = null): self
    {
        // validation for constraint: string
        if (!is_null($aCT) && !is_string($aCT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aCT, true), gettype($aCT)), __LINE__);
        }
        $this->ACT = $aCT;
        
        return $this;
    }
    /**
     * Get VIC value
     * @return string|null
     */
    public function getVIC(): ?string
    {
        return $this->VIC;
    }
    /**
     * Set VIC value
     * @param string $vIC
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setVIC(?string $vIC = null): self
    {
        // validation for constraint: string
        if (!is_null($vIC) && !is_string($vIC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vIC, true), gettype($vIC)), __LINE__);
        }
        $this->VIC = $vIC;
        
        return $this;
    }
    /**
     * Get WA value
     * @return string|null
     */
    public function getWA(): ?string
    {
        return $this->WA;
    }
    /**
     * Set WA value
     * @param string $wA
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setWA(?string $wA = null): self
    {
        // validation for constraint: string
        if (!is_null($wA) && !is_string($wA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wA, true), gettype($wA)), __LINE__);
        }
        $this->WA = $wA;
        
        return $this;
    }
    /**
     * Get NT value
     * @return string|null
     */
    public function getNT(): ?string
    {
        return $this->NT;
    }
    /**
     * Set NT value
     * @param string $nT
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setNT(?string $nT = null): self
    {
        // validation for constraint: string
        if (!is_null($nT) && !is_string($nT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nT, true), gettype($nT)), __LINE__);
        }
        $this->NT = $nT;
        
        return $this;
    }
    /**
     * Get QLD value
     * @return string|null
     */
    public function getQLD(): ?string
    {
        return $this->QLD;
    }
    /**
     * Set QLD value
     * @param string $qLD
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setQLD(?string $qLD = null): self
    {
        // validation for constraint: string
        if (!is_null($qLD) && !is_string($qLD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qLD, true), gettype($qLD)), __LINE__);
        }
        $this->QLD = $qLD;
        
        return $this;
    }
    /**
     * Get TAS value
     * @return string|null
     */
    public function getTAS(): ?string
    {
        return $this->TAS;
    }
    /**
     * Set TAS value
     * @param string $tAS
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setTAS(?string $tAS = null): self
    {
        // validation for constraint: string
        if (!is_null($tAS) && !is_string($tAS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tAS, true), gettype($tAS)), __LINE__);
        }
        $this->TAS = $tAS;
        
        return $this;
    }
    /**
     * Get authenticationGuid value
     * @return string|null
     */
    public function getAuthenticationGuid(): ?string
    {
        return $this->authenticationGuid;
    }
    /**
     * Set authenticationGuid value
     * @param string $authenticationGuid
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setAuthenticationGuid(?string $authenticationGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($authenticationGuid) && !is_string($authenticationGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationGuid, true), gettype($authenticationGuid)), __LINE__);
        }
        $this->authenticationGuid = $authenticationGuid;
        
        return $this;
    }
    /**
     * Get searchWidth value
     * @return string|null
     */
    public function getSearchWidth(): ?string
    {
        return $this->searchWidth;
    }
    /**
     * Set searchWidth value
     * @param string $searchWidth
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setSearchWidth(?string $searchWidth = null): self
    {
        // validation for constraint: string
        if (!is_null($searchWidth) && !is_string($searchWidth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchWidth, true), gettype($searchWidth)), __LINE__);
        }
        $this->searchWidth = $searchWidth;
        
        return $this;
    }
    /**
     * Get minimumScore value
     * @return string|null
     */
    public function getMinimumScore(): ?string
    {
        return $this->minimumScore;
    }
    /**
     * Set minimumScore value
     * @param string $minimumScore
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setMinimumScore(?string $minimumScore = null): self
    {
        // validation for constraint: string
        if (!is_null($minimumScore) && !is_string($minimumScore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minimumScore, true), gettype($minimumScore)), __LINE__);
        }
        $this->minimumScore = $minimumScore;
        
        return $this;
    }
    /**
     * Get maxSearchResults value
     * @return string|null
     */
    public function getMaxSearchResults(): ?string
    {
        return $this->maxSearchResults;
    }
    /**
     * Set maxSearchResults value
     * @param string $maxSearchResults
     * @return \ABN\AbnServiceAPI\StructType\ABRSearchByNameAdvancedSimpleProtocol2012
     */
    public function setMaxSearchResults(?string $maxSearchResults = null): self
    {
        // validation for constraint: string
        if (!is_null($maxSearchResults) && !is_string($maxSearchResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxSearchResults, true), gettype($maxSearchResults)), __LINE__);
        }
        $this->maxSearchResults = $maxSearchResults;
        
        return $this;
    }
}
