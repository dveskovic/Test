<?php
namespace Plenty\Modules\Accounting\Contracts;

use Plenty\Modules\Accounting\Exceptions\AccountingException;
use Plenty\Modules\Accounting\Models\AccountingLocation;

/**
 * Provides methods for location ID detection.
 */
interface AccountingServiceContract 
{

	/**
	 * Get the location ID for the given plenty ID and delivery country ID.
	 */
	public function detectLocationId(
		int $plentyId, 
		int $countryId = null
	):int;

	/**
	 * Get the location ID for the given client ID and delivery country ID.
	 */
	public function detectLocationIdByClientId(
		int $clientId = null, 
		int $countryId = null
	):int;

	/**
	 * List accounting locations for given plenty ID and country ID.
	 */
	public function getAccountingLocations(
		int $plentyId, 
		int $countryId = null
	):array;

	/**
	 * List accounting locations for given client ID and country ID. If client ID is not given, the default client (ID 0) will be used.
	 */
	public function getAccountingLocationsByClient(
		int $clientId = null, 
		int $countryId = null
	):array;

}