<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUmbrellaSettlementFeeDefinitionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the saved UmbrellaSettlementFeeDefinition
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUmbrellaSettlementFeeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementFeeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementFeeDefinition
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $MidocoUmbrellaSettlementFeeDefinition = null;
    /**
     * Constructor method for SaveUmbrellaSettlementFeeDefinitionResponse
     * @uses SaveUmbrellaSettlementFeeDefinitionResponse::setMidocoUmbrellaSettlementFeeDefinition()
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUmbrellaSettlementFeeDefinitionResponse
     */
    public function setMidocoUmbrellaSettlementFeeDefinition(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $midocoUmbrellaSettlementFeeDefinition = null): self
    {
        $this->MidocoUmbrellaSettlementFeeDefinition = $midocoUmbrellaSettlementFeeDefinition;
        
        return $this;
    }
}
