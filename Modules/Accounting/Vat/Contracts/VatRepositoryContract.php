<?php
namespace Plenty\Modules\Accounting\Vat\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Repositories\Contracts\SortableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Modules\Accounting\Vat\Models\Vat;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The VatRepositoryContract is the interface for the VAT functionality. This interface allows you to get the VAT configuration for an accounting location and a country of delivery.
 */
interface VatRepositoryContract 
{

	const FILTER_LOCATION_ID = 'locationId';

	const FILTER_COUNTRY_ID = 'countryId';

	const FILTER_TAX_ID_NUMBER = 'taxIdNumber';

	const FILTER_STARTED_AT = 'startedAt';

	/**
	 * Get a VAT configuration
	 */
	public function findById(
		int $id
	):Vat;

	/**
	 * Get the standard VAT configuration for a plenty ID
	 */
	public function getStandardVat(
		int $plentyId = null, 
		string $startedAt = null
	):Vat;

	/**
	 * List VAT configurations
	 */
	public function findVat(
		int $page = 1, 
		int $itemsPerPage = \Plenty\Modules\Accounting\Vat\Models\Vat::ITEMS_PER_PAGE, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * List VAT configurations for an accounting location
	 */
	public function findVatByLocationId(
		int $locationId, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * List VAT configuration for a country of delivery
	 */
	public function findVatByLocationIdAndCountry(
		int $locationId, 
		int $countryId, 
		array $relations = [], 
		array $columns = []
	):array;

}