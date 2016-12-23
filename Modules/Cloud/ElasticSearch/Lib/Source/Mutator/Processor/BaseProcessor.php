<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\Processor;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * to be written
 */
abstract class BaseProcessor 
{

	abstract public function addMutator(
		MutatorInterface $mutator
	):BaseProcessor;

	abstract public function process(
		array $data
	):array;

}