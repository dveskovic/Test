<?php
namespace Plenty\Modules\Item\VariationImage\Contracts;

use Plenty\Modules\Item\VariationImage\Models\VariationImage;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation image repository
 */
interface VariationImageRepositoryContract 
{

	/**
	 * Creates link between image and variation
	 */
	public function create(
		array $data
	):VariationImage;

	/**
	 * Deletes Link between image and variation
	 */
	public function delete(
		int $variationId, 
		int $imageId
	):DeleteResponse;

	/**
	 * Lists variations linked to an image
	 */
	public function findByImageId(
		int $imageId
	):array;

	/**
	 * Lists images linked to a variation
	 */
	public function findByVariationId(
		int $variationId
	):array;

	/**
	 * Lists all images linked to an item. The ID of the item must be specified.
	 */
	public function findByItemId(
		int $itemId
	):array;

	/**
	 * Gets an image link
	 */
	public function findById(
		int $id
	):VariationImage;

}