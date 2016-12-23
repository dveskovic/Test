<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib;


/**
 * elastic search constants
 */
abstract class ElasticSearch 
{

	const SORTING_ORDER_DESC = 'desc';

	const SORTING_ORDER_ASC = 'asc';

	const SEARCH_TYPE_EXACT = 'exact';

	const SEARCH_TYPE_FUZZY = 'fuzzy';

	const SEARCH_TYPE_AUTOCOMPLETE = 'autocomplete';

	const RANGE_OPERATOR_LT = 'lt';

	const RANGE_OPERATOR_LTE = 'lte';

	const RANGE_OPERATOR_GT = 'gt';

	const RANGE_OPERATOR_GTE = 'gte';

}