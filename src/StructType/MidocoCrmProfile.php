<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmProfile extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The ExternalProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ExternalProfile
     * @var \Pggns\MidocoApi\Crm\StructType\ExternalProfile[]
     */
    protected ?array $ExternalProfile = null;
    /**
     * The ProfileAttributes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ProfileAttributes
     * @var \Pggns\MidocoApi\Crm\StructType\ProfileAttributes|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ProfileAttributes $ProfileAttributes = null;
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
     * Constructor method for MidocoCrmProfile
     * @uses MidocoCrmProfile::setMidocoCrmCustomer()
     * @uses MidocoCrmProfile::setExternalProfile()
     * @uses MidocoCrmProfile::setProfileAttributes()
     * @uses MidocoCrmProfile::setMidocoCrmCustomerLink()
     * @uses MidocoCrmProfile::setMidocoFrequentFlyerNumber()
     * @uses MidocoCrmProfile::setMidocoCrmAddress()
     * @uses MidocoCrmProfile::setMidocoContactEntry()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\ExternalProfile[] $externalProfile
     * @param \Pggns\MidocoApi\Crm\StructType\ProfileAttributes $profileAttributes
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?array $externalProfile = null, ?\Pggns\MidocoApi\Crm\StructType\ProfileAttributes $profileAttributes = null, ?array $midocoCrmCustomerLink = null, ?array $midocoFrequentFlyerNumber = null, ?array $midocoCrmAddress = null, ?array $midocoContactEntry = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setExternalProfile($externalProfile)
            ->setProfileAttributes($profileAttributes)
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get ExternalProfile value
     * @return \Pggns\MidocoApi\Crm\StructType\ExternalProfile[]
     */
    public function getExternalProfile(): ?array
    {
        return $this->ExternalProfile;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalProfile method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalProfileForArrayConstraintFromSetExternalProfile(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmProfileExternalProfileItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileExternalProfileItem instanceof \Pggns\MidocoApi\Crm\StructType\ExternalProfile) {
                $invalidValues[] = is_object($midocoCrmProfileExternalProfileItem) ? get_class($midocoCrmProfileExternalProfileItem) : sprintf('%s(%s)', gettype($midocoCrmProfileExternalProfileItem), var_export($midocoCrmProfileExternalProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalProfile property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ExternalProfile, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalProfile value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ExternalProfile[] $externalProfile
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
     */
    public function setExternalProfile(?array $externalProfile = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalProfileArrayErrorMessage = self::validateExternalProfileForArrayConstraintFromSetExternalProfile($externalProfile))) {
            throw new InvalidArgumentException($externalProfileArrayErrorMessage, __LINE__);
        }
        $this->ExternalProfile = $externalProfile;
        
        return $this;
    }
    /**
     * Add item to ExternalProfile value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ExternalProfile $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
     */
    public function addToExternalProfile(\Pggns\MidocoApi\Crm\StructType\ExternalProfile $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\ExternalProfile) {
            throw new InvalidArgumentException(sprintf('The ExternalProfile property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ExternalProfile, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalProfile[] = $item;
        
        return $this;
    }
    /**
     * Get ProfileAttributes value
     * @return \Pggns\MidocoApi\Crm\StructType\ProfileAttributes|null
     */
    public function getProfileAttributes(): ?\Pggns\MidocoApi\Crm\StructType\ProfileAttributes
    {
        return $this->ProfileAttributes;
    }
    /**
     * Set ProfileAttributes value
     * @param \Pggns\MidocoApi\Crm\StructType\ProfileAttributes $profileAttributes
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
     */
    public function setProfileAttributes(?\Pggns\MidocoApi\Crm\StructType\ProfileAttributes $profileAttributes = null): self
    {
        $this->ProfileAttributes = $profileAttributes;
        
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
        foreach ($values as $midocoCrmProfileMidocoCrmCustomerLinkItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoCrmCustomerLinkItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmCustomerLinkDTO) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoCrmCustomerLinkItem) ? get_class($midocoCrmProfileMidocoCrmCustomerLinkItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoCrmCustomerLinkItem), var_export($midocoCrmProfileMidocoCrmCustomerLinkItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
        foreach ($values as $midocoCrmProfileMidocoFrequentFlyerNumberItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoFrequentFlyerNumberItem instanceof \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoFrequentFlyerNumberItem) ? get_class($midocoCrmProfileMidocoFrequentFlyerNumberItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoFrequentFlyerNumberItem), var_export($midocoCrmProfileMidocoFrequentFlyerNumberItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
        foreach ($values as $midocoCrmProfileMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoCrmAddressItem) ? get_class($midocoCrmProfileMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoCrmAddressItem), var_export($midocoCrmProfileMidocoCrmAddressItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
        foreach ($values as $midocoCrmProfileMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoContactEntryItem) ? get_class($midocoCrmProfileMidocoContactEntryItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoContactEntryItem), var_export($midocoCrmProfileMidocoContactEntryItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmProfile
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
