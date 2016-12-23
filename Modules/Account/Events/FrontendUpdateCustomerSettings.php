<?php
namespace Plenty\Modules\Account\Events;


/**
 * frontend customer settings event
 */
abstract class FrontendUpdateCustomerSettings 
{

	abstract public function getDeliveryCountryId(
	):int;

	abstract public function setDeliveryCountryId(
		int $deliveryCountryId
	):\Plenty\Modules\Account\Events\FrontendUpdateCustomerSettings;

	abstract public function getShowNetPrice(
	):boolean;

	abstract public function setShowNetPrice(
		boolean $showNetPrice
	):\Plenty\Modules\Account\Events\FrontendUpdateCustomerSettings;

	abstract public function getEbaySellerAccount(
	):string;

	abstract public function setEbaySellerAccount(
		string $ebaySellerAccount
	):\Plenty\Modules\Account\Events\FrontendUpdateCustomerSettings;

	abstract public function getAccountContactSign(
	):string;

	abstract public function setAccountContactSign(
		string $accountContactSign
	):\Plenty\Modules\Account\Events\FrontendUpdateCustomerSettings;

	abstract public function getAccountContactClassId(
	):int;

	abstract public function setAccountContactClassId(
		int $accountContactClassId
	):\Plenty\Modules\Account\Events\FrontendUpdateCustomerSettings;

	abstract public function getSalesAgent(
	):string;

	abstract public function setSalesAgent(
		string $salesAgent
	):\Plenty\Modules\Account\Events\FrontendUpdateCustomerSettings;

	abstract public function getAccountContractClassId(
	):int;

	abstract public function setAccountContractClassId(
		int $accountContractClassId
	):\Plenty\Modules\Account\Events\FrontendUpdateCustomerSettings;

}