<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementImportLinesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request the parsed content of a CSV file imported for an UmbrellaSettlementMonth.<br> <br> By default, only the list of lines containing the values is returned. If needed, you can add Include elements so that the respnse also
 * contains the file and/or column metadata.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementImportLinesRequest extends AbstractStructBase
{
    /**
     * The importID
     * @var int|null
     */
    protected ?int $importID = null;
    /**
     * The include
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $include = null;
    /**
     * Constructor method for GetUmbrellaSettlementImportLinesRequest
     * @uses GetUmbrellaSettlementImportLinesRequest::setImportID()
     * @uses GetUmbrellaSettlementImportLinesRequest::setInclude()
     * @param int $importID
     * @param string[] $include
     */
    public function __construct(?int $importID = null, ?array $include = null)
    {
        $this
            ->setImportID($importID)
            ->setInclude($include);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesRequest
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
     * Get include value
     * @return string[]
     */
    public function getInclude(): ?array
    {
        return $this->include;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInclude method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInclude method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncludeForArrayConstraintFromSetInclude(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUmbrellaSettlementImportLinesRequestIncludeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::valueIsValid($getUmbrellaSettlementImportLinesRequestIncludeItem)) {
                $invalidValues[] = is_object($getUmbrellaSettlementImportLinesRequestIncludeItem) ? get_class($getUmbrellaSettlementImportLinesRequestIncludeItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementImportLinesRequestIncludeItem), var_export($getUmbrellaSettlementImportLinesRequestIncludeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set include value
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $include
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesRequest
     */
    public function setInclude(?array $include = null): self
    {
        // validation for constraint: array
        if ('' !== ($includeArrayErrorMessage = self::validateIncludeForArrayConstraintFromSetInclude($include))) {
            throw new InvalidArgumentException($includeArrayErrorMessage, __LINE__);
        }
        $this->include = $include;
        
        return $this;
    }
    /**
     * Add item to include value
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportLinesRequest
     */
    public function addToInclude(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::getValidValues())), __LINE__);
        }
        $this->include[] = $item;
        
        return $this;
    }
}
