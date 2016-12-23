<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact options type name model
 */
abstract class ContactOptionTypeName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
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