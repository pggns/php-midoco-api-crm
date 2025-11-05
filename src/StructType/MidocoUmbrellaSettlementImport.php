<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementImport StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementImport extends UmbrellaSettlementImportDTO
{
    /**
     * The MidocoUmbrellaSettlementImportColumn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementImportColumn
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO[]
     */
    protected ?array $MidocoUmbrellaSettlementImportColumn = null;
    /**
     * The MidocoUmbrellaSettlementImportLine
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementImportLine
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine[]
     */
    protected ?array $MidocoUmbrellaSettlementImportLine = null;
    /**
     * The totalRows
     * @var int|null
     */
    protected ?int $totalRows = null;
    /**
     * The totalColumns
     * @var int|null
     */
    protected ?int $totalColumns = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementImport
     * @uses MidocoUmbrellaSettlementImport::setMidocoUmbrellaSettlementImportColumn()
     * @uses MidocoUmbrellaSettlementImport::setMidocoUmbrellaSettlementImportLine()
     * @uses MidocoUmbrellaSettlementImport::setTotalRows()
     * @uses MidocoUmbrellaSettlementImport::setTotalColumns()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO[] $midocoUmbrellaSettlementImportColumn
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine[] $midocoUmbrellaSettlementImportLine
     * @param int $totalRows
     * @param int $totalColumns
     */
    public function __construct(?array $midocoUmbrellaSettlementImportColumn = null, ?array $midocoUmbrellaSettlementImportLine = null, ?int $totalRows = null, ?int $totalColumns = null)
    {
        $this
            ->setMidocoUmbrellaSettlementImportColumn($midocoUmbrellaSettlementImportColumn)
            ->setMidocoUmbrellaSettlementImportLine($midocoUmbrellaSettlementImportLine)
            ->setTotalRows($totalRows)
            ->setTotalColumns($totalColumns);
    }
    /**
     * Get MidocoUmbrellaSettlementImportColumn value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO[]
     */
    public function getMidocoUmbrellaSettlementImportColumn(): ?array
    {
        return $this->MidocoUmbrellaSettlementImportColumn;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementImportColumn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementImportColumn method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementImportColumnForArrayConstraintFromSetMidocoUmbrellaSettlementImportColumn(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportColumnItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportColumnItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportColumnItem) ? get_class($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportColumnItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportColumnItem), var_export($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportColumnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementImportColumn property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementImportColumn value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO[] $midocoUmbrellaSettlementImportColumn
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport
     */
    public function setMidocoUmbrellaSettlementImportColumn(?array $midocoUmbrellaSettlementImportColumn = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementImportColumnArrayErrorMessage = self::validateMidocoUmbrellaSettlementImportColumnForArrayConstraintFromSetMidocoUmbrellaSettlementImportColumn($midocoUmbrellaSettlementImportColumn))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementImportColumnArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementImportColumn = $midocoUmbrellaSettlementImportColumn;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementImportColumn value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport
     */
    public function addToMidocoUmbrellaSettlementImportColumn(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementImportColumn property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementImportColumn[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaSettlementImportLine value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine[]
     */
    public function getMidocoUmbrellaSettlementImportLine(): ?array
    {
        return $this->MidocoUmbrellaSettlementImportLine;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementImportLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementImportLine method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementImportLineForArrayConstraintFromSetMidocoUmbrellaSettlementImportLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportLineItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportLineItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportLineItem) ? get_class($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportLineItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportLineItem), var_export($midocoUmbrellaSettlementImportMidocoUmbrellaSettlementImportLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementImportLine property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementImportLine value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine[] $midocoUmbrellaSettlementImportLine
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport
     */
    public function setMidocoUmbrellaSettlementImportLine(?array $midocoUmbrellaSettlementImportLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementImportLineArrayErrorMessage = self::validateMidocoUmbrellaSettlementImportLineForArrayConstraintFromSetMidocoUmbrellaSettlementImportLine($midocoUmbrellaSettlementImportLine))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementImportLineArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementImportLine = $midocoUmbrellaSettlementImportLine;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementImportLine value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport
     */
    public function addToMidocoUmbrellaSettlementImportLine(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementImportLine property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementImportLine[] = $item;
        
        return $this;
    }
    /**
     * Get totalRows value
     * @return int|null
     */
    public function getTotalRows(): ?int
    {
        return $this->totalRows;
    }
    /**
     * Set totalRows value
     * @param int $totalRows
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport
     */
    public function setTotalRows(?int $totalRows = null): self
    {
        // validation for constraint: int
        if (!is_null($totalRows) && !(is_int($totalRows) || ctype_digit($totalRows))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRows, true), gettype($totalRows)), __LINE__);
        }
        $this->totalRows = $totalRows;
        
        return $this;
    }
    /**
     * Get totalColumns value
     * @return int|null
     */
    public function getTotalColumns(): ?int
    {
        return $this->totalColumns;
    }
    /**
     * Set totalColumns value
     * @param int $totalColumns
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport
     */
    public function setTotalColumns(?int $totalColumns = null): self
    {
        // validation for constraint: int
        if (!is_null($totalColumns) && !(is_int($totalColumns) || ctype_digit($totalColumns))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalColumns, true), gettype($totalColumns)), __LINE__);
        }
        $this->totalColumns = $totalColumns;
        
        return $this;
    }
}
