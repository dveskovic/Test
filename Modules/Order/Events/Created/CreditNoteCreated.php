<?php
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new credit note is created.
 */
abstract class CreditNoteCreated 
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