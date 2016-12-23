<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceOnlineStore;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price online store repository
 */
interface SalesPriceOnlineStoreRepositoryContract 
{

	/**
	 * Creates a sales price online store. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceOnlineStore;

	/**
	 * Deletes a sales price online store. The ID of the sales price and the ID of the online store must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $onlineStoreId
	):DeleteResponse;

	/**
	 * Deletes sales price online stores. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

	/**
	 * Gets a sales price online store. The ID of the sales price and the ID of the online store must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $onlineStoreId
	):SalesPriceOnlineStore;

	/**
	 * Lists sales price online stores. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

}