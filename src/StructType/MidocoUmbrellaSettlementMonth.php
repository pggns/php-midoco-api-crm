<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementMonth StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementMonth extends UmbrellaSettlementMonthDTO
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The SelectedUmbrellaSettlementCustomers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $SelectedUmbrellaSettlementCustomers = null;
    /**
     * The AvailableUmbrellaSettlementCustomers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $AvailableUmbrellaSettlementCustomers = null;
    /**
     * The RemovedUmbrellaSettlementCustomers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $RemovedUmbrellaSettlementCustomers = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementMonth
     * @uses MidocoUmbrellaSettlementMonth::setStatus()
     * @uses MidocoUmbrellaSettlementMonth::setAmount()
     * @uses MidocoUmbrellaSettlementMonth::setSelectedUmbrellaSettlementCustomers()
     * @uses MidocoUmbrellaSettlementMonth::setAvailableUmbrellaSettlementCustomers()
     * @uses MidocoUmbrellaSettlementMonth::setRemovedUmbrellaSettlementCustomers()
     * @param string $status
     * @param float $amount
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $selectedUmbrellaSettlementCustomers
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $availableUmbrellaSettlementCustomers
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $removedUmbrellaSettlementCustomers
     */
    public function __construct(?string $status = null, ?float $amount = null, ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $selectedUmbrellaSettlementCustomers = null, ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $availableUmbrellaSettlementCustomers = null, ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $removedUmbrellaSettlementCustomers = null)
    {
        $this
            ->setStatus($status)
            ->setAmount($amount)
            ->setSelectedUmbrellaSettlementCustomers($selectedUmbrellaSettlementCustomers)
            ->setAvailableUmbrellaSettlementCustomers($availableUmbrellaSettlementCustomers)
            ->setRemovedUmbrellaSettlementCustomers($removedUmbrellaSettlementCustomers);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementMonthStatus::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementMonthStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementMonthStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementMonthStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementMonthStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get SelectedUmbrellaSettlementCustomers value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType|null
     */
    public function getSelectedUmbrellaSettlementCustomers(): ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType
    {
        return $this->SelectedUmbrellaSettlementCustomers;
    }
    /**
     * Set SelectedUmbrellaSettlementCustomers value
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $selectedUmbrellaSettlementCustomers
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth
     */
    public function setSelectedUmbrellaSettlementCustomers(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $selectedUmbrellaSettlementCustomers = null): self
    {
        $this->SelectedUmbrellaSettlementCustomers = $selectedUmbrellaSettlementCustomers;
        
        return $this;
    }
    /**
     * Get AvailableUmbrellaSettlementCustomers value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType|null
     */
    public function getAvailableUmbrellaSettlementCustomers(): ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType
    {
        return $this->AvailableUmbrellaSettlementCustomers;
    }
    /**
     * Set AvailableUmbrellaSettlementCustomers value
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $availableUmbrellaSettlementCustomers
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth
     */
    public function setAvailableUmbrellaSettlementCustomers(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $availableUmbrellaSettlementCustomers = null): self
    {
        $this->AvailableUmbrellaSettlementCustomers = $availableUmbrellaSettlementCustomers;
        
        return $this;
    }
    /**
     * Get RemovedUmbrellaSettlementCustomers value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType|null
     */
    public function getRemovedUmbrellaSettlementCustomers(): ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType
    {
        return $this->RemovedUmbrellaSettlementCustomers;
    }
    /**
     * Set RemovedUmbrellaSettlementCustomers value
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $removedUmbrellaSettlementCustomers
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementMonth
     */
    public function setRemovedUmbrellaSettlementCustomers(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $removedUmbrellaSettlementCustomers = null): self
    {
        $this->RemovedUmbrellaSettlementCustomers = $removedUmbrellaSettlementCustomers;
        
        return $this;
    }
}
