<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaSettlementFeeDefinition StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaSettlementFeeDefinition extends UmbrellaSettlementFeeDefinitionDTO
{
    /**
     * The MidocoUmbrellaSettlementFeeLocalization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementFeeLocalization
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[]
     */
    protected ?array $MidocoUmbrellaSettlementFeeLocalization = null;
    /**
     * The MidocoUmbrellaSettlementCsvColumn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementCsvColumn
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO[]
     */
    protected ?array $MidocoUmbrellaSettlementCsvColumn = null;
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
     * Constructor method for MidocoUmbrellaSettlementFeeDefinition
     * @uses MidocoUmbrellaSettlementFeeDefinition::setMidocoUmbrellaSettlementFeeLocalization()
     * @uses MidocoUmbrellaSettlementFeeDefinition::setMidocoUmbrellaSettlementCsvColumn()
     * @uses MidocoUmbrellaSettlementFeeDefinition::setLocalizableMessage()
     * @uses MidocoUmbrellaSettlementFeeDefinition::setReferenced()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[] $midocoUmbrellaSettlementFeeLocalization
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO[] $midocoUmbrellaSettlementCsvColumn
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType[] $localizableMessage
     * @param bool $referenced
     */
    public function __construct(?array $midocoUmbrellaSettlementFeeLocalization = null, ?array $midocoUmbrellaSettlementCsvColumn = null, ?array $localizableMessage = null, ?bool $referenced = false)
    {
        $this
            ->setMidocoUmbrellaSettlementFeeLocalization($midocoUmbrellaSettlementFeeLocalization)
            ->setMidocoUmbrellaSettlementCsvColumn($midocoUmbrellaSettlementCsvColumn)
            ->setLocalizableMessage($localizableMessage)
            ->setReferenced($referenced);
    }
    /**
     * Get MidocoUmbrellaSettlementFeeLocalization value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[]
     */
    public function getMidocoUmbrellaSettlementFeeLocalization(): ?array
    {
        return $this->MidocoUmbrellaSettlementFeeLocalization;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementFeeLocalization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementFeeLocalization method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementFeeLocalizationForArrayConstraintFromSetMidocoUmbrellaSettlementFeeLocalization(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementFeeLocalizationItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementFeeLocalizationItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementFeeLocalizationItem) ? get_class($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementFeeLocalizationItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementFeeLocalizationItem), var_export($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementFeeLocalizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementFeeLocalization property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementFeeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[] $midocoUmbrellaSettlementFeeLocalization
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
     */
    public function setMidocoUmbrellaSettlementFeeLocalization(?array $midocoUmbrellaSettlementFeeLocalization = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementFeeLocalizationArrayErrorMessage = self::validateMidocoUmbrellaSettlementFeeLocalizationForArrayConstraintFromSetMidocoUmbrellaSettlementFeeLocalization($midocoUmbrellaSettlementFeeLocalization))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementFeeLocalizationArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeLocalization = $midocoUmbrellaSettlementFeeLocalization;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementFeeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
     */
    public function addToMidocoUmbrellaSettlementFeeLocalization(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementFeeLocalization property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeLocalization[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaSettlementCsvColumn value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO[]
     */
    public function getMidocoUmbrellaSettlementCsvColumn(): ?array
    {
        return $this->MidocoUmbrellaSettlementCsvColumn;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementCsvColumn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementCsvColumn method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementCsvColumnForArrayConstraintFromSetMidocoUmbrellaSettlementCsvColumn(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementCsvColumnItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementCsvColumnItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementCsvColumnItem) ? get_class($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementCsvColumnItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementCsvColumnItem), var_export($midocoUmbrellaSettlementFeeDefinitionMidocoUmbrellaSettlementCsvColumnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementCsvColumn property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementCsvColumn value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO[] $midocoUmbrellaSettlementCsvColumn
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
     */
    public function setMidocoUmbrellaSettlementCsvColumn(?array $midocoUmbrellaSettlementCsvColumn = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementCsvColumnArrayErrorMessage = self::validateMidocoUmbrellaSettlementCsvColumnForArrayConstraintFromSetMidocoUmbrellaSettlementCsvColumn($midocoUmbrellaSettlementCsvColumn))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementCsvColumnArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementCsvColumn = $midocoUmbrellaSettlementCsvColumn;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementCsvColumn value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
     */
    public function addToMidocoUmbrellaSettlementCsvColumn(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementCsvColumn property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementCsvColumnDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementCsvColumn[] = $item;
        
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
        foreach ($values as $midocoUmbrellaSettlementFeeDefinitionLocalizableMessageItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaSettlementFeeDefinitionLocalizableMessageItem instanceof \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType) {
                $invalidValues[] = is_object($midocoUmbrellaSettlementFeeDefinitionLocalizableMessageItem) ? get_class($midocoUmbrellaSettlementFeeDefinitionLocalizableMessageItem) : sprintf('%s(%s)', gettype($midocoUmbrellaSettlementFeeDefinitionLocalizableMessageItem), var_export($midocoUmbrellaSettlementFeeDefinitionLocalizableMessageItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFeeDefinition
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
