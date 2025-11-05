<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementImportsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request references to and metadata of files that were imported for an UmbrellaSettlementMonth.<br> <br> By default, the returned MidocoUmbrellaSettlementImport elements contain the column metadata. If needed, you can add Include
 * elements to tailor the content to your needs. But if you do, only the requested metadata is included in the response; except the file metadata, which is always included&hellip;
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementImportsRequest extends AbstractStructBase
{
    /**
     * The settlementMonthID
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
    /**
     * The include
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $include = null;
    /**
     * Constructor method for GetUmbrellaSettlementImportsRequest
     * @uses GetUmbrellaSettlementImportsRequest::setSettlementMonthID()
     * @uses GetUmbrellaSettlementImportsRequest::setInclude()
     * @param int $settlementMonthID
     * @param string[] $include
     */
    public function __construct(?int $settlementMonthID = null, ?array $include = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setInclude($include);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportsRequest
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
        foreach ($values as $getUmbrellaSettlementImportsRequestIncludeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportMetadata::valueIsValid($getUmbrellaSettlementImportsRequestIncludeItem)) {
                $invalidValues[] = is_object($getUmbrellaSettlementImportsRequestIncludeItem) ? get_class($getUmbrellaSettlementImportsRequestIncludeItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementImportsRequestIncludeItem), var_export($getUmbrellaSettlementImportsRequestIncludeItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportsRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementImportsRequest
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
