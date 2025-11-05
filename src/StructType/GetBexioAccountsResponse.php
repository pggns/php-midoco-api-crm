<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBexioAccountsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBexioAccountsResponse extends AbstractStructBase
{
    /**
     * The MidocoBexioAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO[]
     */
    protected ?array $MidocoBexioAccount = null;
    /**
     * Constructor method for GetBexioAccountsResponse
     * @uses GetBexioAccountsResponse::setMidocoBexioAccount()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO[] $midocoBexioAccount
     */
    public function __construct(?array $midocoBexioAccount = null)
    {
        $this
            ->setMidocoBexioAccount($midocoBexioAccount);
    }
    /**
     * Get MidocoBexioAccount value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO[]
     */
    public function getMidocoBexioAccount(): ?array
    {
        return $this->MidocoBexioAccount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBexioAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBexioAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBexioAccountForArrayConstraintFromSetMidocoBexioAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBexioAccountsResponseMidocoBexioAccountItem) {
            // validation for constraint: itemType
            if (!$getBexioAccountsResponseMidocoBexioAccountItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO) {
                $invalidValues[] = is_object($getBexioAccountsResponseMidocoBexioAccountItem) ? get_class($getBexioAccountsResponseMidocoBexioAccountItem) : sprintf('%s(%s)', gettype($getBexioAccountsResponseMidocoBexioAccountItem), var_export($getBexioAccountsResponseMidocoBexioAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBexioAccount property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBexioAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO[] $midocoBexioAccount
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioAccountsResponse
     */
    public function setMidocoBexioAccount(?array $midocoBexioAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBexioAccountArrayErrorMessage = self::validateMidocoBexioAccountForArrayConstraintFromSetMidocoBexioAccount($midocoBexioAccount))) {
            throw new InvalidArgumentException($midocoBexioAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoBexioAccount = $midocoBexioAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoBexioAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioAccountsResponse
     */
    public function addToMidocoBexioAccount(\Pggns\MidocoApi\Crm\StructType\BexioAccountDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBexioAccount property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioAccountDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBexioAccount[] = $item;
        
        return $this;
    }
}
