<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named savePrivateCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerRequest $paramSavePrivateCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerResponse|bool
     */
    public function savePrivateCustomer(\Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerRequest $paramSavePrivateCustomerRequest)
    {
        try {
            $this->setResult($resultSavePrivateCustomer = $this->getSoapClient()->__soapCall('savePrivateCustomer', [
                $paramSavePrivateCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePrivateCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * savePrivateCustomerWithContactAndTravellers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest $paramSavePrivateCustomerWithContactAndTravellersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerWithContactAndTravellersResponse|bool
     */
    public function savePrivateCustomerWithContactAndTravellers(\Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest $paramSavePrivateCustomerWithContactAndTravellersRequest)
    {
        try {
            $this->setResult($resultSavePrivateCustomerWithContactAndTravellers = $this->getSoapClient()->__soapCall('savePrivateCustomerWithContactAndTravellers', [
                $paramSavePrivateCustomerWithContactAndTravellersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePrivateCustomerWithContactAndTravellers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCompanyCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCompanyCustomerRequest $paramSaveCompanyCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCompanyCustomerResponse|bool
     */
    public function saveCompanyCustomer(\Pggns\MidocoApi\Crm\StructType\SaveCompanyCustomerRequest $paramSaveCompanyCustomerRequest)
    {
        try {
            $this->setResult($resultSaveCompanyCustomer = $this->getSoapClient()->__soapCall('saveCompanyCustomer', [
                $paramSaveCompanyCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCompanyCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveAddressRequest $paramSaveAddressRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveAddressResponse|bool
     */
    public function saveAddress(\Pggns\MidocoApi\Crm\StructType\SaveAddressRequest $paramSaveAddressRequest)
    {
        try {
            $this->setResult($resultSaveAddress = $this->getSoapClient()->__soapCall('saveAddress', [
                $paramSaveAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveTraveller
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveTravellerRequest $paramSaveTravellerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveTravellerResponse|bool
     */
    public function saveTraveller(\Pggns\MidocoApi\Crm\StructType\SaveTravellerRequest $paramSaveTravellerRequest)
    {
        try {
            $this->setResult($resultSaveTraveller = $this->getSoapClient()->__soapCall('saveTraveller', [
                $paramSaveTravellerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTraveller;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveContactEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveContactEntryRequest $paramSaveContactEntryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveContactEntryResponse|bool
     */
    public function saveContactEntry(\Pggns\MidocoApi\Crm\StructType\SaveContactEntryRequest $paramSaveContactEntryRequest)
    {
        try {
            $this->setResult($resultSaveContactEntry = $this->getSoapClient()->__soapCall('saveContactEntry', [
                $paramSaveContactEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveContactEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCustomerCriteria
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaRequest $paramSaveCustomerCriteriaRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaResponse|bool
     */
    public function saveCustomerCriteria(\Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaRequest $paramSaveCustomerCriteriaRequest)
    {
        try {
            $this->setResult($resultSaveCustomerCriteria = $this->getSoapClient()->__soapCall('saveCustomerCriteria', [
                $paramSaveCustomerCriteriaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCustomerCriteria;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDebitor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveDebitorRequest $paramSaveDebitorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDebitorResponse|bool
     */
    public function saveDebitor(\Pggns\MidocoApi\Crm\StructType\SaveDebitorRequest $paramSaveDebitorRequest)
    {
        try {
            $this->setResult($resultSaveDebitor = $this->getSoapClient()->__soapCall('saveDebitor', [
                $paramSaveDebitorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDebitor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveDocumentRequest $paramSaveDocumentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDocumentResponse|bool
     */
    public function saveDocument(\Pggns\MidocoApi\Crm\StructType\SaveDocumentRequest $paramSaveDocumentRequest)
    {
        try {
            $this->setResult($resultSaveDocument = $this->getSoapClient()->__soapCall('saveDocument', [
                $paramSaveDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDebitCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveDebitCardRequest $paramSaveDebitCardRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDebitCardResponse|bool
     */
    public function saveDebitCard(\Pggns\MidocoApi\Crm\StructType\SaveDebitCardRequest $paramSaveDebitCardRequest)
    {
        try {
            $this->setResult($resultSaveDebitCard = $this->getSoapClient()->__soapCall('saveDebitCard', [
                $paramSaveDebitCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDebitCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCcCardRequest $paramSaveCcCardRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCcCardResponse|bool
     */
    public function saveCcCard(\Pggns\MidocoApi\Crm\StructType\SaveCcCardRequest $paramSaveCcCardRequest)
    {
        try {
            $this->setResult($resultSaveCcCard = $this->getSoapClient()->__soapCall('saveCcCard', [
                $paramSaveCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBonusCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveBonusCardRequest $paramSaveBonusCardRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveBonusCardResponse|bool
     */
    public function saveBonusCard(\Pggns\MidocoApi\Crm\StructType\SaveBonusCardRequest $paramSaveBonusCardRequest)
    {
        try {
            $this->setResult($resultSaveBonusCard = $this->getSoapClient()->__soapCall('saveBonusCard', [
                $paramSaveBonusCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBonusCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveComplaint
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveComplaintRequest $paramSaveComplaintRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveComplaintResponse|bool
     */
    public function saveComplaint(\Pggns\MidocoApi\Crm\StructType\SaveComplaintRequest $paramSaveComplaintRequest)
    {
        try {
            $this->setResult($resultSaveComplaint = $this->getSoapClient()->__soapCall('saveComplaint', [
                $paramSaveComplaintRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveComplaint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveComplaintDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveComplaintDocumentRequest $paramSaveComplaintDocumentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveComplaintDocumentResponse|bool
     */
    public function saveComplaintDocument(\Pggns\MidocoApi\Crm\StructType\SaveComplaintDocumentRequest $paramSaveComplaintDocumentRequest)
    {
        try {
            $this->setResult($resultSaveComplaintDocument = $this->getSoapClient()->__soapCall('saveComplaintDocument', [
                $paramSaveComplaintDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveComplaintDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveComplaintReason
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveComplaintReasonRequest $paramSaveComplaintReasonRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveComplaintReasonResponse|bool
     */
    public function saveComplaintReason(\Pggns\MidocoApi\Crm\StructType\SaveComplaintReasonRequest $paramSaveComplaintReasonRequest)
    {
        try {
            $this->setResult($resultSaveComplaintReason = $this->getSoapClient()->__soapCall('saveComplaintReason', [
                $paramSaveComplaintReasonRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveComplaintReason;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoCrmCustomerPaymentRequest $paramSaveMidocoCrmCustomerPaymentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoCrmCustomerPaymentResponse|bool
     */
    public function saveMidocoCrmCustomerPayment(\Pggns\MidocoApi\Crm\StructType\SaveMidocoCrmCustomerPaymentRequest $paramSaveMidocoCrmCustomerPaymentRequest)
    {
        try {
            $this->setResult($resultSaveMidocoCrmCustomerPayment = $this->getSoapClient()->__soapCall('saveMidocoCrmCustomerPayment', [
                $paramSaveMidocoCrmCustomerPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoCrmCustomerPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAgencyDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveAgencyDetailsRequest $paramSaveAgencyDetailsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveAgencyDetailsResponse|bool
     */
    public function saveAgencyDetails(\Pggns\MidocoApi\Crm\StructType\SaveAgencyDetailsRequest $paramSaveAgencyDetailsRequest)
    {
        try {
            $this->setResult($resultSaveAgencyDetails = $this->getSoapClient()->__soapCall('saveAgencyDetails', [
                $paramSaveAgencyDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAgencyDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMediatorTextTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMediatorTextTemplateRequest $paramSaveMediatorTextTemplateRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorTextTemplateResponse|bool
     */
    public function saveMediatorTextTemplate(\Pggns\MidocoApi\Crm\StructType\SaveMediatorTextTemplateRequest $paramSaveMediatorTextTemplateRequest)
    {
        try {
            $this->setResult($resultSaveMediatorTextTemplate = $this->getSoapClient()->__soapCall('saveMediatorTextTemplate', [
                $paramSaveMediatorTextTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMediatorTextTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest $paramSaveMidocoAgencyRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyResponse|bool
     */
    public function saveMidocoAgency(\Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest $paramSaveMidocoAgencyRequest)
    {
        try {
            $this->setResult($resultSaveMidocoAgency = $this->getSoapClient()->__soapCall('saveMidocoAgency', [
                $paramSaveMidocoAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMediatorSettlementLevelRequest $paramSaveMediatorSettlementLevelRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorSettlementLevelResponse|bool
     */
    public function saveMediatorSettlementLevel(\Pggns\MidocoApi\Crm\StructType\SaveMediatorSettlementLevelRequest $paramSaveMediatorSettlementLevelRequest)
    {
        try {
            $this->setResult($resultSaveMediatorSettlementLevel = $this->getSoapClient()->__soapCall('saveMediatorSettlementLevel', [
                $paramSaveMediatorSettlementLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMediatorSettlementLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMediatorCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMediatorChargeRequest $paramSaveMediatorChargeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorChargeResponse|bool
     */
    public function saveMediatorCharge(\Pggns\MidocoApi\Crm\StructType\SaveMediatorChargeRequest $paramSaveMediatorChargeRequest)
    {
        try {
            $this->setResult($resultSaveMediatorCharge = $this->getSoapClient()->__soapCall('saveMediatorCharge', [
                $paramSaveMediatorChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMediatorCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGroupAdvisor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveGroupAdvisorRequest $paramSaveGroupAdvisorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveGroupAdvisorResponse|bool
     */
    public function saveGroupAdvisor(\Pggns\MidocoApi\Crm\StructType\SaveGroupAdvisorRequest $paramSaveGroupAdvisorRequest)
    {
        try {
            $this->setResult($resultSaveGroupAdvisor = $this->getSoapClient()->__soapCall('saveGroupAdvisor', [
                $paramSaveGroupAdvisorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveGroupAdvisor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMediatorRevenues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesRequest $paramSaveMediatorRevenuesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesResponse|bool
     */
    public function saveMediatorRevenues(\Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesRequest $paramSaveMediatorRevenuesRequest)
    {
        try {
            $this->setResult($resultSaveMediatorRevenues = $this->getSoapClient()->__soapCall('saveMediatorRevenues', [
                $paramSaveMediatorRevenuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMediatorRevenues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAgencyNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyNumberRequest $paramSaveMidocoAgencyNumberRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyNumberResponse|bool
     */
    public function saveAgencyNumber(\Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyNumberRequest $paramSaveMidocoAgencyNumberRequest)
    {
        try {
            $this->setResult($resultSaveAgencyNumber = $this->getSoapClient()->__soapCall('saveAgencyNumber', [
                $paramSaveMidocoAgencyNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAgencyNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoSupplierReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoSupplierReportFormatRequest $paramSaveMidocoSupplierReportFormatRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoSupplierReportFormatResponse|bool
     */
    public function saveMidocoSupplierReport(\Pggns\MidocoApi\Crm\StructType\SaveMidocoSupplierReportFormatRequest $paramSaveMidocoSupplierReportFormatRequest)
    {
        try {
            $this->setResult($resultSaveMidocoSupplierReport = $this->getSoapClient()->__soapCall('saveMidocoSupplierReport', [
                $paramSaveMidocoSupplierReportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoSupplierReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCrmNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCrmNoticesRequest $paramSaveCrmNoticesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmNoticesResponse|bool
     */
    public function saveCrmNotices(\Pggns\MidocoApi\Crm\StructType\SaveCrmNoticesRequest $paramSaveCrmNoticesRequest)
    {
        try {
            $this->setResult($resultSaveCrmNotices = $this->getSoapClient()->__soapCall('saveCrmNotices', [
                $paramSaveCrmNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCrmNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCustomerCommissionDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCustomerCommissionDefinitionRequest $paramSaveCustomerCommissionDefinitionRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerCommissionDefinitionResponse|bool
     */
    public function saveCustomerCommissionDefinition(\Pggns\MidocoApi\Crm\StructType\SaveCustomerCommissionDefinitionRequest $paramSaveCustomerCommissionDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveCustomerCommissionDefinition = $this->getSoapClient()->__soapCall('saveCustomerCommissionDefinition', [
                $paramSaveCustomerCommissionDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCustomerCommissionDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePrintRecipient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SavePrintRecipientRequest $paramSavePrintRecipientRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SavePrintRecipientResponse|bool
     */
    public function savePrintRecipient(\Pggns\MidocoApi\Crm\StructType\SavePrintRecipientRequest $paramSavePrintRecipientRequest)
    {
        try {
            $this->setResult($resultSavePrintRecipient = $this->getSoapClient()->__soapCall('savePrintRecipient', [
                $paramSavePrintRecipientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePrintRecipient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoMediator
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoMediatorRequest $paramSaveMidocoMediatorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoMediatorResponse|bool
     */
    public function saveMidocoMediator(\Pggns\MidocoApi\Crm\StructType\SaveMidocoMediatorRequest $paramSaveMidocoMediatorRequest)
    {
        try {
            $this->setResult($resultSaveMidocoMediator = $this->getSoapClient()->__soapCall('saveMidocoMediator', [
                $paramSaveMidocoMediatorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoMediator;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCrmPersonTravellerRequest $paramSaveCrmPersonTravellerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmPersonTravellerResponse|bool
     */
    public function saveCrmPersonTraveller(\Pggns\MidocoApi\Crm\StructType\SaveCrmPersonTravellerRequest $paramSaveCrmPersonTravellerRequest)
    {
        try {
            $this->setResult($resultSaveCrmPersonTraveller = $this->getSoapClient()->__soapCall('saveCrmPersonTraveller', [
                $paramSaveCrmPersonTravellerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCrmPersonTraveller;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveFrequentFlyerNumberRequest $paramSaveFrequentFlyerNumberRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveFrequentFlyerNumberResponse|bool
     */
    public function saveFrequentFlyerNumber(\Pggns\MidocoApi\Crm\StructType\SaveFrequentFlyerNumberRequest $paramSaveFrequentFlyerNumberRequest)
    {
        try {
            $this->setResult($resultSaveFrequentFlyerNumber = $this->getSoapClient()->__soapCall('saveFrequentFlyerNumber', [
                $paramSaveFrequentFlyerNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFrequentFlyerNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCustomerMf
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCustomerMfRequest $paramSaveCustomerMfRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCustomerMfResponse|bool
     */
    public function saveCustomerMf(\Pggns\MidocoApi\Crm\StructType\SaveCustomerMfRequest $paramSaveCustomerMfRequest)
    {
        try {
            $this->setResult($resultSaveCustomerMf = $this->getSoapClient()->__soapCall('saveCustomerMf', [
                $paramSaveCustomerMfRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCustomerMf;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveContactSource
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveContactSourceRequest $paramSaveContactSourceRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveContactSourceResponse|bool
     */
    public function saveContactSource(\Pggns\MidocoApi\Crm\StructType\SaveContactSourceRequest $paramSaveContactSourceRequest)
    {
        try {
            $this->setResult($resultSaveContactSource = $this->getSoapClient()->__soapCall('saveContactSource', [
                $paramSaveContactSourceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveContactSource;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCreditor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCreditorRequest $paramSaveCreditorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCreditorResponse|bool
     */
    public function saveCreditor(\Pggns\MidocoApi\Crm\StructType\SaveCreditorRequest $paramSaveCreditorRequest)
    {
        try {
            $this->setResult($resultSaveCreditor = $this->getSoapClient()->__soapCall('saveCreditor', [
                $paramSaveCreditorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCreditor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCommunicationHistories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCommunicationHistoriesRequest $paramSaveCommunicationHistoriesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCommunicationHistoriesResponse|bool
     */
    public function saveCommunicationHistories(\Pggns\MidocoApi\Crm\StructType\SaveCommunicationHistoriesRequest $paramSaveCommunicationHistoriesRequest)
    {
        try {
            $this->setResult($resultSaveCommunicationHistories = $this->getSoapClient()->__soapCall('saveCommunicationHistories', [
                $paramSaveCommunicationHistoriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCommunicationHistories;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCollectiveInvoiceSetting
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCollectiveInvoiceSettingRequest $paramSaveCollectiveInvoiceSettingRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCollectiveInvoiceSettingResponse|bool
     */
    public function saveCollectiveInvoiceSetting(\Pggns\MidocoApi\Crm\StructType\SaveCollectiveInvoiceSettingRequest $paramSaveCollectiveInvoiceSettingRequest)
    {
        try {
            $this->setResult($resultSaveCollectiveInvoiceSetting = $this->getSoapClient()->__soapCall('saveCollectiveInvoiceSetting', [
                $paramSaveCollectiveInvoiceSettingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCollectiveInvoiceSetting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveAgencyCooperationHistoryRequest $paramSaveAgencyCooperationHistoryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveAgencyCooperationHistoryResponse|bool
     */
    public function saveAgencyCooperationHistory(\Pggns\MidocoApi\Crm\StructType\SaveAgencyCooperationHistoryRequest $paramSaveAgencyCooperationHistoryRequest)
    {
        try {
            $this->setResult($resultSaveAgencyCooperationHistory = $this->getSoapClient()->__soapCall('saveAgencyCooperationHistory', [
                $paramSaveAgencyCooperationHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAgencyCooperationHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeRequest $paramSaveMidocoChargeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeResponse|bool
     */
    public function saveMidocoCharge(\Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeRequest $paramSaveMidocoChargeRequest)
    {
        try {
            $this->setResult($resultSaveMidocoCharge = $this->getSoapClient()->__soapCall('saveMidocoCharge', [
                $paramSaveMidocoChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoChargeOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeOrgUnitRequest $paramSaveMidocoChargeOrgUnitRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeOrgUnitResponse|bool
     */
    public function saveMidocoChargeOrgUnit(\Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeOrgUnitRequest $paramSaveMidocoChargeOrgUnitRequest)
    {
        try {
            $this->setResult($resultSaveMidocoChargeOrgUnit = $this->getSoapClient()->__soapCall('saveMidocoChargeOrgUnit', [
                $paramSaveMidocoChargeOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoChargeOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCrmPrintType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCrmPrintTypeRequest $paramSaveCrmPrintTypeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmPrintTypeResponse|bool
     */
    public function saveCrmPrintType(\Pggns\MidocoApi\Crm\StructType\SaveCrmPrintTypeRequest $paramSaveCrmPrintTypeRequest)
    {
        try {
            $this->setResult($resultSaveCrmPrintType = $this->getSoapClient()->__soapCall('saveCrmPrintType', [
                $paramSaveCrmPrintTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCrmPrintType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveMidocoMandateRequest $paramSaveMidocoMandateRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoMandateResponse|bool
     */
    public function saveMidocoMandate(\Pggns\MidocoApi\Crm\StructType\SaveMidocoMandateRequest $paramSaveMidocoMandateRequest)
    {
        try {
            $this->setResult($resultSaveMidocoMandate = $this->getSoapClient()->__soapCall('saveMidocoMandate', [
                $paramSaveMidocoMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveAutoBillingMatrixRequest $paramSaveAutoBillingMatrixRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveAutoBillingMatrixResponse|bool
     */
    public function saveAutoBillingMatrix(\Pggns\MidocoApi\Crm\StructType\SaveAutoBillingMatrixRequest $paramSaveAutoBillingMatrixRequest)
    {
        try {
            $this->setResult($resultSaveAutoBillingMatrix = $this->getSoapClient()->__soapCall('saveAutoBillingMatrix', [
                $paramSaveAutoBillingMatrixRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAutoBillingMatrix;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCrmNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCrmNoticeCommentRequest $paramSaveCrmNoticeCommentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmNoticeCommentResponse|bool
     */
    public function saveCrmNoticeComment(\Pggns\MidocoApi\Crm\StructType\SaveCrmNoticeCommentRequest $paramSaveCrmNoticeCommentRequest)
    {
        try {
            $this->setResult($resultSaveCrmNoticeComment = $this->getSoapClient()->__soapCall('saveCrmNoticeComment', [
                $paramSaveCrmNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCrmNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGroupConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveGroupConsentRequest $paramSaveGroupConsentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveGroupConsentResponse|bool
     */
    public function saveGroupConsent(\Pggns\MidocoApi\Crm\StructType\SaveGroupConsentRequest $paramSaveGroupConsentRequest)
    {
        try {
            $this->setResult($resultSaveGroupConsent = $this->getSoapClient()->__soapCall('saveGroupConsent', [
                $paramSaveGroupConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveGroupConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCrmExternalOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveCrmExternalOfferRequest $paramSaveCrmExternalOfferRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmExternalOfferResponse|bool
     */
    public function saveCrmExternalOffer(\Pggns\MidocoApi\Crm\StructType\SaveCrmExternalOfferRequest $paramSaveCrmExternalOfferRequest)
    {
        try {
            $this->setResult($resultSaveCrmExternalOffer = $this->getSoapClient()->__soapCall('saveCrmExternalOffer', [
                $paramSaveCrmExternalOfferRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCrmExternalOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePaxconnectQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SavePaxconnectQueueRequest $paramSavePaxconnectQueueRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SavePaxconnectQueueRespone|bool
     */
    public function savePaxconnectQueue(\Pggns\MidocoApi\Crm\StructType\SavePaxconnectQueueRequest $paramSavePaxconnectQueueRequest)
    {
        try {
            $this->setResult($resultSavePaxconnectQueue = $this->getSoapClient()->__soapCall('savePaxconnectQueue', [
                $paramSavePaxconnectQueueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePaxconnectQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveVirtualCcCardAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardAccountRequest $paramSaveVirtualCcCardAccountRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardAccountResponse|bool
     */
    public function saveVirtualCcCardAccount(\Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardAccountRequest $paramSaveVirtualCcCardAccountRequest)
    {
        try {
            $this->setResult($resultSaveVirtualCcCardAccount = $this->getSoapClient()->__soapCall('saveVirtualCcCardAccount', [
                $paramSaveVirtualCcCardAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveVirtualCcCardAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveVirtualCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardRequest $paramSaveVirtualCcCardRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardResponse|bool
     */
    public function saveVirtualCcCard(\Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardRequest $paramSaveVirtualCcCardRequest)
    {
        try {
            $this->setResult($resultSaveVirtualCcCard = $this->getSoapClient()->__soapCall('saveVirtualCcCard', [
                $paramSaveVirtualCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveVirtualCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveExternalCustomerInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\SaveExternalCustomerInfoRequest $paramSaveExternalCustomerInfoRequest
     * @return \Pggns\MidocoApi\Crm\StructType\SaveExternalCustomerInfoResponse|bool
     */
    public function saveExternalCustomerInfo(\Pggns\MidocoApi\Crm\StructType\SaveExternalCustomerInfoRequest $paramSaveExternalCustomerInfoRequest)
    {
        try {
            $this->setResult($resultSaveExternalCustomerInfo = $this->getSoapClient()->__soapCall('saveExternalCustomerInfo', [
                $paramSaveExternalCustomerInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveExternalCustomerInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\SaveAddressResponse|\Pggns\MidocoApi\Crm\StructType\SaveAgencyCooperationHistoryResponse|\Pggns\MidocoApi\Crm\StructType\SaveAgencyDetailsResponse|\Pggns\MidocoApi\Crm\StructType\SaveAutoBillingMatrixResponse|\Pggns\MidocoApi\Crm\StructType\SaveBonusCardResponse|\Pggns\MidocoApi\Crm\StructType\SaveCcCardResponse|\Pggns\MidocoApi\Crm\StructType\SaveCollectiveInvoiceSettingResponse|\Pggns\MidocoApi\Crm\StructType\SaveCommunicationHistoriesResponse|\Pggns\MidocoApi\Crm\StructType\SaveCompanyCustomerResponse|\Pggns\MidocoApi\Crm\StructType\SaveComplaintDocumentResponse|\Pggns\MidocoApi\Crm\StructType\SaveComplaintReasonResponse|\Pggns\MidocoApi\Crm\StructType\SaveComplaintResponse|\Pggns\MidocoApi\Crm\StructType\SaveContactEntryResponse|\Pggns\MidocoApi\Crm\StructType\SaveContactSourceResponse|\Pggns\MidocoApi\Crm\StructType\SaveCreditorResponse|\Pggns\MidocoApi\Crm\StructType\SaveCrmExternalOfferResponse|\Pggns\MidocoApi\Crm\StructType\SaveCrmNoticeCommentResponse|\Pggns\MidocoApi\Crm\StructType\SaveCrmNoticesResponse|\Pggns\MidocoApi\Crm\StructType\SaveCrmPersonTravellerResponse|\Pggns\MidocoApi\Crm\StructType\SaveCrmPrintTypeResponse|\Pggns\MidocoApi\Crm\StructType\SaveCustomerCommissionDefinitionResponse|\Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaResponse|\Pggns\MidocoApi\Crm\StructType\SaveCustomerMfResponse|\Pggns\MidocoApi\Crm\StructType\SaveDebitCardResponse|\Pggns\MidocoApi\Crm\StructType\SaveDebitorResponse|\Pggns\MidocoApi\Crm\StructType\SaveDocumentResponse|\Pggns\MidocoApi\Crm\StructType\SaveExternalCustomerInfoResponse|\Pggns\MidocoApi\Crm\StructType\SaveFrequentFlyerNumberResponse|\Pggns\MidocoApi\Crm\StructType\SaveGroupAdvisorResponse|\Pggns\MidocoApi\Crm\StructType\SaveGroupConsentResponse|\Pggns\MidocoApi\Crm\StructType\SaveMediatorChargeResponse|\Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesResponse|\Pggns\MidocoApi\Crm\StructType\SaveMediatorSettlementLevelResponse|\Pggns\MidocoApi\Crm\StructType\SaveMediatorTextTemplateResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyNumberResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeOrgUnitResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoCrmCustomerPaymentResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoMandateResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoMediatorResponse|\Pggns\MidocoApi\Crm\StructType\SaveMidocoSupplierReportFormatResponse|\Pggns\MidocoApi\Crm\StructType\SavePaxconnectQueueRespone|\Pggns\MidocoApi\Crm\StructType\SavePrintRecipientResponse|\Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerResponse|\Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerWithContactAndTravellersResponse|\Pggns\MidocoApi\Crm\StructType\SaveTravellerResponse|\Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardAccountResponse|\Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
