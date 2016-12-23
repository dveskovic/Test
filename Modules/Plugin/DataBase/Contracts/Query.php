<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;

use Illuminate\Database\Query\Builder;
use Plenty\Modules\Plugin\DataBase\Models\Schema;

/**
 * database query
 */
abstract class Query 
{

	abstract public function where(
		string $fieldName, 
		string $operator = null, 
		 $value = null
	):Query;

	abstract public function orWhere(
		string $fieldName, 
		string $operator = null, 
		 $value = null
	):Query;

	abstract public function get(
	):array;

}