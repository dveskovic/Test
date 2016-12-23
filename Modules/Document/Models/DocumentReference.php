<?php
namespace Plenty\Modules\Document\Models;


/**
 * The document reference model
 */
abstract class DocumentReference 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$documentId;
	public		$type;
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}