<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStateListFromCityRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetStateListFromCityRequest extends AbstractStructBase
{
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The cityName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $cityName = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * Constructor method for GetStateListFromCityRequest
     * @uses GetStateListFromCityRequest::setZipCode()
     * @uses GetStateListFromCityRequest::setCityName()
     * @uses GetStateListFromCityRequest::setCountryCode()
     * @param string $zipCode
     * @param string $cityName
     * @param string $countryCode
     */
    public function __construct(?string $zipCode = null, ?string $cityName = null, ?string $countryCode = null)
    {
        $this
            ->setZipCode($zipCode)
            ->setCityName($cityName)
            ->setCountryCode($countryCode);
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Pggns\MidocoApi\Crm\StructType\GetStateListFromCityRequest
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get cityName value
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }
    /**
     * Set cityName value
     * @param string $cityName
     * @return \Pggns\MidocoApi\Crm\StructType\GetStateListFromCityRequest
     */
    public function setCityName(?string $cityName = null): self
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), gettype($cityName)), __LINE__);
        }
        $this->cityName = $cityName;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Crm\StructType\GetStateListFromCityRequest
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
}
