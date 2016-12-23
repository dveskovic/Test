<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Contracts;

use\Management\Contracts;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Modules\StockManagement\Warehouse\Management\Models\Shelf;
use Plenty\Exceptions\ValidationException;

/**
 * The ShelfManagementRepositoryContract is the interface for the shelf management repository. This interface provides the functionality to manage the warehouse configuration for shelves. Shelves can be retrieved, created or updated here.
 */
interface ShelfManagementRepositoryContract 
{

	/**
	 * Find a shelf by id.
	 */
	public function getShelfById(
		int $shelfId, 
		array $columns = [], 
		array $with = []
	):Shelf;

	/**
	 * Find shelves. The results can be filtered by warehouse id and rack id.
	 */
	public function findShelves(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):array;

	/**
	 * Create a new shelf.
	 */
	public function createShelf(
		array $data, 
		int $warehouseId, 
		int $rackId
	):Shelf;

}