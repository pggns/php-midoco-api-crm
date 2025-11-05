<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementFeeLocalizationsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns all localizations for an UmbrellaSettlementFeeDefinition.<br> If there are no localizations, the response will at least echo the FeeDefinitionID from the request.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementFeeLocalizationsResponse extends AbstractStructBase
{
    /**
     * The FeeDefinitionID
     * @var int|null
     */
    protected ?int $FeeDefinitionID = null;
    /**
     * The MidocoUmbrellaSettlementFeeLocalization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementFeeLocalization
     * @var \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[]
     */
    protected ?array $MidocoUmbrellaSettlementFeeLocalization = null;
    /**
     * Constructor method for GetUmbrellaSettlementFeeLocalizationsResponse
     * @uses GetUmbrellaSettlementFeeLocalizationsResponse::setFeeDefinitionID()
     * @uses GetUmbrellaSettlementFeeLocalizationsResponse::setMidocoUmbrellaSettlementFeeLocalization()
     * @param int $feeDefinitionID
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[] $midocoUmbrellaSettlementFeeLocalization
     */
    public function __construct(?int $feeDefinitionID = null, ?array $midocoUmbrellaSettlementFeeLocalization = null)
    {
        $this
            ->setFeeDefinitionID($feeDefinitionID)
            ->setMidocoUmbrellaSettlementFeeLocalization($midocoUmbrellaSettlementFeeLocalization);
    }
    /**
     * Get FeeDefinitionID value
     * @return int|null
     */
    public function getFeeDefinitionID(): ?int
    {
        return $this->FeeDefinitionID;
    }
    /**
     * Set FeeDefinitionID value
     * @param int $feeDefinitionID
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementFeeLocalizationsResponse
     */
    public function setFeeDefinitionID(?int $feeDefinitionID = null): self
    {
        // validation for constraint: int
        if (!is_null($feeDefinitionID) && !(is_int($feeDefinitionID) || ctype_digit($feeDefinitionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeDefinitionID, true), gettype($feeDefinitionID)), __LINE__);
        }
        $this->FeeDefinitionID = $feeDefinitionID;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaSettlementFeeLocalization value
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[]
     */
    public function getMidocoUmbrellaSettlementFeeLocalization(): ?array
    {
        return $this->MidocoUmbrellaSettlementFeeLocalization;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUmbrellaSettlementFeeLocalization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUmbrellaSettlementFeeLocalization method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUmbrellaSettlementFeeLocalizationForArrayConstraintFromSetMidocoUmbrellaSettlementFeeLocalization(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUmbrellaSettlementFeeLocalizationsResponseMidocoUmbrellaSettlementFeeLocalizationItem) {
            // validation for constraint: itemType
            if (!$getUmbrellaSettlementFeeLocalizationsResponseMidocoUmbrellaSettlementFeeLocalizationItem instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO) {
                $invalidValues[] = is_object($getUmbrellaSettlementFeeLocalizationsResponseMidocoUmbrellaSettlementFeeLocalizationItem) ? get_class($getUmbrellaSettlementFeeLocalizationsResponseMidocoUmbrellaSettlementFeeLocalizationItem) : sprintf('%s(%s)', gettype($getUmbrellaSettlementFeeLocalizationsResponseMidocoUmbrellaSettlementFeeLocalizationItem), var_export($getUmbrellaSettlementFeeLocalizationsResponseMidocoUmbrellaSettlementFeeLocalizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUmbrellaSettlementFeeLocalization property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUmbrellaSettlementFeeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO[] $midocoUmbrellaSettlementFeeLocalization
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementFeeLocalizationsResponse
     */
    public function setMidocoUmbrellaSettlementFeeLocalization(?array $midocoUmbrellaSettlementFeeLocalization = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUmbrellaSettlementFeeLocalizationArrayErrorMessage = self::validateMidocoUmbrellaSettlementFeeLocalizationForArrayConstraintFromSetMidocoUmbrellaSettlementFeeLocalization($midocoUmbrellaSettlementFeeLocalization))) {
            throw new InvalidArgumentException($midocoUmbrellaSettlementFeeLocalizationArrayErrorMessage, __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeLocalization = $midocoUmbrellaSettlementFeeLocalization;
        
        return $this;
    }
    /**
     * Add item to MidocoUmbrellaSettlementFeeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementFeeLocalizationsResponse
     */
    public function addToMidocoUmbrellaSettlementFeeLocalization(\Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUmbrellaSettlementFeeLocalization property can only contain items of type \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementFeeLocalizationDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUmbrellaSettlementFeeLocalization[] = $item;
        
        return $this;
    }
}
