<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitCardsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDebitCards --- returns the list of debit cards for a customer transmitted as parameter by customer id and the addresses
 * @subpackage Structs
 */
class GetDebitCardsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    protected array $MidocoCrmDebitCard = [];
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    protected array $MidocoCrmAddress = [];
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $MidocoCrmCompany = null;
    /**
     * The MidocoCrmPerson
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmPerson
     * @var \Pggns\MidocoApi\Crm\StructType\CrmPersonDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmPersonDTO $MidocoCrmPerson = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[]
     */
    protected array $MidocoContactEntry = [];
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMandate|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMandate $MidocoMandate = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * Constructor method for GetDebitCardsResponse
     * @uses GetDebitCardsResponse::setMidocoCrmDebitCard()
     * @uses GetDebitCardsResponse::setMidocoCrmAddress()
     * @uses GetDebitCardsResponse::setMidocoCrmCompany()
     * @uses GetDebitCardsResponse::setMidocoCrmPerson()
     * @uses GetDebitCardsResponse::setMidocoContactEntry()
     * @uses GetDebitCardsResponse::setMidocoMandate()
     * @uses GetDebitCardsResponse::setSalutationId()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany
     * @param \Pggns\MidocoApi\Crm\StructType\CrmPersonDTO $midocoCrmPerson
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     * @param string $salutationId
     */
    public function __construct(array $midocoCrmDebitCard = [], array $midocoCrmAddress = [], ?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany = null, ?\Pggns\MidocoApi\Crm\StructType\CrmPersonDTO $midocoCrmPerson = null, array $midocoContactEntry = [], ?\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate = null, ?string $salutationId = null)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoCrmCompany($midocoCrmCompany)
            ->setMidocoCrmPerson($midocoCrmPerson)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoMandate($midocoMandate)
            ->setSalutationId($salutationId);
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDebitCardsResponseMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$getDebitCardsResponseMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($getDebitCardsResponseMidocoCrmDebitCardItem) ? get_class($getDebitCardsResponseMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($getDebitCardsResponseMidocoCrmDebitCardItem), var_export($getDebitCardsResponseMidocoCrmDebitCardItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmDebitCard(array $midocoCrmDebitCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
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
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDebitCardsResponseMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$getDebitCardsResponseMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($getDebitCardsResponseMidocoCrmAddressItem) ? get_class($getDebitCardsResponseMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($getDebitCardsResponseMidocoCrmAddressItem), var_export($getDebitCardsResponseMidocoCrmAddressItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmAddress(array $midocoCrmAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
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
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO|null
     */
    public function getMidocoCrmCompany(): ?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * Set MidocoCrmCompany value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmCompany(?\Pggns\MidocoApi\Crm\StructType\CrmCompanyDTO $midocoCrmCompany = null): self
    {
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
    /**
     * Get MidocoCrmPerson value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmPersonDTO|null
     */
    public function getMidocoCrmPerson(): ?\Pggns\MidocoApi\Crm\StructType\CrmPersonDTO
    {
        return $this->MidocoCrmPerson;
    }
    /**
     * Set MidocoCrmPerson value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmPersonDTO $midocoCrmPerson
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmPerson(?\Pggns\MidocoApi\Crm\StructType\CrmPersonDTO $midocoCrmPerson = null): self
    {
        $this->MidocoCrmPerson = $midocoCrmPerson;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDebitCardsResponseMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$getDebitCardsResponseMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($getDebitCardsResponseMidocoContactEntryItem) ? get_class($getDebitCardsResponseMidocoContactEntryItem) : sprintf('%s(%s)', gettype($getDebitCardsResponseMidocoContactEntryItem), var_export($getDebitCardsResponseMidocoContactEntryItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
     */
    public function setMidocoContactEntry(array $midocoContactEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
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
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMandate|null
     */
    public function getMidocoMandate(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
     */
    public function setMidocoMandate(?\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate = null): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
}