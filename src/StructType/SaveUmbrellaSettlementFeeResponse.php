<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUmbrellaSettlementFeeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUmbrellaSettlementFeeResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementFee
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementFee
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $MidocoUmbrellaSettlementFee = null;
    /**
     * Constructor method for SaveUmbrellaSettlementFeeResponse
     * @uses SaveUmbrellaSettlementFeeResponse::setMidocoUmbrellaSettlementFee()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $midocoUmbrellaSettlementFee
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $midocoUmbrellaSettlementFee = null)
    {
        $this
            ->setMidocoUmbrellaSettlementFee($midocoUmbrellaSettlementFee);
    }
    /**
     * Get MidocoUmbrellaSettlementFee value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee|null
     */
    public function getMidocoUmbrellaSettlementFee(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee
    {
        return $this->MidocoUmbrellaSettlementFee;
    }
    /**
     * Set MidocoUmbrellaSettlementFee value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $midocoUmbrellaSettlementFee
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUmbrellaSettlementFeeResponse
     */
    public function setMidocoUmbrellaSettlementFee(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $midocoUmbrellaSettlementFee = null): self
    {
        $this->MidocoUmbrellaSettlementFee = $midocoUmbrellaSettlementFee;
        
        return $this;
    }
}
