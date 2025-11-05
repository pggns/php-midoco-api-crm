<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementSetting StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementSetting extends UmbrellaSettlementSettingDTO
{
    /**
     * The MidocoUmbrellaSettlementIncludedCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementIncludedCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer[]
     */
    protected ?array $MidocoUmbrellaSettlementIncludedCustomer = null;
    /**
     * The MidocoUmbrellaSettlementFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementFee
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[]
     */
    protected ?array $MidocoUmbrellaSettlementFee = null;
    /**
     * The LocalizableMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:LocalizableMessage
     * @var \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType[]
     */
    protected ?array $LocalizableMessage = null;
    /**
     * The referenced
     * Meta information extracted from the WSDL
     * - documentation: A referenced UmbrellaSettlementSetting must not be modified or deleted.
     * - default: false
     * @var bool|null
     */
    protected ?bool $referenced = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementSetting
     * @uses MidocoUmbrellaSettlementSetting::setMidocoUmbrellaSettlementIncludedCustomer()
     * @uses MidocoUmbrellaSettlementSetting::setMidocoUmbrellaSettlementFee()
     * @uses MidocoUmbrellaSettlementSetting::setLocalizableMessage()
     * @uses MidocoUmbrellaSettlementSetting::setReferenced()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer[] $midocoUmbrellaSettlementIncludedCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[] $midocoUmbrellaSettlementFee
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType[] $localizableMessage
     * @param bool $referenced
     */
    public function __construct(?array $midocoUmbrellaSettlementIncludedCustomer = null, ?array $midocoUmbrellaSettlementFee = null, ?array $localizableMessage = null, ?bool $referenced = false)
    {
        $this
            ->setMidocoUmbrellaSettlementIncludedCustomer($midocoUmbrellaSettlementIncludedCustomer)
            ->setMidocoUmbrellaSettlementFee($midocoUmbrellaSettlementFee)
            ->setLocalizableMessage($localizableMessage)
            ->setReferenced($referenced);
    }
    /**
     * Get MidocoUmbrellaSettlementIncludedCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer[]
     */
    public function getMidocoUmbrellaSettlementIncludedCustomer(): ?array
    {
        return $this->MidocoUmbrellaSettlementIncludedCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementIncludedCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementIncludedCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementIncludedCustomerForArrayConstraintFromSetMidocoUmbrellaSettlementIncludedCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementIncludedCustomerItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementIncludedCustomerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementIncludedCustomerItem) ? get_class($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementIncludedCustomerItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementIncludedCustomerItem), var_export($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementIncludedCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementIncludedCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementIncludedCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer[] $midocoUmbrellaSettlementIncludedCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
     */
    public function setMidocoUmbrellaSettlementIncludedCustomer(?array $midocoUmbrellaSettlementIncludedCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementIncludedCustomerArrayErrorMessage = self::validateMidocoUmbrellaSettlementIncludedCustomerForArrayConstraintFromSetMidocoUmbrellaSettlementIncludedCustomer($midocoUmbrellaSettlementIncludedCustomer))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementIncludedCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementIncludedCustomer = $midocoUmbrellaSettlementIncludedCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementIncludedCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
     */
    public function addToMidocoUmbrellaSettlementIncludedCustomer(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementIncludedCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementIncludedCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementIncludedCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaSettlementFee value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[]
     */
    public function getMidocoUmbrellaSettlementFee(): ?array
    {
        return $this->MidocoUmbrellaSettlementFee;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementFee method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementFeeForArrayConstraintFromSetMidocoUmbrellaSettlementFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementFeeItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementFeeItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementFeeItem) ? get_class($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementFeeItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementFeeItem), var_export($midocoUmbrellaSettlementSettingMidocoUmbrellaSettlementFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementFee property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[] $midocoUmbrellaSettlementFee
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
     */
    public function setMidocoUmbrellaSettlementFee(?array $midocoUmbrellaSettlementFee = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementFeeArrayErrorMessage = self::validateMidocoUmbrellaSettlementFeeForArrayConstraintFromSetMidocoUmbrellaSettlementFee($midocoUmbrellaSettlementFee))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementFeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementFee = $midocoUmbrellaSettlementFee;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
     */
    public function addToMidocoUmbrellaSettlementFee(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementFee property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementFee[] = $item;
        
        return $this;
    }
    /**
     * Get LocalizableMessage value
     * @return \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType[]
     */
    public function getLocalizableMessage(): ?array
    {
        return $this->LocalizableMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLocalizableMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocalizableMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocalizableMessageForArrayConstraintFromSetLocalizableMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementSettingLocalizableMessageItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementSettingLocalizableMessageItem instanceof \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementSettingLocalizableMessageItem) ? get_class($midocoUmbrellaSettlementSettingLocalizableMessageItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementSettingLocalizableMessageItem), var_export($midocoUmbrellaSettlementSettingLocalizableMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LocalizableMessage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LocalizableMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType[] $localizableMessage
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
     */
    public function setLocalizableMessage(?array $localizableMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($localizableMessageArrayErrorMessage = self::validateLocalizableMessageForArrayConstraintFromSetLocalizableMessage($localizableMessage))) {
            throw new InvalidArgumentException($localizableMessageArrayErrorMessage, __LINE__);
        }
        $this->LocalizableMessage = $localizableMessage;
        
        return $this;
    }
    /**
     * Add item to LocalizableMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
     */
    public function addToLocalizableMessage(\Pggns\MidocoApi\Crm\StructType\LocalizableMessageType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType) {
            throw new InvalidArgumentException(sprintf('The LocalizableMessage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LocalizableMessage[] = $item;
        
        return $this;
    }
    /**
     * Get referenced value
     * @return bool|null
     */
    public function getReferenced(): ?bool
    {
        return $this->referenced;
    }
    /**
     * Set referenced value
     * @param bool $referenced
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
     */
    public function setReferenced(?bool $referenced = false): self
    {
        // validation for constraint: boolean
        if (!is_null($referenced) && !is_bool($referenced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($referenced, true), gettype($referenced)), __LINE__);
        }
        $this->referenced = $referenced;
        
        return $this;
    }
}
