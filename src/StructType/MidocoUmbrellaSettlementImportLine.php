<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementImportLine StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementImportLine extends UmbrellaSettlementImportLineDTO
{
    /**
     * The MidocoUmbrellaSettlementImportValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementImportValue
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO[]
     */
    protected ?array $MidocoUmbrellaSettlementImportValue = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementImportLine
     * @uses MidocoUmbrellaSettlementImportLine::setMidocoUmbrellaSettlementImportValue()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO[] $midocoUmbrellaSettlementImportValue
     */
    public function __construct(?array $midocoUmbrellaSettlementImportValue = null)
    {
        $this
            ->setMidocoUmbrellaSettlementImportValue($midocoUmbrellaSettlementImportValue);
    }
    /**
     * Get MidocoUmbrellaSettlementImportValue value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO[]
     */
    public function getMidocoUmbrellaSettlementImportValue(): ?array
    {
        return $this->MidocoUmbrellaSettlementImportValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementImportValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementImportValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementImportValueForArrayConstraintFromSetMidocoUmbrellaSettlementImportValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementImportLineMidocoUmbrellaSettlementImportValueItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementImportLineMidocoUmbrellaSettlementImportValueItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementImportLineMidocoUmbrellaSettlementImportValueItem) ? get_class($midocoUmbrellaSettlementImportLineMidocoUmbrellaSettlementImportValueItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementImportLineMidocoUmbrellaSettlementImportValueItem), var_export($midocoUmbrellaSettlementImportLineMidocoUmbrellaSettlementImportValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementImportValue property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementImportValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO[] $midocoUmbrellaSettlementImportValue
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine
     */
    public function setMidocoUmbrellaSettlementImportValue(?array $midocoUmbrellaSettlementImportValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementImportValueArrayErrorMessage = self::validateMidocoUmbrellaSettlementImportValueForArrayConstraintFromSetMidocoUmbrellaSettlementImportValue($midocoUmbrellaSettlementImportValue))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementImportValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementImportValue = $midocoUmbrellaSettlementImportValue;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementImportValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementImportLine
     */
    public function addToMidocoUmbrellaSettlementImportValue(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementImportValue property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementImportValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementImportValue[] = $item;
        
        return $this;
    }
}
