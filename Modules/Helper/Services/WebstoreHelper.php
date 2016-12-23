<?php
namespace Plenty\Modules\Helper\Services;

use Plenty\Modules\System\Models\WebstoreConfiguration;
use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;

/**
 * Webstore Helper Service
 */
abstract class WebstoreHelper 
{

	abstract public function getCurrentWebstoreConfiguration(
	):WebstoreConfiguration;

}