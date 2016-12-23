<?php
namespace Plenty\Modules\Item\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Property\Models\PropertySelection;

/**
 * The contract for the property selection repository
 */
interface PropertySelectionRepositoryContract 
{

	/**
	 * Creates a property selection. The ID of the property must be specified.
	 */
	public function create(
		array $data, 
		int $propertyId
	):PropertySelection;

	/**
	 * Deletes a property selection. The ID of the property and the language must be specified.
	 */
	public function delete(
		int $propertyId, 
		string $lang
	):boolean;

	/**
	 * Updates a property selection. The ID of the property and the language must be specified.
	 */
	public function update(
		array $data, 
		int $propertyId, 
		string $lang
	):PropertySelection;

	/**
	 * Get a property selection. The ID of the property and the language must be specified.
	 */
	public function findOne(
		int $propertyId, 
		string $lang
	):PropertySelection;

	/**
	 * List of property selections. The ID of the property must be specified.
	 */
	public function findByPropertyId(
		int $propertyId
	):PropertySelection;

}