<?php
namespace Plenty\Modules\Account\Address\Contracts;

use Plenty\Modules\Account\Address\Models\AddressPosRelation;

/**
 * The contract for the address pos relation repository
 */
interface AddressPosRelationRepositoryContract 
{

	/**
	 * Create an address pos relation.
	 */
	public function createAddressPosRelation(
		array $data
	):AddressPosRelation;

	/**
	 * Update an address pos relation.
	 */
	public function updateAddressPosRelation(
		int $addressPosRelationId, 
		array $data
	):AddressPosRelation;

	/**
	 * Find an address pos relation.
	 */
	public function findAddressPosRelation(
		int $addressPosRelationId
	):AddressPosRelation;

	/**
	 * Delete an address pos relation.
	 */
	public function deleteAddressPosRelation(
		int $addressPosRelationId
	);

}