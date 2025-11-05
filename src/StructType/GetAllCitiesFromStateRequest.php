<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllCitiesFromStateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllCitiesFromStateRequest extends AbstractStructBase
{
    /**
     * The stateId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $stateId = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * Constructor method for GetAllCitiesFromStateRequest
     * @uses GetAllCitiesFromStateRequest::setStateId()
     * @uses GetAllCitiesFromStateRequest::setCountryCode()
     * @param string $stateId
     * @param string $countryCode
     */
    public function __construct(?string $stateId = null, ?string $countryCode = null)
    {
        $this
            ->setStateId($stateId)
            ->setCountryCode($countryCode);
    }
    /**
     * Get stateId value
     * @return string|null
     */
    public function getStateId(): ?string
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param string $stateId
     * @return \Pggns\MidocoApi\Crm\StructType\GetAllCitiesFromStateRequest
     */
    public function setStateId(?string $stateId = null): self
    {
        // validation for constraint: string
        if (!is_null($stateId) && !is_string($stateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateId, true), gettype($stateId)), __LINE__);
        }
        $this->stateId = $stateId;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAllCitiesFromStateRequest
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
