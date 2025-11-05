<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUmbrellaSettlementFeeCsvColumnsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Add CSV column names to <em>one</em> fee definition.<br> It is okay to add columns, that are already associated with that fee definition.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddUmbrellaSettlementFeeCsvColumnsRequest extends AbstractStructBase
{
    /**
     * The UmbrellaSettlementFeeCsvColumnID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: UmbrellaSettlementFeeCsvColumnID
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID[]
     */
    protected ?array $UmbrellaSettlementFeeCsvColumnID = null;
    /**
     * Constructor method for AddUmbrellaSettlementFeeCsvColumnsRequest
     * @uses AddUmbrellaSettlementFeeCsvColumnsRequest::setUmbrellaSettlementFeeCsvColumnID()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID[] $umbrellaSettlementFeeCsvColumnID
     */
    public function __construct(?array $umbrellaSettlementFeeCsvColumnID = null)
    {
        $this
            ->setUmbrellaSettlementFeeCsvColumnID($umbrellaSettlementFeeCsvColumnID);
    }
    /**
     * Get UmbrellaSettlementFeeCsvColumnID value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID[]
     */
    public function getUmbrellaSettlementFeeCsvColumnID(): ?array
    {
        return $this->UmbrellaSettlementFeeCsvColumnID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUmbrellaSettlementFeeCsvColumnID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUmbrellaSettlementFeeCsvColumnID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUmbrellaSettlementFeeCsvColumnIDForArrayConstraintFromSetUmbrellaSettlementFeeCsvColumnID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addUmbrellaSettlementFeeCsvColumnsRequestUmbrellaSettlementFeeCsvColumnIDItem) {
            // validation for constraint: itemType
            if (!$addUmbrellaSettlementFeeCsvColumnsRequestUmbrellaSettlementFeeCsvColumnIDItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID) {
                $invalidValues[] = is_object($addUmbrellaSettlementFeeCsvColumnsRequestUmbrellaSettlementFeeCsvColumnIDItem) ? get_class($addUmbrellaSettlementFeeCsvColumnsRequestUmbrellaSettlementFeeCsvColumnIDItem) : sprintf('%s(%s)', gettype($addUmbrellaSettlementFeeCsvColumnsRequestUmbrellaSettlementFeeCsvColumnIDItem), var_export($addUmbrellaSettlementFeeCsvColumnsRequestUmbrellaSettlementFeeCsvColumnIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UmbrellaSettlementFeeCsvColumnID property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UmbrellaSettlementFeeCsvColumnID value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID[] $umbrellaSettlementFeeCsvColumnID
     * @return \Pggns\MidocoApi\Crm\StructType\AddUmbrellaSettlementFeeCsvColumnsRequest
     */
    public function setUmbrellaSettlementFeeCsvColumnID(?array $umbrellaSettlementFeeCsvColumnID = null): self
    {
        // validation for constraint: array
        if ('' !== ($umbrellaSettlementFeeCsvColumnIDArrayErrorMessage = self::validateUmbrellaSettlementFeeCsvColumnIDForArrayConstraintFromSetUmbrellaSettlementFeeCsvColumnID($umbrellaSettlementFeeCsvColumnID))) {
            throw new InvalidArgumentException($umbrellaSettlementFeeCsvColumnIDArrayErrorMessage, __LINE__);
        }
        $this->UmbrellaSettlementFeeCsvColumnID = $umbrellaSettlementFeeCsvColumnID;
        
        return $this;
    }
    /**
     * Add item to UmbrellaSettlementFeeCsvColumnID value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID $item
     * @return \Pggns\MidocoApi\Crm\StructType\AddUmbrellaSettlementFeeCsvColumnsRequest
     */
    public function addToUmbrellaSettlementFeeCsvColumnID(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID) {
            throw new InvalidArgumentException(sprintf('The UmbrellaSettlementFeeCsvColumnID property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeCsvColumnID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UmbrellaSettlementFeeCsvColumnID[] = $item;
        
        return $this;
    }
}
