<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementFeeDefinitionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the IDs of the deleted UmbrellaSettlementFeeDefinitions.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementFeeDefinitionsResponse extends AbstractStructBase
{
    /**
     * The FeeDefinitionID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $FeeDefinitionID = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementFeeDefinitionsResponse
     * @uses DeleteUmbrellaSettlementFeeDefinitionsResponse::setFeeDefinitionID()
     * @param int[] $feeDefinitionID
     */
    public function __construct(?array $feeDefinitionID = null)
    {
        $this
            ->setFeeDefinitionID($feeDefinitionID);
    }
    /**
     * Get FeeDefinitionID value
     * @return int[]
     */
    public function getFeeDefinitionID(): ?array
    {
        return $this->FeeDefinitionID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFeeDefinitionID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeDefinitionID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeDefinitionIDForArrayConstraintFromSetFeeDefinitionID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteUmbrellaSettlementFeeDefinitionsResponseFeeDefinitionIDItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteUmbrellaSettlementFeeDefinitionsResponseFeeDefinitionIDItem) || ctype_digit($deleteUmbrellaSettlementFeeDefinitionsResponseFeeDefinitionIDItem))) {
                $invalidValues[] = is_object($deleteUmbrellaSettlementFeeDefinitionsResponseFeeDefinitionIDItem) ? get_class($deleteUmbrellaSettlementFeeDefinitionsResponseFeeDefinitionIDItem) : sprintf('%s(%s)', gettype($deleteUmbrellaSettlementFeeDefinitionsResponseFeeDefinitionIDItem), var_export($deleteUmbrellaSettlementFeeDefinitionsResponseFeeDefinitionIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeDefinitionID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeDefinitionID value
     * @throws InvalidArgumentException
     * @param int[] $feeDefinitionID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeeDefinitionsResponse
     */
    public function setFeeDefinitionID(?array $feeDefinitionID = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeDefinitionIDArrayErrorMessage = self::validateFeeDefinitionIDForArrayConstraintFromSetFeeDefinitionID($feeDefinitionID))) {
            throw new InvalidArgumentException($feeDefinitionIDArrayErrorMessage, __LINE__);
        }
        $this->FeeDefinitionID = $feeDefinitionID;
        
        return $this;
    }
    /**
     * Add item to FeeDefinitionID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeeDefinitionsResponse
     */
    public function addToFeeDefinitionID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The FeeDefinitionID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeeDefinitionID[] = $item;
        
        return $this;
    }
}
