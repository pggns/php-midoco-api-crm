<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBexioBankAccountsVisibleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetBexioBankAccountsVisibleRequest extends AbstractStructBase
{
    /**
     * The visible
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $visible;
    /**
     * The BankAccountID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $BankAccountID = null;
    /**
     * Constructor method for SetBexioBankAccountsVisibleRequest
     * @uses SetBexioBankAccountsVisibleRequest::setVisible()
     * @uses SetBexioBankAccountsVisibleRequest::setBankAccountID()
     * @param bool $visible
     * @param int[] $bankAccountID
     */
    public function __construct(bool $visible, ?array $bankAccountID = null)
    {
        $this
            ->setVisible($visible)
            ->setBankAccountID($bankAccountID);
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
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioBankAccountsVisibleRequest
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
     * Get BankAccountID value
     * @return int[]
     */
    public function getBankAccountID(): ?array
    {
        return $this->BankAccountID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBankAccountID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBankAccountID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBankAccountIDForArrayConstraintFromSetBankAccountID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setBexioBankAccountsVisibleRequestBankAccountIDItem) {
            // validation for constraint: itemType
            if (!(is_int($setBexioBankAccountsVisibleRequestBankAccountIDItem) || ctype_digit($setBexioBankAccountsVisibleRequestBankAccountIDItem))) {
                $invalidValues[] = is_object($setBexioBankAccountsVisibleRequestBankAccountIDItem) ? get_class($setBexioBankAccountsVisibleRequestBankAccountIDItem) : sprintf('%s(%s)', gettype($setBexioBankAccountsVisibleRequestBankAccountIDItem), var_export($setBexioBankAccountsVisibleRequestBankAccountIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BankAccountID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BankAccountID value
     * @throws InvalidArgumentException
     * @param int[] $bankAccountID
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioBankAccountsVisibleRequest
     */
    public function setBankAccountID(?array $bankAccountID = null): self
    {
        // validation for constraint: array
        if ('' !== ($bankAccountIDArrayErrorMessage = self::validateBankAccountIDForArrayConstraintFromSetBankAccountID($bankAccountID))) {
            throw new InvalidArgumentException($bankAccountIDArrayErrorMessage, __LINE__);
        }
        $this->BankAccountID = $bankAccountID;
        
        return $this;
    }
    /**
     * Add item to BankAccountID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioBankAccountsVisibleRequest
     */
    public function addToBankAccountID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The BankAccountID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BankAccountID[] = $item;
        
        return $this;
    }
}
