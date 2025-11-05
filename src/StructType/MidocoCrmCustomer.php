<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCustomer StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmCustomer extends CrmCustomerDTO
{
    /**
     * The isExternal
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isExternal = null;
    /**
     * The synchronizeNullValue
     * Meta information extracted from the WSDL
     * - documentation: it will be checked by Utils.updateCustomer -> CrmHibObjFactory.createCustomer if synchronizeNullValue equals false, then null values of source will not be synchronized to the target (database)
     * - default: true
     * @var bool|null
     */
    protected ?bool $synchronizeNullValue = null;
    /**
     * Constructor method for MidocoCrmCustomer
     * @uses MidocoCrmCustomer::setIsExternal()
     * @uses MidocoCrmCustomer::setSynchronizeNullValue()
     * @param bool $isExternal
     * @param bool $synchronizeNullValue
     */
    public function __construct(?bool $isExternal = false, ?bool $synchronizeNullValue = true)
    {
        $this
            ->setIsExternal($isExternal)
            ->setSynchronizeNullValue($synchronizeNullValue);
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
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
    /**
     * Get synchronizeNullValue value
     * @return bool|null
     */
    public function getSynchronizeNullValue(): ?bool
    {
        return $this->synchronizeNullValue;
    }
    /**
     * Set synchronizeNullValue value
     * @param bool $synchronizeNullValue
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
     */
    public function setSynchronizeNullValue(?bool $synchronizeNullValue = true): self
    {
        // validation for constraint: boolean
        if (!is_null($synchronizeNullValue) && !is_bool($synchronizeNullValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($synchronizeNullValue, true), gettype($synchronizeNullValue)), __LINE__);
        }
        $this->synchronizeNullValue = $synchronizeNullValue;
        
        return $this;
    }
}
