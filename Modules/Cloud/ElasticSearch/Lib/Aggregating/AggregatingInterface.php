<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Aggregating;

use Illuminate\Contracts\Support\Arrayable;

/**
 * foo
 */
interface AggregatingInterface 
{

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}