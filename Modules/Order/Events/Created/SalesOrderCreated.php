<?php
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new sales order is created.
 */
abstract class SalesOrderCreated 
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