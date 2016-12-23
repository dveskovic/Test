<?php
namespace Plenty\Plugin\Http;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

/**
 * http request
 */
abstract class Request 
{

	/**
	 * Get all of the input and files for the request.
	 */
	abstract public function all(
	):array;

	/**
	 * Merge new input into the current request's input array.
	 */
	abstract public function merge(
		array $input
	);

	/**
	 * Replace the input for the current request.
	 */
	abstract public function replace(
		array $input
	);

	abstract public function get(
		string $key, 
		 $default = null, 
		bool $deep = false
	);

	/**
	 * Returns the request body content.
	 */
	abstract public function getContent(
	):string;

}