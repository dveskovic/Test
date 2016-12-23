<?php
namespace Plenty\Repositories\Models;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Plenty\Repositories\Contracts\Pagination;
use Plenty\Repositories\Contracts\PaginationOptionsProvider;

/**
 * paginated result
 */
abstract class PaginatedResult 
{

	abstract public function getPage(
	):int;

	abstract public function getTotalCount(
	):int;

	abstract public function isLastPage(
	):bool;

	abstract public function getResult(
	):array;

	abstract public function setResult(
		 $result
	);

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

	/**
	 * Convert the object to its JSON representation.
	 */
	abstract public function toJson(
		int $options = 0
	):string;

	/**
	 * Specify data which should be serialized to JSON
	 */
	abstract public function jsonSerialize(
	);

}