<?php
namespace Plenty\Modules\DataExchange\Contracts;

use Plenty\Modules\DataExchange\Models\FormatSetting;

/**
 * Generator
 */
abstract class Generator 
{

	protected function addContent(
		string $content
	)
	{
	}

	abstract protected function generateContent(
		 $resultData, 
		array $formatSettings = []
	);

}