<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPriceReferrer;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the sales price referrer repository
 */
interface SalesPriceReferrerRepositoryContract 
{

	/**
	 * Creates a sales price referrer. The ID of the sales price must be specified.
	 */
	public function create(
		array $data, 
		int $salesPriceId
	):SalesPriceReferrer;

	/**
	 * Deletes a sales price referrer. The ID of the sales price and the ID of the referrer must be specified.
	 */
	public function delete(
		int $salesPriceId, 
		int $referrerId
	):DeleteResponse;

	/**
	 * Gets a sales price referrer. The ID of the sales price and the ID of the referrer must be specified.
	 */
	public function findOne(
		int $salesPriceId, 
		int $referrerId
	):SalesPriceReferrer;

	/**
	 * Lists sales price referrers. The ID of the sales price must be specified.
	 */
	public function findByPriceId(
		int $salesPriceId
	):array;

	/**
	 * Deletes sales price referrers. The ID of the sales price must be specified.
	 */
	public function deleteByPriceId(
		int $salesPriceId
	):DeleteResponse;

}