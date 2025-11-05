<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementFeeDefinitionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Should contain all UmbrellaSettlementFeeDefinitions
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementFeeDefinitionsResponse extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementFeeDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementFeeDefinition
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition[]
     */
    protected ?array $MidocoUmbrellaSettlementFeeDefinition = null;
    /**
     * Constructor method for GetUmbrellaSettlementFeeDefinitionsResponse
     * @uses GetUmbrellaSettlementFeeDefinitionsResponse::setMidocoUmbrellaSettlementFeeDefinition()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition[] $midocoUmbrellaSettlementFeeDefinition
     */
    public function __construct(?array $midocoUmbrellaSettlementFeeDefinition = null)
    {
        $this
            ->setMidocoUmbrellaSettlementFeeDefinition($midocoUmbrellaSettlementFeeDefinition);
    }
    /**
     * Get MidocoUmbrellaSettlementFeeDefinition value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition[]
     */
    public function getMidocoUmbrellaSettlementFeeDefinition(): ?array
    {
        return $this->MidocoUmbrellaSettlementFeeDefinition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementFeeDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementFeeDefinition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementFeeDefinitionForArrayConstraintFromSetMidocoUmbrellaSettlementFeeDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUmbrellaSettlementFeeDefinitionsResponseMidocoUmbrellaSettlementFeeDefinitionItem) {
            // validation for constraint: itemType
            if (!$getUmbrellaSettlementFeeDefinitionsResponseMidocoUmbrellaSettlementFeeDefinitionItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition) {
                $invalidValues[] = is_object($getUmbrellaSettlementFeeDefinitionsResponseMidocoUmbrellaSettlementFeeDefinitionItem) ? get_class($getUmbrellaSettlementFeeDefinitionsResponseMidocoUmbrellaSettlementFeeDefinitionItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementFeeDefinitionsResponseMidocoUmbrellaSettlementFeeDefinitionItem), var_export($getUmbrellaSettlementFeeDefinitionsResponseMidocoUmbrellaSettlementFeeDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementFeeDefinition property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementFeeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition[] $midocoUmbrellaSettlementFeeDefinition
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementFeeDefinitionsResponse
     */
    public function setMidocoUmbrellaSettlementFeeDefinition(?array $midocoUmbrellaSettlementFeeDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementFeeDefinitionArrayErrorMessage = self::validateMidocoUmbrellaSettlementFeeDefinitionForArrayConstraintFromSetMidocoUmbrellaSettlementFeeDefinition($midocoUmbrellaSettlementFeeDefinition))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementFeeDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeDefinition = $midocoUmbrellaSettlementFeeDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementFeeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementFeeDefinitionsResponse
     */
    public function addToMidocoUmbrellaSettlementFeeDefinition(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementFeeDefinition property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeDefinition[] = $item;
        
        return $this;
    }
}
