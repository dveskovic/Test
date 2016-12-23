<?php
namespace Plenty\Modules\Account\OrderSummary\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelNotEditableException;
use Plenty\Modules\Account\OrderSummary\Models\OrderSummary;

/**
 * The contract for the order summary repository
 */
interface OrderSummaryRepositoryContract 
{

	/**
	 * Gets an order summary. The ID of the order summary must be specified.
	 */
	public function findOrderSummaryById(
		int $orderSummaryId
	):OrderSummary;

	/**
	 * Updates an order summary. The ID of the order summary must be specified.
	 */
	public function updateOrderSummary(
		array $data, 
		int $orderSummaryId
	):OrderSummary;

	/**
	 * Creates an order summary.
	 */
	public function createOrderSummary(
		array $data
	):OrderSummary;

	/**
	 * Deletes an order summary. The ID of the order summary must be specified.
	 */
	public function deleteOrderSummary(
		int $orderSummaryId
	):boolean;

	/**
	 * Returns a collection of all order summaries.
	 */
	public function allOrderSummaries(
		array $columns = [], 
		int $perPage = 50
	):Collection;

	/**
	 * Gets an order summary. The ID of the contact must be specified.
	 */
	public function findOrderSummaryByContactId(
		int $contactId
	):OrderSummary;

	/**
	 * Gets an order summary. The ID of the address must be specified.
	 */
	public function findOrderSummaryByAddressId(
		int $addressId
	):OrderSummary;

}