<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportUmbrellaInvoiceSettingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportUmbrellaInvoiceSettingResponse extends AbstractStructBase
{
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - documentation: Echos the CustomerID of the request, so the CustomerID is included even if there are no settings.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CustomerID = null;
    /**
     * The MidocoUmbrellaInvoiceSetting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoUmbrellaInvoiceSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $MidocoUmbrellaInvoiceSetting = null;
    /**
     * The MidocoUmbrellaSettlementCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoUmbrellaSettlementCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer[]
     */
    protected ?array $MidocoUmbrellaSettlementCustomer = null;
    /**
     * Constructor method for ImportUmbrellaInvoiceSettingResponse
     * @uses ImportUmbrellaInvoiceSettingResponse::setCustomerID()
     * @uses ImportUmbrellaInvoiceSettingResponse::setMidocoUmbrellaInvoiceSetting()
     * @uses ImportUmbrellaInvoiceSettingResponse::setMidocoUmbrellaSettlementCustomer()
     * @param int $customerID
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer[] $midocoUmbrellaSettlementCustomer
     */
    public function __construct(?int $customerID = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting = null, ?array $midocoUmbrellaSettlementCustomer = null)
    {
        $this
            ->setCustomerID($customerID)
            ->setMidocoUmbrellaInvoiceSetting($midocoUmbrellaInvoiceSetting)
            ->setMidocoUmbrellaSettlementCustomer($midocoUmbrellaSettlementCustomer);
    }
    /**
     * Get CustomerID value
     * @return int|null
     */
    public function getCustomerID(): ?int
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param int $customerID
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingResponse
     */
    public function setCustomerID(?int $customerID = null): self
    {
        // validation for constraint: int
        if (!is_null($customerID) && !(is_int($customerID) || ctype_digit($customerID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        $this->CustomerID = $customerID;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaInvoiceSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting|null
     */
    public function getMidocoUmbrellaInvoiceSetting(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting
    {
        return $this->MidocoUmbrellaInvoiceSetting;
    }
    /**
     * Set MidocoUmbrellaInvoiceSetting value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingResponse
     */
    public function setMidocoUmbrellaInvoiceSetting(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting $midocoUmbrellaInvoiceSetting = null): self
    {
        $this->MidocoUmbrellaInvoiceSetting = $midocoUmbrellaInvoiceSetting;
        
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
        foreach ($values as $importUmbrellaInvoiceSettingResponseMidocoUmbrellaSettlementCustomerItem) {
            // validation for constraint: itemType
            if (!$importUmbrellaInvoiceSettingResponseMidocoUmbrellaSettlementCustomerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer) {
                $invalidValues[] = is_object($importUmbrellaInvoiceSettingResponseMidocoUmbrellaSettlementCustomerItem) ? get_class($importUmbrellaInvoiceSettingResponseMidocoUmbrellaSettlementCustomerItem) : sprintf('%s(%s)', gettype($importUmbrellaInvoiceSettingResponseMidocoUmbrellaSettlementCustomerItem), var_export($importUmbrellaInvoiceSettingResponseMidocoUmbrellaSettlementCustomerItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingResponse
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
