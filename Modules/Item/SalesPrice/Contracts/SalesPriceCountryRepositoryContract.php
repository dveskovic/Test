<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceCountry;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price country repository
 */
interface SalesPriceCountryRepositoryContract 
{

	/**
	 * Creates a new sales price country. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceCountry;

	/**
	 * Deletes a sales price country. The ID of the sales price and the ID of the country must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $countryId
	):DeleteResponse;

	/**
	 * Gets a sales price country. The ID of the sales price and the ID of the country must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $countryId
	):SalesPriceCountry;

	/**
	 * Lists sales price countries. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deletes sales price countries. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}