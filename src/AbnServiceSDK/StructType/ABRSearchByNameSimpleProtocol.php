<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ABRSearchByNameSimpleProtocol StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ABRSearchByNameSimpleProtocol extends AbstractStructBase
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
     * Constructor method for ABRSearchByNameSimpleProtocol
     * @uses ABRSearchByNameSimpleProtocol::setName()
     * @uses ABRSearchByNameSimpleProtocol::setPostcode()
     * @uses ABRSearchByNameSimpleProtocol::setLegalName()
     * @uses ABRSearchByNameSimpleProtocol::setTradingName()
     * @uses ABRSearchByNameSimpleProtocol::setNSW()
     * @uses ABRSearchByNameSimpleProtocol::setSA()
     * @uses ABRSearchByNameSimpleProtocol::setACT()
     * @uses ABRSearchByNameSimpleProtocol::setVIC()
     * @uses ABRSearchByNameSimpleProtocol::setWA()
     * @uses ABRSearchByNameSimpleProtocol::setNT()
     * @uses ABRSearchByNameSimpleProtocol::setQLD()
     * @uses ABRSearchByNameSimpleProtocol::setTAS()
     * @uses ABRSearchByNameSimpleProtocol::setAuthenticationGuid()
     * @param string $name
     * @param string $postcode
     * @param string $legalName
     * @param string $tradingName
     * @param string $nSW
     * @param string $sA
     * @param string $aCT
     * @param string $vIC
     * @param string $wA
     * @param string $nT
     * @param string $qLD
     * @param string $tAS
     * @param string $authenticationGuid
     */
    public function __construct(?string $name = null, ?string $postcode = null, ?string $legalName = null, ?string $tradingName = null, ?string $nSW = null, ?string $sA = null, ?string $aCT = null, ?string $vIC = null, ?string $wA = null, ?string $nT = null, ?string $qLD = null, ?string $tAS = null, ?string $authenticationGuid = null)
    {
        $this
            ->setName($name)
            ->setPostcode($postcode)
            ->setLegalName($legalName)
            ->setTradingName($tradingName)
            ->setNSW($nSW)
            ->setSA($sA)
            ->setACT($aCT)
            ->setVIC($vIC)
            ->setWA($wA)
            ->setNT($nT)
            ->setQLD($qLD)
            ->setTAS($tAS)
            ->setAuthenticationGuid($authenticationGuid);
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
     * @return \AbnServiceSDK\StructType\ABRSearchByNameSimpleProtocol
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
}
