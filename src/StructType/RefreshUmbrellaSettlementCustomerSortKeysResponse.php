<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshUmbrellaSettlementCustomerSortKeysResponse
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RefreshUmbrellaSettlementCustomerSortKeysResponse extends AbstractStructBase
{
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
     * Constructor method for RefreshUmbrellaSettlementCustomerSortKeysResponse
     * @uses RefreshUmbrellaSettlementCustomerSortKeysResponse::setSelectedUmbrellaSettlementCustomers()
     * @uses RefreshUmbrellaSettlementCustomerSortKeysResponse::setAvailableUmbrellaSettlementCustomers()
     * @uses RefreshUmbrellaSettlementCustomerSortKeysResponse::setRemovedUmbrellaSettlementCustomers()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $selectedUmbrellaSettlementCustomers
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $availableUmbrellaSettlementCustomers
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $removedUmbrellaSettlementCustomers
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $selectedUmbrellaSettlementCustomers = null, ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $availableUmbrellaSettlementCustomers = null, ?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $removedUmbrellaSettlementCustomers = null)
    {
        $this
            ->setSelectedUmbrellaSettlementCustomers($selectedUmbrellaSettlementCustomers)
            ->setAvailableUmbrellaSettlementCustomers($availableUmbrellaSettlementCustomers)
            ->setRemovedUmbrellaSettlementCustomers($removedUmbrellaSettlementCustomers);
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
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshUmbrellaSettlementCustomerSortKeysResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshUmbrellaSettlementCustomerSortKeysResponse
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
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshUmbrellaSettlementCustomerSortKeysResponse
     */
    public function setRemovedUmbrellaSettlementCustomers(?\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCustomersType $removedUmbrellaSettlementCustomers = null): self
    {
        $this->RemovedUmbrellaSettlementCustomers = $removedUmbrellaSettlementCustomers;
        
        return $this;
    }
}
