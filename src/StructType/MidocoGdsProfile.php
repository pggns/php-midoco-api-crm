<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGdsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoGdsProfile extends CustomerProfileDTO
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The MidocoCustomerProfileAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerProfileAttribute
     * @var \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO[]
     */
    protected ?array $MidocoCustomerProfileAttribute = null;
    /**
     * The MidocoCrmCustomerLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerLink
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[]
     */
    protected ?array $MidocoCrmCustomerLink = null;
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
     * Constructor method for MidocoGdsProfile
     * @uses MidocoGdsProfile::setMidocoCrmCustomer()
     * @uses MidocoGdsProfile::setMidocoCustomerProfileAttribute()
     * @uses MidocoGdsProfile::setMidocoCrmCustomerLink()
     * @uses MidocoGdsProfile::setMidocoFrequentFlyerNumber()
     * @uses MidocoGdsProfile::setMidocoCrmAddress()
     * @uses MidocoGdsProfile::setMidocoContactEntry()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO[] $midocoCustomerProfileAttribute
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?array $midocoCustomerProfileAttribute = null, ?array $midocoCrmCustomerLink = null, ?array $midocoFrequentFlyerNumber = null, ?array $midocoCrmAddress = null, ?array $midocoContactEntry = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCustomerProfileAttribute($midocoCustomerProfileAttribute)
            ->setMidocoCrmCustomerLink($midocoCrmCustomerLink)
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoContactEntry($midocoContactEntry);
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCustomerProfileAttribute value
     * @return \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO[]
     */
    public function getMidocoCustomerProfileAttribute(): ?array
    {
        return $this->MidocoCustomerProfileAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerProfileAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerProfileAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerProfileAttributeForArrayConstraintFromSetMidocoCustomerProfileAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGdsProfileMidocoCustomerProfileAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoGdsProfileMidocoCustomerProfileAttributeItem instanceof \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO) {
                $invalidValues[] = is_object($midocoGdsProfileMidocoCustomerProfileAttributeItem) ? get_class($midocoGdsProfileMidocoCustomerProfileAttributeItem) : sprintf('%s(%s)', gettype($midocoGdsProfileMidocoCustomerProfileAttributeItem), var_export($midocoGdsProfileMidocoCustomerProfileAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerProfileAttribute property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerProfileAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO[] $midocoCustomerProfileAttribute
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
     */
    public function setMidocoCustomerProfileAttribute(?array $midocoCustomerProfileAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerProfileAttributeArrayErrorMessage = self::validateMidocoCustomerProfileAttributeForArrayConstraintFromSetMidocoCustomerProfileAttribute($midocoCustomerProfileAttribute))) {
            throw new InvalidArgumentException($midocoCustomerProfileAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerProfileAttribute = $midocoCustomerProfileAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerProfileAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
     */
    public function addToMidocoCustomerProfileAttribute(\Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerProfileAttribute property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustProfileAttrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerProfileAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerLink value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[]
     */
    public function getMidocoCrmCustomerLink(): ?array
    {
        return $this->MidocoCrmCustomerLink;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCustomerLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCustomerLink method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCustomerLinkForArrayConstraintFromSetMidocoCrmCustomerLink(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGdsProfileMidocoCrmCustomerLinkItem) {
            // validation for constraint: itemType
            if (!$midocoGdsProfileMidocoCrmCustomerLinkItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO) {
                $invalidValues[] = is_object($midocoGdsProfileMidocoCrmCustomerLinkItem) ? get_class($midocoGdsProfileMidocoCrmCustomerLinkItem) : sprintf('%s(%s)', gettype($midocoGdsProfileMidocoCrmCustomerLinkItem), var_export($midocoGdsProfileMidocoCrmCustomerLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
     */
    public function setMidocoCrmCustomerLink(?array $midocoCrmCustomerLink = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCustomerLinkArrayErrorMessage = self::validateMidocoCrmCustomerLinkForArrayConstraintFromSetMidocoCrmCustomerLink($midocoCrmCustomerLink))) {
            throw new InvalidArgumentException($midocoCrmCustomerLinkArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCustomerLink = $midocoCrmCustomerLink;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
     */
    public function addToMidocoCrmCustomerLink(\Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCustomerLink[] = $item;
        
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
        foreach ($values as $midocoGdsProfileMidocoFrequentFlyerNumberItem) {
            // validation for constraint: itemType
            if (!$midocoGdsProfileMidocoFrequentFlyerNumberItem instanceof \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO) {
                $invalidValues[] = is_object($midocoGdsProfileMidocoFrequentFlyerNumberItem) ? get_class($midocoGdsProfileMidocoFrequentFlyerNumberItem) : sprintf('%s(%s)', gettype($midocoGdsProfileMidocoFrequentFlyerNumberItem), var_export($midocoGdsProfileMidocoFrequentFlyerNumberItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
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
        foreach ($values as $midocoGdsProfileMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$midocoGdsProfileMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($midocoGdsProfileMidocoCrmAddressItem) ? get_class($midocoGdsProfileMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($midocoGdsProfileMidocoCrmAddressItem), var_export($midocoGdsProfileMidocoCrmAddressItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
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
        foreach ($values as $midocoGdsProfileMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$midocoGdsProfileMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($midocoGdsProfileMidocoContactEntryItem) ? get_class($midocoGdsProfileMidocoContactEntryItem) : sprintf('%s(%s)', gettype($midocoGdsProfileMidocoContactEntryItem), var_export($midocoGdsProfileMidocoContactEntryItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGdsProfile
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
}
