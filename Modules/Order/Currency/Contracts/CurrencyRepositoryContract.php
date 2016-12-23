<?php
namespace Plenty\Modules\Order\Currency\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Order\Currency\Models\Currency;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * Provides methods for currency data.
 */
interface CurrencyRepositoryContract 
{

	/**
	 * Get a currency
	 */
	public function getCurrency(
		string $currencyIso, 
		array $columns = [], 
		array $with = []
	):Currency;

	/**
	 * Get all currencies supported in the system.
	 */
	public function getCurrencyList(
		array $columns = [], 
		array $with = []
	):array;

	/**
	 * List countries for a currency
	 */
	public function getCurrencyCountries(
		string $currencyIso, 
		array $columns = []
	):array;

	/**
	 * Get a currency for a country
	 */
	public function getCountryCurrency(
		int $countryId, 
		array $columns = [], 
		array $with = []
	):Currency;

}