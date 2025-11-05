<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementFeeCsvColumnID StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementFeeCsvColumnID extends AbstractStructBase
{
    /**
     * The FeeDefinitionID
     * @var int|null
     */
    protected ?int $FeeDefinitionID = null;
    /**
     * The ColumnName
     * @var string|null
     */
    protected ?string $ColumnName = null;
    /**
     * Constructor method for UmbrellaSettlementFeeCsvColumnID
     * @uses UmbrellaSettlementFeeCsvColumnID::setFeeDefinitionID()
     * @uses UmbrellaSettlementFeeCsvColumnID::setColumnName()
     * @param int $feeDefinitionID
     * @param string $columnName
     */
    public function __construct(?int $feeDefinitionID = null, ?string $columnName = null)
    {
        $this
            ->setFeeDefinitionID($feeDefinitionID)
            ->setColumnName($columnName);
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
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID
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
    /**
     * Get ColumnName value
     * @return string|null
     */
    public function getColumnName(): ?string
    {
        return $this->ColumnName;
    }
    /**
     * Set ColumnName value
     * @param string $columnName
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID
     */
    public function setColumnName(?string $columnName = null): self
    {
        // validation for constraint: string
        if (!is_null($columnName) && !is_string($columnName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($columnName, true), gettype($columnName)), __LINE__);
        }
        $this->ColumnName = $columnName;
        
        return $this;
    }
}
