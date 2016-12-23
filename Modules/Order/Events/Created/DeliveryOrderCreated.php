<?php
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new delivery order is created.
 */
abstract class DeliveryOrderCreated 
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