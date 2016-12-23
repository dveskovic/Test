<?php
namespace Illuminate\Support;

use BadMethodCallException;
use Illuminate\Console\Events\ArtisanStarting;

abstract class ServiceProvider 
{

	/**
	 * Register the service provider.
	 */
	abstract public function register(
	):void;

}