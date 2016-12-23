<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\Processor;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;

/**
 * to be written
 */
abstract class QueryProcessor 
{

	abstract public function process(
		array $data
	):array;

	abstract public function addMutator(
		MutatorInterface $mutator
	):BaseProcessor;

}