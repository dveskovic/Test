<?php
namespace Plenty\Modules\Item\Property\Models;


/**
 * The PropertyGroup including PropertyGroupName
 */
abstract class PropertyGroup 
{

	const UPDATED_AT = 'plenty_character_group_last_update_timestamp';

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}