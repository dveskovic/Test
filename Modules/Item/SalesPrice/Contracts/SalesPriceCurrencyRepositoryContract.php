<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceCurrency;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price currency repository
 */
interface SalesPriceCurrencyRepositoryContract 
{

	/**
	 * Creates a sales price currency. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceCurrency;

	/**
	 * Deletes a sales price currency. The ID of the sales price and the currency must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		string $currency
	):DeleteResponse;

	/**
	 * Gets a sales price currency. The ID of the sales price and the currency must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		string $currency
	):SalesPriceCurrency;

	/**
	 * Lists sales price currencies. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deletes sales price currencies. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}