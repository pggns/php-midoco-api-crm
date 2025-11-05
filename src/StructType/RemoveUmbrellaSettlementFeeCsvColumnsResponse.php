<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveUmbrellaSettlementFeeCsvColumnsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the whole fee definition including all issues, after those that should be removed have been removed.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveUmbrellaSettlementFeeCsvColumnsResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementFeeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementFeeDefinition
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $MidocoUmbrellaSettlementFeeDefinition = null;
    /**
     * Constructor method for RemoveUmbrellaSettlementFeeCsvColumnsResponse
     * @uses RemoveUmbrellaSettlementFeeCsvColumnsResponse::setMidocoUmbrellaSettlementFeeDefinition()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $midocoUmbrellaSettlementFeeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $midocoUmbrellaSettlementFeeDefinition = null)
    {
        $this
            ->setMidocoUmbrellaSettlementFeeDefinition($midocoUmbrellaSettlementFeeDefinition);
    }
    /**
     * Get MidocoUmbrellaSettlementFeeDefinition value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition|null
     */
    public function getMidocoUmbrellaSettlementFeeDefinition(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
    {
        return $this->MidocoUmbrellaSettlementFeeDefinition;
    }
    /**
     * Set MidocoUmbrellaSettlementFeeDefinition value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $midocoUmbrellaSettlementFeeDefinition
     * @return \Pggns\MidocoApi\Crm\StructType\RemoveUmbrellaSettlementFeeCsvColumnsResponse
     */
    public function setMidocoUmbrellaSettlementFeeDefinition(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $midocoUmbrellaSettlementFeeDefinition = null): self
    {
        $this->MidocoUmbrellaSettlementFeeDefinition = $midocoUmbrellaSettlementFeeDefinition;
        
        return $this;
    }
}
