<?php
namespace Plenty\Plugin\Routing;


/**
 * Router service
 */
abstract class Router 
{

	/**
	 * Register a new GET route with the router.
	 */
	abstract public function get(
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

	/**
	 * Register a new POST route with the router.
	 */
	abstract public function post(
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

	/**
	 * Register a new PUT route with the router.
	 */
	abstract public function put(
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

	/**
	 * Register a new PATCH route with the router.
	 */
	abstract public function patch(
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

	/**
	 * Register a new DELETE route with the router.
	 */
	abstract public function delete(
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

	/**
	 * Register a new OPTIONS route with the router.
	 */
	abstract public function options(
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

	/**
	 * Register a new route responding to all verbs.
	 */
	abstract public function any(
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

	/**
	 * Register a new route with the given verbs.
	 */
	abstract public function match(
		array $methods, 
		string $uri, 
		 $action
	):\Plenty\Plugin\Routing\Route;

}