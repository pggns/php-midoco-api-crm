<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest $paramSearchCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerResponse|bool
     */
    public function searchCustomer(\Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest $paramSearchCustomerRequest)
    {
        try {
            $this->setResult($resultSearchCustomer = $this->getSoapClient()->__soapCall('searchCustomer', [
                $paramSearchCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBank
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchBankRequest $paramSearchBankRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchBankResponse|bool
     */
    public function searchBank(\Pggns\MidocoApi\Crm\StructType\SearchBankRequest $paramSearchBankRequest)
    {
        try {
            $this->setResult($resultSearchBank = $this->getSoapClient()->__soapCall('searchBank', [
                $paramSearchBankRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBank;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCustDoubleAddr
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchCustDoubleAddrRequest $paramSearchCustDoubleAddrRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustDoubleAddrResponse|bool
     */
    public function searchCustDoubleAddr(\Pggns\MidocoApi\Crm\StructType\SearchCustDoubleAddrRequest $paramSearchCustDoubleAddrRequest)
    {
        try {
            $this->setResult($resultSearchCustDoubleAddr = $this->getSoapClient()->__soapCall('searchCustDoubleAddr', [
                $paramSearchCustDoubleAddrRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustDoubleAddr;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCrmTravellers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchCrmTravellersRequest $paramSearchCrmTravellersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCrmTravellersResponse|bool
     */
    public function searchCrmTravellers(\Pggns\MidocoApi\Crm\StructType\SearchCrmTravellersRequest $paramSearchCrmTravellersRequest)
    {
        try {
            $this->setResult($resultSearchCrmTravellers = $this->getSoapClient()->__soapCall('searchCrmTravellers', [
                $paramSearchCrmTravellersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCrmTravellers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBlackList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchBlackListRequest $paramSearchBlackListRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchBlackListResponse|bool
     */
    public function searchBlackList(\Pggns\MidocoApi\Crm\StructType\SearchBlackListRequest $paramSearchBlackListRequest)
    {
        try {
            $this->setResult($resultSearchBlackList = $this->getSoapClient()->__soapCall('searchBlackList', [
                $paramSearchBlackListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBlackList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCustomerByTravel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchCustomerByTravelRequest $paramSearchCustomerByTravelRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerByTravelResponse|bool
     */
    public function searchCustomerByTravel(\Pggns\MidocoApi\Crm\StructType\SearchCustomerByTravelRequest $paramSearchCustomerByTravelRequest)
    {
        try {
            $this->setResult($resultSearchCustomerByTravel = $this->getSoapClient()->__soapCall('searchCustomerByTravel', [
                $paramSearchCustomerByTravelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustomerByTravel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMidocoMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchMidocoMandateRequest $paramSearchMidocoMandateRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchMidocoMandateResponse|bool
     */
    public function searchMidocoMandate(\Pggns\MidocoApi\Crm\StructType\SearchMidocoMandateRequest $paramSearchMidocoMandateRequest)
    {
        try {
            $this->setResult($resultSearchMidocoMandate = $this->getSoapClient()->__soapCall('searchMidocoMandate', [
                $paramSearchMidocoMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMidocoMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMandateReference
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchMandatesRequest $paramSearchMandatesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchMidocoMandateResponse|bool
     */
    public function searchMandateReference(\Pggns\MidocoApi\Crm\StructType\SearchMandatesRequest $paramSearchMandatesRequest)
    {
        try {
            $this->setResult($resultSearchMandateReference = $this->getSoapClient()->__soapCall('searchMandateReference', [
                $paramSearchMandatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMandateReference;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCustomerByPhone
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneRequest $paramSearchCustomerByPhoneRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneResponse|bool
     */
    public function searchCustomerByPhone(\Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneRequest $paramSearchCustomerByPhoneRequest)
    {
        try {
            $this->setResult($resultSearchCustomerByPhone = $this->getSoapClient()->__soapCall('searchCustomerByPhone', [
                $paramSearchCustomerByPhoneRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustomerByPhone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCrmExternalOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchCrmExternalOfferRequest $paramSearchCrmExternalOfferRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCrmExternalOfferResponse|bool
     */
    public function searchCrmExternalOffer(\Pggns\MidocoApi\Crm\StructType\SearchCrmExternalOfferRequest $paramSearchCrmExternalOfferRequest)
    {
        try {
            $this->setResult($resultSearchCrmExternalOffer = $this->getSoapClient()->__soapCall('searchCrmExternalOffer', [
                $paramSearchCrmExternalOfferRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCrmExternalOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchExternalCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest $paramSearchExternalCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerResponse|bool
     */
    public function searchExternalCustomer(\Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest $paramSearchExternalCustomerRequest)
    {
        try {
            $this->setResult($resultSearchExternalCustomer = $this->getSoapClient()->__soapCall('searchExternalCustomer', [
                $paramSearchExternalCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchExternalCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\SearchBankResponse|\Pggns\MidocoApi\Crm\StructType\SearchBlackListResponse|\Pggns\MidocoApi\Crm\StructType\SearchCrmExternalOfferResponse|\Pggns\MidocoApi\Crm\StructType\SearchCrmTravellersResponse|\Pggns\MidocoApi\Crm\StructType\SearchCustDoubleAddrResponse|\Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneResponse|\Pggns\MidocoApi\Crm\StructType\SearchCustomerByTravelResponse|\Pggns\MidocoApi\Crm\StructType\SearchCustomerResponse|\Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerResponse|\Pggns\MidocoApi\Crm\StructType\SearchMidocoMandateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
