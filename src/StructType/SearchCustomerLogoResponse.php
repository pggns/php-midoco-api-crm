<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerLogoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCustomerLogoResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmGraphics
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmGraphics
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics[]
     */
    protected ?array $MidocoCrmGraphics = null;
    /**
     * Constructor method for SearchCustomerLogoResponse
     * @uses SearchCustomerLogoResponse::setMidocoCrmGraphics()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics[] $midocoCrmGraphics
     */
    public function __construct(?array $midocoCrmGraphics = null)
    {
        $this
            ->setMidocoCrmGraphics($midocoCrmGraphics);
    }
    /**
     * Get MidocoCrmGraphics value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics[]
     */
    public function getMidocoCrmGraphics(): ?array
    {
        return $this->MidocoCrmGraphics;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmGraphics method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmGraphics method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmGraphicsForArrayConstraintFromSetMidocoCrmGraphics(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustomerLogoResponseMidocoCrmGraphicsItem) {
            // validation for constraint: itemType
            if (!$searchCustomerLogoResponseMidocoCrmGraphicsItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics) {
                $invalidValues[] = is_object($searchCustomerLogoResponseMidocoCrmGraphicsItem) ? get_class($searchCustomerLogoResponseMidocoCrmGraphicsItem) : sprintf('%s(%s)', gettype($searchCustomerLogoResponseMidocoCrmGraphicsItem), var_export($searchCustomerLogoResponseMidocoCrmGraphicsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmGraphics property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmGraphics value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics[] $midocoCrmGraphics
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerLogoResponse
     */
    public function setMidocoCrmGraphics(?array $midocoCrmGraphics = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmGraphicsArrayErrorMessage = self::validateMidocoCrmGraphicsForArrayConstraintFromSetMidocoCrmGraphics($midocoCrmGraphics))) {
            throw new InvalidArgumentException($midocoCrmGraphicsArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmGraphics = $midocoCrmGraphics;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmGraphics value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics $item
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerLogoResponse
     */
    public function addToMidocoCrmGraphics(\Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmGraphics property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmGraphics[] = $item;
        
        return $this;
    }
}
