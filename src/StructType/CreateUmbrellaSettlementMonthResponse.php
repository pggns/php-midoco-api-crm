<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUmbrellaSettlementMonthResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateUmbrellaSettlementMonthResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementMonth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementMonth
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth $MidocoUmbrellaSettlementMonth = null;
    /**
     * Constructor method for CreateUmbrellaSettlementMonthResponse
     * @uses CreateUmbrellaSettlementMonthResponse::setMidocoUmbrellaSettlementMonth()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth $midocoUmbrellaSettlementMonth
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth $midocoUmbrellaSettlementMonth = null)
    {
        $this
            ->setMidocoUmbrellaSettlementMonth($midocoUmbrellaSettlementMonth);
    }
    /**
     * Get MidocoUmbrellaSettlementMonth value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth|null
     */
    public function getMidocoUmbrellaSettlementMonth(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth
    {
        return $this->MidocoUmbrellaSettlementMonth;
    }
    /**
     * Set MidocoUmbrellaSettlementMonth value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth $midocoUmbrellaSettlementMonth
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementMonthResponse
     */
    public function setMidocoUmbrellaSettlementMonth(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth $midocoUmbrellaSettlementMonth = null): self
    {
        $this->MidocoUmbrellaSettlementMonth = $midocoUmbrellaSettlementMonth;
        
        return $this;
    }
}
