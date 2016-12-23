<?php
namespace Plenty\Modules\Plugin\DataBase\Contracts;


/**
 * Database contract
 */
interface DataBase 
{

	public function save(
		\Plenty\Modules\Plugin\DataBase\Contracts\Model $model
	):\Plenty\Modules\Plugin\DataBase\Contracts\Model;

	public function find(
		string $modelClassName, 
		 $primaryKeyFieldValue
	):\Plenty\Modules\Plugin\DataBase\Contracts\Model;

	public function query(
		string $modelClassName
	):\Plenty\Modules\Plugin\DataBase\Contracts\Query;

	public function delete(
		\Plenty\Modules\Plugin\DataBase\Contracts\Model $model
	):bool;

}