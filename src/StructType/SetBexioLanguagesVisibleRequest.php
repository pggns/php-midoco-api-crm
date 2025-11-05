<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBexioLanguagesVisibleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetBexioLanguagesVisibleRequest extends AbstractStructBase
{
    /**
     * The visible
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $visible;
    /**
     * The LanguageID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $LanguageID = null;
    /**
     * Constructor method for SetBexioLanguagesVisibleRequest
     * @uses SetBexioLanguagesVisibleRequest::setVisible()
     * @uses SetBexioLanguagesVisibleRequest::setLanguageID()
     * @param bool $visible
     * @param int[] $languageID
     */
    public function __construct(bool $visible, ?array $languageID = null)
    {
        $this
            ->setVisible($visible)
            ->setLanguageID($languageID);
    }
    /**
     * Get visible value
     * @return bool
     */
    public function getVisible(): bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioLanguagesVisibleRequest
     */
    public function setVisible(bool $visible): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
    /**
     * Get LanguageID value
     * @return int[]
     */
    public function getLanguageID(): ?array
    {
        return $this->LanguageID;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLanguageID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguageID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguageIDForArrayConstraintFromSetLanguageID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setBexioLanguagesVisibleRequestLanguageIDItem) {
            // validation for constraint: itemType
            if (!(is_int($setBexioLanguagesVisibleRequestLanguageIDItem) || ctype_digit($setBexioLanguagesVisibleRequestLanguageIDItem))) {
                $invalidValues[] = is_object($setBexioLanguagesVisibleRequestLanguageIDItem) ? get_class($setBexioLanguagesVisibleRequestLanguageIDItem) : sprintf('%s(%s)', gettype($setBexioLanguagesVisibleRequestLanguageIDItem), var_export($setBexioLanguagesVisibleRequestLanguageIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LanguageID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LanguageID value
     * @throws InvalidArgumentException
     * @param int[] $languageID
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioLanguagesVisibleRequest
     */
    public function setLanguageID(?array $languageID = null): self
    {
        // validation for constraint: array
        if ('' !== ($languageIDArrayErrorMessage = self::validateLanguageIDForArrayConstraintFromSetLanguageID($languageID))) {
            throw new InvalidArgumentException($languageIDArrayErrorMessage, __LINE__);
        }
        $this->LanguageID = $languageID;
        
        return $this;
    }
    /**
     * Add item to LanguageID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SetBexioLanguagesVisibleRequest
     */
    public function addToLanguageID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The LanguageID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LanguageID[] = $item;
        
        return $this;
    }
}
