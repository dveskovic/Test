<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceAccount;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price account repository
 */
interface SalesPriceAccountRepositoryContract 
{

	/**
	 * Create a sales price account. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceAccount;

	/**
	 * Deletes a sales price account. The ID of the sales price, the type and the ID of the account must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $accountType, 
		int $accountId
	):DeleteResponse;

	/**
	 * Gets a sales price account. The ID of the sales price, the type and the ID of the account must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $accountType, 
		int $accountId
	):SalesPriceAccount;

	/**
	 * Lists sales price accounts. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deletes sales price accounts. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}