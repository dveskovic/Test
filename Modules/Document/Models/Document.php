<?php
namespace Plenty\Modules\Document\Models;

use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Category\Models\Category;
use Illuminate\Support\Collection;

/**
 * Document
 */
abstract class Document 
{

	const RECEIPT = 'receipt';

	const Z_REPORT = 'z_report';

	const INVOICE_EXTERNAL = 'invoice_external';

	const INVOICE = 'invoice';

	const DELIVERY_NOTE = 'delivery_note';

	const CREDIT_NOTE = 'credit_note';

	const ORDER_CONFIRMATION = 'order_confirmation';

	const OFFER = 'offer';

	const REORDER = 'reorder';

	const DUNNING_LETTER = 'dunning_letter';

	const REPAIR_BILL = 'repair_bill';

	const PICKUP_DELIVERY = 'pickup_delivery';

	const RETURN_NOTE = 'return_note';

	const SUCCESS_CONFIRMATION = 'success_confirmation';

	const MULTI_INVOICE = 'multi_invoice';

	const MULTI_CREDIT_NOTE = 'multi_credit_note';

	const CUSTOMER = 'customer';

	const TICKET = 'ticket';

	const ITEM = 'item';

	const WEBSHOP = 'webshop';

	const WEBSHOP_CUSTOMER = 'webshop_customer';

	const BLOG = 'blog';

	const ADMIN = 'admin';

	const CORRECTION_DOCUMENT = 'correction_document';

	const EBICS_HASH = 'ebics_hash';

	const CATEGORY = 'category';

	const FACET = 'facet';

	const SETTLEMENT_REPORT = 'settlement_report';

	const UPDATED_AT = 'plenty_document_updated';

	const CREATED_AT = 'plenty_document_created';
	public		$id;
	public		$type;
	public		$number;
	public		$numberWithPrefix;
	public		$path;
	public		$userId;
	public		$source;
	public		$displayDate;
	public		$createdAt;
	public		$updatedAt;
	public		$contacts;
	public		$orders;
	public		$webstores;
	public		$categories;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}