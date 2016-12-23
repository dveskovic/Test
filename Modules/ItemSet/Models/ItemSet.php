<?php
namespace Plenty\Modules\ItemSet\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Item\Variation\Models\Variation;
use Plenty\Modules\Item\VariationCategory\Models\VariationCategory;
use Plenty\Modules\Item\VariationDescription\Models\VariationDescription;

/**
 * The ItemSet model.
 */
abstract class ItemSet 
{

	const UPDATED_AT = 'timestamp';

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';
	public		$id;
	public		$name;
	public		$categories;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}