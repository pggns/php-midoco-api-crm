<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalCustomerInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveExternalCustomerInfoRequest extends AbstractStructBase
{
    /**
     * The ExternalCustomerInfo
     * Meta information extracted from the WSDL
     * - ref: ExternalCustomerInfo
     * @var \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $ExternalCustomerInfo = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveExternalCustomerInfoRequest
     * @uses SaveExternalCustomerInfoRequest::setExternalCustomerInfo()
     * @uses SaveExternalCustomerInfoRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo = null, ?int $internalVersion = null)
    {
        $this
            ->setExternalCustomerInfo($externalCustomerInfo)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get ExternalCustomerInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo|null
     */
    public function getExternalCustomerInfo(): ?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
    {
        return $this->ExternalCustomerInfo;
    }
    /**
     * Set ExternalCustomerInfo value
     * @param \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo
     * @return \Pggns\MidocoApi\Crm\StructType\SaveExternalCustomerInfoRequest
     */
    public function setExternalCustomerInfo(?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo = null): self
    {
        $this->ExternalCustomerInfo = $externalCustomerInfo;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\SaveExternalCustomerInfoRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
