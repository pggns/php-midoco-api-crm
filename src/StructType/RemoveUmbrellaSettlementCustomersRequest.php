<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveUmbrellaSettlementCustomersRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Remove customers from an Umbrella Settlement Month.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveUmbrellaSettlementCustomersRequest extends AbstractStructBase
{
    /**
     * The settlementMonthID
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
    /**
     * The customerID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $customerID = null;
    /**
     * Constructor method for RemoveUmbrellaSettlementCustomersRequest
     * @uses RemoveUmbrellaSettlementCustomersRequest::setSettlementMonthID()
     * @uses RemoveUmbrellaSettlementCustomersRequest::setCustomerID()
     * @param int $settlementMonthID
     * @param int[] $customerID
     */
    public function __construct(?int $settlementMonthID = null, ?array $customerID = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setCustomerID($customerID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\RemoveUmbrellaSettlementCustomersRequest
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
     * Get customerID value
     * @return int[]
     */
    public function getCustomerID(): ?array
    {
        return $this->customerID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerIDForArrayConstraintFromSetCustomerID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $removeUmbrellaSettlementCustomersRequestCustomerIDItem) {
            // validation for constraint: itemType
            if (!(is_int($removeUmbrellaSettlementCustomersRequestCustomerIDItem) || ctype_digit($removeUmbrellaSettlementCustomersRequestCustomerIDItem))) {
                $invalidValues[] = is_object($removeUmbrellaSettlementCustomersRequestCustomerIDItem) ? get_class($removeUmbrellaSettlementCustomersRequestCustomerIDItem) : sprintf('%s(%s)', gettype($removeUmbrellaSettlementCustomersRequestCustomerIDItem), var_export($removeUmbrellaSettlementCustomersRequestCustomerIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customerID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customerID value
     * @throws InvalidArgumentException
     * @param int[] $customerID
     * @return \Pggns\MidocoApi\Crm\StructType\RemoveUmbrellaSettlementCustomersRequest
     */
    public function setCustomerID(?array $customerID = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerIDArrayErrorMessage = self::validateCustomerIDForArrayConstraintFromSetCustomerID($customerID))) {
            throw new InvalidArgumentException($customerIDArrayErrorMessage, __LINE__);
        }
        $this->customerID = $customerID;
        
        return $this;
    }
    /**
     * Add item to customerID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\RemoveUmbrellaSettlementCustomersRequest
     */
    public function addToCustomerID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The customerID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customerID[] = $item;
        
        return $this;
    }
}
