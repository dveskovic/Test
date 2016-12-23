<?php
namespace Plenty\Modules\Order\Property\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Property\Models\OrderProperty;
use Plenty\Modules\Order\Property\Models\OrderPropertyTypeName;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;

/**
 * The OrderPropertyRepositoryContract contains the functionality to list OrderPropertyTypes and OrderProperties as well as to create, update and delete OrderProperties. Order properties contain information that are additional to an order. An order can only have one property of each property type.
 */
interface OrderPropertyRepositoryContract 
{

	/**
	 * Create an order property
	 */
	public function create(
		array $data = []
	):OrderProperty;

	/**
	 * Update an order property
	 */
	public function update(
		array $data, 
		int $orderPropertyId = null
	):OrderProperty;

	/**
	 * Deletes an order property. The ID of the order property must be specified.
	 */
	public function delete(
		 $data = []
	):boolean;

	/**
	 * List order properties of an order
	 */
	public function findByOrderId(
		int $orderId, 
		int $typeId = null
	);

	/**
	 * List order property types
	 */
	public function getTypes(
		array $lang = []
	);

}