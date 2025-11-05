<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentTokenAttributeTypesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentTokenAttributeTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentTokenAttribType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaymentTokenAttribType
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType[]
     */
    protected ?array $MidocoPaymentTokenAttribType = null;
    /**
     * Constructor method for GetPaymentTokenAttributeTypesResponse
     * @uses GetPaymentTokenAttributeTypesResponse::setMidocoPaymentTokenAttribType()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType[] $midocoPaymentTokenAttribType
     */
    public function __construct(?array $midocoPaymentTokenAttribType = null)
    {
        $this
            ->setMidocoPaymentTokenAttribType($midocoPaymentTokenAttribType);
    }
    /**
     * Get MidocoPaymentTokenAttribType value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType[]
     */
    public function getMidocoPaymentTokenAttribType(): ?array
    {
        return $this->MidocoPaymentTokenAttribType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPaymentTokenAttribType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentTokenAttribType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentTokenAttribTypeForArrayConstraintFromSetMidocoPaymentTokenAttribType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPaymentTokenAttributeTypesResponseMidocoPaymentTokenAttribTypeItem) {
            // validation for constraint: itemType
            if (!$getPaymentTokenAttributeTypesResponseMidocoPaymentTokenAttribTypeItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType) {
                $invalidValues[] = is_object($getPaymentTokenAttributeTypesResponseMidocoPaymentTokenAttribTypeItem) ? get_class($getPaymentTokenAttributeTypesResponseMidocoPaymentTokenAttribTypeItem) : sprintf('%s(%s)', gettype($getPaymentTokenAttributeTypesResponseMidocoPaymentTokenAttribTypeItem), var_export($getPaymentTokenAttributeTypesResponseMidocoPaymentTokenAttribTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentTokenAttribType property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentTokenAttribType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType[] $midocoPaymentTokenAttribType
     * @return \Pggns\MidocoApi\Crm\StructType\GetPaymentTokenAttributeTypesResponse
     */
    public function setMidocoPaymentTokenAttribType(?array $midocoPaymentTokenAttribType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentTokenAttribTypeArrayErrorMessage = self::validateMidocoPaymentTokenAttribTypeForArrayConstraintFromSetMidocoPaymentTokenAttribType($midocoPaymentTokenAttribType))) {
            throw new InvalidArgumentException($midocoPaymentTokenAttribTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentTokenAttribType = $midocoPaymentTokenAttribType;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentTokenAttribType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetPaymentTokenAttributeTypesResponse
     */
    public function addToMidocoPaymentTokenAttribType(\Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentTokenAttribType property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoPaymentTokenAttribType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentTokenAttribType[] = $item;
        
        return $this;
    }
}
