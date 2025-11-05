<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementFeeLocalizationsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Delete UmbrellaSettlementFeeLocalizations.<br> At least one localization must be given and all localizations must refer to the same fee definition.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementFeeLocalizationsRequest extends AbstractStructBase
{
    /**
     * The UmbrellaSettlementFeeLocalizationID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: UmbrellaSettlementFeeLocalizationID
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID[]
     */
    protected ?array $UmbrellaSettlementFeeLocalizationID = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementFeeLocalizationsRequest
     * @uses DeleteUmbrellaSettlementFeeLocalizationsRequest::setUmbrellaSettlementFeeLocalizationID()
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID[] $umbrellaSettlementFeeLocalizationID
     */
    public function __construct(?array $umbrellaSettlementFeeLocalizationID = null)
    {
        $this
            ->setUmbrellaSettlementFeeLocalizationID($umbrellaSettlementFeeLocalizationID);
    }
    /**
     * Get UmbrellaSettlementFeeLocalizationID value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID[]
     */
    public function getUmbrellaSettlementFeeLocalizationID(): ?array
    {
        return $this->UmbrellaSettlementFeeLocalizationID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUmbrellaSettlementFeeLocalizationID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUmbrellaSettlementFeeLocalizationID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUmbrellaSettlementFeeLocalizationIDForArrayConstraintFromSetUmbrellaSettlementFeeLocalizationID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteUmbrellaSettlementFeeLocalizationsRequestUmbrellaSettlementFeeLocalizationIDItem) {
            // validation for constraint: itemType
            if (!$deleteUmbrellaSettlementFeeLocalizationsRequestUmbrellaSettlementFeeLocalizationIDItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID) {
                $invalidValues[] = is_object($deleteUmbrellaSettlementFeeLocalizationsRequestUmbrellaSettlementFeeLocalizationIDItem) ? get_class($deleteUmbrellaSettlementFeeLocalizationsRequestUmbrellaSettlementFeeLocalizationIDItem) : sprintf('%s(%s)', gettype($deleteUmbrellaSettlementFeeLocalizationsRequestUmbrellaSettlementFeeLocalizationIDItem), var_export($deleteUmbrellaSettlementFeeLocalizationsRequestUmbrellaSettlementFeeLocalizationIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UmbrellaSettlementFeeLocalizationID property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UmbrellaSettlementFeeLocalizationID value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID[] $umbrellaSettlementFeeLocalizationID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeeLocalizationsRequest
     */
    public function setUmbrellaSettlementFeeLocalizationID(?array $umbrellaSettlementFeeLocalizationID = null): self
    {
        // validation for constraint: array
        if ('' !== ($umbrellaSettlementFeeLocalizationIDArrayErrorMessage = self::validateUmbrellaSettlementFeeLocalizationIDForArrayConstraintFromSetUmbrellaSettlementFeeLocalizationID($umbrellaSettlementFeeLocalizationID))) {
            throw new InvalidArgumentException($umbrellaSettlementFeeLocalizationIDArrayErrorMessage, __LINE__);
        }
        $this->UmbrellaSettlementFeeLocalizationID = $umbrellaSettlementFeeLocalizationID;
        
        return $this;
    }
    /**
     * Add item to UmbrellaSettlementFeeLocalizationID value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID $item
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeeLocalizationsRequest
     */
    public function addToUmbrellaSettlementFeeLocalizationID(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID) {
            throw new InvalidArgumentException(sprintf('The UmbrellaSettlementFeeLocalizationID property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UmbrellaSettlementFeeLocalizationID[] = $item;
        
        return $this;
    }
}
