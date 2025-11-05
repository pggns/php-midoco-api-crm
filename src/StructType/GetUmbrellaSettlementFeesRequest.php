<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementFeesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementFeesRequest extends AbstractStructBase
{
    /**
     * The SettingID
     * @var int|null
     */
    protected ?int $SettingID = null;
    /**
     * Constructor method for GetUmbrellaSettlementFeesRequest
     * @uses GetUmbrellaSettlementFeesRequest::setSettingID()
     * @param int $settingID
     */
    public function __construct(?int $settingID = null)
    {
        $this
            ->setSettingID($settingID);
    }
    /**
     * Get SettingID value
     * @return int|null
     */
    public function getSettingID(): ?int
    {
        return $this->SettingID;
    }
    /**
     * Set SettingID value
     * @param int $settingID
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementFeesRequest
     */
    public function setSettingID(?int $settingID = null): self
    {
        // validation for constraint: int
        if (!is_null($settingID) && !(is_int($settingID) || ctype_digit($settingID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settingID, true), gettype($settingID)), __LINE__);
        }
        $this->SettingID = $settingID;
        
        return $this;
    }
}
