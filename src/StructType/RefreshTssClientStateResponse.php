<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshTssClientStateResponse StructType
 * @subpackage Structs
 */
class RefreshTssClientStateResponse extends TssApiErrorConveyingResponse
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoTssClient[]
     */
    protected array $MidocoTssClient = [];
    /**
     * Constructor method for RefreshTssClientStateResponse
     * @uses RefreshTssClientStateResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTssClient[] $midocoTssClient
     */
    public function __construct(array $midocoTssClient = [])
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTssClient[]
     */
    public function getMidocoTssClient(): array
    {
        return $this->MidocoTssClient;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTssClient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssClient method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssClientForArrayConstraintsFromSetMidocoTssClient(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refreshTssClientStateResponseMidocoTssClientItem) {
            // validation for constraint: itemType
            if (!$refreshTssClientStateResponseMidocoTssClientItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoTssClient) {
                $invalidValues[] = is_object($refreshTssClientStateResponseMidocoTssClientItem) ? get_class($refreshTssClientStateResponseMidocoTssClientItem) : sprintf('%s(%s)', gettype($refreshTssClientStateResponseMidocoTssClientItem), var_export($refreshTssClientStateResponseMidocoTssClientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssClient property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoTssClient, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssClient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTssClient[] $midocoTssClient
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshTssClientStateResponse
     */
    public function setMidocoTssClient(array $midocoTssClient = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssClientArrayErrorMessage = self::validateMidocoTssClientForArrayConstraintsFromSetMidocoTssClient($midocoTssClient))) {
            throw new InvalidArgumentException($midocoTssClientArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
    /**
     * Add item to MidocoTssClient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTssClient $item
     * @return \Pggns\MidocoApi\Crm\StructType\RefreshTssClientStateResponse
     */
    public function addToMidocoTssClient(\Pggns\MidocoApi\Crm\StructType\MidocoTssClient $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoTssClient) {
            throw new InvalidArgumentException(sprintf('The MidocoTssClient property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoTssClient, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssClient[] = $item;
        
        return $this;
    }
}