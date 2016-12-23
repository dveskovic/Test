<?php
namespace Plenty\Modules\Account\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Account\Models\Account;

/**
 * The Repository for accounts and relations between accounts and contacts.
 */
interface AccountRepositoryContract 
{

	/**
	 * Creates a new account and returns it.
	 */
	public function createAccount(
		array $data
	):Account;

	/**
	 * Updates an existing account and returns it. The ID of the account must be specified.
	 */
	public function updateAccount(
		array $data, 
		int $accountId
	):Account;

	/**
	 * Deletes an account. The ID of the account must be specified. Returns `true` if deletion was successful. Returns `false` if deletion was not successful.
	 */
	public function deleteAccount(
		int $accountId
	):boolean;

	/**
	 * Gets an account. The ID of the account must be specified.
	 */
	public function findAccountById(
		int $accountId
	):Account;

	/**
	 * Returns a collection of all accounts.
	 */
	public function allAccounts(
		array $columns = [], 
		int $perPage = 50
	):Collection;

	/**
	 * Returns a collection of contacts that belong to the account.
	 */
	public function getContactsOfAccount(
		int $accountId
	):Collection;

	/**
	 * Creates a new or updates an existing account.
	 */
	public function saveAccount(
		array $data = []
	);

}