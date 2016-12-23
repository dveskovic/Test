<?php
namespace Plenty\Modules\Item\Availability\Models;


/**
 * The item availability model
 */
abstract class Availability 
{
	public		$id;
	public		$icon;
	public		$averageDays;
	public		$languages;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}