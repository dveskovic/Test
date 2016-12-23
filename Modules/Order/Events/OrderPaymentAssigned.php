<?php
namespace Plenty\Modules\Order\Events;

use Plenty\Modules\Order\Models\Order;

/**
 * An Event class fired after a payment was assigned to an order.
 * After this event one of the following events will be fired, depending the payment status of the order:
 *	 OrderPrepaid, OrderPartlyPaid, OrderFullyPaid, OrderOverpaid.
 */
abstract class OrderPaymentAssigned 
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