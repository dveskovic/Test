<?php
namespace Plenty\Modules\Order\Property\Models;


/**
 * The OrderPropertyType model. Each order property must have a property type. An order can have one property of each property type. The default property types provided by plentymarkets are listed here.
 */
abstract class OrderPropertyType 
{

	const WAREHOUSE = 1;

	const SHIPPING_PROFILE = 2;

	const PAYMENT_METHOD = 3;

	const PAYMENT_STATUS = 4;

	const EXTERNAL_SHIPPING_PROFILE = 5;

	const DOCUMENT_LANGUAGE = 6;

	const EXTERNAL_ORDER_ID = 7;

	const CUSTOMER_SIGN = 8;

	const DUNNING_LEVEL = 9;

	const SELLER_ACCOUNT = 10;

	const WEIGHT = 11;

	const WIDTH = 12;

	const LENGTH = 13;

	const HEIGHT = 14;

	const FLAG = 15;

	const EXTERNAL_TOKEN_ID = 16;

	const EXTERNAL_ITEM_ID = 17;

	const COUPON_CODE = 18;

	const COUPON_TYPE = 19;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$isErasable;
	public		$position;
	public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}