<?php
namespace Plenty\Modules\Item\Availability\Contracts;

use Plenty\Modules\Item\Availability\Models\Availability;

/**
 * Repository for item availability.
 */
interface AvailabilityRepositoryContract 
{

	/**
	 * Find an availability configuration by a given id.
	 */
	public function findAvailability(
		int $id
	):Availability;

}