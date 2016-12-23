<?php
namespace Plenty\Modules\Account\Address\Models;


/**
 * The address relation type name model.
 */
abstract class AddressRelationTypeName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$typeId;
	public		$lang;
	public		$name;
	public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}