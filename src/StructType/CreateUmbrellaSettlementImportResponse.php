<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUmbrellaSettlementImportResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the fully populated MidocoUmbrellaSettlementImport.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateUmbrellaSettlementImportResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementImport
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementImport
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $MidocoUmbrellaSettlementImport = null;
    /**
     * Constructor method for CreateUmbrellaSettlementImportResponse
     * @uses CreateUmbrellaSettlementImportResponse::setMidocoUmbrellaSettlementImport()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $midocoUmbrellaSettlementImport
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $midocoUmbrellaSettlementImport = null)
    {
        $this
            ->setMidocoUmbrellaSettlementImport($midocoUmbrellaSettlementImport);
    }
    /**
     * Get MidocoUmbrellaSettlementImport value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport|null
     */
    public function getMidocoUmbrellaSettlementImport(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport
    {
        return $this->MidocoUmbrellaSettlementImport;
    }
    /**
     * Set MidocoUmbrellaSettlementImport value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $midocoUmbrellaSettlementImport
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportResponse
     */
    public function setMidocoUmbrellaSettlementImport(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $midocoUmbrellaSettlementImport = null): self
    {
        $this->MidocoUmbrellaSettlementImport = $midocoUmbrellaSettlementImport;
        
        return $this;
    }
}
