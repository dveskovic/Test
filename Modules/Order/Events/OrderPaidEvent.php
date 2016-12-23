<?php
namespace Plenty\Modules\Order\Events;


/**
 * A base Event class for all order paid events.
 */
abstract class OrderPaidEvent 
{

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}