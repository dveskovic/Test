<?php
namespace Plenty\Plugin;


/**
 * Service provider for plugins
 */
abstract class ServiceProvider 
{

	/**
	 * Register the service provider.
	 */
	abstract public function register(
	);

	public function getApplication(
	):\Plenty\Plugin\Application
	{
		return null;
	}

	public function getEventDispatcher(
	):\Plenty\Plugin\Events\Dispatcher
	{
		return null;
	}

}