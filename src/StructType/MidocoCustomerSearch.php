<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerSearch StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerSearch extends CustomerSearchDTO
{
    /**
     * The ExternalCustomerInfo
     * Meta information extracted from the WSDL
     * - ref: ExternalCustomerInfo
     * @var \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $ExternalCustomerInfo = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The isCrmPersonTraveller
     * @var bool|null
     */
    protected ?bool $isCrmPersonTraveller = null;
    /**
     * The isExternal
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isExternal = null;
    /**
     * Constructor method for MidocoCustomerSearch
     * @uses MidocoCustomerSearch::setExternalCustomerInfo()
     * @uses MidocoCustomerSearch::setIsSpecialCustomer()
     * @uses MidocoCustomerSearch::setIsCrmPersonTraveller()
     * @uses MidocoCustomerSearch::setIsExternal()
     * @param \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo
     * @param bool $isSpecialCustomer
     * @param bool $isCrmPersonTraveller
     * @param bool $isExternal
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo = null, ?bool $isSpecialCustomer = null, ?bool $isCrmPersonTraveller = null, ?bool $isExternal = false)
    {
        $this
            ->setExternalCustomerInfo($externalCustomerInfo)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setIsCrmPersonTraveller($isCrmPersonTraveller)
            ->setIsExternal($isExternal);
    }
    /**
     * Get ExternalCustomerInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo|null
     */
    public function getExternalCustomerInfo(): ?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
    {
        return $this->ExternalCustomerInfo;
    }
    /**
     * Set ExternalCustomerInfo value
     * @param \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch
     */
    public function setExternalCustomerInfo(?\Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo $externalCustomerInfo = null): self
    {
        $this->ExternalCustomerInfo = $externalCustomerInfo;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get isCrmPersonTraveller value
     * @return bool|null
     */
    public function getIsCrmPersonTraveller(): ?bool
    {
        return $this->isCrmPersonTraveller;
    }
    /**
     * Set isCrmPersonTraveller value
     * @param bool $isCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch
     */
    public function setIsCrmPersonTraveller(?bool $isCrmPersonTraveller = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCrmPersonTraveller) && !is_bool($isCrmPersonTraveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCrmPersonTraveller, true), gettype($isCrmPersonTraveller)), __LINE__);
        }
        $this->isCrmPersonTraveller = $isCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Get isExternal value
     * @return bool|null
     */
    public function getIsExternal(): ?bool
    {
        return $this->isExternal;
    }
    /**
     * Set isExternal value
     * @param bool $isExternal
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerSearch
     */
    public function setIsExternal(?bool $isExternal = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isExternal) && !is_bool($isExternal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExternal, true), gettype($isExternal)), __LINE__);
        }
        $this->isExternal = $isExternal;
        
        return $this;
    }
}
