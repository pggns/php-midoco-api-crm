<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportUmbrellaInvoiceSettingRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieve invoice settings from one of the last invoices in Bexio. <p> From within the CRM, we </p>
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportUmbrellaInvoiceSettingRequest extends AbstractStructBase
{
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $CustomerID = null;
    /**
     * The settlementMonthId
     * @var int|null
     */
    protected ?int $settlementMonthId = null;
    /**
     * The Include
     * @var string|null
     */
    protected ?string $Include = null;
    /**
     * Constructor method for ImportUmbrellaInvoiceSettingRequest
     * @uses ImportUmbrellaInvoiceSettingRequest::setCustomerID()
     * @uses ImportUmbrellaInvoiceSettingRequest::setSettlementMonthId()
     * @uses ImportUmbrellaInvoiceSettingRequest::setInclude()
     * @param int[] $customerID
     * @param int $settlementMonthId
     * @param string $include
     */
    public function __construct(?array $customerID = null, ?int $settlementMonthId = null, ?string $include = null)
    {
        $this
            ->setCustomerID($customerID)
            ->setSettlementMonthId($settlementMonthId)
            ->setInclude($include);
    }
    /**
     * Get CustomerID value
     * @return int[]
     */
    public function getCustomerID(): ?array
    {
        return $this->CustomerID;
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
        foreach ($values as $importUmbrellaInvoiceSettingRequestCustomerIDItem) {
            // validation for constraint: itemType
            if (!(is_int($importUmbrellaInvoiceSettingRequestCustomerIDItem) || ctype_digit($importUmbrellaInvoiceSettingRequestCustomerIDItem))) {
                $invalidValues[] = is_object($importUmbrellaInvoiceSettingRequestCustomerIDItem) ? get_class($importUmbrellaInvoiceSettingRequestCustomerIDItem) : sprintf('%s(%s)', gettype($importUmbrellaInvoiceSettingRequestCustomerIDItem), var_export($importUmbrellaInvoiceSettingRequestCustomerIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomerID value
     * @throws InvalidArgumentException
     * @param int[] $customerID
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingRequest
     */
    public function setCustomerID(?array $customerID = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerIDArrayErrorMessage = self::validateCustomerIDForArrayConstraintFromSetCustomerID($customerID))) {
            throw new InvalidArgumentException($customerIDArrayErrorMessage, __LINE__);
        }
        $this->CustomerID = $customerID;
        
        return $this;
    }
    /**
     * Add item to CustomerID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingRequest
     */
    public function addToCustomerID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The CustomerID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomerID[] = $item;
        
        return $this;
    }
    /**
     * Get settlementMonthId value
     * @return int|null
     */
    public function getSettlementMonthId(): ?int
    {
        return $this->settlementMonthId;
    }
    /**
     * Set settlementMonthId value
     * @param int $settlementMonthId
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingRequest
     */
    public function setSettlementMonthId(?int $settlementMonthId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthId) && !(is_int($settlementMonthId) || ctype_digit($settlementMonthId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthId, true), gettype($settlementMonthId)), __LINE__);
        }
        $this->settlementMonthId = $settlementMonthId;
        
        return $this;
    }
    /**
     * Get Include value
     * @return string|null
     */
    public function getInclude(): ?string
    {
        return $this->Include;
    }
    /**
     * Set Include value
     * @param string $include
     * @return \Pggns\MidocoApi\Crm\StructType\ImportUmbrellaInvoiceSettingRequest
     */
    public function setInclude(?string $include = null): self
    {
        // validation for constraint: string
        if (!is_null($include) && !is_string($include)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($include, true), gettype($include)), __LINE__);
        }
        $this->Include = $include;
        
        return $this;
    }
}
