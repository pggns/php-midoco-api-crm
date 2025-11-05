<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SynchronizeBexioCustomersRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: To synchronize all Bexio Contacts to Midoco Customers, send an empty request.<br> To update one or more Midoco Customers with the data from the Bexio Contact, supply MidocoCustomerId elements. Note that only Midoco Customers with
 * CrmCritera BEXIO_CONTACT_ID can be synchronized that way.<br> To create (or update) one or more Midoco Customers with the data from a Bexio Contact, supply BexioContactNr elements.<br> <br> The synchronization fails for all Midoco Customers, that do
 * not have exactly one BEXIO_CONTACT_ID.<br> The synchronization fails for all Bexio Contacts with an ID that is assigned to multiple Midoco Customers.<br> The request fails if the org.-unit does not have the BEXIO adapter.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SynchronizeBexioCustomersRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerID
     * Meta information extracted from the WSDL
     * - choice: MidocoCustomerID | BexioContactNr
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $MidocoCustomerID = null;
    /**
     * The BexioContactNr
     * Meta information extracted from the WSDL
     * - choice: MidocoCustomerID | BexioContactNr
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $BexioContactNr = null;
    /**
     * Constructor method for SynchronizeBexioCustomersRequest
     * @uses SynchronizeBexioCustomersRequest::setMidocoCustomerID()
     * @uses SynchronizeBexioCustomersRequest::setBexioContactNr()
     * @param int[] $midocoCustomerID
     * @param string[] $bexioContactNr
     */
    public function __construct(?array $midocoCustomerID = null, ?array $bexioContactNr = null)
    {
        $this
            ->setMidocoCustomerID($midocoCustomerID)
            ->setBexioContactNr($bexioContactNr);
    }
    /**
     * Get MidocoCustomerID value
     * @return int[]|null
     */
    public function getMidocoCustomerID(): ?array
    {
        return $this->MidocoCustomerID ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerIDForArrayConstraintFromSetMidocoCustomerID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $synchronizeBexioCustomersRequestMidocoCustomerIDItem) {
            // validation for constraint: itemType
            if (!(is_int($synchronizeBexioCustomersRequestMidocoCustomerIDItem) || ctype_digit($synchronizeBexioCustomersRequestMidocoCustomerIDItem))) {
                $invalidValues[] = is_object($synchronizeBexioCustomersRequestMidocoCustomerIDItem) ? get_class($synchronizeBexioCustomersRequestMidocoCustomerIDItem) : sprintf('%s(%s)', gettype($synchronizeBexioCustomersRequestMidocoCustomerIDItem), var_export($synchronizeBexioCustomersRequestMidocoCustomerIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMidocoCustomerIDForChoiceConstraintFromSetMidocoCustomerID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'BexioContactNr',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MidocoCustomerID can\'t be set as the property %s is already set. Only one property must be set among these properties: MidocoCustomerID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MidocoCustomerID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param int[] $midocoCustomerID
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersRequest
     */
    public function setMidocoCustomerID(?array $midocoCustomerID = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerIDArrayErrorMessage = self::validateMidocoCustomerIDForArrayConstraintFromSetMidocoCustomerID($midocoCustomerID))) {
            throw new InvalidArgumentException($midocoCustomerIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(MidocoCustomerID, BexioContactNr)
        if ('' !== ($midocoCustomerIDChoiceErrorMessage = self::validateMidocoCustomerIDForChoiceConstraintFromSetMidocoCustomerID($midocoCustomerID))) {
            throw new InvalidArgumentException($midocoCustomerIDChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($midocoCustomerID) && count($midocoCustomerID) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($midocoCustomerID)), __LINE__);
        }
        if (is_null($midocoCustomerID) || (is_array($midocoCustomerID) && empty($midocoCustomerID))) {
            unset($this->MidocoCustomerID);
        } else {
            $this->MidocoCustomerID = $midocoCustomerID;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToMidocoCustomerID method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToMidocoCustomerID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToMidocoCustomerID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'BexioContactNr',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MidocoCustomerID can\'t be set as the property %s is already set. Only one property must be set among these properties: MidocoCustomerID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to MidocoCustomerID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersRequest
     */
    public function addToMidocoCustomerID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(MidocoCustomerID, BexioContactNr)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToMidocoCustomerID($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->MidocoCustomerID) && count($this->MidocoCustomerID) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->MidocoCustomerID)), __LINE__);
        }
        $this->MidocoCustomerID[] = $item;
        
        return $this;
    }
    /**
     * Get BexioContactNr value
     * @return string[]|null
     */
    public function getBexioContactNr(): ?array
    {
        return $this->BexioContactNr ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBexioContactNr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBexioContactNr method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBexioContactNrForArrayConstraintFromSetBexioContactNr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $synchronizeBexioCustomersRequestBexioContactNrItem) {
            // validation for constraint: itemType
            if (!is_string($synchronizeBexioCustomersRequestBexioContactNrItem)) {
                $invalidValues[] = is_object($synchronizeBexioCustomersRequestBexioContactNrItem) ? get_class($synchronizeBexioCustomersRequestBexioContactNrItem) : sprintf('%s(%s)', gettype($synchronizeBexioCustomersRequestBexioContactNrItem), var_export($synchronizeBexioCustomersRequestBexioContactNrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BexioContactNr property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBexioContactNr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBexioContactNr method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBexioContactNrForChoiceConstraintFromSetBexioContactNr($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MidocoCustomerID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BexioContactNr can\'t be set as the property %s is already set. Only one property must be set among these properties: BexioContactNr, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BexioContactNr value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param string[] $bexioContactNr
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersRequest
     */
    public function setBexioContactNr(?array $bexioContactNr = null): self
    {
        // validation for constraint: array
        if ('' !== ($bexioContactNrArrayErrorMessage = self::validateBexioContactNrForArrayConstraintFromSetBexioContactNr($bexioContactNr))) {
            throw new InvalidArgumentException($bexioContactNrArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(MidocoCustomerID, BexioContactNr)
        if ('' !== ($bexioContactNrChoiceErrorMessage = self::validateBexioContactNrForChoiceConstraintFromSetBexioContactNr($bexioContactNr))) {
            throw new InvalidArgumentException($bexioContactNrChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($bexioContactNr) && count($bexioContactNr) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($bexioContactNr)), __LINE__);
        }
        if (is_null($bexioContactNr) || (is_array($bexioContactNr) && empty($bexioContactNr))) {
            unset($this->BexioContactNr);
        } else {
            $this->BexioContactNr = $bexioContactNr;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToBexioContactNr method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToBexioContactNr method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToBexioContactNr($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MidocoCustomerID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BexioContactNr can\'t be set as the property %s is already set. Only one property must be set among these properties: BexioContactNr, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to BexioContactNr value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersRequest
     */
    public function addToBexioContactNr(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BexioContactNr property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(MidocoCustomerID, BexioContactNr)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToBexioContactNr($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->BexioContactNr) && count($this->BexioContactNr) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->BexioContactNr)), __LINE__);
        }
        $this->BexioContactNr[] = $item;
        
        return $this;
    }
}
