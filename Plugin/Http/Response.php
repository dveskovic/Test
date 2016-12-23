<?php
namespace Plenty\Plugin\Http;

use Symfony\Component\HttpFoundation\Response as BaseResponse;

/**
 * Class to create different types of http response.
 */
abstract class Response 
{

	/**
	 * Return a new response from the application.
	 */
	abstract public function make(
		string $content = "", 
		int $status = 200, 
		array $headers = []
	):BaseResponse;

	/**
	 * Return a new view response from the application.
	 */
	abstract public function view(
		string $view, 
		array $data = [], 
		int $status = 200, 
		array $headers = []
	):BaseResponse;

	/**
	 * Return a new JSON response from the application.
	 */
	abstract public function json(
		 $data = [], 
		int $status = 200, 
		array $headers = [], 
		int $options = 0
	):BaseResponse;

	/**
	 * Return a new JSONP response from the application.
	 */
	abstract public function jsonp(
		string $callback, 
		 $data = [], 
		int $status = 200, 
		array $headers = [], 
		int $options = 0
	):BaseResponse;

	/**
	 * Return a new streamed response from the application.
	 */
	abstract public function stream(
		callable $callback, 
		int $status = 200, 
		array $headers = []
	):BaseResponse;

	/**
	 * Create a new file download response.
	 */
	abstract public function download(
		 $file, 
		string $name = null, 
		array $headers = [], 
		string $disposition = "attachment"
	):BaseResponse;

	/**
	 * Return the raw contents of a binary file.
	 */
	abstract public function file(
		 $file, 
		array $headers = []
	):BaseResponse;

	/**
	 * Create a new redirect response to the given path.
	 */
	abstract public function redirectTo(
		string $path, 
		int $status = 302, 
		array $headers = [], 
		bool $secure = null
	):BaseResponse;

	/**
	 * Create a new redirect response to a named route.
	 */
	abstract public function redirectToRoute(
		string $route, 
		array $parameters = [], 
		int $status = 302, 
		array $headers = []
	):BaseResponse;

	/**
	 * Create a new redirect response to a controller action.
	 */
	abstract public function redirectToAction(
		string $action, 
		array $parameters = [], 
		int $status = 302, 
		array $headers = []
	):BaseResponse;

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 */
	abstract public function redirectGuest(
		string $path, 
		int $status = 302, 
		array $headers = [], 
		bool $secure = null
	):BaseResponse;

	/**
	 * Create a new redirect response to the previously intended location.
	 */
	abstract public function redirectToIntended(
		string $default = "/", 
		int $status = 302, 
		array $headers = [], 
		bool $secure = null
	):BaseResponse;

}