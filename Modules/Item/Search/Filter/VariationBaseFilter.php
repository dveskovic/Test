<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchAutoCompleteFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchFuzzyFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;

/**
 * foo
 */
abstract class VariationBaseFilter 
{

	abstract public function hasNumber(
		string $number, 
		string $precision
	);

	abstract public function isActive(
	);

	abstract public function isInactive(
	);

	abstract public function hasId(
		int $id
	);

	abstract public function hasIds(
		array $ids
	);

	abstract public function hasItemId(
		int $itemId
	);

	abstract public function hasItemIds(
		array $itemIds
	);

	abstract public function isMain(
	);

	abstract public function isChild(
	);

	abstract public function isSalable(
	);

	abstract public function hasDescriptionInLanguage(
		string $language
	);

	abstract public function hasImage(
	);

	abstract public function hasVariationImage(
	);

	abstract public function hasItemImage(
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}