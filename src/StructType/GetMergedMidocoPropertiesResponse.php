<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedMidocoPropertiesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMergedMidocoPropertiesResponse extends AbstractStructBase
{
    /**
     * The MidocoProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoProperties
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoProperties|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoProperties $MidocoProperties = null;
    /**
     * Constructor method for GetMergedMidocoPropertiesResponse
     * @uses GetMergedMidocoPropertiesResponse::setMidocoProperties()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoProperties $midocoProperties
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoProperties $midocoProperties = null)
    {
        $this
            ->setMidocoProperties($midocoProperties);
    }
    /**
     * Get MidocoProperties value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoProperties|null
     */
    public function getMidocoProperties(): ?\Pggns\MidocoApi\Crm\StructType\MidocoProperties
    {
        return $this->MidocoProperties;
    }
    /**
     * Set MidocoProperties value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoProperties $midocoProperties
     * @return \Pggns\MidocoApi\Crm\StructType\GetMergedMidocoPropertiesResponse
     */
    public function setMidocoProperties(?\Pggns\MidocoApi\Crm\StructType\MidocoProperties $midocoProperties = null): self
    {
        $this->MidocoProperties = $midocoProperties;
        
        return $this;
    }
}
