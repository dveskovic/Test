<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\Collection;

/**
 * The ContactClassRepositoryContract is the interface for the contact class repository. This interface allows to list all contact classes or to get a contact class by the ID.
 */
interface ContactClassRepositoryContract 
{

	/**
	 * Get a contact class
	 */
	public function findContactClassById(
		int $contactClassId
	):string;

	/**
	 * Lists contact classes.
	 */
	public function allContactClasses(
	):array;

}