<?php
namespace Plenty\Modules\Order\Date\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Date\Models\OrderDate;
use Plenty\Modules\Order\Date\Models\OrderDateTypeName;
use Plenty\Modules\Order\Date\Models\OrderDateType;

/**
 * The OrderDateRepositoryContract contains the functionality to find available OrderDateTypes with their names in a specific language. Furthermore it is possible to create new OrderDateTypes, to update or delete existing date types and to create date type names for a language.
 */
interface OrderDateRepositoryContract 
{

	/**
	 * Get date type names
	 */
	public function findNamesByTypeId(
		int $typeId
	):array;

	/**
	 * Get a date type name
	 */
	public function findNameByTypeIdAndLang(
		int $typeId, 
		string $lang
	):OrderDateTypeName;

	/**
	 * Get the date types
	 */
	public function findTypes(
	);

	/**
	 * Get a date type
	 */
	public function findTypeById(
		int $typeId
	):OrderDateType;

	/**
	 * Create an order date
	 */
	public function create(
		array $data = []
	):OrderDate;

	/**
	 * Update a date
	 */
	public function update(
		array $data, 
		int $orderDateId
	):OrderDate;

	/**
	 * Create or update order date
	 */
	public function save(
		array $data = []
	):OrderDate;

	/**
	 * Delete a date
	 */
	public function delete(
		int $orderDateId
	):boolean;

	/**
	 * Get an order date
	 */
	public function findByOrderIdAndTypeId(
		int $orderId, 
		int $typeId
	):OrderDate;

	/**
	 * List order dates
	 */
	public function findByOrderId(
		int $orderId
	):array;

}