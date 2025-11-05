<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioContactSynchronizationDetail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioContactSynchronizationDetail extends BexioContactType
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Result = null;
    /**
     * The ChangeArea
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ChangeArea = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: Messages concerning the synchronization of this contact.<br> E.g. error while saving the address.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message = null;
    /**
     * Constructor method for BexioContactSynchronizationDetail
     * @uses BexioContactSynchronizationDetail::setAction()
     * @uses BexioContactSynchronizationDetail::setResult()
     * @uses BexioContactSynchronizationDetail::setChangeArea()
     * @uses BexioContactSynchronizationDetail::setMessage()
     * @param string $action
     * @param string $result
     * @param string[] $changeArea
     * @param string[] $message
     */
    public function __construct(?string $action = null, ?string $result = null, ?array $changeArea = null, ?array $message = null)
    {
        $this
            ->setAction($action)
            ->setResult($result)
            ->setChangeArea($changeArea)
            ->setMessage($message);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationAction::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationAction::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationAction::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationAction', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationAction::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get Result value
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->Result;
    }
    /**
     * Set Result value
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationResult::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationResult::getValidValues()
     * @throws InvalidArgumentException
     * @param string $result
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail
     */
    public function setResult(?string $result = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationResult::valueIsValid($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationResult', is_array($result) ? implode(', ', $result) : var_export($result, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationResult::getValidValues())), __LINE__);
        }
        $this->Result = $result;
        
        return $this;
    }
    /**
     * Get ChangeArea value
     * @return string[]
     */
    public function getChangeArea(): ?array
    {
        return $this->ChangeArea;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setChangeArea method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChangeArea method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChangeAreaForArrayConstraintFromSetChangeArea(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bexioContactSynchronizationDetailChangeAreaItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::valueIsValid($bexioContactSynchronizationDetailChangeAreaItem)) {
                $invalidValues[] = is_object($bexioContactSynchronizationDetailChangeAreaItem) ? get_class($bexioContactSynchronizationDetailChangeAreaItem) : sprintf('%s(%s)', gettype($bexioContactSynchronizationDetailChangeAreaItem), var_export($bexioContactSynchronizationDetailChangeAreaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ChangeArea value
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $changeArea
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail
     */
    public function setChangeArea(?array $changeArea = null): self
    {
        // validation for constraint: array
        if ('' !== ($changeAreaArrayErrorMessage = self::validateChangeAreaForArrayConstraintFromSetChangeArea($changeArea))) {
            throw new InvalidArgumentException($changeAreaArrayErrorMessage, __LINE__);
        }
        $this->ChangeArea = $changeArea;
        
        return $this;
    }
    /**
     * Add item to ChangeArea value
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail
     */
    public function addToChangeArea(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\BexioSynchronizationChangeArea::getValidValues())), __LINE__);
        }
        $this->ChangeArea[] = $item;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string[]
     */
    public function getMessage(): ?array
    {
        return $this->Message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageForArrayConstraintFromSetMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bexioContactSynchronizationDetailMessageItem) {
            // validation for constraint: itemType
            if (!is_string($bexioContactSynchronizationDetailMessageItem)) {
                $invalidValues[] = is_object($bexioContactSynchronizationDetailMessageItem) ? get_class($bexioContactSynchronizationDetailMessageItem) : sprintf('%s(%s)', gettype($bexioContactSynchronizationDetailMessageItem), var_export($bexioContactSynchronizationDetailMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message value
     * @throws InvalidArgumentException
     * @param string[] $message
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail
     */
    public function setMessage(?array $message = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageArrayErrorMessage = self::validateMessageForArrayConstraintFromSetMessage($message))) {
            throw new InvalidArgumentException($messageArrayErrorMessage, __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Add item to Message value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail
     */
    public function addToMessage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message[] = $item;
        
        return $this;
    }
}
