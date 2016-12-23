<?php
namespace Plenty\Modules\Payment\Models;

use Plenty\Modules\Payment\Method\Models\PaymentMethod;
use Plenty\Modules\Payment\History\Models\PaymentHistory;

/**
 * The payment model
 */
abstract class Payment 
{

	const TRANSACTION_TYPE_PROVISIONAL_POSTING = 1;

	const TRANSACTION_TYPE_BOOKED_POSTING = 2;

	const TRANSACTION_TYPE_SPLITTED_POSTING = 3;

	const STATUS_AWAITING_APPROVAL = 1;

	const STATUS_APPROVED = 2;

	const STATUS_CAPTURED = 3;

	const STATUS_PARTIALLY_CAPTURED = 4;

	const STATUS_CANCELED = 5;

	const STATUS_REFUSED = 6;

	const STATUS_AWAITING_RENEWAL = 7;

	const STATUS_EXPIRED = 8;

	const STATUS_REFUNDED = 9;

	const STATUS_PARTIALLY_REFUNDED = 10;

	const ORIGIN_UNDEF = 0;

	const ORIGIN_SYSTEM = 1;

	const ORIGIN_MANUAL = 2;

	const ORIGIN_SOAP = 3;

	const ORIGIN_IMPORT = 4;

	const ORIGIN_SPLITTED = 5;

	const ORIGIN_PLUGIN = 6;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$amount;
	public		$exchangeRatio;
	public		$deleted;
	public		$unaccountable;
	public		$currency;
	public		$type;
	public		$hash;
	public		$origin;
	public		$receivedAt;
	public		$importedAt;
	public		$status;
	public		$transactionType;
	public		$mopId;
	public		$parentId;
	public		$paymentMethod;
	public		$history;
	public		$property;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}