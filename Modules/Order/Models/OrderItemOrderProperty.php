<?php
namespace Plenty\Modules\Order\Models;


/**
 * This model holds the order properties that are assigned to order items.
 */
abstract class OrderItemOrderProperty 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$propertyId;
	public		$value;
	public		$fileUrl;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}