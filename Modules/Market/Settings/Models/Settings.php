<?php
namespace Plenty\Modules\Market\Settings\Models;

use Plenty\Modules\Category\Models\Category;
use Plenty\Modules\Item\Attribute\Models\Attribute;

/**
 * The market settings model.
 */
abstract class Settings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$marketplaceId;
	public		$type;
	public		$settings;
	public		$category;
	public		$parcelServicePreset;
	public		$attribute;
	public		$propertyItem;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}