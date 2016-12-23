<?php
namespace Plenty\Plugin;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Data Exchange service provider
 */
abstract class DataExchangeServiceProvider 
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