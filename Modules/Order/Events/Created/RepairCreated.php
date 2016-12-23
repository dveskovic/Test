<?php
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new repair is created.
 */
abstract class RepairCreated 
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