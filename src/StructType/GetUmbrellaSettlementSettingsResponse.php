<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementSettingsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementSettingsResponse extends AbstractStructBase
{
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - documentation: Echos the CustomerID of the request, so the CustomerID is included even if there are no settings.
     * @var int|null
     */
    protected ?int $CustomerID = null;
    /**
     * The MidocoUmbrellaSettlementSetting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting[]
     */
    protected ?array $MidocoUmbrellaSettlementSetting = null;
    /**
     * Constructor method for GetUmbrellaSettlementSettingsResponse
     * @uses GetUmbrellaSettlementSettingsResponse::setCustomerID()
     * @uses GetUmbrellaSettlementSettingsResponse::setMidocoUmbrellaSettlementSetting()
     * @param int $customerID
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting[] $midocoUmbrellaSettlementSetting
     */
    public function __construct(?int $customerID = null, ?array $midocoUmbrellaSettlementSetting = null)
    {
        $this
            ->setCustomerID($customerID)
            ->setMidocoUmbrellaSettlementSetting($midocoUmbrellaSettlementSetting);
    }
    /**
     * Get CustomerID value
     * @return int|null
     */
    public function getCustomerID(): ?int
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param int $customerID
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementSettingsResponse
     */
    public function setCustomerID(?int $customerID = null): self
    {
        // validation for constraint: int
        if (!is_null($customerID) && !(is_int($customerID) || ctype_digit($customerID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        $this->CustomerID = $customerID;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaSettlementSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting[]
     */
    public function getMidocoUmbrellaSettlementSetting(): ?array
    {
        return $this->MidocoUmbrellaSettlementSetting;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementSetting method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementSettingForArrayConstraintFromSetMidocoUmbrellaSettlementSetting(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUmbrellaSettlementSettingsResponseMidocoUmbrellaSettlementSettingItem) {
            // validation for constraint: itemType
            if (!$getUmbrellaSettlementSettingsResponseMidocoUmbrellaSettlementSettingItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting) {
                $invalidValues[] = is_object($getUmbrellaSettlementSettingsResponseMidocoUmbrellaSettlementSettingItem) ? get_class($getUmbrellaSettlementSettingsResponseMidocoUmbrellaSettlementSettingItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementSettingsResponseMidocoUmbrellaSettlementSettingItem), var_export($getUmbrellaSettlementSettingsResponseMidocoUmbrellaSettlementSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementSetting property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting[] $midocoUmbrellaSettlementSetting
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementSettingsResponse
     */
    public function setMidocoUmbrellaSettlementSetting(?array $midocoUmbrellaSettlementSetting = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementSettingArrayErrorMessage = self::validateMidocoUmbrellaSettlementSettingForArrayConstraintFromSetMidocoUmbrellaSettlementSetting($midocoUmbrellaSettlementSetting))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementSettingArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementSetting = $midocoUmbrellaSettlementSetting;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementSettingsResponse
     */
    public function addToMidocoUmbrellaSettlementSetting(\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementSetting property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementSetting[] = $item;
        
        return $this;
    }
}
