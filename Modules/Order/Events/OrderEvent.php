<?php
namespace Plenty\Modules\Order\Events;

use Plenty\Modules\Order\Models\Order;

/**
 * A base event class for all order events. Each order event expects an order instance.
 */
abstract class OrderEvent 
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