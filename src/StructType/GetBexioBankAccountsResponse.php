<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBexioBankAccountsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBexioBankAccountsResponse extends AbstractStructBase
{
    /**
     * The MidocoBexioBankAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO[]
     */
    protected ?array $MidocoBexioBankAccount = null;
    /**
     * Constructor method for GetBexioBankAccountsResponse
     * @uses GetBexioBankAccountsResponse::setMidocoBexioBankAccount()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO[] $midocoBexioBankAccount
     */
    public function __construct(?array $midocoBexioBankAccount = null)
    {
        $this
            ->setMidocoBexioBankAccount($midocoBexioBankAccount);
    }
    /**
     * Get MidocoBexioBankAccount value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO[]
     */
    public function getMidocoBexioBankAccount(): ?array
    {
        return $this->MidocoBexioBankAccount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBexioBankAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBexioBankAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBexioBankAccountForArrayConstraintFromSetMidocoBexioBankAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBexioBankAccountsResponseMidocoBexioBankAccountItem) {
            // validation for constraint: itemType
            if (!$getBexioBankAccountsResponseMidocoBexioBankAccountItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO) {
                $invalidValues[] = is_object($getBexioBankAccountsResponseMidocoBexioBankAccountItem) ? get_class($getBexioBankAccountsResponseMidocoBexioBankAccountItem) : sprintf('%s(%s)', gettype($getBexioBankAccountsResponseMidocoBexioBankAccountItem), var_export($getBexioBankAccountsResponseMidocoBexioBankAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBexioBankAccount property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBexioBankAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO[] $midocoBexioBankAccount
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioBankAccountsResponse
     */
    public function setMidocoBexioBankAccount(?array $midocoBexioBankAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBexioBankAccountArrayErrorMessage = self::validateMidocoBexioBankAccountForArrayConstraintFromSetMidocoBexioBankAccount($midocoBexioBankAccount))) {
            throw new InvalidArgumentException($midocoBexioBankAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoBexioBankAccount = $midocoBexioBankAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoBexioBankAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioBankAccountsResponse
     */
    public function addToMidocoBexioBankAccount(\Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBexioBankAccount property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioBankAccountDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBexioBankAccount[] = $item;
        
        return $this;
    }
}
