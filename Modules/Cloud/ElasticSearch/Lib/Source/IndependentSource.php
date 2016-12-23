<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source;


/**
 * foo
 */
abstract class IndependentSource 
{

	abstract public function toArray(
	):array;

	abstract public function getPrefix(
	):string;

	abstract public function activateAll(
	):\Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

	abstract public function activate(
	):\Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

}