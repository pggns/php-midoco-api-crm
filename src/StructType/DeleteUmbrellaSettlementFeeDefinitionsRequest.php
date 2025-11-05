<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementFeeDefinitionsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Delete UmbrellaSettlementFeeDefinitions including their localizations and CSV columns.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementFeeDefinitionsRequest extends AbstractStructBase
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
     * Constructor method for DeleteUmbrellaSettlementFeeDefinitionsRequest
     * @uses DeleteUmbrellaSettlementFeeDefinitionsRequest::setFeeDefinitionID()
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
        foreach ($values as $deleteUmbrellaSettlementFeeDefinitionsRequestFeeDefinitionIDItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteUmbrellaSettlementFeeDefinitionsRequestFeeDefinitionIDItem) || ctype_digit($deleteUmbrellaSettlementFeeDefinitionsRequestFeeDefinitionIDItem))) {
                $invalidValues[] = is_object($deleteUmbrellaSettlementFeeDefinitionsRequestFeeDefinitionIDItem) ? get_class($deleteUmbrellaSettlementFeeDefinitionsRequestFeeDefinitionIDItem) : sprintf('%s(%s)', gettype($deleteUmbrellaSettlementFeeDefinitionsRequestFeeDefinitionIDItem), var_export($deleteUmbrellaSettlementFeeDefinitionsRequestFeeDefinitionIDItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeeDefinitionsRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeeDefinitionsRequest
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
