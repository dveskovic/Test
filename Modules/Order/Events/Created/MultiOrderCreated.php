<?php
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new multi order is created.
 */
abstract class MultiOrderCreated 
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