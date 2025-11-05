<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCountryStateListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCountryStateListRequest extends AbstractStructBase
{
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * Constructor method for GetCountryStateListRequest
     * @uses GetCountryStateListRequest::setCountryCode()
     * @param string $countryCode
     */
    public function __construct(?string $countryCode = null)
    {
        $this
            ->setCountryCode($countryCode);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetCountryStateListRequest
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
