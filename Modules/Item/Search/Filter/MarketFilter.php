<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;

/**
 * foo
 */
abstract class MarketFilter 
{

	abstract public function isVisibleForMarket(
		int $marketId
	);

	abstract public function isVisibleForAnyMarket(
		array $marketIds
	);

	abstract public function isVisibleForAllMarkets(
		array $marketIds
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}