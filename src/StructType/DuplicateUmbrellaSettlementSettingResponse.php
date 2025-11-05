<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateUmbrellaSettlementSettingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DuplicateUmbrellaSettlementSettingResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $MidocoUmbrellaSettlementSetting = null;
    /**
     * Constructor method for DuplicateUmbrellaSettlementSettingResponse
     * @uses DuplicateUmbrellaSettlementSettingResponse::setMidocoUmbrellaSettlementSetting()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting = null)
    {
        $this
            ->setMidocoUmbrellaSettlementSetting($midocoUmbrellaSettlementSetting);
    }
    /**
     * Get MidocoUmbrellaSettlementSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting|null
     */
    public function getMidocoUmbrellaSettlementSetting(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
    {
        return $this->MidocoUmbrellaSettlementSetting;
    }
    /**
     * Set MidocoUmbrellaSettlementSetting value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting
     * @return \Pggns\MidocoApi\Crm\StructType\DuplicateUmbrellaSettlementSettingResponse
     */
    public function setMidocoUmbrellaSettlementSetting(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting = null): self
    {
        $this->MidocoUmbrellaSettlementSetting = $midocoUmbrellaSettlementSetting;
        
        return $this;
    }
}
