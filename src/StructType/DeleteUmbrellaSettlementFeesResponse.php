<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementFeesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementFeesResponse extends UmbrellaSettlementFeesResponseType
{
    /**
     * The DeletedSettlementFeeID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $DeletedSettlementFeeID = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementFeesResponse
     * @uses DeleteUmbrellaSettlementFeesResponse::setDeletedSettlementFeeID()
     * @param int[] $deletedSettlementFeeID
     */
    public function __construct(?array $deletedSettlementFeeID = null)
    {
        $this
            ->setDeletedSettlementFeeID($deletedSettlementFeeID);
    }
    /**
     * Get DeletedSettlementFeeID value
     * @return int[]
     */
    public function getDeletedSettlementFeeID(): ?array
    {
        return $this->DeletedSettlementFeeID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDeletedSettlementFeeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedSettlementFeeID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedSettlementFeeIDForArrayConstraintFromSetDeletedSettlementFeeID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteUmbrellaSettlementFeesResponseDeletedSettlementFeeIDItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteUmbrellaSettlementFeesResponseDeletedSettlementFeeIDItem) || ctype_digit($deleteUmbrellaSettlementFeesResponseDeletedSettlementFeeIDItem))) {
                $invalidValues[] = is_object($deleteUmbrellaSettlementFeesResponseDeletedSettlementFeeIDItem) ? get_class($deleteUmbrellaSettlementFeesResponseDeletedSettlementFeeIDItem) : sprintf('%s(%s)', gettype($deleteUmbrellaSettlementFeesResponseDeletedSettlementFeeIDItem), var_export($deleteUmbrellaSettlementFeesResponseDeletedSettlementFeeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedSettlementFeeID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DeletedSettlementFeeID value
     * @throws InvalidArgumentException
     * @param int[] $deletedSettlementFeeID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeesResponse
     */
    public function setDeletedSettlementFeeID(?array $deletedSettlementFeeID = null): self
    {
        // validation for constraint: array
        if ('' !== ($deletedSettlementFeeIDArrayErrorMessage = self::validateDeletedSettlementFeeIDForArrayConstraintFromSetDeletedSettlementFeeID($deletedSettlementFeeID))) {
            throw new InvalidArgumentException($deletedSettlementFeeIDArrayErrorMessage, __LINE__);
        }
        $this->DeletedSettlementFeeID = $deletedSettlementFeeID;
        
        return $this;
    }
    /**
     * Add item to DeletedSettlementFeeID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeesResponse
     */
    public function addToDeletedSettlementFeeID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The DeletedSettlementFeeID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeletedSettlementFeeID[] = $item;
        
        return $this;
    }
}
