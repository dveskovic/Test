<?php
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new multi credit note is created.
 */
abstract class MultiCreditNoteCreated 
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