<?php
namespace Plenty\Modules\Item\Variation\Contracts;


/**
 * lookup repository for variations
 */
interface VariationLookupRepositoryContract 
{

	public function hasBarcode(
		string $code
	):\Plenty\Modules\Item\Variation\Contracts\VariationLookupRepositoryContract;

	public function hasId(
		int $id
	):\Plenty\Modules\Item\Variation\Contracts\VariationLookupRepositoryContract;

	public function hasItemId(
		int $itemId
	):\Plenty\Modules\Item\Variation\Contracts\VariationLookupRepositoryContract;

	public function hasExternalId(
		string $externalId
	):\Plenty\Modules\Item\Variation\Contracts\VariationLookupRepositoryContract;

	public function hasNumber(
		string $number
	):\Plenty\Modules\Item\Variation\Contracts\VariationLookupRepositoryContract;

	public function limit(
		int $limit
	):\Plenty\Modules\Item\Variation\Contracts\VariationLookupRepositoryContract;

	public function lookup(
	):array;

}