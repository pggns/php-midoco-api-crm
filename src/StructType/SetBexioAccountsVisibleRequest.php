<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBexioAccountsVisibleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetBexioAccountsVisibleRequest extends AbstractStructBase
{
    /**
     * The visible
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $visible;
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $AccountID = null;
    /**
     * Constructor method for SetBexioAccountsVisibleRequest
     * @uses SetBexioAccountsVisibleRequest::setVisible()
     * @uses SetBexioAccountsVisibleRequest::setAccountID()
     * @param bool $visible
     * @param int[] $accountID
     */
    public function __construct(bool $visible, ?array $accountID = null)
    {
        $this
            ->setVisible($visible)
            ->setAccountID($accountID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioAccountsVisibleRequest
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
     * Get AccountID value
     * @return int[]
     */
    public function getAccountID(): ?array
    {
        return $this->AccountID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAccountID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountIDForArrayConstraintFromSetAccountID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setBexioAccountsVisibleRequestAccountIDItem) {
            // validation for constraint: itemType
            if (!(is_int($setBexioAccountsVisibleRequestAccountIDItem) || ctype_digit($setBexioAccountsVisibleRequestAccountIDItem))) {
                $invalidValues[] = is_object($setBexioAccountsVisibleRequestAccountIDItem) ? get_class($setBexioAccountsVisibleRequestAccountIDItem) : sprintf('%s(%s)', gettype($setBexioAccountsVisibleRequestAccountIDItem), var_export($setBexioAccountsVisibleRequestAccountIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountID value
     * @throws InvalidArgumentException
     * @param int[] $accountID
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioAccountsVisibleRequest
     */
    public function setAccountID(?array $accountID = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountIDArrayErrorMessage = self::validateAccountIDForArrayConstraintFromSetAccountID($accountID))) {
            throw new InvalidArgumentException($accountIDArrayErrorMessage, __LINE__);
        }
        $this->AccountID = $accountID;
        
        return $this;
    }
    /**
     * Add item to AccountID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioAccountsVisibleRequest
     */
    public function addToAccountID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The AccountID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountID[] = $item;
        
        return $this;
    }
}
