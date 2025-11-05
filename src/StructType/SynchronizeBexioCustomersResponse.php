<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SynchronizeBexioCustomersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SynchronizeBexioCustomersResponse extends AbstractStructBase
{
    /**
     * The BexioContactSynchronizationDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BexioContactSynchronizationDetail
     * @var \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail[]
     */
    protected ?array $BexioContactSynchronizationDetail = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: Messages concerning all contacts. E.g. an error response from Bexio.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Message = null;
    /**
     * The failed
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $failed = null;
    /**
     * Constructor method for SynchronizeBexioCustomersResponse
     * @uses SynchronizeBexioCustomersResponse::setBexioContactSynchronizationDetail()
     * @uses SynchronizeBexioCustomersResponse::setMessage()
     * @uses SynchronizeBexioCustomersResponse::setFailed()
     * @param \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail[] $bexioContactSynchronizationDetail
     * @param string[] $message
     * @param bool $failed
     */
    public function __construct(?array $bexioContactSynchronizationDetail = null, ?array $message = null, ?bool $failed = false)
    {
        $this
            ->setBexioContactSynchronizationDetail($bexioContactSynchronizationDetail)
            ->setMessage($message)
            ->setFailed($failed);
    }
    /**
     * Get BexioContactSynchronizationDetail value
     * @return \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail[]
     */
    public function getBexioContactSynchronizationDetail(): ?array
    {
        return $this->BexioContactSynchronizationDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBexioContactSynchronizationDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBexioContactSynchronizationDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBexioContactSynchronizationDetailForArrayConstraintFromSetBexioContactSynchronizationDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $synchronizeBexioCustomersResponseBexioContactSynchronizationDetailItem) {
            // validation for constraint: itemType
            if (!$synchronizeBexioCustomersResponseBexioContactSynchronizationDetailItem instanceof \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail) {
                $invalidValues[] = is_object($synchronizeBexioCustomersResponseBexioContactSynchronizationDetailItem) ? get_class($synchronizeBexioCustomersResponseBexioContactSynchronizationDetailItem) : sprintf('%s(%s)', gettype($synchronizeBexioCustomersResponseBexioContactSynchronizationDetailItem), var_export($synchronizeBexioCustomersResponseBexioContactSynchronizationDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BexioContactSynchronizationDetail property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BexioContactSynchronizationDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail[] $bexioContactSynchronizationDetail
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersResponse
     */
    public function setBexioContactSynchronizationDetail(?array $bexioContactSynchronizationDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($bexioContactSynchronizationDetailArrayErrorMessage = self::validateBexioContactSynchronizationDetailForArrayConstraintFromSetBexioContactSynchronizationDetail($bexioContactSynchronizationDetail))) {
            throw new InvalidArgumentException($bexioContactSynchronizationDetailArrayErrorMessage, __LINE__);
        }
        $this->BexioContactSynchronizationDetail = $bexioContactSynchronizationDetail;
        
        return $this;
    }
    /**
     * Add item to BexioContactSynchronizationDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail $item
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersResponse
     */
    public function addToBexioContactSynchronizationDetail(\Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail) {
            throw new InvalidArgumentException(sprintf('The BexioContactSynchronizationDetail property can only contain items of type \Pggns\MidocoApi\Crm\StructType\BexioContactSynchronizationDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BexioContactSynchronizationDetail[] = $item;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string[]
     */
    public function getMessage(): ?array
    {
        return $this->Message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageForArrayConstraintFromSetMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $synchronizeBexioCustomersResponseMessageItem) {
            // validation for constraint: itemType
            if (!is_string($synchronizeBexioCustomersResponseMessageItem)) {
                $invalidValues[] = is_object($synchronizeBexioCustomersResponseMessageItem) ? get_class($synchronizeBexioCustomersResponseMessageItem) : sprintf('%s(%s)', gettype($synchronizeBexioCustomersResponseMessageItem), var_export($synchronizeBexioCustomersResponseMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message value
     * @throws InvalidArgumentException
     * @param string[] $message
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersResponse
     */
    public function setMessage(?array $message = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageArrayErrorMessage = self::validateMessageForArrayConstraintFromSetMessage($message))) {
            throw new InvalidArgumentException($messageArrayErrorMessage, __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Add item to Message value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersResponse
     */
    public function addToMessage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Message property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Message[] = $item;
        
        return $this;
    }
    /**
     * Get failed value
     * @return bool|null
     */
    public function getFailed(): ?bool
    {
        return $this->failed;
    }
    /**
     * Set failed value
     * @param bool $failed
     * @return \Pggns\MidocoApi\Crm\StructType\SynchronizeBexioCustomersResponse
     */
    public function setFailed(?bool $failed = false): self
    {
        // validation for constraint: boolean
        if (!is_null($failed) && !is_bool($failed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($failed, true), gettype($failed)), __LINE__);
        }
        $this->failed = $failed;
        
        return $this;
    }
}
