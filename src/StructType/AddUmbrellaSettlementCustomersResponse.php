<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUmbrellaSettlementCustomersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddUmbrellaSettlementCustomersResponse extends AbstractStructBase
{
    /**
     * The AddedCustomerID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $AddedCustomerID = null;
    /**
     * The IgnoredCustomerID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $IgnoredCustomerID = null;
    /**
     * Constructor method for AddUmbrellaSettlementCustomersResponse
     * @uses AddUmbrellaSettlementCustomersResponse::setAddedCustomerID()
     * @uses AddUmbrellaSettlementCustomersResponse::setIgnoredCustomerID()
     * @param int[] $addedCustomerID
     * @param int[] $ignoredCustomerID
     */
    public function __construct(?array $addedCustomerID = null, ?array $ignoredCustomerID = null)
    {
        $this
            ->setAddedCustomerID($addedCustomerID)
            ->setIgnoredCustomerID($ignoredCustomerID);
    }
    /**
     * Get AddedCustomerID value
     * @return int[]
     */
    public function getAddedCustomerID(): ?array
    {
        return $this->AddedCustomerID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAddedCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddedCustomerID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddedCustomerIDForArrayConstraintFromSetAddedCustomerID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addUmbrellaSettlementCustomersResponseAddedCustomerIDItem) {
            // validation for constraint: itemType
            if (!(is_int($addUmbrellaSettlementCustomersResponseAddedCustomerIDItem) || ctype_digit($addUmbrellaSettlementCustomersResponseAddedCustomerIDItem))) {
                $invalidValues[] = is_object($addUmbrellaSettlementCustomersResponseAddedCustomerIDItem) ? get_class($addUmbrellaSettlementCustomersResponseAddedCustomerIDItem) : sprintf('%s(%s)', gettype($addUmbrellaSettlementCustomersResponseAddedCustomerIDItem), var_export($addUmbrellaSettlementCustomersResponseAddedCustomerIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddedCustomerID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddedCustomerID value
     * @throws InvalidArgumentException
     * @param int[] $addedCustomerID
     * @return \Pggns\MidocoApi\Crm\StructType\AddUmbrellaSettlementCustomersResponse
     */
    public function setAddedCustomerID(?array $addedCustomerID = null): self
    {
        // validation for constraint: array
        if ('' !== ($addedCustomerIDArrayErrorMessage = self::validateAddedCustomerIDForArrayConstraintFromSetAddedCustomerID($addedCustomerID))) {
            throw new InvalidArgumentException($addedCustomerIDArrayErrorMessage, __LINE__);
        }
        $this->AddedCustomerID = $addedCustomerID;
        
        return $this;
    }
    /**
     * Add item to AddedCustomerID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\AddUmbrellaSettlementCustomersResponse
     */
    public function addToAddedCustomerID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The AddedCustomerID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AddedCustomerID[] = $item;
        
        return $this;
    }
    /**
     * Get IgnoredCustomerID value
     * @return int[]
     */
    public function getIgnoredCustomerID(): ?array
    {
        return $this->IgnoredCustomerID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIgnoredCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIgnoredCustomerID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIgnoredCustomerIDForArrayConstraintFromSetIgnoredCustomerID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addUmbrellaSettlementCustomersResponseIgnoredCustomerIDItem) {
            // validation for constraint: itemType
            if (!(is_int($addUmbrellaSettlementCustomersResponseIgnoredCustomerIDItem) || ctype_digit($addUmbrellaSettlementCustomersResponseIgnoredCustomerIDItem))) {
                $invalidValues[] = is_object($addUmbrellaSettlementCustomersResponseIgnoredCustomerIDItem) ? get_class($addUmbrellaSettlementCustomersResponseIgnoredCustomerIDItem) : sprintf('%s(%s)', gettype($addUmbrellaSettlementCustomersResponseIgnoredCustomerIDItem), var_export($addUmbrellaSettlementCustomersResponseIgnoredCustomerIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IgnoredCustomerID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IgnoredCustomerID value
     * @throws InvalidArgumentException
     * @param int[] $ignoredCustomerID
     * @return \Pggns\MidocoApi\Crm\StructType\AddUmbrellaSettlementCustomersResponse
     */
    public function setIgnoredCustomerID(?array $ignoredCustomerID = null): self
    {
        // validation for constraint: array
        if ('' !== ($ignoredCustomerIDArrayErrorMessage = self::validateIgnoredCustomerIDForArrayConstraintFromSetIgnoredCustomerID($ignoredCustomerID))) {
            throw new InvalidArgumentException($ignoredCustomerIDArrayErrorMessage, __LINE__);
        }
        $this->IgnoredCustomerID = $ignoredCustomerID;
        
        return $this;
    }
    /**
     * Add item to IgnoredCustomerID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\AddUmbrellaSettlementCustomersResponse
     */
    public function addToIgnoredCustomerID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The IgnoredCustomerID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->IgnoredCustomerID[] = $item;
        
        return $this;
    }
}
