<?php
namespace Plenty\Modules\Item\VariationSku\Contracts;

use Plenty\Modules\Item\VariationSku\Models\VariationSku;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation sku repository
 */
interface VariationSkuRepositoryContract 
{

	/**
	 * Generates or updates an SKU
	 */
	public function generateSku(
		int $variationId, 
		int $marketId, 
		int $accountId, 
		 $sku = null, 
		bool $setLastExportedTimestamp = true
	):string;

	/**
	 * Creates an SKU
	 */
	public function create(
		array $data
	):VariationSku;

	/**
	 * Updates an SKU
	 */
	public function update(
		array $data, 
		int $skuId
	):VariationSku;

	/**
	 * Deletes an SKU
	 */
	public function delete(
		int $skuId
	):DeleteResponse;

	/**
	 * Gets an SKU
	 */
	public function show(
		int $skuId
	):VariationSku;

	/**
	 * Lists SKUs
	 */
	public function search(
		array $filter
	):array;

	/**
	 * Lists SKUs
	 */
	public function findByVariationId(
		int $variationId
	):array;

}