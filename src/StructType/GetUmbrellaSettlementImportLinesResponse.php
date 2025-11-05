<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementImportLinesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the parsed content of a CSV file imported for an UmbrellaSettlementMonth wrapped in MidocoUmbrellaSettlementImportLines.<br> Depending on the request, the metadata of the file and/or the columns is included in the response.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementImportLinesResponse extends AbstractStructBase
{
    /**
     * The importID
     * @var int|null
     */
    protected ?int $importID = null;
    /**
     * The MidocoUmbrellaSettlementImport
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementImport
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $MidocoUmbrellaSettlementImport = null;
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
     * Constructor method for GetUmbrellaSettlementImportLinesResponse
     * @uses GetUmbrellaSettlementImportLinesResponse::setImportID()
     * @uses GetUmbrellaSettlementImportLinesResponse::setMidocoUmbrellaSettlementImport()
     * @uses GetUmbrellaSettlementImportLinesResponse::setMidocoUmbrellaSettlementImportColumn()
     * @uses GetUmbrellaSettlementImportLinesResponse::setMidocoUmbrellaSettlementImportLine()
     * @param int $importID
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $midocoUmbrellaSettlementImport
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO[] $midocoUmbrellaSettlementImportColumn
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine[] $midocoUmbrellaSettlementImportLine
     */
    public function __construct(?int $importID = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $midocoUmbrellaSettlementImport = null, ?array $midocoUmbrellaSettlementImportColumn = null, ?array $midocoUmbrellaSettlementImportLine = null)
    {
        $this
            ->setImportID($importID)
            ->setMidocoUmbrellaSettlementImport($midocoUmbrellaSettlementImport)
            ->setMidocoUmbrellaSettlementImportColumn($midocoUmbrellaSettlementImportColumn)
            ->setMidocoUmbrellaSettlementImportLine($midocoUmbrellaSettlementImportLine);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesResponse
     */
    public function setMidocoUmbrellaSettlementImport(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImport $midocoUmbrellaSettlementImport = null): self
    {
        $this->MidocoUmbrellaSettlementImport = $midocoUmbrellaSettlementImport;
        
        return $this;
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
        foreach ($values as $getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportColumnItem) {
            // validation for constraint: itemType
            if (!$getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportColumnItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportColumnDTO) {
                $invalidValues[] = is_object($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportColumnItem) ? get_class($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportColumnItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportColumnItem), var_export($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportColumnItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesResponse
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
        foreach ($values as $getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportLineItem) {
            // validation for constraint: itemType
            if (!$getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportLineItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine) {
                $invalidValues[] = is_object($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportLineItem) ? get_class($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportLineItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportLineItem), var_export($getUmbrellaSettlementImportLinesResponseMidocoUmbrellaSettlementImportLineItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesResponse
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
}
