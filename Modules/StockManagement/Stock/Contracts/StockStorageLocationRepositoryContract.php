<?php
namespace Plenty\Modules\StockManagement\Stock\Contracts;

use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Modules\StockManagement\Stock\Models\StockStorageLocation;

/**
 * The StockStorageLocationRepositoryContract is the interface for the stock storage location repository. This interface allows you to list the stock of all storage locations of a warehouse or to list all storage locations of a variation and the stock stored at these locations.
 */
interface StockStorageLocationRepositoryContract 
{

	/**
	 * List stock of all storage locations of a warehouse
	 */
	public function listStockStorageLocationsByWarehouseId(
		int $warehouseId, 
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

	/**
	 * List stock of a variation per storage location
	 */
	public function listStockStorageLocationsByVariationId(
		int $variationId, 
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

}