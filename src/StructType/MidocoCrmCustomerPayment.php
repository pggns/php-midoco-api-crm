<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCustomerPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmCustomerPayment extends CrmCustomerPaymentDTO
{
    /**
     * The CustomerEInvoiceSetting
     * Meta information extracted from the WSDL
     * - documentation: Data-structure providing all information needed to decide which format an e-invoice must have and where it should be routed.
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO $CustomerEInvoiceSetting = null;
    /**
     * The assignedDebitor
     * @var string|null
     */
    protected ?string $assignedDebitor = null;
    /**
     * The assignedCreditor
     * @var string|null
     */
    protected ?string $assignedCreditor = null;
    /**
     * The diverseDebitor
     * @var string|null
     */
    protected ?string $diverseDebitor = null;
    /**
     * The makeNewOrder
     * @var bool|null
     */
    protected ?bool $makeNewOrder = null;
    /**
     * The existDebitCards
     * @var bool|null
     */
    protected ?bool $existDebitCards = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The vatType
     * @var string|null
     */
    protected ?string $vatType = null;
    /**
     * Constructor method for MidocoCrmCustomerPayment
     * @uses MidocoCrmCustomerPayment::setCustomerEInvoiceSetting()
     * @uses MidocoCrmCustomerPayment::setAssignedDebitor()
     * @uses MidocoCrmCustomerPayment::setAssignedCreditor()
     * @uses MidocoCrmCustomerPayment::setDiverseDebitor()
     * @uses MidocoCrmCustomerPayment::setMakeNewOrder()
     * @uses MidocoCrmCustomerPayment::setExistDebitCards()
     * @uses MidocoCrmCustomerPayment::setCurrency()
     * @uses MidocoCrmCustomerPayment::setVatType()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO $customerEInvoiceSetting
     * @param string $assignedDebitor
     * @param string $assignedCreditor
     * @param string $diverseDebitor
     * @param bool $makeNewOrder
     * @param bool $existDebitCards
     * @param string $currency
     * @param string $vatType
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO $customerEInvoiceSetting = null, ?string $assignedDebitor = null, ?string $assignedCreditor = null, ?string $diverseDebitor = null, ?bool $makeNewOrder = null, ?bool $existDebitCards = null, ?string $currency = null, ?string $vatType = null)
    {
        $this
            ->setCustomerEInvoiceSetting($customerEInvoiceSetting)
            ->setAssignedDebitor($assignedDebitor)
            ->setAssignedCreditor($assignedCreditor)
            ->setDiverseDebitor($diverseDebitor)
            ->setMakeNewOrder($makeNewOrder)
            ->setExistDebitCards($existDebitCards)
            ->setCurrency($currency)
            ->setVatType($vatType);
    }
    /**
     * Get CustomerEInvoiceSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO|null
     */
    public function getCustomerEInvoiceSetting(): ?\Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO
    {
        return $this->CustomerEInvoiceSetting;
    }
    /**
     * Set CustomerEInvoiceSetting value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO $customerEInvoiceSetting
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setCustomerEInvoiceSetting(?\Pggns\MidocoApi\Crm\StructType\CrmCustomerEinvoiceDTO $customerEInvoiceSetting = null): self
    {
        $this->CustomerEInvoiceSetting = $customerEInvoiceSetting;
        
        return $this;
    }
    /**
     * Get assignedDebitor value
     * @return string|null
     */
    public function getAssignedDebitor(): ?string
    {
        return $this->assignedDebitor;
    }
    /**
     * Set assignedDebitor value
     * @param string $assignedDebitor
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setAssignedDebitor(?string $assignedDebitor = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedDebitor) && !is_string($assignedDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedDebitor, true), gettype($assignedDebitor)), __LINE__);
        }
        $this->assignedDebitor = $assignedDebitor;
        
        return $this;
    }
    /**
     * Get assignedCreditor value
     * @return string|null
     */
    public function getAssignedCreditor(): ?string
    {
        return $this->assignedCreditor;
    }
    /**
     * Set assignedCreditor value
     * @param string $assignedCreditor
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setAssignedCreditor(?string $assignedCreditor = null): self
    {
        // validation for constraint: string
        if (!is_null($assignedCreditor) && !is_string($assignedCreditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedCreditor, true), gettype($assignedCreditor)), __LINE__);
        }
        $this->assignedCreditor = $assignedCreditor;
        
        return $this;
    }
    /**
     * Get diverseDebitor value
     * @return string|null
     */
    public function getDiverseDebitor(): ?string
    {
        return $this->diverseDebitor;
    }
    /**
     * Set diverseDebitor value
     * @param string $diverseDebitor
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setDiverseDebitor(?string $diverseDebitor = null): self
    {
        // validation for constraint: string
        if (!is_null($diverseDebitor) && !is_string($diverseDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diverseDebitor, true), gettype($diverseDebitor)), __LINE__);
        }
        $this->diverseDebitor = $diverseDebitor;
        
        return $this;
    }
    /**
     * Get makeNewOrder value
     * @return bool|null
     */
    public function getMakeNewOrder(): ?bool
    {
        return $this->makeNewOrder;
    }
    /**
     * Set makeNewOrder value
     * @param bool $makeNewOrder
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setMakeNewOrder(?bool $makeNewOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($makeNewOrder) && !is_bool($makeNewOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($makeNewOrder, true), gettype($makeNewOrder)), __LINE__);
        }
        $this->makeNewOrder = $makeNewOrder;
        
        return $this;
    }
    /**
     * Get existDebitCards value
     * @return bool|null
     */
    public function getExistDebitCards(): ?bool
    {
        return $this->existDebitCards;
    }
    /**
     * Set existDebitCards value
     * @param bool $existDebitCards
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setExistDebitCards(?bool $existDebitCards = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existDebitCards) && !is_bool($existDebitCards)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existDebitCards, true), gettype($existDebitCards)), __LINE__);
        }
        $this->existDebitCards = $existDebitCards;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get vatType value
     * @return string|null
     */
    public function getVatType(): ?string
    {
        return $this->vatType;
    }
    /**
     * Set vatType value
     * @uses \Pggns\MidocoApi\Crm\EnumType\MidocoCrmCustomerPaymentVatTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\MidocoCrmCustomerPaymentVatTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $vatType
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
     */
    public function setVatType(?string $vatType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\MidocoCrmCustomerPaymentVatTypeType::valueIsValid($vatType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\MidocoCrmCustomerPaymentVatTypeType', is_array($vatType) ? implode(', ', $vatType) : var_export($vatType, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\MidocoCrmCustomerPaymentVatTypeType::getValidValues())), __LINE__);
        }
        $this->vatType = $vatType;
        
        return $this;
    }
}
