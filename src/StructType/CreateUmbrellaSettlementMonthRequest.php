<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUmbrellaSettlementMonthRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateUmbrellaSettlementMonthRequest extends AbstractStructBase
{
    /**
     * The UmbrellaSettlementDate
     * Meta information extracted from the WSDL
     * - ref: UmbrellaSettlementDate
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $UmbrellaSettlementDate = null;
    /**
     * Constructor method for CreateUmbrellaSettlementMonthRequest
     * @uses CreateUmbrellaSettlementMonthRequest::setUmbrellaSettlementDate()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null)
    {
        $this
            ->setUmbrellaSettlementDate($umbrellaSettlementDate);
    }
    /**
     * Get UmbrellaSettlementDate value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate|null
     */
    public function getUmbrellaSettlementDate(): ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate
    {
        return $this->UmbrellaSettlementDate;
    }
    /**
     * Set UmbrellaSettlementDate value
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementMonthRequest
     */
    public function setUmbrellaSettlementDate(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null): self
    {
        $this->UmbrellaSettlementDate = $umbrellaSettlementDate;
        
        return $this;
    }
}
