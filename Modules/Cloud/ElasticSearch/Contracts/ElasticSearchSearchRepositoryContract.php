<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * foo
 */
interface ElasticSearchSearchRepositoryContract 
{

	public function setIndex(
		IndexInterface $index
	);

	public function addFilter(
		TypeInterface $filter
	);

	public function addSource(
		SourceInterface $result
	);

	public function setSorting(
		SortingInterface $sorting
	);

	public function addMutator(
		MutatorInterface $mutator
	);

	public function addPostProcessor(
		ProcessorInterface $processor
	);

	public function setPage(
		int $page, 
		int $rowsPerPage
	):\Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}