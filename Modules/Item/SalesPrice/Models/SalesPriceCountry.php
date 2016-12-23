<?php
namespace Plenty\Modules\Item\SalesPrice\Models;

use Illuminate\Database\Eloquent\Collection;

abstract class SalesPriceCountry 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$priceId;
	public		$countryId;
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