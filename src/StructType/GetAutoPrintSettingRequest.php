<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoPrintSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAutoPrintSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoPrintSetting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAutoPrintSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting $MidocoAutoPrintSetting = null;
    /**
     * Constructor method for GetAutoPrintSettingRequest
     * @uses GetAutoPrintSettingRequest::setMidocoAutoPrintSetting()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting $midocoAutoPrintSetting
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting $midocoAutoPrintSetting = null)
    {
        $this
            ->setMidocoAutoPrintSetting($midocoAutoPrintSetting);
    }
    /**
     * Get MidocoAutoPrintSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting|null
     */
    public function getMidocoAutoPrintSetting(): ?\Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting
    {
        return $this->MidocoAutoPrintSetting;
    }
    /**
     * Set MidocoAutoPrintSetting value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting $midocoAutoPrintSetting
     * @return \Pggns\MidocoApi\Crm\StructType\GetAutoPrintSettingRequest
     */
    public function setMidocoAutoPrintSetting(?\Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting $midocoAutoPrintSetting = null): self
    {
        $this->MidocoAutoPrintSetting = $midocoAutoPrintSetting;
        
        return $this;
    }
}
