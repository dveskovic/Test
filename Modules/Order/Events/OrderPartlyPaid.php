<?php
namespace Plenty\Modules\Order\Events;


/**
 * An Event class fired after a payment assignment when the order is partly paid.
 */
abstract class OrderPartlyPaid 
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