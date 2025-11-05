<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBexioUnitsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBexioUnitsResponse extends AbstractStructBase
{
    /**
     * The MidocoBexioUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO[]
     */
    protected ?array $MidocoBexioUnit = null;
    /**
     * Constructor method for GetBexioUnitsResponse
     * @uses GetBexioUnitsResponse::setMidocoBexioUnit()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO[] $midocoBexioUnit
     */
    public function __construct(?array $midocoBexioUnit = null)
    {
        $this
            ->setMidocoBexioUnit($midocoBexioUnit);
    }
    /**
     * Get MidocoBexioUnit value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO[]
     */
    public function getMidocoBexioUnit(): ?array
    {
        return $this->MidocoBexioUnit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBexioUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBexioUnit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBexioUnitForArrayConstraintFromSetMidocoBexioUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBexioUnitsResponseMidocoBexioUnitItem) {
            // validation for constraint: itemType
            if (!$getBexioUnitsResponseMidocoBexioUnitItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO) {
                $invalidValues[] = is_object($getBexioUnitsResponseMidocoBexioUnitItem) ? get_class($getBexioUnitsResponseMidocoBexioUnitItem) : sprintf('%s(%s)', gettype($getBexioUnitsResponseMidocoBexioUnitItem), var_export($getBexioUnitsResponseMidocoBexioUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBexioUnit property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBexioUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO[] $midocoBexioUnit
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioUnitsResponse
     */
    public function setMidocoBexioUnit(?array $midocoBexioUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBexioUnitArrayErrorMessage = self::validateMidocoBexioUnitForArrayConstraintFromSetMidocoBexioUnit($midocoBexioUnit))) {
            throw new InvalidArgumentException($midocoBexioUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoBexioUnit = $midocoBexioUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoBexioUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioUnitsResponse
     */
    public function addToMidocoBexioUnit(\Pggns\MidocoApi\Crm\StructType\BexioUnitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBexioUnit property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioUnitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBexioUnit[] = $item;
        
        return $this;
    }
}
