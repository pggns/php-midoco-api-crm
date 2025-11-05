<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRateHawkExportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRateHawkExportRequest extends AbstractStructBase
{
    /**
     * The action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $action;
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
     */
    protected \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $MidocoCrmCustomer;
    /**
     * The MidocoSelectedCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSelectedCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    protected ?array $MidocoSelectedCrmPersonTraveller = null;
    /**
     * The exportBirthday
     * @var bool|null
     */
    protected ?bool $exportBirthday = null;
    /**
     * The exportAge
     * @var bool|null
     */
    protected ?bool $exportAge = null;
    /**
     * Constructor method for GetRateHawkExportRequest
     * @uses GetRateHawkExportRequest::setAction()
     * @uses GetRateHawkExportRequest::setMidocoCrmCustomer()
     * @uses GetRateHawkExportRequest::setMidocoSelectedCrmPersonTraveller()
     * @uses GetRateHawkExportRequest::setExportBirthday()
     * @uses GetRateHawkExportRequest::setExportAge()
     * @param string $action
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @param bool $exportBirthday
     * @param bool $exportAge
     */
    public function __construct(string $action, \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer, ?array $midocoSelectedCrmPersonTraveller = null, ?bool $exportBirthday = null, ?bool $exportAge = null)
    {
        $this
            ->setAction($action)
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller)
            ->setExportBirthday($exportBirthday)
            ->setExportAge($exportAge);
    }
    /**
     * Get action value
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @uses \Pggns\MidocoApi\Crm\EnumType\Action::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\Action::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \Pggns\MidocoApi\Crm\StructType\GetRateHawkExportRequest
     */
    public function setAction(string $action): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\Action::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\Action', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\Action::getValidValues())), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
     */
    public function getMidocoCrmCustomer(): \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\GetRateHawkExportRequest
     */
    public function setMidocoCrmCustomer(\Pggns\MidocoApi\Crm\StructType\MidocoCrmCustomer $midocoCrmCustomer): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSelectedCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    public function getMidocoSelectedCrmPersonTraveller(): ?array
    {
        return $this->MidocoSelectedCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSelectedCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSelectedCrmPersonTraveller method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSelectedCrmPersonTravellerForArrayConstraintFromSetMidocoSelectedCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRateHawkExportRequestMidocoSelectedCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$getRateHawkExportRequestMidocoSelectedCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller) {
                $invalidValues[] = is_object($getRateHawkExportRequestMidocoSelectedCrmPersonTravellerItem) ? get_class($getRateHawkExportRequestMidocoSelectedCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($getRateHawkExportRequestMidocoSelectedCrmPersonTravellerItem), var_export($getRateHawkExportRequestMidocoSelectedCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crm\StructType\GetRateHawkExportRequest
     */
    public function setMidocoSelectedCrmPersonTraveller(?array $midocoSelectedCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSelectedCrmPersonTravellerArrayErrorMessage = self::validateMidocoSelectedCrmPersonTravellerForArrayConstraintFromSetMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoSelectedCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller = $midocoSelectedCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetRateHawkExportRequest
     */
    public function addToMidocoSelectedCrmPersonTraveller(\Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller) {
            throw new InvalidArgumentException(sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get exportBirthday value
     * @return bool|null
     */
    public function getExportBirthday(): ?bool
    {
        return $this->exportBirthday;
    }
    /**
     * Set exportBirthday value
     * @param bool $exportBirthday
     * @return \Pggns\MidocoApi\Crm\StructType\GetRateHawkExportRequest
     */
    public function setExportBirthday(?bool $exportBirthday = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportBirthday) && !is_bool($exportBirthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportBirthday, true), gettype($exportBirthday)), __LINE__);
        }
        $this->exportBirthday = $exportBirthday;
        
        return $this;
    }
    /**
     * Get exportAge value
     * @return bool|null
     */
    public function getExportAge(): ?bool
    {
        return $this->exportAge;
    }
    /**
     * Set exportAge value
     * @param bool $exportAge
     * @return \Pggns\MidocoApi\Crm\StructType\GetRateHawkExportRequest
     */
    public function setExportAge(?bool $exportAge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportAge) && !is_bool($exportAge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportAge, true), gettype($exportAge)), __LINE__);
        }
        $this->exportAge = $exportAge;
        
        return $this;
    }
}
