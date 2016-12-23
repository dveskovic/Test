<?php
namespace Plenty\Modules\Authentication\Models;


/**
 * The user authentication model
 */
abstract class User 
{

	const CREATED_AT = 'created_at';

	const UPDATED_AT = 'updated_at';
	public		$id;
	public		$pwd;
	public		$pwd_md5;
	public		$password;
	public		$user;
	public		$roles;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}