<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUmbrellaSettlementFeesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteUmbrellaSettlementFeesRequest extends AbstractStructBase
{
    /**
     * The SettingID
     * @var int|null
     */
    protected ?int $SettingID = null;
    /**
     * The FeeID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $FeeID = null;
    /**
     * Constructor method for DeleteUmbrellaSettlementFeesRequest
     * @uses DeleteUmbrellaSettlementFeesRequest::setSettingID()
     * @uses DeleteUmbrellaSettlementFeesRequest::setFeeID()
     * @param int $settingID
     * @param int[] $feeID
     */
    public function __construct(?int $settingID = null, ?array $feeID = null)
    {
        $this
            ->setSettingID($settingID)
            ->setFeeID($feeID);
    }
    /**
     * Get SettingID value
     * @return int|null
     */
    public function getSettingID(): ?int
    {
        return $this->SettingID;
    }
    /**
     * Set SettingID value
     * @param int $settingID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeesRequest
     */
    public function setSettingID(?int $settingID = null): self
    {
        // validation for constraint: int
        if (!is_null($settingID) && !(is_int($settingID) || ctype_digit($settingID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settingID, true), gettype($settingID)), __LINE__);
        }
        $this->SettingID = $settingID;
        
        return $this;
    }
    /**
     * Get FeeID value
     * @return int[]
     */
    public function getFeeID(): ?array
    {
        return $this->FeeID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFeeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeIDForArrayConstraintFromSetFeeID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteUmbrellaSettlementFeesRequestFeeIDItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteUmbrellaSettlementFeesRequestFeeIDItem) || ctype_digit($deleteUmbrellaSettlementFeesRequestFeeIDItem))) {
                $invalidValues[] = is_object($deleteUmbrellaSettlementFeesRequestFeeIDItem) ? get_class($deleteUmbrellaSettlementFeesRequestFeeIDItem) : sprintf('%s(%s)', gettype($deleteUmbrellaSettlementFeesRequestFeeIDItem), var_export($deleteUmbrellaSettlementFeesRequestFeeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeID value
     * @throws InvalidArgumentException
     * @param int[] $feeID
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeesRequest
     */
    public function setFeeID(?array $feeID = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeIDArrayErrorMessage = self::validateFeeIDForArrayConstraintFromSetFeeID($feeID))) {
            throw new InvalidArgumentException($feeIDArrayErrorMessage, __LINE__);
        }
        $this->FeeID = $feeID;
        
        return $this;
    }
    /**
     * Add item to FeeID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteUmbrellaSettlementFeesRequest
     */
    public function addToFeeID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The FeeID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeeID[] = $item;
        
        return $this;
    }
}
