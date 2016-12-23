<?php
namespace Plenty\Modules\Accounting\Contracts;


/**
 * Provides methods for system country initialization depending the client id.
 */
interface DetermineShopCountryContract 
{

	/**
	 * Init the system country by the client ID.
	 */
	public function initByClientId(
		int $clientId = 0
	);

	/**
	 * Init the system country by the plenty ID.
	 */
	public function initByPlentyId(
		int $plentyId = 0
	);

	/**
	 * Init the system country by the location ID.
	 */
	public function initByLocationId(
		int $locationId
	);

	/**
	 * Init the system country by an order ID.
	 */
	public function initByOrderId(
		int $orderId
	);

	/**
	 * Get the current system country ID (headquarters). One of the init-Methods should be called first!
	 */
	public function getCountryId(
	):int;

	/**
	 * Get the current client ID. One of the init-Methods should be called first!
	 */
	public function getClientId(
	):int;

	/**
	 * Get the current plenty ID. One of the init-Methods should be called first!
	 */
	public function getPlentyId(
	):int;

	/**
	 * Get the shop country (headquarters) for the given client ID.
	 */
	public function getCountryIdByClientId(
		int $clientId = 0
	):int;

	/**
	 * Get the shop country (headquarters) for the given plenty ID.
	 */
	public function getCountryIdByPlentyId(
		int $plentyId
	):int;

	/**
	 * Get the shop country (headquarters) for the given client ID and country ID.
	 */
	public function getCountryIdByClientIdAndCountryId(
		int $clientId, 
		int $countryId
	):int;

	/**
	 * Get the shop country (headquarters) for the given location ID.
	 */
	public function getCountryIdByLocationId(
		int $locationId
	):int;

}