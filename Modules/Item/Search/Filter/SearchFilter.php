<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchAutoCompleteFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchFuzzyFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;

/**
 * foo
 */
abstract class SearchFilter 
{

	abstract public function setSearchString(
		string $value, 
		string $precision = "fuzzy"
	);

	abstract public function getPath(
	):string;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}