<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchFuzzyFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNestedFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;

/**
 * foo
 */
abstract class BarcodeFilter 
{

	abstract public function getPath(
	):string;

	abstract public function hasCode(
		 $code, 
		string $precision
	);

	abstract public function hasType(
		string $type
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}