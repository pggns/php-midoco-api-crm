<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalCustomerInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: mapping external customer to Midoco Crm
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalCustomerInfo extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $MidocoCrmDebitCard = null;
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[]
     */
    protected ?array $MidocoCrmCriteria = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
    /**
     * The htmlTooltip
     * @var string|null
     */
    protected ?string $htmlTooltip = null;
    /**
     * The personenNr
     * @var string|null
     */
    protected ?string $personenNr = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The accountModel
     * @var string|null
     */
    protected ?string $accountModel = null;
    /**
     * The packageNr
     * @var string|null
     */
    protected ?string $packageNr = null;
    /**
     * The accountOpeningDay
     * @var string|null
     */
    protected ?string $accountOpeningDay = null;
    /**
     * The bankCode
     * @var string|null
     */
    protected ?string $bankCode = null;
    /**
     * The bankBic
     * @var string|null
     */
    protected ?string $bankBic = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The institute
     * @var string|null
     */
    protected ?string $institute = null;
    /**
     * The terminationDate
     * @var string|null
     */
    protected ?string $terminationDate = null;
    /**
     * The mediatorInfo
     * @var string|null
     */
    protected ?string $mediatorInfo = null;
    /**
     * The payback
     * @var bool|null
     */
    protected ?bool $payback = null;
    /**
     * Constructor method for ExternalCustomerInfo
     * @uses ExternalCustomerInfo::setMidocoCrmCustomer()
     * @uses ExternalCustomerInfo::setMidocoCrmDebitCard()
     * @uses ExternalCustomerInfo::setMidocoCrmCriteria()
     * @uses ExternalCustomerInfo::setMidocoContactEntry()
     * @uses ExternalCustomerInfo::setHtmlTooltip()
     * @uses ExternalCustomerInfo::setPersonenNr()
     * @uses ExternalCustomerInfo::setBirthday()
     * @uses ExternalCustomerInfo::setCreationDate()
     * @uses ExternalCustomerInfo::setModifyDate()
     * @uses ExternalCustomerInfo::setIban()
     * @uses ExternalCustomerInfo::setAccountOwner()
     * @uses ExternalCustomerInfo::setAccountModel()
     * @uses ExternalCustomerInfo::setPackageNr()
     * @uses ExternalCustomerInfo::setAccountOpeningDay()
     * @uses ExternalCustomerInfo::setBankCode()
     * @uses ExternalCustomerInfo::setBankBic()
     * @uses ExternalCustomerInfo::setBankName()
     * @uses ExternalCustomerInfo::setInstitute()
     * @uses ExternalCustomerInfo::setTerminationDate()
     * @uses ExternalCustomerInfo::setMediatorInfo()
     * @uses ExternalCustomerInfo::setPayback()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param string $htmlTooltip
     * @param string $personenNr
     * @param string $birthday
     * @param string $creationDate
     * @param string $modifyDate
     * @param string $iban
     * @param string $accountOwner
     * @param string $accountModel
     * @param string $packageNr
     * @param string $accountOpeningDay
     * @param string $bankCode
     * @param string $bankBic
     * @param string $bankName
     * @param string $institute
     * @param string $terminationDate
     * @param string $mediatorInfo
     * @param bool $payback
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null, ?array $midocoCrmCriteria = null, ?array $midocoContactEntry = null, ?string $htmlTooltip = null, ?string $personenNr = null, ?string $birthday = null, ?string $creationDate = null, ?string $modifyDate = null, ?string $iban = null, ?string $accountOwner = null, ?string $accountModel = null, ?string $packageNr = null, ?string $accountOpeningDay = null, ?string $bankCode = null, ?string $bankBic = null, ?string $bankName = null, ?string $institute = null, ?string $terminationDate = null, ?string $mediatorInfo = null, ?bool $payback = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setHtmlTooltip($htmlTooltip)
            ->setPersonenNr($personenNr)
            ->setBirthday($birthday)
            ->setCreationDate($creationDate)
            ->setModifyDate($modifyDate)
            ->setIban($iban)
            ->setAccountOwner($accountOwner)
            ->setAccountModel($accountModel)
            ->setPackageNr($packageNr)
            ->setAccountOpeningDay($accountOpeningDay)
            ->setBankCode($bankCode)
            ->setBankBic($bankBic)
            ->setBankName($bankName)
            ->setInstitute($institute)
            ->setTerminationDate($terminationDate)
            ->setMediatorInfo($mediatorInfo)
            ->setPayback($payback);
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
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard|null
     */
    public function getMidocoCrmDebitCard(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setMidocoCrmDebitCard(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $midocoCrmDebitCard = null): self
    {
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[]
     */
    public function getMidocoCrmCriteria(): ?array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalCustomerInfoMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$externalCustomerInfoMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($externalCustomerInfoMidocoCrmCriteriaItem) ? get_class($externalCustomerInfoMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($externalCustomerInfoMidocoCrmCriteriaItem), var_export($externalCustomerInfoMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setMidocoCrmCriteria(?array $midocoCrmCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria $item
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): ?array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $externalCustomerInfoMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$externalCustomerInfoMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($externalCustomerInfoMidocoContactEntryItem) ? get_class($externalCustomerInfoMidocoContactEntryItem) : sprintf('%s(%s)', gettype($externalCustomerInfoMidocoContactEntryItem), var_export($externalCustomerInfoMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setMidocoContactEntry(?array $midocoContactEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get htmlTooltip value
     * @return string|null
     */
    public function getHtmlTooltip(): ?string
    {
        return $this->htmlTooltip;
    }
    /**
     * Set htmlTooltip value
     * @param string $htmlTooltip
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setHtmlTooltip(?string $htmlTooltip = null): self
    {
        // validation for constraint: string
        if (!is_null($htmlTooltip) && !is_string($htmlTooltip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($htmlTooltip, true), gettype($htmlTooltip)), __LINE__);
        }
        $this->htmlTooltip = $htmlTooltip;
        
        return $this;
    }
    /**
     * Get personenNr value
     * @return string|null
     */
    public function getPersonenNr(): ?string
    {
        return $this->personenNr;
    }
    /**
     * Set personenNr value
     * @param string $personenNr
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setPersonenNr(?string $personenNr = null): self
    {
        // validation for constraint: string
        if (!is_null($personenNr) && !is_string($personenNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personenNr, true), gettype($personenNr)), __LINE__);
        }
        $this->personenNr = $personenNr;
        
        return $this;
    }
    /**
     * Get birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->birthday = $birthday;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
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
     * Get accountOwner value
     * @return string|null
     */
    public function getAccountOwner(): ?string
    {
        return $this->accountOwner;
    }
    /**
     * Set accountOwner value
     * @param string $accountOwner
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setAccountOwner(?string $accountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOwner) && !is_string($accountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOwner, true), gettype($accountOwner)), __LINE__);
        }
        $this->accountOwner = $accountOwner;
        
        return $this;
    }
    /**
     * Get accountModel value
     * @return string|null
     */
    public function getAccountModel(): ?string
    {
        return $this->accountModel;
    }
    /**
     * Set accountModel value
     * @param string $accountModel
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setAccountModel(?string $accountModel = null): self
    {
        // validation for constraint: string
        if (!is_null($accountModel) && !is_string($accountModel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountModel, true), gettype($accountModel)), __LINE__);
        }
        $this->accountModel = $accountModel;
        
        return $this;
    }
    /**
     * Get packageNr value
     * @return string|null
     */
    public function getPackageNr(): ?string
    {
        return $this->packageNr;
    }
    /**
     * Set packageNr value
     * @param string $packageNr
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setPackageNr(?string $packageNr = null): self
    {
        // validation for constraint: string
        if (!is_null($packageNr) && !is_string($packageNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageNr, true), gettype($packageNr)), __LINE__);
        }
        $this->packageNr = $packageNr;
        
        return $this;
    }
    /**
     * Get accountOpeningDay value
     * @return string|null
     */
    public function getAccountOpeningDay(): ?string
    {
        return $this->accountOpeningDay;
    }
    /**
     * Set accountOpeningDay value
     * @param string $accountOpeningDay
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setAccountOpeningDay(?string $accountOpeningDay = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOpeningDay) && !is_string($accountOpeningDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOpeningDay, true), gettype($accountOpeningDay)), __LINE__);
        }
        $this->accountOpeningDay = $accountOpeningDay;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
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
    /**
     * Get bankBic value
     * @return string|null
     */
    public function getBankBic(): ?string
    {
        return $this->bankBic;
    }
    /**
     * Set bankBic value
     * @param string $bankBic
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setBankBic(?string $bankBic = null): self
    {
        // validation for constraint: string
        if (!is_null($bankBic) && !is_string($bankBic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankBic, true), gettype($bankBic)), __LINE__);
        }
        $this->bankBic = $bankBic;
        
        return $this;
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        
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
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
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
     * Get terminationDate value
     * @return string|null
     */
    public function getTerminationDate(): ?string
    {
        return $this->terminationDate;
    }
    /**
     * Set terminationDate value
     * @param string $terminationDate
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setTerminationDate(?string $terminationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($terminationDate) && !is_string($terminationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminationDate, true), gettype($terminationDate)), __LINE__);
        }
        $this->terminationDate = $terminationDate;
        
        return $this;
    }
    /**
     * Get mediatorInfo value
     * @return string|null
     */
    public function getMediatorInfo(): ?string
    {
        return $this->mediatorInfo;
    }
    /**
     * Set mediatorInfo value
     * @param string $mediatorInfo
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setMediatorInfo(?string $mediatorInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorInfo) && !is_string($mediatorInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorInfo, true), gettype($mediatorInfo)), __LINE__);
        }
        $this->mediatorInfo = $mediatorInfo;
        
        return $this;
    }
    /**
     * Get payback value
     * @return bool|null
     */
    public function getPayback(): ?bool
    {
        return $this->payback;
    }
    /**
     * Set payback value
     * @param bool $payback
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalCustomerInfo
     */
    public function setPayback(?bool $payback = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payback) && !is_bool($payback)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payback, true), gettype($payback)), __LINE__);
        }
        $this->payback = $payback;
        
        return $this;
    }
}
