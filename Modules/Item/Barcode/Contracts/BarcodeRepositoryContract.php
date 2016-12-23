<?php
namespace Plenty\Modules\Item\Barcode\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Barcode\Models\Barcode;
use Plenty\Modules\Item\Barcode\Models\BarcodeLinkReferrer;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the barcode repository
 */
interface BarcodeRepositoryContract 
{

	/**
	 * Gets a barcode. The ID of the barcode must be specified.
	 */
	public function showBarcode(
		int $barcodeId
	):Barcode;

	/**
	 * Creates a barcode.
	 */
	public function createBarcode(
		array $data
	):Barcode;

	/**
	 * Updates a barcode. The ID of the barcode must be specified.
	 */
	public function updateBarcode(
		array $data, 
		int $barcodeId
	):Barcode;

	/**
	 * Deletes a barcode. The ID of the barcode must be specified.
	 */
	public function deleteBarcode(
		int $barcodeId
	):DeleteResponse;

	/**
	 * Gets a barcode. The ID of the barcode must be specified.
	 */
	public function findBarcodeById(
		int $barcodeId
	):Barcode;

	/**
	 * Lists barcodes. The type of the barcode must be specified.
	 */
	public function findBarcodesByType(
		string $barcodeType, 
		int $perPage = 50
	):array;

	/**
	 * Lists all barcodes.
	 */
	public function allBarcodes(
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):PaginatedResult;

	/**
	 * Creates new barcode referrer for given referrer.
	 */
	public function createBarcodeReferrerRelation(
		array $data, 
		int $barcodeId
	):BarcodeLinkReferrer;

	/**
	 * Deletes existing barcode referrer with given referrer.
	 */
	public function deleteBarcodeReferrerRelation(
		float $referrer, 
		int $barcodeId
	):bool;

	/**
	 * Gets barcode referrer with given referrer
	 */
	public function findBarcodesByReferrerRelation(
		float $referrer, 
		int $perPage = 50
	):array;

}