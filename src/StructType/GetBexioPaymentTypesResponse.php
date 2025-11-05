<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBexioPaymentTypesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBexioPaymentTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoBexioPaymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO[]
     */
    protected ?array $MidocoBexioPaymentType = null;
    /**
     * Constructor method for GetBexioPaymentTypesResponse
     * @uses GetBexioPaymentTypesResponse::setMidocoBexioPaymentType()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO[] $midocoBexioPaymentType
     */
    public function __construct(?array $midocoBexioPaymentType = null)
    {
        $this
            ->setMidocoBexioPaymentType($midocoBexioPaymentType);
    }
    /**
     * Get MidocoBexioPaymentType value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO[]
     */
    public function getMidocoBexioPaymentType(): ?array
    {
        return $this->MidocoBexioPaymentType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBexioPaymentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBexioPaymentType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBexioPaymentTypeForArrayConstraintFromSetMidocoBexioPaymentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBexioPaymentTypesResponseMidocoBexioPaymentTypeItem) {
            // validation for constraint: itemType
            if (!$getBexioPaymentTypesResponseMidocoBexioPaymentTypeItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO) {
                $invalidValues[] = is_object($getBexioPaymentTypesResponseMidocoBexioPaymentTypeItem) ? get_class($getBexioPaymentTypesResponseMidocoBexioPaymentTypeItem) : sprintf('%s(%s)', gettype($getBexioPaymentTypesResponseMidocoBexioPaymentTypeItem), var_export($getBexioPaymentTypesResponseMidocoBexioPaymentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBexioPaymentType property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBexioPaymentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO[] $midocoBexioPaymentType
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioPaymentTypesResponse
     */
    public function setMidocoBexioPaymentType(?array $midocoBexioPaymentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBexioPaymentTypeArrayErrorMessage = self::validateMidocoBexioPaymentTypeForArrayConstraintFromSetMidocoBexioPaymentType($midocoBexioPaymentType))) {
            throw new InvalidArgumentException($midocoBexioPaymentTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBexioPaymentType = $midocoBexioPaymentType;
        
        return $this;
    }
    /**
     * Add item to MidocoBexioPaymentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioPaymentTypesResponse
     */
    public function addToMidocoBexioPaymentType(\Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBexioPaymentType property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioPaymentTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBexioPaymentType[] = $item;
        
        return $this;
    }
}
