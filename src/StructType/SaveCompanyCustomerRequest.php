<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCompanyCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCompanyCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The validateMandatoryFields
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $validateMandatoryFields = null;
    /**
     * Constructor method for SaveCompanyCustomerRequest
     * @uses SaveCompanyCustomerRequest::setMidocoCrmCustomer()
     * @uses SaveCompanyCustomerRequest::setValidateMandatoryFields()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param bool $validateMandatoryFields
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?bool $validateMandatoryFields = true)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setValidateMandatoryFields($validateMandatoryFields);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCompanyCustomerRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get validateMandatoryFields value
     * @return bool|null
     */
    public function getValidateMandatoryFields(): ?bool
    {
        return $this->validateMandatoryFields;
    }
    /**
     * Set validateMandatoryFields value
     * @param bool $validateMandatoryFields
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCompanyCustomerRequest
     */
    public function setValidateMandatoryFields(?bool $validateMandatoryFields = true): self
    {
        // validation for constraint: boolean
        if (!is_null($validateMandatoryFields) && !is_bool($validateMandatoryFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validateMandatoryFields, true), gettype($validateMandatoryFields)), __LINE__);
        }
        $this->validateMandatoryFields = $validateMandatoryFields;
        
        return $this;
    }
}
