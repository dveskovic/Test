<?php
namespace Plenty\Modules\Account\OrderSummary\Models;

use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Order\Models\Order;

/**
 * The order summary model.
 */
abstract class OrderSummary 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$addressId;
	public		$contactId;
	public		$unpaidOrdersCount;
	public		$unpaidOrderTotalAmount;
	public		$orderCount;
	public		$createdAt;
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}