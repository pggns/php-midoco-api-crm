<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBexioLanguagesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBexioLanguagesResponse extends AbstractStructBase
{
    /**
     * The MidocoBexioLanguage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO[]
     */
    protected ?array $MidocoBexioLanguage = null;
    /**
     * Constructor method for GetBexioLanguagesResponse
     * @uses GetBexioLanguagesResponse::setMidocoBexioLanguage()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO[] $midocoBexioLanguage
     */
    public function __construct(?array $midocoBexioLanguage = null)
    {
        $this
            ->setMidocoBexioLanguage($midocoBexioLanguage);
    }
    /**
     * Get MidocoBexioLanguage value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO[]
     */
    public function getMidocoBexioLanguage(): ?array
    {
        return $this->MidocoBexioLanguage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBexioLanguage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBexioLanguage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBexioLanguageForArrayConstraintFromSetMidocoBexioLanguage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBexioLanguagesResponseMidocoBexioLanguageItem) {
            // validation for constraint: itemType
            if (!$getBexioLanguagesResponseMidocoBexioLanguageItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO) {
                $invalidValues[] = is_object($getBexioLanguagesResponseMidocoBexioLanguageItem) ? get_class($getBexioLanguagesResponseMidocoBexioLanguageItem) : sprintf('%s(%s)', gettype($getBexioLanguagesResponseMidocoBexioLanguageItem), var_export($getBexioLanguagesResponseMidocoBexioLanguageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBexioLanguage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBexioLanguage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO[] $midocoBexioLanguage
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioLanguagesResponse
     */
    public function setMidocoBexioLanguage(?array $midocoBexioLanguage = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBexioLanguageArrayErrorMessage = self::validateMidocoBexioLanguageForArrayConstraintFromSetMidocoBexioLanguage($midocoBexioLanguage))) {
            throw new InvalidArgumentException($midocoBexioLanguageArrayErrorMessage, __LINE__);
        }
        $this->MidocoBexioLanguage = $midocoBexioLanguage;
        
        return $this;
    }
    /**
     * Add item to MidocoBexioLanguage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetBexioLanguagesResponse
     */
    public function addToMidocoBexioLanguage(\Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBexioLanguage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioLanguageDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBexioLanguage[] = $item;
        
        return $this;
    }
}
