<?php
namespace Plenty\Modules\Order\Events;


/**
 * An event class fired after a new order is created. The order type is not relevant.
 * 	At the same time also type depended events will be fired, like ReturnsCreated or CreditNoteCreated.
 */
abstract class OrderCreated 
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