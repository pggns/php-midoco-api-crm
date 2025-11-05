<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCompany StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmCompany extends CrmCompanyDTO
{
    /**
     * The synchronizeNullValue
     * Meta information extracted from the WSDL
     * - documentation: it will be checked by Utils.updateCustomer -> CrmHibObjFactory.createCrmCompany if synchronizeNullValue equals false, then null values of source will not be synchronized to the target (database) currently we've done everything
     * manually with setters and getters in createCrmCompany, this change should have no impact right now just in case, if CrmHibernateMapper.copy2hibCrmCompany will be used in the future
     * - default: true
     * @var bool|null
     */
    protected ?bool $synchronizeNullValue = null;
    /**
     * Constructor method for MidocoCrmCompany
     * @uses MidocoCrmCompany::setSynchronizeNullValue()
     * @param bool $synchronizeNullValue
     */
    public function __construct(?bool $synchronizeNullValue = true)
    {
        $this
            ->setSynchronizeNullValue($synchronizeNullValue);
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany
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
