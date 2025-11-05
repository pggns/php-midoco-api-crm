<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUmbrellaSettlementFeeDefinitionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Save an UmbrellaSettlementFeeDefinition, but not the localizations and CSV columns.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUmbrellaSettlementFeeDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementFeeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementFeeDefinition
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $MidocoUmbrellaSettlementFeeDefinition = null;
    /**
     * Constructor method for SaveUmbrellaSettlementFeeDefinitionRequest
     * @uses SaveUmbrellaSettlementFeeDefinitionRequest::setMidocoUmbrellaSettlementFeeDefinition()
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUmbrellaSettlementFeeDefinitionRequest
     */
    public function setMidocoUmbrellaSettlementFeeDefinition(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $midocoUmbrellaSettlementFeeDefinition = null): self
    {
        $this->MidocoUmbrellaSettlementFeeDefinition = $midocoUmbrellaSettlementFeeDefinition;
        
        return $this;
    }
}
