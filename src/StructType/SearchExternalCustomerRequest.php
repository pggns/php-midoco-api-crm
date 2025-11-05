<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchExternalCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchExternalCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The personNr
     * @var string|null
     */
    protected ?string $personNr = null;
    /**
     * The institute
     * @var string|null
     */
    protected ?string $institute = null;
    /**
     * The bankCode
     * @var string|null
     */
    protected ?string $bankCode = null;
    /**
     * Constructor method for SearchExternalCustomerRequest
     * @uses SearchExternalCustomerRequest::setMidocoCrmCustomer()
     * @uses SearchExternalCustomerRequest::setIban()
     * @uses SearchExternalCustomerRequest::setPersonNr()
     * @uses SearchExternalCustomerRequest::setInstitute()
     * @uses SearchExternalCustomerRequest::setBankCode()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param string $iban
     * @param string $personNr
     * @param string $institute
     * @param string $bankCode
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?string $iban = null, ?string $personNr = null, ?string $institute = null, ?string $bankCode = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setIban($iban)
            ->setPersonNr($personNr)
            ->setInstitute($institute)
            ->setBankCode($bankCode);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get personNr value
     * @return string|null
     */
    public function getPersonNr(): ?string
    {
        return $this->personNr;
    }
    /**
     * Set personNr value
     * @param string $personNr
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest
     */
    public function setPersonNr(?string $personNr = null): self
    {
        // validation for constraint: string
        if (!is_null($personNr) && !is_string($personNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personNr, true), gettype($personNr)), __LINE__);
        }
        $this->personNr = $personNr;
        
        return $this;
    }
    /**
     * Get institute value
     * @return string|null
     */
    public function getInstitute(): ?string
    {
        return $this->institute;
    }
    /**
     * Set institute value
     * @param string $institute
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest
     */
    public function setInstitute(?string $institute = null): self
    {
        // validation for constraint: string
        if (!is_null($institute) && !is_string($institute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($institute, true), gettype($institute)), __LINE__);
        }
        $this->institute = $institute;
        
        return $this;
    }
    /**
     * Get bankCode value
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }
    /**
     * Set bankCode value
     * @param string $bankCode
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest
     */
    public function setBankCode(?string $bankCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCode) && !is_string($bankCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCode, true), gettype($bankCode)), __LINE__);
        }
        $this->bankCode = $bankCode;
        
        return $this;
    }
}
