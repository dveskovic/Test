<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact position name model
 */
abstract class ContactPositionName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$positionId;
	public		$lang;
	public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}