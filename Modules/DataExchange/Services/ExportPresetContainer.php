<?php
namespace Plenty\Modules\DataExchange\Services;

use Plenty\Modules\DataExchange\Contracts\Filters;
use Plenty\Modules\DataExchange\Contracts\Generator;
use Plenty\Modules\DataExchange\Contracts\ResultFields;
use Plenty\Modules\DataExchange\Models\ExportPreset;

/**
 * Register export presets
 */
abstract class ExportPresetContainer 
{

	abstract public function add(
		string $exportKey, 
		string $resultFieldsClass, 
		string $generatorClass, 
		string $filtersClass = ""
	);

}