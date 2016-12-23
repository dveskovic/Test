<?php
namespace Plenty\Modules\Comment\Models;


/**
 * The Comment model.
 */
abstract class Comment 
{

	const CREATED_AT = 'plenty_comment_entry_datetime';

	const UPDATED_AT = 'updatedAt';
	public		$text;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}