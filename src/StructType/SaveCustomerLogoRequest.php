<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerLogoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCustomerLogoRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmGraphics
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCrmGraphics
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics
     */
    protected \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics $MidocoCrmGraphics;
    /**
     * Constructor method for SaveCustomerLogoRequest
     * @uses SaveCustomerLogoRequest::setMidocoCrmGraphics()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics $midocoCrmGraphics
     */
    public function __construct(\Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics $midocoCrmGraphics)
    {
        $this
            ->setMidocoCrmGraphics($midocoCrmGraphics);
    }
    /**
     * Get MidocoCrmGraphics value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics
     */
    public function getMidocoCrmGraphics(): \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics
    {
        return $this->MidocoCrmGraphics;
    }
    /**
     * Set MidocoCrmGraphics value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics $midocoCrmGraphics
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerLogoRequest
     */
    public function setMidocoCrmGraphics(\Pggns\MidocoApi\Crm\StructType\MidocoCrmGraphics $midocoCrmGraphics): self
    {
        $this->MidocoCrmGraphics = $midocoCrmGraphics;
        
        return $this;
    }
}
