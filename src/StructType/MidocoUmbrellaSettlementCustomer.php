<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementCustomer StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementCustomer extends UmbrellaSettlementCustomerDTO
{
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
     * The CustomerType
     * Meta information extracted from the WSDL
     * - documentation: "F": Company, "P": Person
     * @var string|null
     */
    protected ?string $CustomerType = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The company name or the persons full name.
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Street
     * @var string|null
     */
    protected ?string $Street = null;
    /**
     * The StreetNo
     * @var string|null
     */
    protected ?string $StreetNo = null;
    /**
     * The Country
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The PostalCode
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The City
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The CustomerStatus
     * Meta information extracted from the WSDL
     * - default: UNDEFINED
     * @var string|null
     */
    protected ?string $CustomerStatus = null;
    /**
     * The InvoiceSettingStatus
     * @var string|null
     */
    protected ?string $InvoiceSettingStatus = null;
    /**
     * The SettlementSettingStatus
     * @var string|null
     */
    protected ?string $SettlementSettingStatus = null;
    /**
     * The SettlementSettingSortKey
     * Meta information extracted from the WSDL
     * - documentation: The sort key of the settlement setting can diverge from the sort key currently saved in the settlement customer. <p> The sort key of the settlement customer shall contain the sort key, that was used to prepare settlement positions
     * and is only updated during certain operation. </p>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SettlementSettingSortKey = null;
    /**
     * The ImportFormat
     * @var string|null
     */
    protected ?string $ImportFormat = null;
    /**
     * The DataPresent
     * @var bool|null
     */
    protected ?bool $DataPresent = null;
    /**
     * The SettlementPrepared
     * @var bool|null
     */
    protected ?bool $SettlementPrepared = null;
    /**
     * The SettlementUploaded
     * @var bool|null
     */
    protected ?bool $SettlementUploaded = null;
    /**
     * The IsRemoved
     * Meta information extracted from the WSDL
     * - documentation: True if the customer was part of the settlement, but has been removed.
     * @var bool|null
     */
    protected ?bool $IsRemoved = null;
    /**
     * The IsDeleted
     * Meta information extracted from the WSDL
     * - documentation: True if the customer is deleted in the CRM.
     * @var bool|null
     */
    protected ?bool $IsDeleted = null;
    /**
     * The IsLocked
     * Meta information extracted from the WSDL
     * - documentation: True if the customer is locked in the CRM.
     * @var bool|null
     */
    protected ?bool $IsLocked = null;
    /**
     * The LockReasonId
     * @var int|null
     */
    protected ?int $LockReasonId = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementCustomer
     * @uses MidocoUmbrellaSettlementCustomer::setBexioContactId()
     * @uses MidocoUmbrellaSettlementCustomer::setBexioContactNr()
     * @uses MidocoUmbrellaSettlementCustomer::setUpdatedAtBexio()
     * @uses MidocoUmbrellaSettlementCustomer::setCustomerType()
     * @uses MidocoUmbrellaSettlementCustomer::setName()
     * @uses MidocoUmbrellaSettlementCustomer::setStreet()
     * @uses MidocoUmbrellaSettlementCustomer::setStreetNo()
     * @uses MidocoUmbrellaSettlementCustomer::setCountry()
     * @uses MidocoUmbrellaSettlementCustomer::setPostalCode()
     * @uses MidocoUmbrellaSettlementCustomer::setCity()
     * @uses MidocoUmbrellaSettlementCustomer::setCustomerStatus()
     * @uses MidocoUmbrellaSettlementCustomer::setInvoiceSettingStatus()
     * @uses MidocoUmbrellaSettlementCustomer::setSettlementSettingStatus()
     * @uses MidocoUmbrellaSettlementCustomer::setSettlementSettingSortKey()
     * @uses MidocoUmbrellaSettlementCustomer::setImportFormat()
     * @uses MidocoUmbrellaSettlementCustomer::setDataPresent()
     * @uses MidocoUmbrellaSettlementCustomer::setSettlementPrepared()
     * @uses MidocoUmbrellaSettlementCustomer::setSettlementUploaded()
     * @uses MidocoUmbrellaSettlementCustomer::setIsRemoved()
     * @uses MidocoUmbrellaSettlementCustomer::setIsDeleted()
     * @uses MidocoUmbrellaSettlementCustomer::setIsLocked()
     * @uses MidocoUmbrellaSettlementCustomer::setLockReasonId()
     * @param int $bexioContactId
     * @param string $bexioContactNr
     * @param string $updatedAtBexio
     * @param string $customerType
     * @param string $name
     * @param string $street
     * @param string $streetNo
     * @param string $country
     * @param string $postalCode
     * @param string $city
     * @param string $customerStatus
     * @param string $invoiceSettingStatus
     * @param string $settlementSettingStatus
     * @param string $settlementSettingSortKey
     * @param string $importFormat
     * @param bool $dataPresent
     * @param bool $settlementPrepared
     * @param bool $settlementUploaded
     * @param bool $isRemoved
     * @param bool $isDeleted
     * @param bool $isLocked
     * @param int $lockReasonId
     */
    public function __construct(?int $bexioContactId = null, ?string $bexioContactNr = null, ?string $updatedAtBexio = null, ?string $customerType = null, ?string $name = null, ?string $street = null, ?string $streetNo = null, ?string $country = null, ?string $postalCode = null, ?string $city = null, ?string $customerStatus = null, ?string $invoiceSettingStatus = null, ?string $settlementSettingStatus = null, ?string $settlementSettingSortKey = null, ?string $importFormat = null, ?bool $dataPresent = null, ?bool $settlementPrepared = null, ?bool $settlementUploaded = null, ?bool $isRemoved = null, ?bool $isDeleted = null, ?bool $isLocked = null, ?int $lockReasonId = null)
    {
        $this
            ->setBexioContactId($bexioContactId)
            ->setBexioContactNr($bexioContactNr)
            ->setUpdatedAtBexio($updatedAtBexio)
            ->setCustomerType($customerType)
            ->setName($name)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setCountry($country)
            ->setPostalCode($postalCode)
            ->setCity($city)
            ->setCustomerStatus($customerStatus)
            ->setInvoiceSettingStatus($invoiceSettingStatus)
            ->setSettlementSettingStatus($settlementSettingStatus)
            ->setSettlementSettingSortKey($settlementSettingSortKey)
            ->setImportFormat($importFormat)
            ->setDataPresent($dataPresent)
            ->setSettlementPrepared($settlementPrepared)
            ->setSettlementUploaded($settlementUploaded)
            ->setIsRemoved($isRemoved)
            ->setIsDeleted($isDeleted)
            ->setIsLocked($isLocked)
            ->setLockReasonId($lockReasonId);
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
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
     * Get Street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->Street = $street;
        
        return $this;
    }
    /**
     * Get StreetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->StreetNo;
    }
    /**
     * Set StreetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->StreetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->Country = $country;
        
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->City = $city;
        
        return $this;
    }
    /**
     * Get CustomerStatus value
     * @return string|null
     */
    public function getCustomerStatus(): ?string
    {
        return $this->CustomerStatus;
    }
    /**
     * Set CustomerStatus value
     * @uses \Pggns\MidocoApi\Crm\EnumType\CustomerStatus::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\CustomerStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $customerStatus
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setCustomerStatus(?string $customerStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\CustomerStatus::valueIsValid($customerStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\CustomerStatus', is_array($customerStatus) ? implode(', ', $customerStatus) : var_export($customerStatus, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\CustomerStatus::getValidValues())), __LINE__);
        }
        $this->CustomerStatus = $customerStatus;
        
        return $this;
    }
    /**
     * Get InvoiceSettingStatus value
     * @return string|null
     */
    public function getInvoiceSettingStatus(): ?string
    {
        return $this->InvoiceSettingStatus;
    }
    /**
     * Set InvoiceSettingStatus value
     * @uses \Pggns\MidocoApi\Crm\EnumType\InvoiceSettingStatus::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\InvoiceSettingStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $invoiceSettingStatus
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setInvoiceSettingStatus(?string $invoiceSettingStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\InvoiceSettingStatus::valueIsValid($invoiceSettingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\InvoiceSettingStatus', is_array($invoiceSettingStatus) ? implode(', ', $invoiceSettingStatus) : var_export($invoiceSettingStatus, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\InvoiceSettingStatus::getValidValues())), __LINE__);
        }
        $this->InvoiceSettingStatus = $invoiceSettingStatus;
        
        return $this;
    }
    /**
     * Get SettlementSettingStatus value
     * @return string|null
     */
    public function getSettlementSettingStatus(): ?string
    {
        return $this->SettlementSettingStatus;
    }
    /**
     * Set SettlementSettingStatus value
     * @uses \Pggns\MidocoApi\Crm\EnumType\SettlementSettingStatus::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\SettlementSettingStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $settlementSettingStatus
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setSettlementSettingStatus(?string $settlementSettingStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\SettlementSettingStatus::valueIsValid($settlementSettingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\SettlementSettingStatus', is_array($settlementSettingStatus) ? implode(', ', $settlementSettingStatus) : var_export($settlementSettingStatus, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\SettlementSettingStatus::getValidValues())), __LINE__);
        }
        $this->SettlementSettingStatus = $settlementSettingStatus;
        
        return $this;
    }
    /**
     * Get SettlementSettingSortKey value
     * @return string|null
     */
    public function getSettlementSettingSortKey(): ?string
    {
        return $this->SettlementSettingSortKey;
    }
    /**
     * Set SettlementSettingSortKey value
     * @param string $settlementSettingSortKey
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setSettlementSettingSortKey(?string $settlementSettingSortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementSettingSortKey) && !is_string($settlementSettingSortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementSettingSortKey, true), gettype($settlementSettingSortKey)), __LINE__);
        }
        $this->SettlementSettingSortKey = $settlementSettingSortKey;
        
        return $this;
    }
    /**
     * Get ImportFormat value
     * @return string|null
     */
    public function getImportFormat(): ?string
    {
        return $this->ImportFormat;
    }
    /**
     * Set ImportFormat value
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::getValidValues()
     * @throws InvalidArgumentException
     * @param string $importFormat
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setImportFormat(?string $importFormat = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::valueIsValid($importFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat', is_array($importFormat) ? implode(', ', $importFormat) : var_export($importFormat, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::getValidValues())), __LINE__);
        }
        $this->ImportFormat = $importFormat;
        
        return $this;
    }
    /**
     * Get DataPresent value
     * @return bool|null
     */
    public function getDataPresent(): ?bool
    {
        return $this->DataPresent;
    }
    /**
     * Set DataPresent value
     * @param bool $dataPresent
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setDataPresent(?bool $dataPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dataPresent) && !is_bool($dataPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dataPresent, true), gettype($dataPresent)), __LINE__);
        }
        $this->DataPresent = $dataPresent;
        
        return $this;
    }
    /**
     * Get SettlementPrepared value
     * @return bool|null
     */
    public function getSettlementPrepared(): ?bool
    {
        return $this->SettlementPrepared;
    }
    /**
     * Set SettlementPrepared value
     * @param bool $settlementPrepared
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setSettlementPrepared(?bool $settlementPrepared = null): self
    {
        // validation for constraint: boolean
        if (!is_null($settlementPrepared) && !is_bool($settlementPrepared)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($settlementPrepared, true), gettype($settlementPrepared)), __LINE__);
        }
        $this->SettlementPrepared = $settlementPrepared;
        
        return $this;
    }
    /**
     * Get SettlementUploaded value
     * @return bool|null
     */
    public function getSettlementUploaded(): ?bool
    {
        return $this->SettlementUploaded;
    }
    /**
     * Set SettlementUploaded value
     * @param bool $settlementUploaded
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setSettlementUploaded(?bool $settlementUploaded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($settlementUploaded) && !is_bool($settlementUploaded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($settlementUploaded, true), gettype($settlementUploaded)), __LINE__);
        }
        $this->SettlementUploaded = $settlementUploaded;
        
        return $this;
    }
    /**
     * Get IsRemoved value
     * @return bool|null
     */
    public function getIsRemoved(): ?bool
    {
        return $this->IsRemoved;
    }
    /**
     * Set IsRemoved value
     * @param bool $isRemoved
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setIsRemoved(?bool $isRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRemoved) && !is_bool($isRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRemoved, true), gettype($isRemoved)), __LINE__);
        }
        $this->IsRemoved = $isRemoved;
        
        return $this;
    }
    /**
     * Get IsDeleted value
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->IsDeleted;
    }
    /**
     * Set IsDeleted value
     * @param bool $isDeleted
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setIsDeleted(?bool $isDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->IsDeleted = $isDeleted;
        
        return $this;
    }
    /**
     * Get IsLocked value
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->IsLocked;
    }
    /**
     * Set IsLocked value
     * @param bool $isLocked
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setIsLocked(?bool $isLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLocked) && !is_bool($isLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLocked, true), gettype($isLocked)), __LINE__);
        }
        $this->IsLocked = $isLocked;
        
        return $this;
    }
    /**
     * Get LockReasonId value
     * @return int|null
     */
    public function getLockReasonId(): ?int
    {
        return $this->LockReasonId;
    }
    /**
     * Set LockReasonId value
     * @param int $lockReasonId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
     */
    public function setLockReasonId(?int $lockReasonId = null): self
    {
        // validation for constraint: int
        if (!is_null($lockReasonId) && !(is_int($lockReasonId) || ctype_digit($lockReasonId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockReasonId, true), gettype($lockReasonId)), __LINE__);
        }
        $this->LockReasonId = $lockReasonId;
        
        return $this;
    }
}
