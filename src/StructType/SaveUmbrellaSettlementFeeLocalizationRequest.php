<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUmbrellaSettlementFeeLocalizationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Save an UmbrellaSettlementFeeLocalization<br> Only the following attributes of the request are used: feeDefinitionId, locale, title, description.<br> The attributes created, createdBy, modified and modifiedBy are managed internally.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUmbrellaSettlementFeeLocalizationRequest extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementFeeLocalization
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementFeeLocalization
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $MidocoUmbrellaSettlementFeeLocalization = null;
    /**
     * Constructor method for SaveUmbrellaSettlementFeeLocalizationRequest
     * @uses SaveUmbrellaSettlementFeeLocalizationRequest::setMidocoUmbrellaSettlementFeeLocalization()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $midocoUmbrellaSettlementFeeLocalization
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $midocoUmbrellaSettlementFeeLocalization = null)
    {
        $this
            ->setMidocoUmbrellaSettlementFeeLocalization($midocoUmbrellaSettlementFeeLocalization);
    }
    /**
     * Get MidocoUmbrellaSettlementFeeLocalization value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO|null
     */
    public function getMidocoUmbrellaSettlementFeeLocalization(): ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO
    {
        return $this->MidocoUmbrellaSettlementFeeLocalization;
    }
    /**
     * Set MidocoUmbrellaSettlementFeeLocalization value
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $midocoUmbrellaSettlementFeeLocalization
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUmbrellaSettlementFeeLocalizationRequest
     */
    public function setMidocoUmbrellaSettlementFeeLocalization(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $midocoUmbrellaSettlementFeeLocalization = null): self
    {
        $this->MidocoUmbrellaSettlementFeeLocalization = $midocoUmbrellaSettlementFeeLocalization;
        
        return $this;
    }
}
