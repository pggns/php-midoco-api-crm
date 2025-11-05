<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBexioCurrenciesVisibleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetBexioCurrenciesVisibleRequest extends AbstractStructBase
{
    /**
     * The visible
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $visible;
    /**
     * The CurrencyID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $CurrencyID = null;
    /**
     * Constructor method for SetBexioCurrenciesVisibleRequest
     * @uses SetBexioCurrenciesVisibleRequest::setVisible()
     * @uses SetBexioCurrenciesVisibleRequest::setCurrencyID()
     * @param bool $visible
     * @param int[] $currencyID
     */
    public function __construct(bool $visible, ?array $currencyID = null)
    {
        $this
            ->setVisible($visible)
            ->setCurrencyID($currencyID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioCurrenciesVisibleRequest
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
     * Get CurrencyID value
     * @return int[]
     */
    public function getCurrencyID(): ?array
    {
        return $this->CurrencyID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCurrencyID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrencyID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrencyIDForArrayConstraintFromSetCurrencyID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setBexioCurrenciesVisibleRequestCurrencyIDItem) {
            // validation for constraint: itemType
            if (!(is_int($setBexioCurrenciesVisibleRequestCurrencyIDItem) || ctype_digit($setBexioCurrenciesVisibleRequestCurrencyIDItem))) {
                $invalidValues[] = is_object($setBexioCurrenciesVisibleRequestCurrencyIDItem) ? get_class($setBexioCurrenciesVisibleRequestCurrencyIDItem) : sprintf('%s(%s)', gettype($setBexioCurrenciesVisibleRequestCurrencyIDItem), var_export($setBexioCurrenciesVisibleRequestCurrencyIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CurrencyID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CurrencyID value
     * @throws InvalidArgumentException
     * @param int[] $currencyID
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioCurrenciesVisibleRequest
     */
    public function setCurrencyID(?array $currencyID = null): self
    {
        // validation for constraint: array
        if ('' !== ($currencyIDArrayErrorMessage = self::validateCurrencyIDForArrayConstraintFromSetCurrencyID($currencyID))) {
            throw new InvalidArgumentException($currencyIDArrayErrorMessage, __LINE__);
        }
        $this->CurrencyID = $currencyID;
        
        return $this;
    }
    /**
     * Add item to CurrencyID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioCurrenciesVisibleRequest
     */
    public function addToCurrencyID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The CurrencyID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CurrencyID[] = $item;
        
        return $this;
    }
}
