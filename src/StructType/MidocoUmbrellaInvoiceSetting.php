<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUmbrellaInvoiceSetting StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUmbrellaInvoiceSetting extends UmbrellaSettlementInvoiceSettingDTO
{
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
     * The iso6391Language
     * Meta information extracted from the WSDL
     * - documentation: The iso6391 value of the referenced Bexio language
     * @var string|null
     */
    protected ?string $iso6391Language = null;
    /**
     * Constructor method for MidocoUmbrellaInvoiceSetting
     * @uses MidocoUmbrellaInvoiceSetting::setLocalizableMessage()
     * @uses MidocoUmbrellaInvoiceSetting::setIso6391Language()
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType[] $localizableMessage
     * @param string $iso6391Language
     */
    public function __construct(?array $localizableMessage = null, ?string $iso6391Language = null)
    {
        $this
            ->setLocalizableMessage($localizableMessage)
            ->setIso6391Language($iso6391Language);
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
        foreach ($values as $midocoUmbrellaInvoiceSettingLocalizableMessageItem) {
            // validation for constraint: itemType
            if (!$midocoUmbrellaInvoiceSettingLocalizableMessageItem instanceof \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType) {
                $invalidValues[] = is_object($midocoUmbrellaInvoiceSettingLocalizableMessageItem) ? get_class($midocoUmbrellaInvoiceSettingLocalizableMessageItem) : sprintf('%s(%s)', gettype($midocoUmbrellaInvoiceSettingLocalizableMessageItem), var_export($midocoUmbrellaInvoiceSettingLocalizableMessageItem, true));
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting
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
     * Get iso6391Language value
     * @return string|null
     */
    public function getIso6391Language(): ?string
    {
        return $this->iso6391Language;
    }
    /**
     * Set iso6391Language value
     * @param string $iso6391Language
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaInvoiceSetting
     */
    public function setIso6391Language(?string $iso6391Language = null): self
    {
        // validation for constraint: string
        if (!is_null($iso6391Language) && !is_string($iso6391Language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso6391Language, true), gettype($iso6391Language)), __LINE__);
        }
        $this->iso6391Language = $iso6391Language;
        
        return $this;
    }
}
