<?php
namespace Plenty\Modules\Order\Services;

use Plenty\Modules\Order\Events\Created\CreditNoteCreated;
use Plenty\Modules\Order\Events\Created\DeliveryOrderCreated;
use Plenty\Modules\Order\Events\Created\MultiCreditNoteCreated;
use Plenty\Modules\Order\Events\Created\MultiOrderCreated;
use Plenty\Modules\Order\Events\Created\RepairCreated;
use Plenty\Modules\Order\Events\Created\ReturnCreated;
use Plenty\Modules\Order\Events\Created\SalesOrderCreated;
use Plenty\Modules\Order\Events\Created\WarrantyCreated;
use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\Order\Models\OrderType;

/**
 * (Un)Register event classes extending OrderCreated for custom order types.
 */
class OrderCreatedTypeService 
{

	/**
	 * Handle the OrderCreated event by detecting the subevent to fire according the order type id of the order.
	 */
	public function handle(
		OrderCreated $created
	)
	{
		//proxy method
	}

	/**
	 * Add an event class extending OrderCreated for the given custom order type id.
	 */
	public static function addEventForType(
		int $typeId, 
		string $className
	)
	{
		//proxy method
	}

	/**
	 * Removes an event class for the given custom order type id.
	 */
	public static function removeEventForType(
		int $typeId, 
		string $className
	)
	{
		//proxy method
	}

}