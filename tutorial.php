<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/CrmService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/CrmService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Crm\ClassMap::get(),
];
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\Crm\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for savePrivateCustomer operation/method
 */
if ($save->savePrivateCustomer(new \Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePrivateCustomerWithContactAndTravellers operation/method
 */
if ($save->savePrivateCustomerWithContactAndTravellers(new \Pggns\MidocoApi\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCompanyCustomer operation/method
 */
if ($save->saveCompanyCustomer(new \Pggns\MidocoApi\Crm\StructType\SaveCompanyCustomerRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAddress operation/method
 */
if ($save->saveAddress(new \Pggns\MidocoApi\Crm\StructType\SaveAddressRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTraveller operation/method
 */
if ($save->saveTraveller(new \Pggns\MidocoApi\Crm\StructType\SaveTravellerRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveContactEntry operation/method
 */
if ($save->saveContactEntry(new \Pggns\MidocoApi\Crm\StructType\SaveContactEntryRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCustomerCriteria operation/method
 */
if ($save->saveCustomerCriteria(new \Pggns\MidocoApi\Crm\StructType\SaveCustomerCriteriaRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDebitor operation/method
 */
if ($save->saveDebitor(new \Pggns\MidocoApi\Crm\StructType\SaveDebitorRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDocument operation/method
 */
if ($save->saveDocument(new \Pggns\MidocoApi\Crm\StructType\SaveDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDebitCard operation/method
 */
if ($save->saveDebitCard(new \Pggns\MidocoApi\Crm\StructType\SaveDebitCardRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCcCard operation/method
 */
if ($save->saveCcCard(new \Pggns\MidocoApi\Crm\StructType\SaveCcCardRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBonusCard operation/method
 */
if ($save->saveBonusCard(new \Pggns\MidocoApi\Crm\StructType\SaveBonusCardRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveComplaint operation/method
 */
if ($save->saveComplaint(new \Pggns\MidocoApi\Crm\StructType\SaveComplaintRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveComplaintDocument operation/method
 */
if ($save->saveComplaintDocument(new \Pggns\MidocoApi\Crm\StructType\SaveComplaintDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveComplaintReason operation/method
 */
if ($save->saveComplaintReason(new \Pggns\MidocoApi\Crm\StructType\SaveComplaintReasonRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoCrmCustomerPayment operation/method
 */
if ($save->saveMidocoCrmCustomerPayment(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoCrmCustomerPaymentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAgencyDetails operation/method
 */
if ($save->saveAgencyDetails(new \Pggns\MidocoApi\Crm\StructType\SaveAgencyDetailsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMediatorTextTemplate operation/method
 */
if ($save->saveMediatorTextTemplate(new \Pggns\MidocoApi\Crm\StructType\SaveMediatorTextTemplateRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoAgency operation/method
 */
if ($save->saveMidocoAgency(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMediatorSettlementLevel operation/method
 */
if ($save->saveMediatorSettlementLevel(new \Pggns\MidocoApi\Crm\StructType\SaveMediatorSettlementLevelRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMediatorCharge operation/method
 */
if ($save->saveMediatorCharge(new \Pggns\MidocoApi\Crm\StructType\SaveMediatorChargeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveGroupAdvisor operation/method
 */
if ($save->saveGroupAdvisor(new \Pggns\MidocoApi\Crm\StructType\SaveGroupAdvisorRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMediatorRevenues operation/method
 */
if ($save->saveMediatorRevenues(new \Pggns\MidocoApi\Crm\StructType\SaveMediatorRevenuesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAgencyNumber operation/method
 */
if ($save->saveAgencyNumber(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyNumberRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoSupplierReport operation/method
 */
if ($save->saveMidocoSupplierReport(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoSupplierReportFormatRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCrmNotices operation/method
 */
if ($save->saveCrmNotices(new \Pggns\MidocoApi\Crm\StructType\SaveCrmNoticesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCustomerCommissionDefinition operation/method
 */
if ($save->saveCustomerCommissionDefinition(new \Pggns\MidocoApi\Crm\StructType\SaveCustomerCommissionDefinitionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePrintRecipient operation/method
 */
if ($save->savePrintRecipient(new \Pggns\MidocoApi\Crm\StructType\SavePrintRecipientRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoMediator operation/method
 */
if ($save->saveMidocoMediator(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoMediatorRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCrmPersonTraveller operation/method
 */
if ($save->saveCrmPersonTraveller(new \Pggns\MidocoApi\Crm\StructType\SaveCrmPersonTravellerRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveFrequentFlyerNumber operation/method
 */
if ($save->saveFrequentFlyerNumber(new \Pggns\MidocoApi\Crm\StructType\SaveFrequentFlyerNumberRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCustomerMf operation/method
 */
if ($save->saveCustomerMf(new \Pggns\MidocoApi\Crm\StructType\SaveCustomerMfRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveContactSource operation/method
 */
if ($save->saveContactSource(new \Pggns\MidocoApi\Crm\StructType\SaveContactSourceRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCreditor operation/method
 */
if ($save->saveCreditor(new \Pggns\MidocoApi\Crm\StructType\SaveCreditorRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCommunicationHistories operation/method
 */
if ($save->saveCommunicationHistories(new \Pggns\MidocoApi\Crm\StructType\SaveCommunicationHistoriesRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCollectiveInvoiceSetting operation/method
 */
if ($save->saveCollectiveInvoiceSetting(new \Pggns\MidocoApi\Crm\StructType\SaveCollectiveInvoiceSettingRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAgencyCooperationHistory operation/method
 */
if ($save->saveAgencyCooperationHistory(new \Pggns\MidocoApi\Crm\StructType\SaveAgencyCooperationHistoryRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoCharge operation/method
 */
if ($save->saveMidocoCharge(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoChargeOrgUnit operation/method
 */
if ($save->saveMidocoChargeOrgUnit(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeOrgUnitRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCrmPrintType operation/method
 */
if ($save->saveCrmPrintType(new \Pggns\MidocoApi\Crm\StructType\SaveCrmPrintTypeRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoMandate operation/method
 */
if ($save->saveMidocoMandate(new \Pggns\MidocoApi\Crm\StructType\SaveMidocoMandateRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveAutoBillingMatrix operation/method
 */
if ($save->saveAutoBillingMatrix(new \Pggns\MidocoApi\Crm\StructType\SaveAutoBillingMatrixRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCrmNoticeComment operation/method
 */
if ($save->saveCrmNoticeComment(new \Pggns\MidocoApi\Crm\StructType\SaveCrmNoticeCommentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveGroupConsent operation/method
 */
if ($save->saveGroupConsent(new \Pggns\MidocoApi\Crm\StructType\SaveGroupConsentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCrmExternalOffer operation/method
 */
if ($save->saveCrmExternalOffer(new \Pggns\MidocoApi\Crm\StructType\SaveCrmExternalOfferRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for savePaxconnectQueue operation/method
 */
if ($save->savePaxconnectQueue(new \Pggns\MidocoApi\Crm\StructType\SavePaxconnectQueueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveVirtualCcCardAccount operation/method
 */
if ($save->saveVirtualCcCardAccount(new \Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardAccountRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveVirtualCcCard operation/method
 */
if ($save->saveVirtualCcCard(new \Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveExternalCustomerInfo operation/method
 */
if ($save->saveExternalCustomerInfo(new \Pggns\MidocoApi\Crm\StructType\SaveExternalCustomerInfoRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Crm\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getCustomer operation/method
 */
if ($get->getCustomer(new \Pggns\MidocoApi\Crm\StructType\GetCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerLinks operation/method
 */
if ($get->getCustomerLinks(new \Pggns\MidocoApi\Crm\StructType\GetCustomerLinksRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSalutationTypes operation/method
 */
if ($get->getSalutationTypes(new \Pggns\MidocoApi\Crm\StructType\GetSalutationTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSimilarAddress operation/method
 */
if ($get->getSimilarAddress(new \Pggns\MidocoApi\Crm\StructType\GetSimilarAddressRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTraveller operation/method
 */
if ($get->getTraveller(new \Pggns\MidocoApi\Crm\StructType\GetTravellerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableLockReasonDescriptions operation/method
 */
if ($get->getAvailableLockReasonDescriptions(new \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableLockReasons operation/method
 */
if ($get->getAvailableLockReasons(new \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getContactMedia operation/method
 */
if ($get->getContactMedia(new \Pggns\MidocoApi\Crm\StructType\GetContactMediaRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getContactEntries operation/method
 */
if ($get->getContactEntries(new \Pggns\MidocoApi\Crm\StructType\GetContactEntriesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerCriteria operation/method
 */
if ($get->getCustomerCriteria(new \Pggns\MidocoApi\Crm\StructType\GetCustomerCriteriaRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableContactDescriptions operation/method
 */
if ($get->getAvailableContactDescriptions(new \Pggns\MidocoApi\Crm\StructType\GetAvailableContactDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getHistory operation/method
 */
if ($get->getHistory(new \Pggns\MidocoApi\Crm\StructType\GetHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitors operation/method
 */
if ($get->getDebitors(new \Pggns\MidocoApi\Crm\StructType\GetDebitorsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDocuments operation/method
 */
if ($get->getDocuments(new \Pggns\MidocoApi\Crm\StructType\GetDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDocument operation/method
 */
if ($get->getDocument(new \Pggns\MidocoApi\Crm\StructType\GetDocumentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableComplaintTypeDescription operation/method
 */
if ($get->getAvailableComplaintTypeDescription(new \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintTypeDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableComplaintReasonDescriptions operation/method
 */
if ($get->getAvailableComplaintReasonDescriptions(new \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintReasonDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableCardDescriptions operation/method
 */
if ($get->getAvailableCardDescriptions(new \Pggns\MidocoApi\Crm\StructType\GetAvailableCardDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableBonusDescriptions operation/method
 */
if ($get->getAvailableBonusDescriptions(new \Pggns\MidocoApi\Crm\StructType\GetAvailableBonusDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitCards operation/method
 */
if ($get->getDebitCards(new \Pggns\MidocoApi\Crm\StructType\GetDebitCardsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCcCards operation/method
 */
if ($get->getCcCards(new \Pggns\MidocoApi\Crm\StructType\GetCcCardsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBonusCards operation/method
 */
if ($get->getBonusCards(new \Pggns\MidocoApi\Crm\StructType\GetBonusCardsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getComplaints operation/method
 */
if ($get->getComplaints(new \Pggns\MidocoApi\Crm\StructType\GetComplaintsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getComplaintDocuments operation/method
 */
if ($get->getComplaintDocuments(new \Pggns\MidocoApi\Crm\StructType\GetComplaintDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getComplaintReasons operation/method
 */
if ($get->getComplaintReasons(new \Pggns\MidocoApi\Crm\StructType\GetComplaintReasonsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableDocumentTypes operation/method
 */
if ($get->getAvailableDocumentTypes(new \Pggns\MidocoApi\Crm\StructType\GetAvailableDocumentTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAddress operation/method
 */
if ($get->getAddress(new \Pggns\MidocoApi\Crm\StructType\GetAddressRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmCampaignes operation/method
 */
if ($get->getCrmCampaignes(new \Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerTravels operation/method
 */
if ($get->getCustomerTravels(new \Pggns\MidocoApi\Crm\StructType\GetCustomerTravelsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExtendedCustomerTravels operation/method
 */
if ($get->getExtendedCustomerTravels(new \Pggns\MidocoApi\Crm\StructType\GetExtendedCustomerTravelsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableMediators operation/method
 */
if ($get->getAvailableMediators(new \Pggns\MidocoApi\Crm\StructType\GetAvailableMediatorsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDiversDebitors operation/method
 */
if ($get->getDiversDebitors(new \Pggns\MidocoApi\Crm\StructType\GetIsDiversDebitorsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoCrmCustomerPayment operation/method
 */
if ($get->getMidocoCrmCustomerPayment(new \Pggns\MidocoApi\Crm\StructType\GetMidocoCrmCustomerPaymentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmCustomerPaymentGroupFee operation/method
 */
if ($get->getCrmCustomerPaymentGroupFee(new \Pggns\MidocoApi\Crm\StructType\GetCrmCustomerPaymentGroupFeeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediator operation/method
 */
if ($get->getMediator(new \Pggns\MidocoApi\Crm\StructType\GetMediatorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSalutationForCulture operation/method
 */
if ($get->getSalutationForCulture(new \Pggns\MidocoApi\Crm\StructType\GetSalutationForCultureRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitor operation/method
 */
if ($get->getDebitor(new \Pggns\MidocoApi\Crm\StructType\GetDebitorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerCompanyInfo operation/method
 */
if ($get->getCustomerCompanyInfo(new \Pggns\MidocoApi\Crm\StructType\GetCustomerCompanyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerByMediatorId operation/method
 */
if ($get->getCustomerByMediatorId(new \Pggns\MidocoApi\Crm\StructType\GetCustomerByMediatorIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableCountries operation/method
 */
if ($get->getAvailableCountries(new \Pggns\MidocoApi\Crm\StructType\GetAvailableCountriesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerOrders operation/method
 */
if ($get->getCustomerOrders(new \Pggns\MidocoApi\Crm\StructType\GetCustomerOrdersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmContext operation/method
 */
if ($get->getCrmContext(new \Pggns\MidocoApi\Crm\StructType\GetCrmContextRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencyDetails operation/method
 */
if ($get->getAgencyDetails(new \Pggns\MidocoApi\Crm\StructType\GetAgencyDetailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencyCommission operation/method
 */
if ($get->getAgencyCommission(new \Pggns\MidocoApi\Crm\StructType\GetAgencyCommissionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoCustomerTextTemplates operation/method
 */
if ($get->getMidocoCustomerTextTemplates(new \Pggns\MidocoApi\Crm\StructType\GetMediatorTextTemplatesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerAssignableDebitors operation/method
 */
if ($get->getCustomerAssignableDebitors(new \Pggns\MidocoApi\Crm\StructType\GetCustomerAssignableDebitorsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitorInfo operation/method
 */
if ($get->getDebitorInfo(new \Pggns\MidocoApi\Crm\StructType\GetDebitorInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorSettlementLevel operation/method
 */
if ($get->getMediatorSettlementLevel(new \Pggns\MidocoApi\Crm\StructType\GetMediatorSettlementLevelRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustInfoIfDifferent operation/method
 */
if ($get->getCustInfoIfDifferent(new \Pggns\MidocoApi\Crm\StructType\GetCustInfoIfDifferentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMerlinExportString operation/method
 */
if ($get->getMerlinExportString(new \Pggns\MidocoApi\Crm\StructType\GetMerlinExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoAgency operation/method
 */
if ($get->getMidocoAgency(new \Pggns\MidocoApi\Crm\StructType\GetMidocoAgencyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllCompanyCustomers operation/method
 */
if ($get->getAllCompanyCustomers(new \Pggns\MidocoApi\Crm\StructType\GetAllCompanyCustomersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencyExternalSystemAttributes operation/method
 */
if ($get->getAgencyExternalSystemAttributes(new \Pggns\MidocoApi\Crm\StructType\GetAgencyExternalSystemAttributesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorCharge operation/method
 */
if ($get->getMediatorCharge(new \Pggns\MidocoApi\Crm\StructType\GetMediatorChargeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorChargesList operation/method
 */
if ($get->getMediatorChargesList(new \Pggns\MidocoApi\Crm\StructType\GetMediatorChargesListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDueMediatorCharges operation/method
 */
if ($get->getDueMediatorCharges(new \Pggns\MidocoApi\Crm\StructType\GetDueMediatorChargesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGroupAdvisors operation/method
 */
if ($get->getGroupAdvisors(new \Pggns\MidocoApi\Crm\StructType\GetGroupAdvisorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencyNumbers operation/method
 */
if ($get->getAgencyNumbers(new \Pggns\MidocoApi\Crm\StructType\GetAgencyNumbersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSupplierFormat operation/method
 */
if ($get->getMidocoSupplierFormat(new \Pggns\MidocoApi\Crm\StructType\GetMidocoSupplierFormatRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierReportForSupplier operation/method
 */
if ($get->getSupplierReportForSupplier(new \Pggns\MidocoApi\Crm\StructType\GetSupplierReportForSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierReportForMediator operation/method
 */
if ($get->getSupplierReportForMediator(new \Pggns\MidocoApi\Crm\StructType\GetSupplierReportForMediatorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorByCriteria operation/method
 */
if ($get->getMediatorByCriteria(new \Pggns\MidocoApi\Crm\StructType\GetMediatorByCriteriaRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAmadeusExportString operation/method
 */
if ($get->getAmadeusExportString(new \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmNotices operation/method
 */
if ($get->getCrmNotices(new \Pggns\MidocoApi\Crm\StructType\GetCrmNoticesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerCommissionDefinition operation/method
 */
if ($get->getCustomerCommissionDefinition(new \Pggns\MidocoApi\Crm\StructType\GetCustomerCommissionDefinitionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCooperations operation/method
 */
if ($get->getCooperations(new \Pggns\MidocoApi\Crm\StructType\GetCooperationsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintRecipient operation/method
 */
if ($get->getPrintRecipient(new \Pggns\MidocoApi\Crm\StructType\GetPrintRecipientRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailablePrintRecipient operation/method
 */
if ($get->getAvailablePrintRecipient(new \Pggns\MidocoApi\Crm\StructType\GetAvailablePrintRecipientRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getErmMailInfo operation/method
 */
if ($get->getErmMailInfo(new \Pggns\MidocoApi\Crm\StructType\GetErmMailInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoMediator operation/method
 */
if ($get->getMidocoMediator(new \Pggns\MidocoApi\Crm\StructType\GetMidocoMediatorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmPersonTravellers operation/method
 */
if ($get->getCrmPersonTravellers(new \Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerAddresses operation/method
 */
if ($get->getCustomerAddresses(new \Pggns\MidocoApi\Crm\StructType\GetCustomerAddressesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFrequentFlyerNumbers operation/method
 */
if ($get->getFrequentFlyerNumbers(new \Pggns\MidocoApi\Crm\StructType\GetFrequentFlyerNumbersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerErrors operation/method
 */
if ($get->getCustomerErrors(new \Pggns\MidocoApi\Crm\StructType\GetCustomerErrorsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerMf operation/method
 */
if ($get->getCustomerMf(new \Pggns\MidocoApi\Crm\StructType\GetCustomerMfRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEmails operation/method
 */
if ($get->getEmails(new \Pggns\MidocoApi\Crm\StructType\GetEmailsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMediatorContacts operation/method
 */
if ($get->getMediatorContacts(new \Pggns\MidocoApi\Crm\StructType\GetMediatorContactsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCreditor operation/method
 */
if ($get->getCreditor(new \Pggns\MidocoApi\Crm\StructType\GetCreditorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCommunicationHistories operation/method
 */
if ($get->getCommunicationHistories(new \Pggns\MidocoApi\Crm\StructType\GetCommunicationHistoriesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencyCooperationHistory operation/method
 */
if ($get->getAgencyCooperationHistory(new \Pggns\MidocoApi\Crm\StructType\GetAgencyCooperationHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCollectiveInvoiceSettings operation/method
 */
if ($get->getCollectiveInvoiceSettings(new \Pggns\MidocoApi\Crm\StructType\GetCollectiveInvoiceSettingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgenciesWithCollectiveInvoice operation/method
 */
if ($get->getAgenciesWithCollectiveInvoice(new \Pggns\MidocoApi\Crm\StructType\GetAgenciesWithCollectiveInvoiceRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnprintedCustomerInvoices operation/method
 */
if ($get->getUnprintedCustomerInvoices(new \Pggns\MidocoApi\Crm\StructType\GetUnprintedCustomerInvoicesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDirectDebitorContacts operation/method
 */
if ($get->getDirectDebitorContacts(new \Pggns\MidocoApi\Crm\StructType\GetDirectDebitorContactsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAgencyByCriteria operation/method
 */
if ($get->getAgencyByCriteria(new \Pggns\MidocoApi\Crm\StructType\GetAgencyByCriteriaRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCcToken operation/method
 */
if ($get->getCcToken(new \Pggns\MidocoApi\Crm\StructType\GetCcTokenRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerStatisticData operation/method
 */
if ($get->getCustomerStatisticData(new \Pggns\MidocoApi\Crm\StructType\GetCustomerStatisticDataRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrintSelectsForCustomer operation/method
 */
if ($get->getPrintSelectsForCustomer(new \Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoCharge operation/method
 */
if ($get->getMidocoCharge(new \Pggns\MidocoApi\Crm\StructType\GetMidocoChargeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoChargesList operation/method
 */
if ($get->getMidocoChargesList(new \Pggns\MidocoApi\Crm\StructType\GetMidocoChargesListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDueMidocoCharges operation/method
 */
if ($get->getDueMidocoCharges(new \Pggns\MidocoApi\Crm\StructType\GetDueMidocoChargesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmPrintTypes operation/method
 */
if ($get->getCrmPrintTypes(new \Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmPrintTypeNoOfCopies operation/method
 */
if ($get->getCrmPrintTypeNoOfCopies(new \Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypeNoOfCopiesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLinkedCrmCompaniesToSupplier operation/method
 */
if ($get->getLinkedCrmCompaniesToSupplier(new \Pggns\MidocoApi\Crm\StructType\GetLinkedCrmCompaniesToSupplierRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmHistory operation/method
 */
if ($get->getCrmHistory(new \Pggns\MidocoApi\Crm\StructType\GetCrmHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getValidCustomerMandate operation/method
 */
if ($get->getValidCustomerMandate(new \Pggns\MidocoApi\Crm\StructType\GetCustomerMandateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getModifiedCustomers operation/method
 */
if ($get->getModifiedCustomers(new \Pggns\MidocoApi\Crm\StructType\GetModifiedCustomersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDuplicateAddress operation/method
 */
if ($get->getDuplicateAddress(new \Pggns\MidocoApi\Crm\StructType\GetDuplicateAddressRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAutoBillingMatrix operation/method
 */
if ($get->getAutoBillingMatrix(new \Pggns\MidocoApi\Crm\StructType\GetAutoBillingMatrixRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMailForDocumentId operation/method
 */
if ($get->getMailForDocumentId(new \Pggns\MidocoApi\Crm\StructType\GetMailForDocumentIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getYearlyTurnover operation/method
 */
if ($get->getYearlyTurnover(new \Pggns\MidocoApi\Crm\StructType\GetYearlyTurnoverRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerInfo operation/method
 */
if ($get->getCustomerInfo(new \Pggns\MidocoApi\Crm\StructType\GetCustomerInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExportChangedCustomers operation/method
 */
if ($get->getExportChangedCustomers(new \Pggns\MidocoApi\Crm\StructType\GetExportChangedCustomersRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCustomerInternalVersion operation/method
 */
if ($get->getCustomerInternalVersion(new \Pggns\MidocoApi\Crm\StructType\GetCustomerInternalVersionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUnitDebitor operation/method
 */
if ($get->getUnitDebitor(new \Pggns\MidocoApi\Crm\StructType\GetUnitDebitorRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmNoticeComments operation/method
 */
if ($get->getCrmNoticeComments(new \Pggns\MidocoApi\Crm\StructType\GetCrmNoticeCommentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGroupConsent operation/method
 */
if ($get->getGroupConsent(new \Pggns\MidocoApi\Crm\StructType\GetGroupConsentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNeoExportString operation/method
 */
if ($get->getNeoExportString(new \Pggns\MidocoApi\Crm\StructType\GetNeoExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSabreVacationsExportString operation/method
 */
if ($get->getSabreVacationsExportString(new \Pggns\MidocoApi\Crm\StructType\GetSabreVacationsExportStringRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCrmExternalOffer operation/method
 */
if ($get->getCrmExternalOffer(new \Pggns\MidocoApi\Crm\StructType\GetCrmExternalOfferRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternAgencyInfos operation/method
 */
if ($get->getExternAgencyInfos(new \Pggns\MidocoApi\Crm\StructType\GetExternAgencyInfosRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVirtualCcCardAccount operation/method
 */
if ($get->getVirtualCcCardAccount(new \Pggns\MidocoApi\Crm\StructType\GetVirtualCcCardAccountRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVirtualCcCard operation/method
 */
if ($get->getVirtualCcCard(new \Pggns\MidocoApi\Crm\StructType\GetVirtualCcCardRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Pggns\MidocoApi\Crm\ServiceType\Search($options);
$search->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for searchCustomer operation/method
 */
if ($search->searchCustomer(new \Pggns\MidocoApi\Crm\StructType\SearchCustomerRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchBank operation/method
 */
if ($search->searchBank(new \Pggns\MidocoApi\Crm\StructType\SearchBankRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCustDoubleAddr operation/method
 */
if ($search->searchCustDoubleAddr(new \Pggns\MidocoApi\Crm\StructType\SearchCustDoubleAddrRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCrmTravellers operation/method
 */
if ($search->searchCrmTravellers(new \Pggns\MidocoApi\Crm\StructType\SearchCrmTravellersRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchBlackList operation/method
 */
if ($search->searchBlackList(new \Pggns\MidocoApi\Crm\StructType\SearchBlackListRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCustomerByTravel operation/method
 */
if ($search->searchCustomerByTravel(new \Pggns\MidocoApi\Crm\StructType\SearchCustomerByTravelRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMidocoMandate operation/method
 */
if ($search->searchMidocoMandate(new \Pggns\MidocoApi\Crm\StructType\SearchMidocoMandateRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchMandateReference operation/method
 */
if ($search->searchMandateReference(new \Pggns\MidocoApi\Crm\StructType\SearchMandatesRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCustomerByPhone operation/method
 */
if ($search->searchCustomerByPhone(new \Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCrmExternalOffer operation/method
 */
if ($search->searchCrmExternalOffer(new \Pggns\MidocoApi\Crm\StructType\SearchCrmExternalOfferRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchExternalCustomer operation/method
 */
if ($search->searchExternalCustomer(new \Pggns\MidocoApi\Crm\StructType\SearchExternalCustomerRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\Crm\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteCustomer operation/method
 */
if ($delete->deleteCustomer(new \Pggns\MidocoApi\Crm\StructType\DeleteCustomerRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAddress operation/method
 */
if ($delete->deleteAddress(new \Pggns\MidocoApi\Crm\StructType\DeleteAddressRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteTraveller operation/method
 */
if ($delete->deleteTraveller(new \Pggns\MidocoApi\Crm\StructType\DeleteTravellerRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteContactEntry operation/method
 */
if ($delete->deleteContactEntry(new \Pggns\MidocoApi\Crm\StructType\DeleteContactEntryRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCustomerCriteria operation/method
 */
if ($delete->deleteCustomerCriteria(new \Pggns\MidocoApi\Crm\StructType\DeleteCustomerCriteriaRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDocument operation/method
 */
if ($delete->deleteDocument(new \Pggns\MidocoApi\Crm\StructType\DeleteDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDebitCard operation/method
 */
if ($delete->deleteDebitCard(new \Pggns\MidocoApi\Crm\StructType\DeleteDebitCardRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCcCard operation/method
 */
if ($delete->deleteCcCard(new \Pggns\MidocoApi\Crm\StructType\DeleteCcCardRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBonusCard operation/method
 */
if ($delete->deleteBonusCard(new \Pggns\MidocoApi\Crm\StructType\DeleteBonusCardRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteComplaint operation/method
 */
if ($delete->deleteComplaint(new \Pggns\MidocoApi\Crm\StructType\DeleteComplaintRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteComplaintDocument operation/method
 */
if ($delete->deleteComplaintDocument(new \Pggns\MidocoApi\Crm\StructType\DeleteComplaintDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteComplaintReason operation/method
 */
if ($delete->deleteComplaintReason(new \Pggns\MidocoApi\Crm\StructType\DeleteComplaintReasonRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoCrmCustomerPayment operation/method
 */
if ($delete->deleteMidocoCrmCustomerPayment(new \Pggns\MidocoApi\Crm\StructType\DeleteMidocoCrmCustomerPaymentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAgencyCommission operation/method
 */
if ($delete->deleteAgencyCommission(new \Pggns\MidocoApi\Crm\StructType\DeleteAgencyCommissionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorTextTemplate operation/method
 */
if ($delete->deleteMediatorTextTemplate(new \Pggns\MidocoApi\Crm\StructType\DeleteMediatorTextTemplateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorSettlementLevel operation/method
 */
if ($delete->deleteMediatorSettlementLevel(new \Pggns\MidocoApi\Crm\StructType\DeleteMediatorSettlementLevelsRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMediatorCharge operation/method
 */
if ($delete->deleteMediatorCharge(new \Pggns\MidocoApi\Crm\StructType\DeleteMediatorChargeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteGroupAdvisor operation/method
 */
if ($delete->deleteGroupAdvisor(new \Pggns\MidocoApi\Crm\StructType\DeleteGroupAdvisorRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAgencyNumber operation/method
 */
if ($delete->deleteAgencyNumber(new \Pggns\MidocoApi\Crm\StructType\DeleteMidocoAgencyNumberRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteSupplierReportFormat operation/method
 */
if ($delete->deleteSupplierReportFormat(new \Pggns\MidocoApi\Crm\StructType\DeleteSupplierReportFormatRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCrmNotice operation/method
 */
if ($delete->deleteCrmNotice(new \Pggns\MidocoApi\Crm\StructType\DeleteCrmNoticeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCustomerCommissionDefinition operation/method
 */
if ($delete->deleteCustomerCommissionDefinition(new \Pggns\MidocoApi\Crm\StructType\DeleteCustomerCommissionDefinitionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deletePrintRecipient operation/method
 */
if ($delete->deletePrintRecipient(new \Pggns\MidocoApi\Crm\StructType\DeletePrintRecipientRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCrmPersonTraveller operation/method
 */
if ($delete->deleteCrmPersonTraveller(new \Pggns\MidocoApi\Crm\StructType\DeleteCrmPersonTravellerRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteFrequentFlyerNumbers operation/method
 */
if ($delete->deleteFrequentFlyerNumbers(new \Pggns\MidocoApi\Crm\StructType\DeleteFrequentFlyerNumberRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCustomerMf operation/method
 */
if ($delete->deleteCustomerMf(new \Pggns\MidocoApi\Crm\StructType\DeleteCustomerMfRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteContactSource operation/method
 */
if ($delete->deleteContactSource(new \Pggns\MidocoApi\Crm\StructType\DeleteContactSourceRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCreditor operation/method
 */
if ($delete->deleteCreditor(new \Pggns\MidocoApi\Crm\StructType\DeleteCreditorRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCommunicationHistories operation/method
 */
if ($delete->deleteCommunicationHistories(new \Pggns\MidocoApi\Crm\StructType\DeleteCommunicationHistoriesRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAgencyCooperationHistory operation/method
 */
if ($delete->deleteAgencyCooperationHistory(new \Pggns\MidocoApi\Crm\StructType\DeleteAgencyCooperationHistoryRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCollectiveInvoiceSetting operation/method
 */
if ($delete->deleteCollectiveInvoiceSetting(new \Pggns\MidocoApi\Crm\StructType\DeleteCollectiveInvoiceSettingRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoCharge operation/method
 */
if ($delete->deleteMidocoCharge(new \Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoChargeOrgUnit operation/method
 */
if ($delete->deleteMidocoChargeOrgUnit(new \Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeOrgUnitRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoMandate operation/method
 */
if ($delete->deleteMidocoMandate(new \Pggns\MidocoApi\Crm\StructType\DeleteMidocoMandateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteAutoBillingMatrix operation/method
 */
if ($delete->deleteAutoBillingMatrix(new \Pggns\MidocoApi\Crm\StructType\DeleteAutoBillingMatrixRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteGroupConsent operation/method
 */
if ($delete->deleteGroupConsent(new \Pggns\MidocoApi\Crm\StructType\DeleteGroupConsentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCrmExternalOffer operation/method
 */
if ($delete->deleteCrmExternalOffer(new \Pggns\MidocoApi\Crm\StructType\DeleteCrmExternalOfferRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteVirtualCcCardAccount operation/method
 */
if ($delete->deleteVirtualCcCardAccount(new \Pggns\MidocoApi\Crm\StructType\DeleteVirtualCcCardAccountRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Assign ServiceType
 */
$assign = new \Pggns\MidocoApi\Crm\ServiceType\Assign($options);
$assign->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for assignCustomer operation/method
 */
if ($assign->assignCustomer(new \Pggns\MidocoApi\Crm\StructType\AssignCustomerRequest()) !== false) {
    print_r($assign->getResult());
} else {
    print_r($assign->getLastError());
}
/**
 * Sample call for assignDebitorToOrgunit operation/method
 */
if ($assign->assignDebitorToOrgunit(new \Pggns\MidocoApi\Crm\StructType\AssignDebitorToOrgunitRequest()) !== false) {
    print_r($assign->getResult());
} else {
    print_r($assign->getLastError());
}
/**
 * Samples for Unassign ServiceType
 */
$unassign = new \Pggns\MidocoApi\Crm\ServiceType\Unassign($options);
$unassign->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for unassignCustomer operation/method
 */
if ($unassign->unassignCustomer(new \Pggns\MidocoApi\Crm\StructType\UnassignCustomerRequest()) !== false) {
    print_r($unassign->getResult());
} else {
    print_r($unassign->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Pggns\MidocoApi\Crm\ServiceType\Check($options);
$check->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for checkContactEntries operation/method
 */
if ($check->checkContactEntries(new \Pggns\MidocoApi\Crm\StructType\CheckContactEntriesRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkMediatorAccess operation/method
 */
if ($check->checkMediatorAccess(new \Pggns\MidocoApi\Crm\StructType\CheckMediatorAccessRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkAddressesForCustomer operation/method
 */
if ($check->checkAddressesForCustomer(new \Pggns\MidocoApi\Crm\StructType\CheckAddressesForCustomerRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkAllAddressesStatistikAT operation/method
 */
if ($check->checkAllAddressesStatistikAT(new \Pggns\MidocoApi\Crm\StructType\CheckAllAddressesStatistikATRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Pggns\MidocoApi\Crm\ServiceType\Update($options);
$update->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for updateContactEntries operation/method
 */
if ($update->updateContactEntries(new \Pggns\MidocoApi\Crm\StructType\UpdateContactEntriesRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateAllContactEntries operation/method
 */
if ($update->updateAllContactEntries(new \Pggns\MidocoApi\Crm\StructType\UpdateAllContactEntriesRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateCustomerMailingProhibited operation/method
 */
if ($update->updateCustomerMailingProhibited(new \Pggns\MidocoApi\Crm\StructType\UpdateCustomerMailingProhibitedRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateAllCrmAddresses operation/method
 */
if ($update->updateAllCrmAddresses(new \Pggns\MidocoApi\Crm\StructType\UpdateAllCrmAddressesRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateLinkedCrmCompaniesToSupplier operation/method
 */
if ($update->updateLinkedCrmCompaniesToSupplier(new \Pggns\MidocoApi\Crm\StructType\UpdateLinkedCrmCompaniesToSupplierRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \Pggns\MidocoApi\Crm\ServiceType\Add($options);
$add->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for addHistoryEntry operation/method
 */
if ($add->addHistoryEntry(new \Pggns\MidocoApi\Crm\StructType\AddHistoryEntryRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addAgencyCommission operation/method
 */
if ($add->addAgencyCommission(new \Pggns\MidocoApi\Crm\StructType\AddAgencyCommissionRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Actualize ServiceType
 */
$actualize = new \Pggns\MidocoApi\Crm\ServiceType\Actualize($options);
$actualize->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for actualizePhoneticData operation/method
 */
if ($actualize->actualizePhoneticData(new \Pggns\MidocoApi\Crm\StructType\ActualizePhoneticDataRequest()) !== false) {
    print_r($actualize->getResult());
} else {
    print_r($actualize->getLastError());
}
/**
 * Sample call for actualizeCustomerErmMail operation/method
 */
if ($actualize->actualizeCustomerErmMail(new \Pggns\MidocoApi\Crm\StructType\ActualizeCustomerErmMailRequest()) !== false) {
    print_r($actualize->getResult());
} else {
    print_r($actualize->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \Pggns\MidocoApi\Crm\ServiceType\Find($options);
$find->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for findCustomerForEmail operation/method
 */
if ($find->findCustomerForEmail(new \Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailRequest()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findCustomerOrDebitor operation/method
 */
if ($find->findCustomerOrDebitor(new \Pggns\MidocoApi\Crm\StructType\FindCustomerOrDebitorRequest()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Pggns\MidocoApi\Crm\ServiceType\Create($options);
$create->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for createCustomerLetter operation/method
 */
if ($create->createCustomerLetter(new \Pggns\MidocoApi\Crm\StructType\CreateCustomerLetterRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createAutomaticCrmNotice operation/method
 */
if ($create->createAutomaticCrmNotice(new \Pggns\MidocoApi\Crm\StructType\CreateAutomaticCrmNoticeRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createExternalCampaign operation/method
 */
if ($create->createExternalCampaign(new \Pggns\MidocoApi\Crm\StructType\MidocoExternalCampaign()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Print ServiceType
 */
$print = new \Pggns\MidocoApi\Crm\ServiceType\_Print($options);
$print->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for printCustomerLetter operation/method
 */
if ($print->printCustomerLetter(new \Pggns\MidocoApi\Crm\StructType\PrintCustomerLetterRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printSupplierReportForMediator operation/method
 */
if ($print->printSupplierReportForMediator(new \Pggns\MidocoApi\Crm\StructType\PrintSupplierReportForMediatorRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Sample call for printCommunicationHistory operation/method
 */
if ($print->printCommunicationHistory(new \Pggns\MidocoApi\Crm\StructType\PrintCommunicationHistoryRequest()) !== false) {
    print_r($print->getResult());
} else {
    print_r($print->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \Pggns\MidocoApi\Crm\ServiceType\Validate($options);
$validate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for validateDebitorForBilling operation/method
 */
if ($validate->validateDebitorForBilling(new \Pggns\MidocoApi\Crm\StructType\ValidateDebitorForBillingRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateDebitor operation/method
 */
if ($validate->validateDebitor(new \Pggns\MidocoApi\Crm\StructType\ValidateDebitorRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateDebitCard operation/method
 */
if ($validate->validateDebitCard(new \Pggns\MidocoApi\Crm\StructType\ValidateDebitCardRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateCreditCard operation/method
 */
if ($validate->validateCreditCard(new \Pggns\MidocoApi\Crm\StructType\ValidateCreditCardRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateUstId operation/method
 */
if ($validate->validateUstId(new \Pggns\MidocoApi\Crm\StructType\ValidateUstIdRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for De ServiceType
 */
$de = new \Pggns\MidocoApi\Crm\ServiceType\De($options);
$de->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deAssignDebitor operation/method
 */
if ($de->deAssignDebitor(new \Pggns\MidocoApi\Crm\StructType\DeassignDebitorToOrgunitRequest()) !== false) {
    print_r($de->getResult());
} else {
    print_r($de->getLastError());
}
/**
 * Samples for Edit ServiceType
 */
$edit = new \Pggns\MidocoApi\Crm\ServiceType\Edit($options);
$edit->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for editAgencyCommission operation/method
 */
if ($edit->editAgencyCommission(new \Pggns\MidocoApi\Crm\StructType\EditAgencyCommissionRequest()) !== false) {
    print_r($edit->getResult());
} else {
    print_r($edit->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \Pggns\MidocoApi\Crm\ServiceType\Is($options);
$is->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for isMediatorTrusted operation/method
 */
if ($is->isMediatorTrusted(new \Pggns\MidocoApi\Crm\StructType\IsMediatorTrustedRequest()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Merge ServiceType
 */
$merge = new \Pggns\MidocoApi\Crm\ServiceType\Merge($options);
$merge->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for mergeCustomers operation/method
 */
if ($merge->mergeCustomers(new \Pggns\MidocoApi\Crm\StructType\MergeCustomersRequest()) !== false) {
    print_r($merge->getResult());
} else {
    print_r($merge->getLastError());
}
/**
 * Samples for Do ServiceType
 */
$do = new \Pggns\MidocoApi\Crm\ServiceType\_Do($options);
$do->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for doMultiPrint operation/method
 */
if ($do->doMultiPrint(new \Pggns\MidocoApi\Crm\StructType\MultiPrintRequest()) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastError());
}
/**
 * Samples for Filter ServiceType
 */
$filter = new \Pggns\MidocoApi\Crm\ServiceType\Filter($options);
$filter->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for filterSettlementCandidates operation/method
 */
if ($filter->filterSettlementCandidates(new \Pggns\MidocoApi\Crm\StructType\FilterSettlementCandidatesRequest()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterMidocoSettlementCandidates operation/method
 */
if ($filter->filterMidocoSettlementCandidates(new \Pggns\MidocoApi\Crm\StructType\FilterMidocoSettlementCandidatesRequest()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Samples for Export ServiceType
 */
$export = new \Pggns\MidocoApi\Crm\ServiceType\Export($options);
$export->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for exportDebitors operation/method
 */
if ($export->exportDebitors(new \Pggns\MidocoApi\Crm\StructType\ExportDebitorsRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Samples for Lock ServiceType
 */
$lock = new \Pggns\MidocoApi\Crm\ServiceType\Lock($options);
$lock->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for lockCustomerByDebitor operation/method
 */
if ($lock->lockCustomerByDebitor(new \Pggns\MidocoApi\Crm\StructType\LockCustomerByDebitorRequest()) !== false) {
    print_r($lock->getResult());
} else {
    print_r($lock->getLastError());
}
/**
 * Samples for Announce ServiceType
 */
$announce = new \Pggns\MidocoApi\Crm\ServiceType\Announce($options);
$announce->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for announceMailMessage operation/method
 */
if ($announce->announceMailMessage(new \Pggns\MidocoApi\Crm\StructType\AnnounceMailMessageRequest()) !== false) {
    print_r($announce->getResult());
} else {
    print_r($announce->getLastError());
}
/**
 * Samples for Switch ServiceType
 */
$switch = new \Pggns\MidocoApi\Crm\ServiceType\_Switch($options);
$switch->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for switchCustomerType operation/method
 */
if ($switch->switchCustomerType(new \Pggns\MidocoApi\Crm\StructType\SwitchCustomerTypeRequest()) !== false) {
    print_r($switch->getResult());
} else {
    print_r($switch->getLastError());
}
/**
 * Samples for Import ServiceType
 */
$import = new \Pggns\MidocoApi\Crm\ServiceType\Import($options);
$import->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for importCRMCsv operation/method
 */
if ($import->importCRMCsv(new \Pggns\MidocoApi\Crm\StructType\ImportCRMCsvRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Sample call for importRawCustomer operation/method
 */
if ($import->importRawCustomer(new \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Samples for Preview ServiceType
 */
$preview = new \Pggns\MidocoApi\Crm\ServiceType\Preview($options);
$preview->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for previewCommunicationHistory operation/method
 */
if ($preview->previewCommunicationHistory(new \Pggns\MidocoApi\Crm\StructType\PreviewCommunicationHistoryRequest()) !== false) {
    print_r($preview->getResult());
} else {
    print_r($preview->getLastError());
}
/**
 * Samples for Reset ServiceType
 */
$reset = new \Pggns\MidocoApi\Crm\ServiceType\Reset($options);
$reset->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for resetCustomerPassword operation/method
 */
if ($reset->resetCustomerPassword(new \Pggns\MidocoApi\Crm\StructType\ResetCustomerPasswordRequest()) !== false) {
    print_r($reset->getResult());
} else {
    print_r($reset->getLastError());
}
/**
 * Samples for Verify ServiceType
 */
$verify = new \Pggns\MidocoApi\Crm\ServiceType\Verify($options);
$verify->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for verifyPassword operation/method
 */
if ($verify->verifyPassword(new \Pggns\MidocoApi\Crm\StructType\VerifyPasswordRequest()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Samples for Modify ServiceType
 */
$modify = new \Pggns\MidocoApi\Crm\ServiceType\Modify($options);
$modify->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for modifyPassword operation/method
 */
if ($modify->modifyPassword(new \Pggns\MidocoApi\Crm\StructType\ModifyPasswordRequest()) !== false) {
    print_r($modify->getResult());
} else {
    print_r($modify->getLastError());
}
/**
 * Samples for Duplicate ServiceType
 */
$duplicate = new \Pggns\MidocoApi\Crm\ServiceType\Duplicate($options);
$duplicate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for duplicateCrmMidocoSettlement operation/method
 */
if ($duplicate->duplicateCrmMidocoSettlement(new \Pggns\MidocoApi\Crm\StructType\DuplicateCrmMidocoSettlementRequest()) !== false) {
    print_r($duplicate->getResult());
} else {
    print_r($duplicate->getLastError());
}
/**
 * Samples for Generate ServiceType
 */
$generate = new \Pggns\MidocoApi\Crm\ServiceType\Generate($options);
$generate->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for generateMandateReference operation/method
 */
if ($generate->generateMandateReference(new \Pggns\MidocoApi\Crm\StructType\GenerateMandateReferenceRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for generateMidocoMandate operation/method
 */
if ($generate->generateMidocoMandate(new \Pggns\MidocoApi\Crm\StructType\GenerateMidocoMandateRequest()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Samples for Mark ServiceType
 */
$mark = new \Pggns\MidocoApi\Crm\ServiceType\Mark($options);
$mark->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for markUsedMidocoMandate operation/method
 */
if ($mark->markUsedMidocoMandate(new \Pggns\MidocoApi\Crm\StructType\MarkUsedMidocoMandateRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for markExportChangedCustomers operation/method
 */
if ($mark->markExportChangedCustomers(new \Pggns\MidocoApi\Crm\StructType\MarkExportChangedCustomersRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for markVoidedCrmNoticeComment operation/method
 */
if ($mark->markVoidedCrmNoticeComment(new \Pggns\MidocoApi\Crm\StructType\MarkVoidedCrmNoticeCommentRequest()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Samples for Execute ServiceType
 */
$execute = new \Pggns\MidocoApi\Crm\ServiceType\Execute($options);
$execute->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for executeCrmRules operation/method
 */
if ($execute->executeCrmRules(new \Pggns\MidocoApi\Crm\StructType\ExecuteCrmRulesRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Load ServiceType
 */
$load = new \Pggns\MidocoApi\Crm\ServiceType\Load($options);
$load->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for loadDataStatistikAt operation/method
 */
if ($load->loadDataStatistikAt(new \Pggns\MidocoApi\Crm\StructType\StatistikAtLoadDataRequest()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Samples for Invoke ServiceType
 */
$invoke = new \Pggns\MidocoApi\Crm\ServiceType\Invoke($options);
$invoke->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for invokeCustomerWorkflow operation/method
 */
if ($invoke->invokeCustomerWorkflow(new \Pggns\MidocoApi\Crm\StructType\InvokeCustomerWorkflowRequest()) !== false) {
    print_r($invoke->getResult());
} else {
    print_r($invoke->getLastError());
}
/**
 * Samples for Confirm ServiceType
 */
$confirm = new \Pggns\MidocoApi\Crm\ServiceType\Confirm($options);
$confirm->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for confirmCrmExternalOffer operation/method
 */
if ($confirm->confirmCrmExternalOffer(new \Pggns\MidocoApi\Crm\StructType\ConfirmCrmExternalOfferRequest()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Samples for Paxconnect ServiceType
 */
$paxconnect = new \Pggns\MidocoApi\Crm\ServiceType\Paxconnect($options);
$paxconnect->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for paxconnectNotifyAdvisoryPublished operation/method
 */
if ($paxconnect->paxconnectNotifyAdvisoryPublished(new \Pggns\MidocoApi\Crm\StructType\PaxconnectNotifyAdvisoryPublishedRequest()) !== false) {
    print_r($paxconnect->getResult());
} else {
    print_r($paxconnect->getLastError());
}
