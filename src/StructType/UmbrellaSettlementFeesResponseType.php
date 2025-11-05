<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementFeesResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class UmbrellaSettlementFeesResponseType extends AbstractStructBase
{
    /**
     * The SettingID
     * @var int|null
     */
    protected ?int $SettingID = null;
    /**
     * The MidocoUmbrellaSettlementFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementFee
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[]
     */
    protected ?array $MidocoUmbrellaSettlementFee = null;
    /**
     * Constructor method for UmbrellaSettlementFeesResponseType
     * @uses UmbrellaSettlementFeesResponseType::setSettingID()
     * @uses UmbrellaSettlementFeesResponseType::setMidocoUmbrellaSettlementFee()
     * @param int $settingID
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[] $midocoUmbrellaSettlementFee
     */
    public function __construct(?int $settingID = null, ?array $midocoUmbrellaSettlementFee = null)
    {
        $this
            ->setSettingID($settingID)
            ->setMidocoUmbrellaSettlementFee($midocoUmbrellaSettlementFee);
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
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeesResponseType
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
     * Get MidocoUmbrellaSettlementFee value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[]
     */
    public function getMidocoUmbrellaSettlementFee(): ?array
    {
        return $this->MidocoUmbrellaSettlementFee;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementFee method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementFeeForArrayConstraintFromSetMidocoUmbrellaSettlementFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $umbrellaSettlementFeesResponseTypeMidocoUmbrellaSettlementFeeItem) {
            // validation for constraint: itemType
            if (!$umbrellaSettlementFeesResponseTypeMidocoUmbrellaSettlementFeeItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee) {
                $invalidValues[] = is_object($umbrellaSettlementFeesResponseTypeMidocoUmbrellaSettlementFeeItem) ? get_class($umbrellaSettlementFeesResponseTypeMidocoUmbrellaSettlementFeeItem) : sprintf('%s(%s)', gettype($umbrellaSettlementFeesResponseTypeMidocoUmbrellaSettlementFeeItem), var_export($umbrellaSettlementFeesResponseTypeMidocoUmbrellaSettlementFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementFee property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee[] $midocoUmbrellaSettlementFee
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeesResponseType
     */
    public function setMidocoUmbrellaSettlementFee(?array $midocoUmbrellaSettlementFee = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementFeeArrayErrorMessage = self::validateMidocoUmbrellaSettlementFeeForArrayConstraintFromSetMidocoUmbrellaSettlementFee($midocoUmbrellaSettlementFee))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementFeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementFee = $midocoUmbrellaSettlementFee;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $item
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeesResponseType
     */
    public function addToMidocoUmbrellaSettlementFee(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementFee property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementFee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementFee[] = $item;
        
        return $this;
    }
}
