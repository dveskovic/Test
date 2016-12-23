<?php
namespace Plenty\Modules\Order\Contracts;

use Plenty\Modules\Order\Date\Models\OrderDate;
use Plenty\Modules\Order\Models\Order;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Scheduler\Models\OrderScheduler;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The OrderRepositoryContract is the interface for the order repository. This interface allows you to find, create and update orders. There are many different order types and the data returned depends on the order type.
 */
interface OrderRepositoryContract 
{

	/**
	 * Get an order
	 */
	public function findOrderById(
		int $orderId, 
		array $with = []
	):Order;

	/**
	 * Create an order
	 */
	public function createOrder(
		array $data
	):Order;

	/**
	 * Update an order
	 */
	public function updateOrder(
		array $data, 
		int $orderId
	):Order;

	/**
	 * Delete an order
	 */
	public function deleteOrder(
		int $orderId
	):bool;

	/**
	 * Restore an order
	 */
	public function undeleteOrder(
		int $orderId, 
		float $status
	):Order;

	/**
	 * Checks whether an order has been deleted or not.
	 */
	public function isDeleted(
		int $orderId
	):bool;

	/**
	 * Get a scheduler order
	 */
	public function findSchedulerById(
		int $schedulerId
	):OrderScheduler;

	/**
	 * List orders of a contact
	 */
	public function allOrdersByContact(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * Get latest order of a contact
	 */
	public function getLatestOrderByContactId(
		int $contactId, 
		array $with = []
	):Order;

	/**
	 * List orders by filter options
	 */
	public function searchOrders(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):array;

	/**
	 * List package numbers of an order
	 */
	public function getPackageNumbers(
		int $orderId
	):array;

}