<?php
namespace Plenty\Modules\Order\Shipping\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Order\Shipping\ParcelService\Models\ParcelServicePreset;

/**
 * The ParcelServicePresetRepositoryContract is the interface for the shipping profile repository. This interface allows to get a shipping profile by the id or list all shipping profiles.
 */
interface ParcelServicePresetRepositoryContract 
{

	/**
	 * List all available parcel service presets
	 */
	public function getPresetList(
		array $columns = []
	):array;

	/**
	 * Get specific parcel service preset determined by preset id
	 */
	public function getPresetById(
		int $presetId, 
		array $columns = []
	):ParcelServicePreset;

	/**
	 * Calculate shipping costs and list last weighted preset combinations.
	 */
	public function getLastWeightedPresetCombinations(
		Basket $basket, 
		int $contactClass, 
		array $customParams = []
	):array;

}