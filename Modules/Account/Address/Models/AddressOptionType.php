<?php
namespace Plenty\Modules\Account\Address\Models;

use Illuminate\Database\Eloquent\Collection;

/**
 * The address options type model
 */
abstract class AddressOptionType 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$position;
	public		$nonErasable;
	public		$names;
	public		$options;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}