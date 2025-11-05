<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBexioUnitsVisibleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetBexioUnitsVisibleRequest extends AbstractStructBase
{
    /**
     * The visible
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $visible;
    /**
     * The UnitID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $UnitID = null;
    /**
     * Constructor method for SetBexioUnitsVisibleRequest
     * @uses SetBexioUnitsVisibleRequest::setVisible()
     * @uses SetBexioUnitsVisibleRequest::setUnitID()
     * @param bool $visible
     * @param int[] $unitID
     */
    public function __construct(bool $visible, ?array $unitID = null)
    {
        $this
            ->setVisible($visible)
            ->setUnitID($unitID);
    }
    /**
     * Get visible value
     * @return bool
     */
    public function getVisible(): bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioUnitsVisibleRequest
     */
    public function setVisible(bool $visible): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
    /**
     * Get UnitID value
     * @return int[]
     */
    public function getUnitID(): ?array
    {
        return $this->UnitID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitIDForArrayConstraintFromSetUnitID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setBexioUnitsVisibleRequestUnitIDItem) {
            // validation for constraint: itemType
            if (!(is_int($setBexioUnitsVisibleRequestUnitIDItem) || ctype_digit($setBexioUnitsVisibleRequestUnitIDItem))) {
                $invalidValues[] = is_object($setBexioUnitsVisibleRequestUnitIDItem) ? get_class($setBexioUnitsVisibleRequestUnitIDItem) : sprintf('%s(%s)', gettype($setBexioUnitsVisibleRequestUnitIDItem), var_export($setBexioUnitsVisibleRequestUnitIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitID value
     * @throws InvalidArgumentException
     * @param int[] $unitID
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioUnitsVisibleRequest
     */
    public function setUnitID(?array $unitID = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitIDArrayErrorMessage = self::validateUnitIDForArrayConstraintFromSetUnitID($unitID))) {
            throw new InvalidArgumentException($unitIDArrayErrorMessage, __LINE__);
        }
        $this->UnitID = $unitID;
        
        return $this;
    }
    /**
     * Add item to UnitID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioUnitsVisibleRequest
     */
    public function addToUnitID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The UnitID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitID[] = $item;
        
        return $this;
    }
}
