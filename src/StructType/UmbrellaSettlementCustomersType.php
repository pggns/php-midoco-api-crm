<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementCustomersType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementCustomersType extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer[]
     */
    protected ?array $MidocoUmbrellaSettlementCustomer = null;
    /**
     * Constructor method for UmbrellaSettlementCustomersType
     * @uses UmbrellaSettlementCustomersType::setMidocoUmbrellaSettlementCustomer()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer[] $midocoUmbrellaSettlementCustomer
     */
    public function __construct(?array $midocoUmbrellaSettlementCustomer = null)
    {
        $this
            ->setMidocoUmbrellaSettlementCustomer($midocoUmbrellaSettlementCustomer);
    }
    /**
     * Get MidocoUmbrellaSettlementCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer[]
     */
    public function getMidocoUmbrellaSettlementCustomer(): ?array
    {
        return $this->MidocoUmbrellaSettlementCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementCustomerForArrayConstraintFromSetMidocoUmbrellaSettlementCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $umbrellaSettlementCustomersTypeMidocoUmbrellaSettlementCustomerItem) {
            // validation for constraint: itemType
            if (!$umbrellaSettlementCustomersTypeMidocoUmbrellaSettlementCustomerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer) {
                $invalidValues[] = is_object($umbrellaSettlementCustomersTypeMidocoUmbrellaSettlementCustomerItem) ? get_class($umbrellaSettlementCustomersTypeMidocoUmbrellaSettlementCustomerItem) : sprintf('%s(%s)', gettype($umbrellaSettlementCustomersTypeMidocoUmbrellaSettlementCustomerItem), var_export($umbrellaSettlementCustomersTypeMidocoUmbrellaSettlementCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer[] $midocoUmbrellaSettlementCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType
     */
    public function setMidocoUmbrellaSettlementCustomer(?array $midocoUmbrellaSettlementCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementCustomerArrayErrorMessage = self::validateMidocoUmbrellaSettlementCustomerForArrayConstraintFromSetMidocoUmbrellaSettlementCustomer($midocoUmbrellaSettlementCustomer))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementCustomer = $midocoUmbrellaSettlementCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer $item
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType
     */
    public function addToMidocoUmbrellaSettlementCustomer(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementCustomer[] = $item;
        
        return $this;
    }
}
