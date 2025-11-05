<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoPrintSettingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAutoPrintSettingResponse extends AbstractStructBase
{
    /**
     * The MidocoAutoPrintSetting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAutoPrintSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting[]
     */
    protected ?array $MidocoAutoPrintSetting = null;
    /**
     * Constructor method for GetAutoPrintSettingResponse
     * @uses GetAutoPrintSettingResponse::setMidocoAutoPrintSetting()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting[] $midocoAutoPrintSetting
     */
    public function __construct(?array $midocoAutoPrintSetting = null)
    {
        $this
            ->setMidocoAutoPrintSetting($midocoAutoPrintSetting);
    }
    /**
     * Get MidocoAutoPrintSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting[]
     */
    public function getMidocoAutoPrintSetting(): ?array
    {
        return $this->MidocoAutoPrintSetting;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAutoPrintSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAutoPrintSetting method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAutoPrintSettingForArrayConstraintFromSetMidocoAutoPrintSetting(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAutoPrintSettingResponseMidocoAutoPrintSettingItem) {
            // validation for constraint: itemType
            if (!$getAutoPrintSettingResponseMidocoAutoPrintSettingItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting) {
                $invalidValues[] = is_object($getAutoPrintSettingResponseMidocoAutoPrintSettingItem) ? get_class($getAutoPrintSettingResponseMidocoAutoPrintSettingItem) : sprintf('%s(%s)', gettype($getAutoPrintSettingResponseMidocoAutoPrintSettingItem), var_export($getAutoPrintSettingResponseMidocoAutoPrintSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAutoPrintSetting property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAutoPrintSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting[] $midocoAutoPrintSetting
     * @return \Pggns\MidocoApi\Crm\StructType\GetAutoPrintSettingResponse
     */
    public function setMidocoAutoPrintSetting(?array $midocoAutoPrintSetting = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAutoPrintSettingArrayErrorMessage = self::validateMidocoAutoPrintSettingForArrayConstraintFromSetMidocoAutoPrintSetting($midocoAutoPrintSetting))) {
            throw new InvalidArgumentException($midocoAutoPrintSettingArrayErrorMessage, __LINE__);
        }
        $this->MidocoAutoPrintSetting = $midocoAutoPrintSetting;
        
        return $this;
    }
    /**
     * Add item to MidocoAutoPrintSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetAutoPrintSettingResponse
     */
    public function addToMidocoAutoPrintSetting(\Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting) {
            throw new InvalidArgumentException(sprintf('The MidocoAutoPrintSetting property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoAutoPrintSetting, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAutoPrintSetting[] = $item;
        
        return $this;
    }
}
