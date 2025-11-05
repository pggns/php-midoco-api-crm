<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioContactType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class BexioContactType extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MidocoCustomerId = null;
    /**
     * The CustomerType
     * Meta information extracted from the WSDL
     * - documentation: "F": Company, "P": Person
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerType = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The company name or the persons full name.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The BexioContactId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BexioContactId = null;
    /**
     * The BexioContactNr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BexioContactNr = null;
    /**
     * The UpdatedAtBexio
     * @var string|null
     */
    protected ?string $UpdatedAtBexio = null;
    /**
     * Constructor method for BexioContactType
     * @uses BexioContactType::setMidocoCustomerId()
     * @uses BexioContactType::setCustomerType()
     * @uses BexioContactType::setName()
     * @uses BexioContactType::setBexioContactId()
     * @uses BexioContactType::setBexioContactNr()
     * @uses BexioContactType::setUpdatedAtBexio()
     * @param int $midocoCustomerId
     * @param string $customerType
     * @param string $name
     * @param int $bexioContactId
     * @param string $bexioContactNr
     * @param string $updatedAtBexio
     */
    public function __construct(?int $midocoCustomerId = null, ?string $customerType = null, ?string $name = null, ?int $bexioContactId = null, ?string $bexioContactNr = null, ?string $updatedAtBexio = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setCustomerType($customerType)
            ->setName($name)
            ->setBexioContactId($bexioContactId)
            ->setBexioContactNr($bexioContactNr)
            ->setUpdatedAtBexio($updatedAtBexio);
    }
    /**
     * Get MidocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactType
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get CustomerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->CustomerType;
    }
    /**
     * Set CustomerType value
     * @param string $customerType
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactType
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerType, true), gettype($customerType)), __LINE__);
        }
        $this->CustomerType = $customerType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactType
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
     * Get BexioContactId value
     * @return int|null
     */
    public function getBexioContactId(): ?int
    {
        return $this->BexioContactId;
    }
    /**
     * Set BexioContactId value
     * @param int $bexioContactId
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactType
     */
    public function setBexioContactId(?int $bexioContactId = null): self
    {
        // validation for constraint: int
        if (!is_null($bexioContactId) && !(is_int($bexioContactId) || ctype_digit($bexioContactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bexioContactId, true), gettype($bexioContactId)), __LINE__);
        }
        $this->BexioContactId = $bexioContactId;
        
        return $this;
    }
    /**
     * Get BexioContactNr value
     * @return string|null
     */
    public function getBexioContactNr(): ?string
    {
        return $this->BexioContactNr;
    }
    /**
     * Set BexioContactNr value
     * @param string $bexioContactNr
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactType
     */
    public function setBexioContactNr(?string $bexioContactNr = null): self
    {
        // validation for constraint: string
        if (!is_null($bexioContactNr) && !is_string($bexioContactNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bexioContactNr, true), gettype($bexioContactNr)), __LINE__);
        }
        $this->BexioContactNr = $bexioContactNr;
        
        return $this;
    }
    /**
     * Get UpdatedAtBexio value
     * @return string|null
     */
    public function getUpdatedAtBexio(): ?string
    {
        return $this->UpdatedAtBexio;
    }
    /**
     * Set UpdatedAtBexio value
     * @param string $updatedAtBexio
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactType
     */
    public function setUpdatedAtBexio(?string $updatedAtBexio = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAtBexio) && !is_string($updatedAtBexio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAtBexio, true), gettype($updatedAtBexio)), __LINE__);
        }
        $this->UpdatedAtBexio = $updatedAtBexio;
        
        return $this;
    }
}
