<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * contact allowed method of payment model
 */
abstract class ContactAllowedMethodOfPayment 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$contactId;
	public		$methodOfPaymentId;
	public		$allowed;
	public		$createdAt;
	public		$updatedAt;
	public		$isPaymentActive;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}