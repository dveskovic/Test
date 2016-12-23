<?php
namespace Plenty\Modules\Plugin\Storage\Contracts;

use Plenty\Modules\Plugin\Storage\Exceptions\StorageException;

/**
 * Storage Repository
 */
interface StorageRepositoryContract 
{

	/**
	 * Upload an object by streaming the contents of a file $pathToFile should be absolute path to a file on disk
	 */
	public function uploadFile(
		string $pluginName, 
		string $key, 
		string $pathToFile, 
		boolean $publicVisible = false, 
		array $metaData = []
	):boolean;

	/**
	 * Create an object with content in $body
	 */
	public function uploadObject(
		string $pluginName, 
		string $key, 
		string $body, 
		boolean $publicVisible = false, 
		array $metaData = []
	):boolean;

	/**
	 * Get an object
	 */
	public function getObject(
		string $pluginName, 
		string $key, 
		boolean $publicVisible = false
	):array;

	/**
	 * Get local file resource of an object. Use this if it is really necessary! Using getObject is the normal and effective way.
	 */
	public function getObjectAsTemporaryFileResource(
		string $pluginName, 
		string $key, 
		boolean $publicVisible = false
	):string;

	/**
	 * Checks if object exists
	 */
	public function doesObjectExist(
		string $pluginName, 
		string $key, 
		bool $publicVisible = false
	):bool;

	/**
	 * Executes the DeleteObject operation.
	 */
	public function deleteObject(
		string $pluginName, 
		string $key, 
		bool $publicVisible = false
	):boolean;

}