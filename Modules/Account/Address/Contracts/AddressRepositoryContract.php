<?php
namespace Plenty\Modules\Account\Address\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelNotEditableException;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Account\Address\Models\AddressOption;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * The contract for the address repository
 */
interface AddressRepositoryContract 
{

	/**
	 * Gets an address. The ID of the address must be specified.
	 */
	public function findAddressById(
		int $addressId
	):Address;

	/**
	 * Updates an address. The ID of the address must be specified.
	 */
	public function updateAddress(
		array $data, 
		int $addressId
	):Address;

	/**
	 * Creates an address.
	 */
	public function createAddress(
		array $data
	):Address;

	/**
	 * Deletes an address. The ID of the address must be specified.
	 */
	public function deleteAddress(
		int $addressId
	):boolean;

	/**
	 * Returns a collection of addresses linked with a warehouse.
	 */
	public function getAddressesOfWarehouse(
		int $warehouseId, 
		int $relationTypeId = null, 
		array $columns = [], 
		int $perPage = 50
	):Collection;

	/**
	 * Creates an address and immediately links it with a warehouse.
	 */
	public function createAddressOfWarehouse(
		array $data
	):Address;

	/**
	 * Returns a collection of address options of an address.
	 */
	public function findAddressOptions(
		int $addressId, 
		int $typeId = 0
	):Collection;

	/**
	 * Creates address options for an address and returns all options of the address.
	 */
	public function createAddressOptions(
		array $addressData, 
		int $addressId
	):Collection;

	/**
	 * Updates address options for an address and returns all options of the address.
	 */
	public function updateAddressOptions(
		array $addressData, 
		int $addressId
	):Collection;

	/**
	 * Deletes all address options of an address. The ID of the address must be specified.
	 */
	public function deleteAddressOptions(
		int $addressId
	);

	/**
	 * Gets an address option. The ID of the option must be specified.
	 */
	public function getAddressOption(
		int $optionId
	):AddressOption;

	/**
	 * Updates an address option. The ID of the address option must be specified.
	 */
	public function updateAddressOption(
		array $optionData, 
		int $optionId
	):AddressOption;

	/**
	 * Deletes an address option. The ID of the option must be specified. Returns `true` if deletion was successful. Returns `false` if deletion was not successful.
	 */
	public function deleteAddressOption(
		int $optionId
	):boolean;

	/**
	 * Returns a collection of address relation types by a specific application and language. The collection may be empty.
	 */
	public function findAddressRelationTypes(
		string $application, 
		string $lang
	):Collection;

}