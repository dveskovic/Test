<?php
namespace Plenty\Plugin\Events;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * Dispatcher
 */
abstract class Dispatcher 
{

	const PLUGIN_NAMESPACE_PREFIX = 'plenty';

	/**
	 * Register an event listener with the dispatcher.
	 */
	abstract public function listen(
		 $event, 
		 $listener, 
		int $priority = 0
	);

	/**
	 * Determine if a given event has listeners.
	 */
	abstract public function hasListeners(
		 $event
	):bool;

	/**
	 * Fire an event and call the listeners.
	 */
	abstract public function fire(
		 $event, 
		array $payload = []
	);

	/**
	 * Remove a set of listeners from the dispatcher.
	 */
	abstract public function forget(
		 $event
	);

}