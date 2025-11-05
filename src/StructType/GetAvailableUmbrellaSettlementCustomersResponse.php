<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableUmbrellaSettlementCustomersResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: The UmbrellaSettlementMonth from the request, or the next month.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableUmbrellaSettlementCustomersResponse extends AbstractStructBase
{
    /**
     * The UmbrellaSettlementDate
     * Meta information extracted from the WSDL
     * - ref: UmbrellaSettlementDate
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $UmbrellaSettlementDate = null;
    /**
     * The settlementMonthID
     * Meta information extracted from the WSDL
     * - documentation: The UmbrellaSettlementID if there is a settlement for the requested month.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
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
     * Constructor method for GetAvailableUmbrellaSettlementCustomersResponse
     * @uses GetAvailableUmbrellaSettlementCustomersResponse::setUmbrellaSettlementDate()
     * @uses GetAvailableUmbrellaSettlementCustomersResponse::setSettlementMonthID()
     * @uses GetAvailableUmbrellaSettlementCustomersResponse::setMidocoUmbrellaSettlementCustomer()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     * @param int $settlementMonthID
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer[] $midocoUmbrellaSettlementCustomer
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null, ?int $settlementMonthID = null, ?array $midocoUmbrellaSettlementCustomer = null)
    {
        $this
            ->setUmbrellaSettlementDate($umbrellaSettlementDate)
            ->setSettlementMonthID($settlementMonthID)
            ->setMidocoUmbrellaSettlementCustomer($midocoUmbrellaSettlementCustomer);
    }
    /**
     * Get UmbrellaSettlementDate value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate|null
     */
    public function getUmbrellaSettlementDate(): ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate
    {
        return $this->UmbrellaSettlementDate;
    }
    /**
     * Set UmbrellaSettlementDate value
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableUmbrellaSettlementCustomersResponse
     */
    public function setUmbrellaSettlementDate(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementDate $umbrellaSettlementDate = null): self
    {
        $this->UmbrellaSettlementDate = $umbrellaSettlementDate;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableUmbrellaSettlementCustomersResponse
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
        foreach ($values as $getAvailableUmbrellaSettlementCustomersResponseMidocoUmbrellaSettlementCustomerItem) {
            // validation for constraint: itemType
            if (!$getAvailableUmbrellaSettlementCustomersResponseMidocoUmbrellaSettlementCustomerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer) {
                $invalidValues[] = is_object($getAvailableUmbrellaSettlementCustomersResponseMidocoUmbrellaSettlementCustomerItem) ? get_class($getAvailableUmbrellaSettlementCustomersResponseMidocoUmbrellaSettlementCustomerItem) : sprintf('%s(%s)', gettype($getAvailableUmbrellaSettlementCustomersResponseMidocoUmbrellaSettlementCustomerItem), var_export($getAvailableUmbrellaSettlementCustomersResponseMidocoUmbrellaSettlementCustomerItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableUmbrellaSettlementCustomersResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableUmbrellaSettlementCustomersResponse
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
