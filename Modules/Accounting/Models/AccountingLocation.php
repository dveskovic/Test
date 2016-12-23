<?php
namespace Plenty\Modules\Accounting\Models;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * The Accounting Location model it is always associated with a client and country and contains the vat configuration, which is displayed in the Vat model.
 */
abstract class AccountingLocation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$countryId;
	public		$name;
	public		$clientId;
	public		$vats;
	public		$country;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}