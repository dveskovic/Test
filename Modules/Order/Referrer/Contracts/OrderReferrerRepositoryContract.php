<?php
namespace Plenty\Modules\Order\Referrer\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Referrer\Exceptions\ReferrerNotEditableException;
use Plenty\Modules\Order\Referrer\Models\OrderReferrer;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * Provides methods for processing order referrers. An order referrer indicates where a purchase was made originally.
 */
interface OrderReferrerRepositoryContract 
{

	/**
	 * List order referrers
	 */
	public function getList(
		array $columns = []
	):array;

	/**
	 * Create an order referrer
	 */
	public function create(
		array $data, 
		float $parentReferrerId = null
	):OrderReferrer;

	/**
	 * Update an order referrer
	 */
	public function update(
		array $data, 
		float $referrerId
	):OrderReferrer;

	/**
	 * Get an order referrer
	 */
	public function getReferrerById(
		float $referrerId, 
		array $columns = []
	):OrderReferrer;

	/**
	 * Delete an order referrer.
	 */
	public function delete(
		float $referrerId
	):bool;

}