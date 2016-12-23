<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Contracts;

use\Management\Contracts;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Modules\StockManagement\Warehouse\Management\Models\Rack;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Exceptions\ValidationException;

/**
 * The RackManagementRepositoryContract is the interface for the rack management repository. This interface provides the functionality to manage the warehouse configuration for racks. Racks can be retrieved, created or updated here.
 */
interface RackManagementRepositoryContract 
{

	/**
	 * Find a rack by id.
	 */
	public function getRackById(
		int $rackId, 
		array $columns = [], 
		array $with = []
	):Rack;

	/**
	 * Find racks. The results can be filtered by warehouse id.
	 */
	public function findRacks(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):array;

	/**
	 * Create a new rack.
	 */
	public function createRack(
		array $data, 
		int $warehouseId
	):Rack;

}