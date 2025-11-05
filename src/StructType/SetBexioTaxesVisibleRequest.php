<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBexioTaxesVisibleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetBexioTaxesVisibleRequest extends AbstractStructBase
{
    /**
     * The visible
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $visible;
    /**
     * The TaxID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $TaxID = null;
    /**
     * Constructor method for SetBexioTaxesVisibleRequest
     * @uses SetBexioTaxesVisibleRequest::setVisible()
     * @uses SetBexioTaxesVisibleRequest::setTaxID()
     * @param bool $visible
     * @param int[] $taxID
     */
    public function __construct(bool $visible, ?array $taxID = null)
    {
        $this
            ->setVisible($visible)
            ->setTaxID($taxID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioTaxesVisibleRequest
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
     * Get TaxID value
     * @return int[]
     */
    public function getTaxID(): ?array
    {
        return $this->TaxID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaxID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxIDForArrayConstraintFromSetTaxID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setBexioTaxesVisibleRequestTaxIDItem) {
            // validation for constraint: itemType
            if (!(is_int($setBexioTaxesVisibleRequestTaxIDItem) || ctype_digit($setBexioTaxesVisibleRequestTaxIDItem))) {
                $invalidValues[] = is_object($setBexioTaxesVisibleRequestTaxIDItem) ? get_class($setBexioTaxesVisibleRequestTaxIDItem) : sprintf('%s(%s)', gettype($setBexioTaxesVisibleRequestTaxIDItem), var_export($setBexioTaxesVisibleRequestTaxIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxID value
     * @throws InvalidArgumentException
     * @param int[] $taxID
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioTaxesVisibleRequest
     */
    public function setTaxID(?array $taxID = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxIDArrayErrorMessage = self::validateTaxIDForArrayConstraintFromSetTaxID($taxID))) {
            throw new InvalidArgumentException($taxIDArrayErrorMessage, __LINE__);
        }
        $this->TaxID = $taxID;
        
        return $this;
    }
    /**
     * Add item to TaxID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioTaxesVisibleRequest
     */
    public function addToTaxID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The TaxID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxID[] = $item;
        
        return $this;
    }
}
