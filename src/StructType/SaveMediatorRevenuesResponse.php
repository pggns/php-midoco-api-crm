<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorRevenuesResponse StructType
 * @subpackage Structs
 */
class SaveMediatorRevenuesResponse extends AbstractStructBase
{
    /**
     * The ErrorInfoAgencyMissingInDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ErrorInfoAgencyMissingInDocument
     * @var \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument[]
     */
    protected array $ErrorInfoAgencyMissingInDocument = [];
    /**
     * The excelRows
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $excelRows = [];
    /**
     * Constructor method for SaveMediatorRevenuesResponse
     * @uses SaveMediatorRevenuesResponse::setErrorInfoAgencyMissingInDocument()
     * @uses SaveMediatorRevenuesResponse::setExcelRows()
     * @param \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument[] $errorInfoAgencyMissingInDocument
     * @param int[] $excelRows
     */
    public function __construct(array $errorInfoAgencyMissingInDocument = [], array $excelRows = [])
    {
        $this
            ->setErrorInfoAgencyMissingInDocument($errorInfoAgencyMissingInDocument)
            ->setExcelRows($excelRows);
    }
    /**
     * Get ErrorInfoAgencyMissingInDocument value
     * @return \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument[]
     */
    public function getErrorInfoAgencyMissingInDocument(): array
    {
        return $this->ErrorInfoAgencyMissingInDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setErrorInfoAgencyMissingInDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorInfoAgencyMissingInDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorInfoAgencyMissingInDocumentForArrayConstraintsFromSetErrorInfoAgencyMissingInDocument(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMediatorRevenuesResponseErrorInfoAgencyMissingInDocumentItem) {
            // validation for constraint: itemType
            if (!$saveMediatorRevenuesResponseErrorInfoAgencyMissingInDocumentItem instanceof \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument) {
                $invalidValues[] = is_object($saveMediatorRevenuesResponseErrorInfoAgencyMissingInDocumentItem) ? get_class($saveMediatorRevenuesResponseErrorInfoAgencyMissingInDocumentItem) : sprintf('%s(%s)', gettype($saveMediatorRevenuesResponseErrorInfoAgencyMissingInDocumentItem), var_export($saveMediatorRevenuesResponseErrorInfoAgencyMissingInDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ErrorInfoAgencyMissingInDocument property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ErrorInfoAgencyMissingInDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument[] $errorInfoAgencyMissingInDocument
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesResponse
     */
    public function setErrorInfoAgencyMissingInDocument(array $errorInfoAgencyMissingInDocument = []): self
    {
        // validation for constraint: array
        if ('' !== ($errorInfoAgencyMissingInDocumentArrayErrorMessage = self::validateErrorInfoAgencyMissingInDocumentForArrayConstraintsFromSetErrorInfoAgencyMissingInDocument($errorInfoAgencyMissingInDocument))) {
            throw new InvalidArgumentException($errorInfoAgencyMissingInDocumentArrayErrorMessage, __LINE__);
        }
        $this->ErrorInfoAgencyMissingInDocument = $errorInfoAgencyMissingInDocument;
        
        return $this;
    }
    /**
     * Add item to ErrorInfoAgencyMissingInDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument $item
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesResponse
     */
    public function addToErrorInfoAgencyMissingInDocument(\Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument) {
            throw new InvalidArgumentException(sprintf('The ErrorInfoAgencyMissingInDocument property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ErrorInfoAgencyMissingInDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ErrorInfoAgencyMissingInDocument[] = $item;
        
        return $this;
    }
    /**
     * Get excelRows value
     * @return int[]
     */
    public function getExcelRows(): array
    {
        return $this->excelRows;
    }
    /**
     * This method is responsible for validating the values passed to the setExcelRows method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcelRows method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcelRowsForArrayConstraintsFromSetExcelRows(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMediatorRevenuesResponseExcelRowsItem) {
            // validation for constraint: itemType
            if (!(is_int($saveMediatorRevenuesResponseExcelRowsItem) || ctype_digit($saveMediatorRevenuesResponseExcelRowsItem))) {
                $invalidValues[] = is_object($saveMediatorRevenuesResponseExcelRowsItem) ? get_class($saveMediatorRevenuesResponseExcelRowsItem) : sprintf('%s(%s)', gettype($saveMediatorRevenuesResponseExcelRowsItem), var_export($saveMediatorRevenuesResponseExcelRowsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The excelRows property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set excelRows value
     * @throws InvalidArgumentException
     * @param int[] $excelRows
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesResponse
     */
    public function setExcelRows(array $excelRows = []): self
    {
        // validation for constraint: array
        if ('' !== ($excelRowsArrayErrorMessage = self::validateExcelRowsForArrayConstraintsFromSetExcelRows($excelRows))) {
            throw new InvalidArgumentException($excelRowsArrayErrorMessage, __LINE__);
        }
        $this->excelRows = $excelRows;
        
        return $this;
    }
    /**
     * Add item to excelRows value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesResponse
     */
    public function addToExcelRows(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The excelRows property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->excelRows[] = $item;
        
        return $this;
    }
}
