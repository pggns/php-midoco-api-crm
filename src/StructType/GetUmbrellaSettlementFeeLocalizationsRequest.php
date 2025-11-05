<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementFeeLocalizationsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieve all localizations for an UmbrellaSettlementFeeDefinition.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementFeeLocalizationsRequest extends AbstractStructBase
{
    /**
     * The FeeDefinitionID
     * @var int|null
     */
    protected ?int $FeeDefinitionID = null;
    /**
     * Constructor method for GetUmbrellaSettlementFeeLocalizationsRequest
     * @uses GetUmbrellaSettlementFeeLocalizationsRequest::setFeeDefinitionID()
     * @param int $feeDefinitionID
     */
    public function __construct(?int $feeDefinitionID = null)
    {
        $this
            ->setFeeDefinitionID($feeDefinitionID);
    }
    /**
     * Get FeeDefinitionID value
     * @return int|null
     */
    public function getFeeDefinitionID(): ?int
    {
        return $this->FeeDefinitionID;
    }
    /**
     * Set FeeDefinitionID value
     * @param int $feeDefinitionID
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementFeeLocalizationsRequest
     */
    public function setFeeDefinitionID(?int $feeDefinitionID = null): self
    {
        // validation for constraint: int
        if (!is_null($feeDefinitionID) && !(is_int($feeDefinitionID) || ctype_digit($feeDefinitionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeDefinitionID, true), gettype($feeDefinitionID)), __LINE__);
        }
        $this->FeeDefinitionID = $feeDefinitionID;
        
        return $this;
    }
}
