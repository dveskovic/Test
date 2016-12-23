<?php
namespace Plenty\Modules\Item\SalesPrice\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\SalesPrice\Models\SalesPrice;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the sales price repository
 */
interface SalesPriceRepositoryContract 
{

	/**
	 * Gets a sales price. The ID of the sales price must be specified.
	 */
	public function show(
		int $salesPriceId
	):SalesPrice;

	/**
	 * Creates a sales price.
	 */
	public function create(
		array $data
	):SalesPrice;

	/**
	 * Updates a sales price. The ID of the sales price must be specified.
	 */
	public function update(
		array $data, 
		int $salesPriceId
	):SalesPrice;

	/**
	 * Deletes a sales price. The ID of the sales price must be specified.
	 */
	public function delete(
		int $salesPriceId
	):DeleteResponse;

	/**
	 * Gets a sales price. The ID of the sales price must be specified.
	 */
	public function findById(
		int $salesPriceId
	):SalesPrice;

	/**
	 * Lists all sales prices.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):PaginatedResult;

}