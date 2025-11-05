<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementIncludedCustomer StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementIncludedCustomer extends UmbrellaSettlementIncludedCustomerDTO
{
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The SortKey
     * @var string|null
     */
    protected ?string $SortKey = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementIncludedCustomer
     * @uses MidocoUmbrellaSettlementIncludedCustomer::setName()
     * @uses MidocoUmbrellaSettlementIncludedCustomer::setSortKey()
     * @param string $name
     * @param string $sortKey
     */
    public function __construct(?string $name = null, ?string $sortKey = null)
    {
        $this
            ->setName($name)
            ->setSortKey($sortKey);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SortKey value
     * @return string|null
     */
    public function getSortKey(): ?string
    {
        return $this->SortKey;
    }
    /**
     * Set SortKey value
     * @param string $sortKey
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer
     */
    public function setSortKey(?string $sortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($sortKey) && !is_string($sortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortKey, true), gettype($sortKey)), __LINE__);
        }
        $this->SortKey = $sortKey;
        
        return $this;
    }
}
