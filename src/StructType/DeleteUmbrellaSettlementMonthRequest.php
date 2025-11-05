<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementMonthRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementMonthRequest extends AbstractStructBase
{
    /**
     * The settlementMonthID
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementMonthRequest
     * @uses DeleteUmbrellaSettlementMonthRequest::setSettlementMonthID()
     * @param int $settlementMonthID
     */
    public function __construct(?int $settlementMonthID = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID);
    }
    /**
     * Get settlementMonthID value
     * @return int|null
     */
    public function getSettlementMonthID(): ?int
    {
        return $this->settlementMonthID;
    }
    /**
     * Set settlementMonthID value
     * @param int $settlementMonthID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementMonthRequest
     */
    public function setSettlementMonthID(?int $settlementMonthID = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthID) && !(is_int($settlementMonthID) || ctype_digit($settlementMonthID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthID, true), gettype($settlementMonthID)), __LINE__);
        }
        $this->settlementMonthID = $settlementMonthID;
        
        return $this;
    }
}
