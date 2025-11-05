<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaxloungeUrlStringRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaxloungeUrlStringRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO
     */
    protected \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $MidocoCustomerId;
    /**
     * The url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for GetPaxloungeUrlStringRequest
     * @uses GetPaxloungeUrlStringRequest::setMidocoCustomerId()
     * @uses GetPaxloungeUrlStringRequest::setUrl()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @param string $url
     */
    public function __construct(\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId, ?string $url = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setUrl($url);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO
     */
    public function getMidocoCustomerId(): \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\GetPaxloungeUrlStringRequest
     */
    public function setMidocoCustomerId(\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Pggns\MidocoApi\Crm\StructType\GetPaxloungeUrlStringRequest
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
    }
}
