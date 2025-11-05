<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBexioPaymentTypesVisibleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetBexioPaymentTypesVisibleRequest extends AbstractStructBase
{
    /**
     * The visible
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $visible;
    /**
     * The PaymentTypeID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $PaymentTypeID = null;
    /**
     * Constructor method for SetBexioPaymentTypesVisibleRequest
     * @uses SetBexioPaymentTypesVisibleRequest::setVisible()
     * @uses SetBexioPaymentTypesVisibleRequest::setPaymentTypeID()
     * @param bool $visible
     * @param int[] $paymentTypeID
     */
    public function __construct(bool $visible, ?array $paymentTypeID = null)
    {
        $this
            ->setVisible($visible)
            ->setPaymentTypeID($paymentTypeID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioPaymentTypesVisibleRequest
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
     * Get PaymentTypeID value
     * @return int[]
     */
    public function getPaymentTypeID(): ?array
    {
        return $this->PaymentTypeID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPaymentTypeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentTypeID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentTypeIDForArrayConstraintFromSetPaymentTypeID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setBexioPaymentTypesVisibleRequestPaymentTypeIDItem) {
            // validation for constraint: itemType
            if (!(is_int($setBexioPaymentTypesVisibleRequestPaymentTypeIDItem) || ctype_digit($setBexioPaymentTypesVisibleRequestPaymentTypeIDItem))) {
                $invalidValues[] = is_object($setBexioPaymentTypesVisibleRequestPaymentTypeIDItem) ? get_class($setBexioPaymentTypesVisibleRequestPaymentTypeIDItem) : sprintf('%s(%s)', gettype($setBexioPaymentTypesVisibleRequestPaymentTypeIDItem), var_export($setBexioPaymentTypesVisibleRequestPaymentTypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentTypeID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentTypeID value
     * @throws InvalidArgumentException
     * @param int[] $paymentTypeID
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioPaymentTypesVisibleRequest
     */
    public function setPaymentTypeID(?array $paymentTypeID = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentTypeIDArrayErrorMessage = self::validatePaymentTypeIDForArrayConstraintFromSetPaymentTypeID($paymentTypeID))) {
            throw new InvalidArgumentException($paymentTypeIDArrayErrorMessage, __LINE__);
        }
        $this->PaymentTypeID = $paymentTypeID;
        
        return $this;
    }
    /**
     * Add item to PaymentTypeID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioPaymentTypesVisibleRequest
     */
    public function addToPaymentTypeID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The PaymentTypeID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentTypeID[] = $item;
        
        return $this;
    }
}
