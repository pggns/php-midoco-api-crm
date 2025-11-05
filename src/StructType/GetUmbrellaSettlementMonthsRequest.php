<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUmbrellaSettlementMonthsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUmbrellaSettlementMonthsRequest extends AbstractStructBase
{
    /**
     * The from
     * @var string|null
     */
    protected ?string $from = null;
    /**
     * The to
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * Constructor method for GetUmbrellaSettlementMonthsRequest
     * @uses GetUmbrellaSettlementMonthsRequest::setFrom()
     * @uses GetUmbrellaSettlementMonthsRequest::setTo()
     * @param string $from
     * @param string $to
     */
    public function __construct(?string $from = null, ?string $to = null)
    {
        $this
            ->setFrom($from)
            ->setTo($to);
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthsRequest
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Pggns\MidocoApi\Crm\StructType\GetUmbrellaSettlementMonthsRequest
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
}
