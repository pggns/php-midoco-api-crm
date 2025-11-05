<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportRawCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportRawCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
     */
    protected \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer;
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
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
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
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * The MidocoCrmBonusCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmBonusCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[]
     */
    protected ?array $MidocoCrmBonusCard = null;
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
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice[]
     */
    protected ?array $MidocoCrmNotice = null;
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
     * The MidocoAssignCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO[]
     */
    protected ?array $MidocoAssignCustomer = null;
    /**
     * The MidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerPayment
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $MidocoCrmCustomerPayment = null;
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
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO[]
     */
    protected ?array $MidocoCrmPersonTraveller = null;
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Crm\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * The MidocoFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFrequentFlyerNumber
     * @var \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[]
     */
    protected ?array $MidocoFrequentFlyerNumber = null;
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMandate[]
     */
    protected ?array $MidocoMandate = null;
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[]
     */
    protected ?array $MidocoCustomerMf = null;
    /**
     * The AgencyProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AgencyProperties
     * @var \Pggns\MidocoApi\Crm\StructType\AgencyProperties|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AgencyProperties $AgencyProperties = null;
    /**
     * The SaveMidocoAgencyDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: SaveMidocoAgencyDetails
     * @var \Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO $SaveMidocoAgencyDetails = null;
    /**
     * The collectiveInvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $collectiveInvoice = null;
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[]
     */
    protected ?array $MidocoAgencyCommission = null;
    /**
     * The MidocoAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCooperationHistory
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory[]
     */
    protected ?array $MidocoAgencyCooperationHistory = null;
    /**
     * The customerCommissionId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $customerCommissionId = null;
    /**
     * The useDebitorNoInSearch
     * @var bool|null
     */
    protected ?bool $useDebitorNoInSearch = null;
    /**
     * The useEmailInSearch
     * @var bool|null
     */
    protected ?bool $useEmailInSearch = null;
    /**
     * The setDefaultContact
     * @var bool|null
     */
    protected ?bool $setDefaultContact = null;
    /**
     * The onlyNew
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyNew = null;
    /**
     * The updateCustInfo
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $updateCustInfo = null;
    /**
     * The matchOnlyCustomerId
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $matchOnlyCustomerId = null;
    /**
     * The useExtRefIdInSearch
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useExtRefIdInSearch = null;
    /**
     * Constructor method for ImportRawCustomerRequest
     * @uses ImportRawCustomerRequest::setMidocoCrmCustomer()
     * @uses ImportRawCustomerRequest::setMidocoCrmAddress()
     * @uses ImportRawCustomerRequest::setMidocoContactEntry()
     * @uses ImportRawCustomerRequest::setMidocoCrmCcCard()
     * @uses ImportRawCustomerRequest::setMidocoCrmDebitCard()
     * @uses ImportRawCustomerRequest::setMidocoCrmBonusCard()
     * @uses ImportRawCustomerRequest::setMidocoCrmCriteria()
     * @uses ImportRawCustomerRequest::setMidocoCrmNotice()
     * @uses ImportRawCustomerRequest::setMidocoContactHistory()
     * @uses ImportRawCustomerRequest::setMidocoAssignCustomer()
     * @uses ImportRawCustomerRequest::setMidocoCrmCustomerPayment()
     * @uses ImportRawCustomerRequest::setMidocoCustomerTravel()
     * @uses ImportRawCustomerRequest::setMidocoCrmPersonTraveller()
     * @uses ImportRawCustomerRequest::setMidocoDebitor()
     * @uses ImportRawCustomerRequest::setMidocoFrequentFlyerNumber()
     * @uses ImportRawCustomerRequest::setMidocoMandate()
     * @uses ImportRawCustomerRequest::setMidocoCustomerMf()
     * @uses ImportRawCustomerRequest::setAgencyProperties()
     * @uses ImportRawCustomerRequest::setSaveMidocoAgencyDetails()
     * @uses ImportRawCustomerRequest::setCollectiveInvoice()
     * @uses ImportRawCustomerRequest::setMidocoAgencyCommission()
     * @uses ImportRawCustomerRequest::setMidocoAgencyCooperationHistory()
     * @uses ImportRawCustomerRequest::setCustomerCommissionId()
     * @uses ImportRawCustomerRequest::setUseDebitorNoInSearch()
     * @uses ImportRawCustomerRequest::setUseEmailInSearch()
     * @uses ImportRawCustomerRequest::setSetDefaultContact()
     * @uses ImportRawCustomerRequest::setOnlyNew()
     * @uses ImportRawCustomerRequest::setUpdateCustInfo()
     * @uses ImportRawCustomerRequest::setMatchOnlyCustomerId()
     * @uses ImportRawCustomerRequest::setUseExtRefIdInSearch()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory[] $midocoContactHistory
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO[] $midocoAssignCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @param \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate[] $midocoMandate
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[] $midocoCustomerMf
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO $saveMidocoAgencyDetails
     * @param bool $collectiveInvoice
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory[] $midocoAgencyCooperationHistory
     * @param int[] $customerCommissionId
     * @param bool $useDebitorNoInSearch
     * @param bool $useEmailInSearch
     * @param bool $setDefaultContact
     * @param bool $onlyNew
     * @param bool $updateCustInfo
     * @param bool $matchOnlyCustomerId
     * @param bool $useExtRefIdInSearch
     */
    public function __construct(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer, ?array $midocoCrmAddress = null, ?array $midocoContactEntry = null, ?array $midocoCrmCcCard = null, ?array $midocoCrmDebitCard = null, ?array $midocoCrmBonusCard = null, ?array $midocoCrmCriteria = null, ?array $midocoCrmNotice = null, ?array $midocoContactHistory = null, ?array $midocoAssignCustomer = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null, ?array $midocoCustomerTravel = null, ?array $midocoCrmPersonTraveller = null, ?\Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor = null, ?array $midocoFrequentFlyerNumber = null, ?array $midocoMandate = null, ?array $midocoCustomerMf = null, ?\Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties = null, ?\Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO $saveMidocoAgencyDetails = null, ?bool $collectiveInvoice = null, ?array $midocoAgencyCommission = null, ?array $midocoAgencyCooperationHistory = null, ?array $customerCommissionId = null, ?bool $useDebitorNoInSearch = null, ?bool $useEmailInSearch = null, ?bool $setDefaultContact = null, ?bool $onlyNew = false, ?bool $updateCustInfo = false, ?bool $matchOnlyCustomerId = false, ?bool $useExtRefIdInSearch = false)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoCrmBonusCard($midocoCrmBonusCard)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoAssignCustomer($midocoAssignCustomer)
            ->setMidocoCrmCustomerPayment($midocoCrmCustomerPayment)
            ->setMidocoCustomerTravel($midocoCustomerTravel)
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller)
            ->setMidocoDebitor($midocoDebitor)
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber)
            ->setMidocoMandate($midocoMandate)
            ->setMidocoCustomerMf($midocoCustomerMf)
            ->setAgencyProperties($agencyProperties)
            ->setSaveMidocoAgencyDetails($saveMidocoAgencyDetails)
            ->setCollectiveInvoice($collectiveInvoice)
            ->setMidocoAgencyCommission($midocoAgencyCommission)
            ->setMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory)
            ->setCustomerCommissionId($customerCommissionId)
            ->setUseDebitorNoInSearch($useDebitorNoInSearch)
            ->setUseEmailInSearch($useEmailInSearch)
            ->setSetDefaultContact($setDefaultContact)
            ->setOnlyNew($onlyNew)
            ->setUpdateCustInfo($updateCustInfo)
            ->setMatchOnlyCustomerId($matchOnlyCustomerId)
            ->setUseExtRefIdInSearch($useExtRefIdInSearch);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
     */
    public function getMidocoCrmCustomer(): \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmCustomer(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
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
        foreach ($values as $importRawCustomerRequestMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmAddressItem) ? get_class($importRawCustomerRequestMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmAddressItem), var_export($importRawCustomerRequestMidocoCrmAddressItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
        foreach ($values as $importRawCustomerRequestMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoContactEntryItem) ? get_class($importRawCustomerRequestMidocoContactEntryItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoContactEntryItem), var_export($importRawCustomerRequestMidocoContactEntryItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
        foreach ($values as $importRawCustomerRequestMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmCcCardItem) ? get_class($importRawCustomerRequestMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmCcCardItem), var_export($importRawCustomerRequestMidocoCrmCcCardItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
        foreach ($values as $importRawCustomerRequestMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmDebitCardItem) ? get_class($importRawCustomerRequestMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmDebitCardItem), var_export($importRawCustomerRequestMidocoCrmDebitCardItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * Get MidocoCrmBonusCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[]
     */
    public function getMidocoCrmBonusCard(): ?array
    {
        return $this->MidocoCrmBonusCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmBonusCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmBonusCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmBonusCardForArrayConstraintFromSetMidocoCrmBonusCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmBonusCardItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmBonusCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmBonusCardItem) ? get_class($importRawCustomerRequestMidocoCrmBonusCardItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmBonusCardItem), var_export($importRawCustomerRequestMidocoCrmBonusCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmBonusCard(?array $midocoCrmBonusCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmBonusCardArrayErrorMessage = self::validateMidocoCrmBonusCardForArrayConstraintFromSetMidocoCrmBonusCard($midocoCrmBonusCard))) {
            throw new InvalidArgumentException($midocoCrmBonusCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmBonusCard = $midocoCrmBonusCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmBonusCard(\Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmBonusCard[] = $item;
        
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
        foreach ($values as $importRawCustomerRequestMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmCriteriaItem) ? get_class($importRawCustomerRequestMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmCriteriaItem), var_export($importRawCustomerRequestMidocoCrmCriteriaItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
        foreach ($values as $importRawCustomerRequestMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmNoticeItem) ? get_class($importRawCustomerRequestMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmNoticeItem), var_export($importRawCustomerRequestMidocoCrmNoticeItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
        foreach ($values as $importRawCustomerRequestMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoContactHistoryItem) ? get_class($importRawCustomerRequestMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoContactHistoryItem), var_export($importRawCustomerRequestMidocoContactHistoryItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * Get MidocoAssignCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO[]
     */
    public function getMidocoAssignCustomer(): ?array
    {
        return $this->MidocoAssignCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAssignCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignCustomerForArrayConstraintFromSetMidocoAssignCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoAssignCustomerItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoAssignCustomerItem instanceof \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoAssignCustomerItem) ? get_class($importRawCustomerRequestMidocoAssignCustomerItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoAssignCustomerItem), var_export($importRawCustomerRequestMidocoAssignCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO[] $midocoAssignCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoAssignCustomer(?array $midocoAssignCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignCustomerArrayErrorMessage = self::validateMidocoAssignCustomerForArrayConstraintFromSetMidocoAssignCustomer($midocoAssignCustomer))) {
            throw new InvalidArgumentException($midocoAssignCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignCustomer = $midocoAssignCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoAssignCustomer(\Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustomerAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerPayment value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment|null
     */
    public function getMidocoCrmCustomerPayment(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment
    {
        return $this->MidocoCrmCustomerPayment;
    }
    /**
     * Set MidocoCrmCustomerPayment value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmCustomerPayment(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomerPayment $midocoCrmCustomerPayment = null): self
    {
        $this->MidocoCrmCustomerPayment = $midocoCrmCustomerPayment;
        
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
        foreach ($values as $importRawCustomerRequestMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCustomerTravelItem) ? get_class($importRawCustomerRequestMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCustomerTravelItem), var_export($importRawCustomerRequestMidocoCustomerTravelItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
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
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO[]
     */
    public function getMidocoCrmPersonTraveller(): ?array
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTraveller method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerForArrayConstraintFromSetMidocoCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCrmPersonTravellerItem) ? get_class($importRawCustomerRequestMidocoCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCrmPersonTravellerItem), var_export($importRawCustomerRequestMidocoCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCrmPersonTraveller(?array $midocoCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerArrayErrorMessage = self::validateMidocoCrmPersonTravellerForArrayConstraintFromSetMidocoCrmPersonTraveller($midocoCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCrmPersonTraveller(\Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmPersonTravellerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Crm\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\Crm\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Get MidocoFrequentFlyerNumber value
     * @return \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[]
     */
    public function getMidocoFrequentFlyerNumber(): ?array
    {
        return $this->MidocoFrequentFlyerNumber;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFrequentFlyerNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFrequentFlyerNumber method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFrequentFlyerNumberForArrayConstraintFromSetMidocoFrequentFlyerNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoFrequentFlyerNumberItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoFrequentFlyerNumberItem instanceof \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoFrequentFlyerNumberItem) ? get_class($importRawCustomerRequestMidocoFrequentFlyerNumberItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoFrequentFlyerNumberItem), var_export($importRawCustomerRequestMidocoFrequentFlyerNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoFrequentFlyerNumber(?array $midocoFrequentFlyerNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFrequentFlyerNumberArrayErrorMessage = self::validateMidocoFrequentFlyerNumberForArrayConstraintFromSetMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber))) {
            throw new InvalidArgumentException($midocoFrequentFlyerNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoFrequentFlyerNumber = $midocoFrequentFlyerNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoFrequentFlyerNumber(\Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFrequentFlyerNumber[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMandate[]
     */
    public function getMidocoMandate(): ?array
    {
        return $this->MidocoMandate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMandate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMandate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMandateForArrayConstraintFromSetMidocoMandate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoMandateItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoMandateItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoMandate) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoMandateItem) ? get_class($importRawCustomerRequestMidocoMandateItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoMandateItem), var_export($importRawCustomerRequestMidocoMandateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoMandate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate[] $midocoMandate
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoMandate(?array $midocoMandate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMandateArrayErrorMessage = self::validateMidocoMandateForArrayConstraintFromSetMidocoMandate($midocoMandate))) {
            throw new InvalidArgumentException($midocoMandateArrayErrorMessage, __LINE__);
        }
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Add item to MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoMandate(\Pggns\MidocoApi\Crm\StructType\MidocoMandate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoMandate) {
            throw new InvalidArgumentException(sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoMandate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMandate[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[]
     */
    public function getMidocoCustomerMf(): ?array
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMf method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMfForArrayConstraintFromSetMidocoCustomerMf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoCustomerMfItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoCustomerMfItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoCustomerMfItem) ? get_class($importRawCustomerRequestMidocoCustomerMfItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoCustomerMfItem), var_export($importRawCustomerRequestMidocoCustomerMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf[] $midocoCustomerMf
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoCustomerMf(?array $midocoCustomerMf = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMfArrayErrorMessage = self::validateMidocoCustomerMfForArrayConstraintFromSetMidocoCustomerMf($midocoCustomerMf))) {
            throw new InvalidArgumentException($midocoCustomerMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoCustomerMf(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMf[] = $item;
        
        return $this;
    }
    /**
     * Get AgencyProperties value
     * @return \Pggns\MidocoApi\Crm\StructType\AgencyProperties|null
     */
    public function getAgencyProperties(): ?\Pggns\MidocoApi\Crm\StructType\AgencyProperties
    {
        return $this->AgencyProperties;
    }
    /**
     * Set AgencyProperties value
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setAgencyProperties(?\Pggns\MidocoApi\Crm\StructType\AgencyProperties $agencyProperties = null): self
    {
        $this->AgencyProperties = $agencyProperties;
        
        return $this;
    }
    /**
     * Get SaveMidocoAgencyDetails value
     * @return \Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO|null
     */
    public function getSaveMidocoAgencyDetails(): ?\Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO
    {
        return $this->SaveMidocoAgencyDetails;
    }
    /**
     * Set SaveMidocoAgencyDetails value
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO $saveMidocoAgencyDetails
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setSaveMidocoAgencyDetails(?\Pggns\MidocoApi\Crm\StructType\AgencyDetailDTO $saveMidocoAgencyDetails = null): self
    {
        $this->SaveMidocoAgencyDetails = $saveMidocoAgencyDetails;
        
        return $this;
    }
    /**
     * Get collectiveInvoice value
     * @return bool|null
     */
    public function getCollectiveInvoice(): ?bool
    {
        return $this->collectiveInvoice;
    }
    /**
     * Set collectiveInvoice value
     * @param bool $collectiveInvoice
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setCollectiveInvoice(?bool $collectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoice) && !is_bool($collectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoice, true), gettype($collectiveInvoice)), __LINE__);
        }
        $this->collectiveInvoice = $collectiveInvoice;
        
        return $this;
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[]
     */
    public function getMidocoAgencyCommission(): ?array
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAgencyCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCommission method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCommissionForArrayConstraintFromSetMidocoAgencyCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoAgencyCommissionItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoAgencyCommissionItem instanceof \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoAgencyCommissionItem) ? get_class($importRawCustomerRequestMidocoAgencyCommissionItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoAgencyCommissionItem), var_export($importRawCustomerRequestMidocoAgencyCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoAgencyCommission(?array $midocoAgencyCommission = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCommissionArrayErrorMessage = self::validateMidocoAgencyCommissionForArrayConstraintFromSetMidocoAgencyCommission($midocoAgencyCommission))) {
            throw new InvalidArgumentException($midocoAgencyCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoAgencyCommission(\Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCommission[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAgencyCooperationHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory[]
     */
    public function getMidocoAgencyCooperationHistory(): ?array
    {
        return $this->MidocoAgencyCooperationHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAgencyCooperationHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCooperationHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCooperationHistoryForArrayConstraintFromSetMidocoAgencyCooperationHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestMidocoAgencyCooperationHistoryItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerRequestMidocoAgencyCooperationHistoryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory) {
                $invalidValues[] = is_object($importRawCustomerRequestMidocoAgencyCooperationHistoryItem) ? get_class($importRawCustomerRequestMidocoAgencyCooperationHistoryItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestMidocoAgencyCooperationHistoryItem), var_export($importRawCustomerRequestMidocoAgencyCooperationHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCooperationHistory property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCooperationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory[] $midocoAgencyCooperationHistory
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMidocoAgencyCooperationHistory(?array $midocoAgencyCooperationHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCooperationHistoryArrayErrorMessage = self::validateMidocoAgencyCooperationHistoryForArrayConstraintFromSetMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory))) {
            throw new InvalidArgumentException($midocoAgencyCooperationHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCooperationHistory = $midocoAgencyCooperationHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCooperationHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToMidocoAgencyCooperationHistory(\Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCooperationHistory property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCooperationHistory[] = $item;
        
        return $this;
    }
    /**
     * Get customerCommissionId value
     * @return int[]
     */
    public function getCustomerCommissionId(): ?array
    {
        return $this->customerCommissionId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomerCommissionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerCommissionId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerCommissionIdForArrayConstraintFromSetCustomerCommissionId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerRequestCustomerCommissionIdItem) {
            // validation for constraint: itemType
            if (!(is_int($importRawCustomerRequestCustomerCommissionIdItem) || ctype_digit($importRawCustomerRequestCustomerCommissionIdItem))) {
                $invalidValues[] = is_object($importRawCustomerRequestCustomerCommissionIdItem) ? get_class($importRawCustomerRequestCustomerCommissionIdItem) : sprintf('%s(%s)', gettype($importRawCustomerRequestCustomerCommissionIdItem), var_export($importRawCustomerRequestCustomerCommissionIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customerCommissionId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customerCommissionId value
     * @throws InvalidArgumentException
     * @param int[] $customerCommissionId
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setCustomerCommissionId(?array $customerCommissionId = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerCommissionIdArrayErrorMessage = self::validateCustomerCommissionIdForArrayConstraintFromSetCustomerCommissionId($customerCommissionId))) {
            throw new InvalidArgumentException($customerCommissionIdArrayErrorMessage, __LINE__);
        }
        $this->customerCommissionId = $customerCommissionId;
        
        return $this;
    }
    /**
     * Add item to customerCommissionId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function addToCustomerCommissionId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The customerCommissionId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customerCommissionId[] = $item;
        
        return $this;
    }
    /**
     * Get useDebitorNoInSearch value
     * @return bool|null
     */
    public function getUseDebitorNoInSearch(): ?bool
    {
        return $this->useDebitorNoInSearch;
    }
    /**
     * Set useDebitorNoInSearch value
     * @param bool $useDebitorNoInSearch
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setUseDebitorNoInSearch(?bool $useDebitorNoInSearch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useDebitorNoInSearch) && !is_bool($useDebitorNoInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useDebitorNoInSearch, true), gettype($useDebitorNoInSearch)), __LINE__);
        }
        $this->useDebitorNoInSearch = $useDebitorNoInSearch;
        
        return $this;
    }
    /**
     * Get useEmailInSearch value
     * @return bool|null
     */
    public function getUseEmailInSearch(): ?bool
    {
        return $this->useEmailInSearch;
    }
    /**
     * Set useEmailInSearch value
     * @param bool $useEmailInSearch
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setUseEmailInSearch(?bool $useEmailInSearch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useEmailInSearch) && !is_bool($useEmailInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useEmailInSearch, true), gettype($useEmailInSearch)), __LINE__);
        }
        $this->useEmailInSearch = $useEmailInSearch;
        
        return $this;
    }
    /**
     * Get setDefaultContact value
     * @return bool|null
     */
    public function getSetDefaultContact(): ?bool
    {
        return $this->setDefaultContact;
    }
    /**
     * Set setDefaultContact value
     * @param bool $setDefaultContact
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setSetDefaultContact(?bool $setDefaultContact = null): self
    {
        // validation for constraint: boolean
        if (!is_null($setDefaultContact) && !is_bool($setDefaultContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($setDefaultContact, true), gettype($setDefaultContact)), __LINE__);
        }
        $this->setDefaultContact = $setDefaultContact;
        
        return $this;
    }
    /**
     * Get onlyNew value
     * @return bool|null
     */
    public function getOnlyNew(): ?bool
    {
        return $this->onlyNew;
    }
    /**
     * Set onlyNew value
     * @param bool $onlyNew
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setOnlyNew(?bool $onlyNew = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyNew) && !is_bool($onlyNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyNew, true), gettype($onlyNew)), __LINE__);
        }
        $this->onlyNew = $onlyNew;
        
        return $this;
    }
    /**
     * Get updateCustInfo value
     * @return bool|null
     */
    public function getUpdateCustInfo(): ?bool
    {
        return $this->updateCustInfo;
    }
    /**
     * Set updateCustInfo value
     * @param bool $updateCustInfo
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setUpdateCustInfo(?bool $updateCustInfo = false): self
    {
        // validation for constraint: boolean
        if (!is_null($updateCustInfo) && !is_bool($updateCustInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateCustInfo, true), gettype($updateCustInfo)), __LINE__);
        }
        $this->updateCustInfo = $updateCustInfo;
        
        return $this;
    }
    /**
     * Get matchOnlyCustomerId value
     * @return bool|null
     */
    public function getMatchOnlyCustomerId(): ?bool
    {
        return $this->matchOnlyCustomerId;
    }
    /**
     * Set matchOnlyCustomerId value
     * @param bool $matchOnlyCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setMatchOnlyCustomerId(?bool $matchOnlyCustomerId = false): self
    {
        // validation for constraint: boolean
        if (!is_null($matchOnlyCustomerId) && !is_bool($matchOnlyCustomerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($matchOnlyCustomerId, true), gettype($matchOnlyCustomerId)), __LINE__);
        }
        $this->matchOnlyCustomerId = $matchOnlyCustomerId;
        
        return $this;
    }
    /**
     * Get useExtRefIdInSearch value
     * @return bool|null
     */
    public function getUseExtRefIdInSearch(): ?bool
    {
        return $this->useExtRefIdInSearch;
    }
    /**
     * Set useExtRefIdInSearch value
     * @param bool $useExtRefIdInSearch
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest
     */
    public function setUseExtRefIdInSearch(?bool $useExtRefIdInSearch = false): self
    {
        // validation for constraint: boolean
        if (!is_null($useExtRefIdInSearch) && !is_bool($useExtRefIdInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useExtRefIdInSearch, true), gettype($useExtRefIdInSearch)), __LINE__);
        }
        $this->useExtRefIdInSearch = $useExtRefIdInSearch;
        
        return $this;
    }
}
