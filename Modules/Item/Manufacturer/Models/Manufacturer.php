<?php
namespace Plenty\Modules\Item\Manufacturer\Models;


/**
 * The item manufacturer model
 */
abstract class Manufacturer 
{

	const UPDATED_AT = 'plenty_producer_last_update_timestamp';

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';
	public		$name;
	public		$id;
	public		$logo;
	public		$url;
	public		$pixmaniaBrandId;
	public		$neckermannBrandId;
	public		$externalName;
	public		$neckermannAtEpBrandId;
	public		$neckermannAtCdBrandId;
	public		$street;
	public		$houseNo;
	public		$postcode;
	public		$town;
	public		$countryId;
	public		$phoneNumber;
	public		$faxNumber;
	public		$email;
	public		$laRedouteBrandId;
	public		$manufacturerComment;
	public		$lastUpdateTimestamp;
	public		$position;
	public		$commissions;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}