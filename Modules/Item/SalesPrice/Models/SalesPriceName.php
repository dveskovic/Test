<?php
namespace Plenty\Modules\Item\SalesPrice\Models;

use Illuminate\Database\Eloquent\Collection;

abstract class SalesPriceName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$priceId;
	public		$lang;
	public		$nameInternal;
	public		$nameExternal;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}