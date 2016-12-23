<?php
namespace Plenty\Modules\Item\Search\Filter;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;

/**
 * foo
 */
abstract class ClientFilter 
{

	abstract public function isVisibleForClient(
		int $clientId
	);

	abstract public function isVisibleForAnyClient(
		array $clientIds
	);

	abstract public function isVisibleForAllClients(
		array $clientIds
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

}