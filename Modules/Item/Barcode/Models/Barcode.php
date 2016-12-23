<?php
namespace Plenty\Modules\Item\Barcode\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The barcode model including barcode referrer
 */
abstract class Barcode 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$name;
	public		$type;
	public		$referrers;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}