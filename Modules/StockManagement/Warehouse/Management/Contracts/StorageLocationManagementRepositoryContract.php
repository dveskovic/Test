<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Contracts;

use\Management\Contracts;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Modules\StockManagement\Warehouse\Management\Models\StorageLocation;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Exceptions\ValidationException;

/**
 * The StorageLocationManagementRepositoryContract is the interface for the storage location management repository. This interface provides the functionality to manage the warehouse configuration for storage locations. Storage locations can be retrieved, created or updated here.
 */
interface StorageLocationManagementRepositoryContract 
{

	/**
	 * Find a storage location by id.
	 */
	public function getStorageLocationById(
		int $storageLocationId, 
		array $columns = [], 
		array $with = []
	):StorageLocation;

	/**
	 * Find storage locations. The results can be filtered by warehouse id, rack id and shelf id.
	 */
	public function findStorageLocations(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):array;

	/**
	 * Create a new storage location.
	 */
	public function createStorageLocation(
		array $data, 
		int $warehouseId, 
		int $rackId, 
		int $shelfId
	):StorageLocation;

}