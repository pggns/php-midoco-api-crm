<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBexioTaxesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBexioTaxesResponse extends AbstractStructBase
{
    /**
     * The MidocoBexioTax
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO[]
     */
    protected ?array $MidocoBexioTax = null;
    /**
     * Constructor method for GetBexioTaxesResponse
     * @uses GetBexioTaxesResponse::setMidocoBexioTax()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO[] $midocoBexioTax
     */
    public function __construct(?array $midocoBexioTax = null)
    {
        $this
            ->setMidocoBexioTax($midocoBexioTax);
    }
    /**
     * Get MidocoBexioTax value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO[]
     */
    public function getMidocoBexioTax(): ?array
    {
        return $this->MidocoBexioTax;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBexioTax method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBexioTax method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBexioTaxForArrayConstraintFromSetMidocoBexioTax(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBexioTaxesResponseMidocoBexioTaxItem) {
            // validation for constraint: itemType
            if (!$getBexioTaxesResponseMidocoBexioTaxItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO) {
                $invalidValues[] = is_object($getBexioTaxesResponseMidocoBexioTaxItem) ? get_class($getBexioTaxesResponseMidocoBexioTaxItem) : sprintf('%s(%s)', gettype($getBexioTaxesResponseMidocoBexioTaxItem), var_export($getBexioTaxesResponseMidocoBexioTaxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBexioTax property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBexioTax value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO[] $midocoBexioTax
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioTaxesResponse
     */
    public function setMidocoBexioTax(?array $midocoBexioTax = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBexioTaxArrayErrorMessage = self::validateMidocoBexioTaxForArrayConstraintFromSetMidocoBexioTax($midocoBexioTax))) {
            throw new InvalidArgumentException($midocoBexioTaxArrayErrorMessage, __LINE__);
        }
        $this->MidocoBexioTax = $midocoBexioTax;
        
        return $this;
    }
    /**
     * Add item to MidocoBexioTax value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioTaxesResponse
     */
    public function addToMidocoBexioTax(\Pggns\MidocoApi\Crm\StructType\BexioTaxDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBexioTax property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioTaxDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBexioTax[] = $item;
        
        return $this;
    }
}
