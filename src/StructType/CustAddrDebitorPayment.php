<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustAddrDebitorPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustAddrDebitorPayment extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    protected ?array $MidocoCrmAddress = null;
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Crm\StructType\DebitorDTO[]
     */
    protected ?array $MidocoDebitor = null;
    /**
     * The MidocoCustomerPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCustomerPayment
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO $MidocoCustomerPayment = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[]
     */
    protected ?array $MidocoCrmCcCard = null;
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * The MidocoCrmBonusCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmBonusCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[]
     */
    protected ?array $MidocoCrmBonusCard = null;
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[]
     */
    protected ?array $MidocoCrmCriteria = null;
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The custOrder
     * @var int|null
     */
    protected ?int $custOrder = null;
    /**
     * Constructor method for CustAddrDebitorPayment
     * @uses CustAddrDebitorPayment::setMidocoCrmAddress()
     * @uses CustAddrDebitorPayment::setMidocoDebitor()
     * @uses CustAddrDebitorPayment::setMidocoCustomerPayment()
     * @uses CustAddrDebitorPayment::setMidocoContactEntry()
     * @uses CustAddrDebitorPayment::setMidocoCrmCcCard()
     * @uses CustAddrDebitorPayment::setMidocoCrmDebitCard()
     * @uses CustAddrDebitorPayment::setMidocoCrmBonusCard()
     * @uses CustAddrDebitorPayment::setMidocoCrmCriteria()
     * @uses CustAddrDebitorPayment::setMidocoCrmCustomer()
     * @uses CustAddrDebitorPayment::setCustOrder()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO[] $midocoDebitor
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param int $custOrder
     */
    public function __construct(?array $midocoCrmAddress = null, ?array $midocoDebitor = null, ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment = null, ?array $midocoContactEntry = null, ?array $midocoCrmCcCard = null, ?array $midocoCrmDebitCard = null, ?array $midocoCrmBonusCard = null, ?array $midocoCrmCriteria = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?int $custOrder = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoDebitor($midocoDebitor)
            ->setMidocoCustomerPayment($midocoCustomerPayment)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoCrmBonusCard($midocoCrmBonusCard)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setCustOrder($custOrder);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): ?array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmAddressItem) ? get_class($custAddrDebitorPaymentMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmAddressItem), var_export($custAddrDebitorPaymentMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmAddress(?array $midocoCrmAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Crm\StructType\DebitorDTO[]
     */
    public function getMidocoDebitor(): ?array
    {
        return $this->MidocoDebitor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorForArrayConstraintFromSetMidocoDebitor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoDebitorItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoDebitorItem instanceof \Pggns\MidocoApi\Crm\StructType\DebitorDTO) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoDebitorItem) ? get_class($custAddrDebitorPaymentMidocoDebitorItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoDebitorItem), var_export($custAddrDebitorPaymentMidocoDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Crm\StructType\DebitorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO[] $midocoDebitor
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoDebitor(?array $midocoDebitor = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorArrayErrorMessage = self::validateMidocoDebitorForArrayConstraintFromSetMidocoDebitor($midocoDebitor))) {
            throw new InvalidArgumentException($midocoDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoDebitor(\Pggns\MidocoApi\Crm\StructType\DebitorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\DebitorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Crm\StructType\DebitorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitor[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerPayment value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO|null
     */
    public function getMidocoCustomerPayment(): ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO
    {
        return $this->MidocoCustomerPayment;
    }
    /**
     * Set MidocoCustomerPayment value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCustomerPayment(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment = null): self
    {
        $this->MidocoCustomerPayment = $midocoCustomerPayment;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): ?array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoContactEntryItem) ? get_class($custAddrDebitorPaymentMidocoContactEntryItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoContactEntryItem), var_export($custAddrDebitorPaymentMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoContactEntry(?array $midocoContactEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[]
     */
    public function getMidocoCrmCcCard(): ?array
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCcCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCcCardForArrayConstraintFromSetMidocoCrmCcCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmCcCardItem) ? get_class($custAddrDebitorPaymentMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmCcCardItem), var_export($custAddrDebitorPaymentMidocoCrmCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmCcCard(?array $midocoCrmCcCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCcCardArrayErrorMessage = self::validateMidocoCrmCcCardForArrayConstraintFromSetMidocoCrmCcCard($midocoCrmCcCard))) {
            throw new InvalidArgumentException($midocoCrmCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoCrmCcCard(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCcCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): ?array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmDebitCardItem) ? get_class($custAddrDebitorPaymentMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmDebitCardItem), var_export($custAddrDebitorPaymentMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmDebitCard(?array $midocoCrmDebitCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmBonusCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[]
     */
    public function getMidocoCrmBonusCard(): ?array
    {
        return $this->MidocoCrmBonusCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmBonusCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmBonusCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmBonusCardForArrayConstraintFromSetMidocoCrmBonusCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoCrmBonusCardItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmBonusCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmBonusCardItem) ? get_class($custAddrDebitorPaymentMidocoCrmBonusCardItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmBonusCardItem), var_export($custAddrDebitorPaymentMidocoCrmBonusCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmBonusCard(?array $midocoCrmBonusCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmBonusCardArrayErrorMessage = self::validateMidocoCrmBonusCardForArrayConstraintFromSetMidocoCrmBonusCard($midocoCrmBonusCard))) {
            throw new InvalidArgumentException($midocoCrmBonusCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmBonusCard = $midocoCrmBonusCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoCrmBonusCard(\Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmBonusCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[]
     */
    public function getMidocoCrmCriteria(): ?array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmCriteriaItem) ? get_class($custAddrDebitorPaymentMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmCriteriaItem), var_export($custAddrDebitorPaymentMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmCriteria(?array $midocoCrmCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria $item
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get custOrder value
     * @return int|null
     */
    public function getCustOrder(): ?int
    {
        return $this->custOrder;
    }
    /**
     * Set custOrder value
     * @param int $custOrder
     * @return \Pggns\MidocoApi\Crm\StructType\CustAddrDebitorPayment
     */
    public function setCustOrder(?int $custOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($custOrder) && !(is_int($custOrder) || ctype_digit($custOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($custOrder, true), gettype($custOrder)), __LINE__);
        }
        $this->custOrder = $custOrder;
        
        return $this;
    }
}
