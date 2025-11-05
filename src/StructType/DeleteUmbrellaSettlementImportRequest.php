<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementImportRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Delete a file that was imported for an UmbrellaSettlementMonth.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementImportRequest extends AbstractStructBase
{
    /**
     * The settlementMonthID
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
    /**
     * The importID
     * @var int|null
     */
    protected ?int $importID = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementImportRequest
     * @uses DeleteUmbrellaSettlementImportRequest::setSettlementMonthID()
     * @uses DeleteUmbrellaSettlementImportRequest::setImportID()
     * @param int $settlementMonthID
     * @param int $importID
     */
    public function __construct(?int $settlementMonthID = null, ?int $importID = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setImportID($importID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementImportRequest
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
    /**
     * Get importID value
     * @return int|null
     */
    public function getImportID(): ?int
    {
        return $this->importID;
    }
    /**
     * Set importID value
     * @param int $importID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementImportRequest
     */
    public function setImportID(?int $importID = null): self
    {
        // validation for constraint: int
        if (!is_null($importID) && !(is_int($importID) || ctype_digit($importID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importID, true), gettype($importID)), __LINE__);
        }
        $this->importID = $importID;
        
        return $this;
    }
}
