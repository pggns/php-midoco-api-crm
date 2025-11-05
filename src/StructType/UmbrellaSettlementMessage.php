<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementMessage StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementMessage extends AbstractStructBase
{
    /**
     * The LocalizableMessage
     * Meta information extracted from the WSDL
     * - ref: system:LocalizableMessage
     * @var \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\LocalizableMessageType $LocalizableMessage = null;
    /**
     * The MidocoUmbrellaSettlementCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoUmbrellaSettlementCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer $MidocoUmbrellaSettlementCustomer = null;
    /**
     * The CustomerID
     * @var int|null
     */
    protected ?int $CustomerID = null;
    /**
     * The Severity
     * Meta information extracted from the WSDL
     * - default: INFO
     * @var string|null
     */
    protected ?string $Severity = null;
    /**
     * Constructor method for UmbrellaSettlementMessage
     * @uses UmbrellaSettlementMessage::setLocalizableMessage()
     * @uses UmbrellaSettlementMessage::setMidocoUmbrellaSettlementCustomer()
     * @uses UmbrellaSettlementMessage::setCustomerID()
     * @uses UmbrellaSettlementMessage::setSeverity()
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType $localizableMessage
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer $midocoUmbrellaSettlementCustomer
     * @param int $customerID
     * @param string $severity
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\LocalizableMessageType $localizableMessage = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer $midocoUmbrellaSettlementCustomer = null, ?int $customerID = null, ?string $severity = 'INFO')
    {
        $this
            ->setLocalizableMessage($localizableMessage)
            ->setMidocoUmbrellaSettlementCustomer($midocoUmbrellaSettlementCustomer)
            ->setCustomerID($customerID)
            ->setSeverity($severity);
    }
    /**
     * Get LocalizableMessage value
     * @return \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType|null
     */
    public function getLocalizableMessage(): ?\Pggns\MidocoApi\Crm\StructType\LocalizableMessageType
    {
        return $this->LocalizableMessage;
    }
    /**
     * Set LocalizableMessage value
     * @param \Pggns\MidocoApi\Crm\StructType\LocalizableMessageType $localizableMessage
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage
     */
    public function setLocalizableMessage(?\Pggns\MidocoApi\Crm\StructType\LocalizableMessageType $localizableMessage = null): self
    {
        $this->LocalizableMessage = $localizableMessage;
        
        return $this;
    }
    /**
     * Get MidocoUmbrellaSettlementCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer|null
     */
    public function getMidocoUmbrellaSettlementCustomer(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer
    {
        return $this->MidocoUmbrellaSettlementCustomer;
    }
    /**
     * Set MidocoUmbrellaSettlementCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer $midocoUmbrellaSettlementCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage
     */
    public function setMidocoUmbrellaSettlementCustomer(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementCustomer $midocoUmbrellaSettlementCustomer = null): self
    {
        $this->MidocoUmbrellaSettlementCustomer = $midocoUmbrellaSettlementCustomer;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage
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
     * Get Severity value
     * @return string|null
     */
    public function getSeverity(): ?string
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @param string $severity
     * @return \Pggns\MidocoApi\Crm\StructType\UmbrellaSettlementMessage
     */
    public function setSeverity(?string $severity = 'INFO'): self
    {
        // validation for constraint: string
        if (!is_null($severity) && !is_string($severity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($severity, true), gettype($severity)), __LINE__);
        }
        $this->Severity = $severity;
        
        return $this;
    }
}
