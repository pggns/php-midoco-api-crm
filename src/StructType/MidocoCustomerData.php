<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerData StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerData extends CustomerDTO
{
    /**
     * The MidocoCrmPerson
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPerson
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson[]
     */
    protected ?array $MidocoCrmPerson = null;
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice[]
     */
    protected ?array $MidocoCrmNotice = null;
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    protected ?array $MidocoCrmAddress = null;
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[]
     */
    protected ?array $MidocoCrmCcCard = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany[]
     */
    protected ?array $MidocoCrmCompany = null;
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
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Crm\StructType\DebitorDTO[]
     */
    protected ?array $MidocoDebitor = null;
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory[]
     */
    protected ?array $MidocoContactHistory = null;
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment[]
     */
    protected ?array $MidocoCrmCustomerPayment = null;
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[]
     */
    protected ?array $MidocoCustomerTravel = null;
    /**
     * Constructor method for MidocoCustomerData
     * @uses MidocoCustomerData::setMidocoCrmPerson()
     * @uses MidocoCustomerData::setMidocoCrmNotice()
     * @uses MidocoCustomerData::setMidocoCrmAddress()
     * @uses MidocoCustomerData::setMidocoCrmCcCard()
     * @uses MidocoCustomerData::setMidocoCrmCompany()
     * @uses MidocoCustomerData::setMidocoCrmCriteria()
     * @uses MidocoCustomerData::setMidocoCrmDebitCard()
     * @uses MidocoCustomerData::setMidocoDebitor()
     * @uses MidocoCustomerData::setMidocoContactHistory()
     * @uses MidocoCustomerData::setMidocoCrmCustomerPayment()
     * @uses MidocoCustomerData::setMidocoCustomerTravel()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson[] $midocoCrmPerson
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany[] $midocoCrmCompany
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO[] $midocoDebitor
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory[] $midocoContactHistory
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment[] $midocoCrmCustomerPayment
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     */
    public function __construct(?array $midocoCrmPerson = null, ?array $midocoCrmNotice = null, ?array $midocoCrmAddress = null, ?array $midocoCrmCcCard = null, ?array $midocoCrmCompany = null, ?array $midocoCrmCriteria = null, ?array $midocoCrmDebitCard = null, ?array $midocoDebitor = null, ?array $midocoContactHistory = null, ?array $midocoCrmCustomerPayment = null, ?array $midocoCustomerTravel = null)
    {
        $this
            ->setMidocoCrmPerson($midocoCrmPerson)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setMidocoCrmCompany($midocoCrmCompany)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoDebitor($midocoDebitor)
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setMidocoCustomerTravel($midocoCustomerTravel);
    }
    /**
     * Get MidocoCrmPerson value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson[]
     */
    public function getMidocoCrmPerson(): ?array
    {
        return $this->MidocoCrmPerson;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPerson method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonForArrayConstraintFromSetMidocoCrmPerson(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmPersonItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmPersonItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmPersonItem) ? get_class($midocoCustomerDataMidocoCrmPersonItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmPersonItem), var_export($midocoCustomerDataMidocoCrmPersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPerson property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPerson value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson[] $midocoCrmPerson
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCrmPerson(?array $midocoCrmPerson = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonArrayErrorMessage = self::validateMidocoCrmPersonForArrayConstraintFromSetMidocoCrmPerson($midocoCrmPerson))) {
            throw new InvalidArgumentException($midocoCrmPersonArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPerson = $midocoCrmPerson;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPerson value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmPerson(\Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPerson property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmPerson, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPerson[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice[]
     */
    public function getMidocoCrmNotice(): ?array
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeForArrayConstraintFromSetMidocoCrmNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmNoticeItem) ? get_class($midocoCustomerDataMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmNoticeItem), var_export($midocoCustomerDataMidocoCrmNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCrmNotice(?array $midocoCrmNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeArrayErrorMessage = self::validateMidocoCrmNoticeForArrayConstraintFromSetMidocoCrmNotice($midocoCrmNotice))) {
            throw new InvalidArgumentException($midocoCrmNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmNotice(\Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): ?array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmAddressItem) ? get_class($midocoCustomerDataMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmAddressItem), var_export($midocoCustomerDataMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCrmAddress(?array $midocoCrmAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[]
     */
    public function getMidocoCrmCcCard(): ?array
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCcCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCcCardForArrayConstraintFromSetMidocoCrmCcCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCcCardItem) ? get_class($midocoCustomerDataMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCcCardItem), var_export($midocoCustomerDataMidocoCrmCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCrmCcCard(?array $midocoCrmCcCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCcCardArrayErrorMessage = self::validateMidocoCrmCcCardForArrayConstraintFromSetMidocoCrmCcCard($midocoCrmCcCard))) {
            throw new InvalidArgumentException($midocoCrmCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmCcCard(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCcCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany[]
     */
    public function getMidocoCrmCompany(): ?array
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCompany method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCompany method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCompanyForArrayConstraintFromSetMidocoCrmCompany(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmCompanyItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCompanyItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCompanyItem) ? get_class($midocoCustomerDataMidocoCrmCompanyItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCompanyItem), var_export($midocoCustomerDataMidocoCrmCompanyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCompany property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCompany value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany[] $midocoCrmCompany
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCrmCompany(?array $midocoCrmCompany = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCompanyArrayErrorMessage = self::validateMidocoCrmCompanyForArrayConstraintFromSetMidocoCrmCompany($midocoCrmCompany))) {
            throw new InvalidArgumentException($midocoCrmCompanyArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCompany value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmCompany(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCompany property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCompany, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCompany[] = $item;
        
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
        foreach ($values as $midocoCustomerDataMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCriteriaItem) ? get_class($midocoCustomerDataMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCriteriaItem), var_export($midocoCustomerDataMidocoCrmCriteriaItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
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
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): ?array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmDebitCardItem) ? get_class($midocoCustomerDataMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmDebitCardItem), var_export($midocoCustomerDataMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCrmDebitCard(?array $midocoCrmDebitCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Crm\StructType\DebitorDTO[]
     */
    public function getMidocoDebitor(): ?array
    {
        return $this->MidocoDebitor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorForArrayConstraintFromSetMidocoDebitor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoDebitorItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoDebitorItem instanceof \Pggns\MidocoApi\Crm\StructType\DebitorDTO) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoDebitorItem) ? get_class($midocoCustomerDataMidocoDebitorItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoDebitorItem), var_export($midocoCustomerDataMidocoDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Crm\StructType\DebitorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO[] $midocoDebitor
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoDebitor(?array $midocoDebitor = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorArrayErrorMessage = self::validateMidocoDebitorForArrayConstraintFromSetMidocoDebitor($midocoDebitor))) {
            throw new InvalidArgumentException($midocoDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoDebitor(\Pggns\MidocoApi\Crm\StructType\DebitorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\DebitorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Crm\StructType\DebitorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitor[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory[]
     */
    public function getMidocoContactHistory(): ?array
    {
        return $this->MidocoContactHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoContactHistoryItem) ? get_class($midocoCustomerDataMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoContactHistoryItem), var_export($midocoCustomerDataMidocoContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory[] $midocoContactHistory
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoContactHistory(?array $midocoContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactHistoryArrayErrorMessage = self::validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory($midocoContactHistory))) {
            throw new InvalidArgumentException($midocoContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoContactHistory(\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment[]
     */
    public function getMidocoCrmCustomerPayment(): ?array
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCustomerPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCustomerPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCustomerPaymentForArrayConstraintFromSetMidocoCrmCustomerPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCrmCustomerPaymentItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCrmCustomerPaymentItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCrmCustomerPaymentItem) ? get_class($midocoCustomerDataMidocoCrmCustomerPaymentItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCrmCustomerPaymentItem), var_export($midocoCustomerDataMidocoCrmCustomerPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCustomerPayment property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment[] $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCrmCustomerPayment(?array $midocoCrmCustomerPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCustomerPaymentArrayErrorMessage = self::validateMidocoCrmCustomerPaymentForArrayConstraintFromSetMidocoCrmCustomerPayment($midocoCrmCustomerPayment))) {
            throw new InvalidArgumentException($midocoCrmCustomerPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCustomerPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCrmCustomerPayment(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCustomerPayment property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCustomerPayment[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): ?array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintFromSetMidocoCustomerTravel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($midocoCustomerDataMidocoCustomerTravelItem) ? get_class($midocoCustomerDataMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($midocoCustomerDataMidocoCustomerTravelItem), var_export($midocoCustomerDataMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function setMidocoCustomerTravel(?array $midocoCustomerTravel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
}
