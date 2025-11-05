<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementsResponse extends AbstractStructBase
{
    /**
     * The UmbrellaSettlementMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: UmbrellaSettlementMessage
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[]
     */
    protected ?array $UmbrellaSettlementMessage = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementsResponse
     * @uses DeleteUmbrellaSettlementsResponse::setUmbrellaSettlementMessage()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[] $umbrellaSettlementMessage
     */
    public function __construct(?array $umbrellaSettlementMessage = null)
    {
        $this
            ->setUmbrellaSettlementMessage($umbrellaSettlementMessage);
    }
    /**
     * Get UmbrellaSettlementMessage value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[]
     */
    public function getUmbrellaSettlementMessage(): ?array
    {
        return $this->UmbrellaSettlementMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUmbrellaSettlementMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUmbrellaSettlementMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUmbrellaSettlementMessageForArrayConstraintFromSetUmbrellaSettlementMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteUmbrellaSettlementsResponseUmbrellaSettlementMessageItem) {
            // validation for constraint: itemType
            if (!$deleteUmbrellaSettlementsResponseUmbrellaSettlementMessageItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage) {
                $invalidValues[] = is_object($deleteUmbrellaSettlementsResponseUmbrellaSettlementMessageItem) ? get_class($deleteUmbrellaSettlementsResponseUmbrellaSettlementMessageItem) : sprintf('%s(%s)', gettype($deleteUmbrellaSettlementsResponseUmbrellaSettlementMessageItem), var_export($deleteUmbrellaSettlementsResponseUmbrellaSettlementMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UmbrellaSettlementMessage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UmbrellaSettlementMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage[] $umbrellaSettlementMessage
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementsResponse
     */
    public function setUmbrellaSettlementMessage(?array $umbrellaSettlementMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($umbrellaSettlementMessageArrayErrorMessage = self::validateUmbrellaSettlementMessageForArrayConstraintFromSetUmbrellaSettlementMessage($umbrellaSettlementMessage))) {
            throw new InvalidArgumentException($umbrellaSettlementMessageArrayErrorMessage, __LINE__);
        }
        $this->UmbrellaSettlementMessage = $umbrellaSettlementMessage;
        
        return $this;
    }
    /**
     * Add item to UmbrellaSettlementMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage $item
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementsResponse
     */
    public function addToUmbrellaSettlementMessage(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage) {
            throw new InvalidArgumentException(sprintf('The UmbrellaSettlementMessage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UmbrellaSettlementMessage[] = $item;
        
        return $this;
    }
}
