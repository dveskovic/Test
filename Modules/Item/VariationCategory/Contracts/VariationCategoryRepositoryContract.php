<?php
namespace Plenty\Modules\Item\VariationCategory\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationCategory\Models\VariationCategory;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the variation category repository
 */
interface VariationCategoryRepositoryContract 
{

	/**
	 * Gets a variation category. The ID of the variation and the ID of the category must be specified.
	 */
	public function show(
		int $categoryId, 
		int $variationId
	):VariationCategory;

	/**
	 * Creates a variation category.
	 */
	public function create(
		array $data
	):VariationCategory;

	/**
	 * Updates a variation category.  The ID of the variation and the ID of the category must be specified.
	 */
	public function update(
		array $data, 
		int $categoryId, 
		int $variationId
	):VariationCategory;

	/**
	 * Delete an VariationCategory by given variation and barcode id
	 */
	public function delete(
		int $categoryId, 
		int $variationId
	):DeleteResponse;

	/**
	 * Lists variation categories. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationCategory;

	/**
	 * Lists variation categories with inheritance. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationCategory;

}