<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\Processor;


/**
 * to be written
 */
interface ProcessorInterface 
{

	public function process(
		array $data
	):array;

}