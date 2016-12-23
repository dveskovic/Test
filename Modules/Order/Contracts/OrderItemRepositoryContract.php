<?php
namespace Plenty\Modules\Order\Contracts;

use Plenty\Modules\Order\Models\OrderItem;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * The OrderItemRepositoryContract is the interface for the order item repository. This interface allows you to find, create and update order items. An order item can be e.g. items, surcharges and coupons. Each order item is given a unique id, which links it to a specific order.
 */
interface OrderItemRepositoryContract 
{

	/**
	 * Deletes an order item. The order ID and the order item ID have to be provided.
	 */
	public function deleteOrderItem(
		int $orderId, 
		int $orderItemId
	):bool;

}