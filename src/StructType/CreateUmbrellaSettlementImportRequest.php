<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUmbrellaSettlementImportRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Upload a CSV or Excel file as data source for an Umbrella settlement month.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateUmbrellaSettlementImportRequest extends AbstractStructBase
{
    /**
     * The settlementMonthID
     * @var int|null
     */
    protected ?int $settlementMonthID = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The filename
     * @var string|null
     */
    protected ?string $filename = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The customerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerID = null;
    /**
     * The charset
     * @var string|null
     */
    protected ?string $charset = null;
    /**
     * The content
     * @var string|null
     */
    protected ?string $content = null;
    /**
     * Constructor method for CreateUmbrellaSettlementImportRequest
     * @uses CreateUmbrellaSettlementImportRequest::setSettlementMonthID()
     * @uses CreateUmbrellaSettlementImportRequest::setType()
     * @uses CreateUmbrellaSettlementImportRequest::setFilename()
     * @uses CreateUmbrellaSettlementImportRequest::setDescription()
     * @uses CreateUmbrellaSettlementImportRequest::setCustomerID()
     * @uses CreateUmbrellaSettlementImportRequest::setCharset()
     * @uses CreateUmbrellaSettlementImportRequest::setContent()
     * @param int $settlementMonthID
     * @param string $type
     * @param string $filename
     * @param string $description
     * @param int $customerID
     * @param string $charset
     * @param string $content
     */
    public function __construct(?int $settlementMonthID = null, ?string $type = null, ?string $filename = null, ?string $description = null, ?int $customerID = null, ?string $charset = null, ?string $content = null)
    {
        $this
            ->setSettlementMonthID($settlementMonthID)
            ->setType($type)
            ->setFilename($filename)
            ->setDescription($description)
            ->setCustomerID($customerID)
            ->setCharset($charset)
            ->setContent($content);
    }
    /**
     * Get settlementMonthID value
     * @return int|null
     */
    public function getSettlementMonthID(): ?int
    {
        return $this->settlementMonthID;
    }
    /**
     * Set settlementMonthID value
     * @param int $settlementMonthID
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportRequest
     */
    public function setSettlementMonthID(?int $settlementMonthID = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthID) && !(is_int($settlementMonthID) || ctype_digit($settlementMonthID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthID, true), gettype($settlementMonthID)), __LINE__);
        }
        $this->settlementMonthID = $settlementMonthID;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\UmbrellaSettlementImportFormat::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportRequest
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportRequest
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get customerID value
     * @return int|null
     */
    public function getCustomerID(): ?int
    {
        return $this->customerID;
    }
    /**
     * Set customerID value
     * @param int $customerID
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportRequest
     */
    public function setCustomerID(?int $customerID = null): self
    {
        // validation for constraint: int
        if (!is_null($customerID) && !(is_int($customerID) || ctype_digit($customerID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        $this->customerID = $customerID;
        
        return $this;
    }
    /**
     * Get charset value
     * @return string|null
     */
    public function getCharset(): ?string
    {
        return $this->charset;
    }
    /**
     * Set charset value
     * @param string $charset
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportRequest
     */
    public function setCharset(?string $charset = null): self
    {
        // validation for constraint: string
        if (!is_null($charset) && !is_string($charset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charset, true), gettype($charset)), __LINE__);
        }
        $this->charset = $charset;
        
        return $this;
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \Pggns\MidocoApi\Crm\StructType\CreateUmbrellaSettlementImportRequest
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
}
