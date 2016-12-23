<?php
namespace Plenty\Modules\Category\Contracts;

use Plenty\Modules\Category\Models\Category;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Exceptions\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Repository for categories
 */
interface CategoryRepositoryContract 
{

	/**
	 * Returns one category by id.
	 */
	public function get(
		int $categoryId, 
		string $lang = "de"
	):Category;

	/**
	 * Returns all linklist categories as tree.
	 */
	public function getLinklistTree(
		string $type, 
		string $lang, 
		int $clientId
	):array;

	/**
	 * Returns all linklist categories as list.
	 */
	public function getLinklistList(
		string $type = "all", 
		string $lang = "de", 
		int $clientId = null
	):array;

	/**
	 * Returns true if category has children.
	 */
	public function hasChildren(
		int $categoryId, 
		bool $onlySiteMapped = false, 
		bool $onlyLinkListed = false
	):bool;

	/**
	 * Retrieves the url for a category.
	 */
	public function getUrl(
		int $categoryId, 
		string $lang = "de", 
		bool $onlySitemaps = false
	):string;

	/**
	 * Search for categories
	 */
	public function search(
		int $categoryId = null, 
		int $page = 0, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):PaginatedResult;

	/**
	 * Creates new categories, including CategoryDetails. At least one CategoryDetails object for the default language is required. The data fields 'plentyId','lang' and 'name' are required. Client objects can also be specified to activate visibility for a client.
	 */
	public function createCategories(
		array $data
	):array;

	/**
	 * Update categories, including optional CategoryDetails. The data fields 'plentyId','lang' are required for the CategoryDetails object. Client objects can also be specified to change visibility for a client.
	 */
	public function updateCategories(
		array $data
	):array;

	/**
	 * Creates a new category
	 */
	public function createCategory(
		array $data
	):Category;

	/**
	 * Deletes a category by given id
	 */
	public function delete(
		int $categoryId
	):DeleteResponse;

	/**
	 * Delete category details for the specified languages
	 */
	public function deleteCategoryDetails(
		int $categoryId, 
		array $data
	):DeleteResponse;

	/**
	 * Deactivate availability for clients
	 */
	public function deleteCategoryClients(
		int $categoryId, 
		array $data
	):DeleteResponse;

}