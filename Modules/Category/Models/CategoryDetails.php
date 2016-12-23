<?php
namespace Plenty\Modules\Category\Models;

use Plenty\Modules\Document\Models\Document;

/**
 * CategoryDetails
 */
abstract class CategoryDetails 
{

	const UPDATED_AT = 'plenty_category_details_last_update_timestamp';

	const CREATED_AT = 'createdAt';
	public		$categoryId;
	public		$plentyId;
	public		$lang;
	public		$name;
	public		$description;
	public		$description2;
	public		$shortDescription;
	public		$metaKeywords;
	public		$metaDescription;
	public		$nameUrl;
	public		$metaTitle;
	public		$image;
	public		$image2;
	public		$position;
	public		$itemListView;
	public		$singleItemView;
	public		$pageView;
	public		$fulltext;
	public		$placeholderTranslation;
	public		$webTemplateExists;
	public		$metaRobots;
	public		$canonicalLink;
	public		$imageDocument;
	public		$image2Document;
	public		$category;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}