<?php
namespace Plenty\Modules\Item\Manufacturer\Contracts;

use Plenty\Modules\Item\Manufacturer\Models\Manufacturer;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the manufacturer repository
 */
interface ManufacturerRepositoryContract 
{

	/**
	 * Creates a manufacturer.
	 */
	public function create(
		array $data
	):Manufacturer;

	/**
	 * Updates a manufacturer. The ID of the manufacturer must be specified.
	 */
	public function update(
		array $data, 
		int $manufacturerId
	):Manufacturer;

	/**
	 * Deletes a manufacturer. The ID of the manufacturer must be specified.
	 */
	public function delete(
		int $manufacturerId
	):DeleteResponse;

	/**
	 * Gets a manufacturer. The ID of the manufacturer must be specified.
	 */
	public function findById(
		int $manufacturerId
	):Manufacturer;

	/**
	 * Lists all manufacturers.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):PaginatedResult;

	/**
	 * Lists manufacturers by filter
	 */
	public function search(
		array $params = [], 
		array $columns = []
	):PaginatedResult;

}