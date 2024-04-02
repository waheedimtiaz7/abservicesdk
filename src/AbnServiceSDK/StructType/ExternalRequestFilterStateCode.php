<?php

declare(strict_types=1);

namespace AbnServiceSDK\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRequestFilterStateCode StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalRequestFilterStateCode extends AbstractStructBase
{
    /**
     * The QLD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QLD = null;
    /**
     * The NT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NT = null;
    /**
     * The SA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SA = null;
    /**
     * The WA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WA = null;
    /**
     * The VIC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VIC = null;
    /**
     * The ACT
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ACT = null;
    /**
     * The TAS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TAS = null;
    /**
     * The NSW
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NSW = null;
    /**
     * Constructor method for ExternalRequestFilterStateCode
     * @uses ExternalRequestFilterStateCode::setQLD()
     * @uses ExternalRequestFilterStateCode::setNT()
     * @uses ExternalRequestFilterStateCode::setSA()
     * @uses ExternalRequestFilterStateCode::setWA()
     * @uses ExternalRequestFilterStateCode::setVIC()
     * @uses ExternalRequestFilterStateCode::setACT()
     * @uses ExternalRequestFilterStateCode::setTAS()
     * @uses ExternalRequestFilterStateCode::setNSW()
     * @param string $qLD
     * @param string $nT
     * @param string $sA
     * @param string $wA
     * @param string $vIC
     * @param string $aCT
     * @param string $tAS
     * @param string $nSW
     */
    public function __construct(?string $qLD = null, ?string $nT = null, ?string $sA = null, ?string $wA = null, ?string $vIC = null, ?string $aCT = null, ?string $tAS = null, ?string $nSW = null)
    {
        $this
            ->setQLD($qLD)
            ->setNT($nT)
            ->setSA($sA)
            ->setWA($wA)
            ->setVIC($vIC)
            ->setACT($aCT)
            ->setTAS($tAS)
            ->setNSW($nSW);
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
     * @return \AbnServiceSDK\StructType\ExternalRequestFilterStateCode
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
}
