<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementFee StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementFee extends UmbrellaSettlementFeeDTO
{
    /**
     * The MidocoUmbrellaSettlementFeeStagger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementFeeStagger
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger[]
     */
    protected ?array $MidocoUmbrellaSettlementFeeStagger = null;
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
     * The isBaseFee
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isBaseFee = null;
    /**
     * Constructor method for MidocoUmbrellaSettlementFee
     * @uses MidocoUmbrellaSettlementFee::setMidocoUmbrellaSettlementFeeStagger()
     * @uses MidocoUmbrellaSettlementFee::setLocalizableMessage()
     * @uses MidocoUmbrellaSettlementFee::setIsBaseFee()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger[] $midocoUmbrellaSettlementFeeStagger
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType[] $localizableMessage
     * @param bool $isBaseFee
     */
    public function __construct(?array $midocoUmbrellaSettlementFeeStagger = null, ?array $localizableMessage = null, ?bool $isBaseFee = false)
    {
        $this
            ->setMidocoUmbrellaSettlementFeeStagger($midocoUmbrellaSettlementFeeStagger)
            ->setLocalizableMessage($localizableMessage)
            ->setIsBaseFee($isBaseFee);
    }
    /**
     * Get MidocoUmbrellaSettlementFeeStagger value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger[]
     */
    public function getMidocoUmbrellaSettlementFeeStagger(): ?array
    {
        return $this->MidocoUmbrellaSettlementFeeStagger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementFeeStagger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementFeeStagger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementFeeStaggerForArrayConstraintFromSetMidocoUmbrellaSettlementFeeStagger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementFeeMidocoUmbrellaSettlementFeeStaggerItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementFeeMidocoUmbrellaSettlementFeeStaggerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementFeeMidocoUmbrellaSettlementFeeStaggerItem) ? get_class($midocoUmbrellaSettlementFeeMidocoUmbrellaSettlementFeeStaggerItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementFeeMidocoUmbrellaSettlementFeeStaggerItem), var_export($midocoUmbrellaSettlementFeeMidocoUmbrellaSettlementFeeStaggerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementFeeStagger property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementFeeStagger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger[] $midocoUmbrellaSettlementFeeStagger
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee
     */
    public function setMidocoUmbrellaSettlementFeeStagger(?array $midocoUmbrellaSettlementFeeStagger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementFeeStaggerArrayErrorMessage = self::validateMidocoUmbrellaSettlementFeeStaggerForArrayConstraintFromSetMidocoUmbrellaSettlementFeeStagger($midocoUmbrellaSettlementFeeStagger))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementFeeStaggerArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeStagger = $midocoUmbrellaSettlementFeeStagger;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementFeeStagger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee
     */
    public function addToMidocoUmbrellaSettlementFeeStagger(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementFeeStagger property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeStagger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeStagger[] = $item;
        
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
        foreach ($values as $midocoUmbrellaSettlementFeeLocalizableMessageItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementFeeLocalizableMessageItem instanceof \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementFeeLocalizableMessageItem) ? get_class($midocoUmbrellaSettlementFeeLocalizableMessageItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementFeeLocalizableMessageItem), var_export($midocoUmbrellaSettlementFeeLocalizableMessageItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee
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
     * Get isBaseFee value
     * @return bool|null
     */
    public function getIsBaseFee(): ?bool
    {
        return $this->isBaseFee;
    }
    /**
     * Set isBaseFee value
     * @param bool $isBaseFee
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee
     */
    public function setIsBaseFee(?bool $isBaseFee = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isBaseFee) && !is_bool($isBaseFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBaseFee, true), gettype($isBaseFee)), __LINE__);
        }
        $this->isBaseFee = $isBaseFee;
        
        return $this;
    }
}
