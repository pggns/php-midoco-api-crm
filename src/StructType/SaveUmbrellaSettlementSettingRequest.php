<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUmbrellaSettlementSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUmbrellaSettlementSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoUmbrellaSettlementSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoUmbrellaSettlementSetting
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $MidocoUmbrellaSettlementSetting = null;
    /**
     * The add_default_fees
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $add_default_fees = null;
    /**
     * Constructor method for SaveUmbrellaSettlementSettingRequest
     * @uses SaveUmbrellaSettlementSettingRequest::setMidocoUmbrellaSettlementSetting()
     * @uses SaveUmbrellaSettlementSettingRequest::setAdd_default_fees()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting
     * @param bool $add_default_fees
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting = null, ?bool $add_default_fees = false)
    {
        $this
            ->setMidocoUmbrellaSettlementSetting($midocoUmbrellaSettlementSetting)
            ->setAdd_default_fees($add_default_fees);
    }
    /**
     * Get MidocoUmbrellaSettlementSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting|null
     */
    public function getMidocoUmbrellaSettlementSetting(): ?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting
    {
        return $this->MidocoUmbrellaSettlementSetting;
    }
    /**
     * Set MidocoUmbrellaSettlementSetting value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUmbrellaSettlementSettingRequest
     */
    public function setMidocoUmbrellaSettlementSetting(?\Pggns\MidocoApi\Crm\StructType\MidocoUmbrellaSettlementSetting $midocoUmbrellaSettlementSetting = null): self
    {
        $this->MidocoUmbrellaSettlementSetting = $midocoUmbrellaSettlementSetting;
        
        return $this;
    }
    /**
     * Get add_default_fees value
     * @return bool|null
     */
    public function getAdd_default_fees(): ?bool
    {
        return $this->{'add-default-fees'};
    }
    /**
     * Set add_default_fees value
     * @param bool $add_default_fees
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUmbrellaSettlementSettingRequest
     */
    public function setAdd_default_fees(?bool $add_default_fees = false): self
    {
        // validation for constraint: boolean
        if (!is_null($add_default_fees) && !is_bool($add_default_fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_default_fees, true), gettype($add_default_fees)), __LINE__);
        }
        $this->add_default_fees = $this->{'add-default-fees'} = $add_default_fees;
        
        return $this;
    }
}
