<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertyGroupName including PropertyGroup
 */
abstract class PropertyGroupName 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}