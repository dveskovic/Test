<?php
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new returns is created.
 */
abstract class ReturnCreated 
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