<?php
namespace Plenty\Modules\Item\Unit\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Unit\Models\Unit;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the unit repository
 */
interface UnitRepositoryContract 
{

	/**
	 * Creates a unit.
	 */
	public function create(
		array $data
	):Unit;

	/**
	 * Gets a unit. The ID of the unit must be specified.
	 */
	public function show(
		int $id
	):Unit;

	/**
	 * Updates a unit. The ID of the unit must be specified.
	 */
	public function update(
		array $data, 
		int $id
	):Unit;

	/**
	 * Deletes a unit. The ID of the unit must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Gets a unit. The ID of the unit must be specified.
	 */
	public function findById(
		int $id
	):Unit;

	/**
	 * Lists all units.
	 */
	public function all(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

}