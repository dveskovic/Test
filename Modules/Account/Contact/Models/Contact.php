<?php
namespace Plenty\Modules\Account\Contact\Models;

use Plenty\Modules\Account\Address\Models\Address;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Scheduler\Models\OrderScheduler;
use Plenty\Modules\Account\Models\Account;
use Plenty\Modules\Account\OrderSummary\Models\OrderSummary;

/**
 * The contact model.
 */
abstract class Contact 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$externalId;
	public		$number;
	public		$typeId;
	public		$firstName;
	public		$lastName;
	public		$fullName;
	public		$email;
	public		$secondaryEmail;
	public		$gender;
	public		$formOfAddress;
	public		$newsletterAllowanceAt;
	public		$classId;
	public		$blocked;
	public		$rating;
	public		$bookAccount;
	public		$lang;
	public		$referrerId;
	public		$plentyId;
	public		$userId;
	public		$birthdayAt;
	public		$lastLoginAt;
	public		$lastLoginAtTimestamp;
	public		$lastOrderAt;
	public		$createdAt;
	public		$updatedAt;
	public		$privatePhone;
	public		$privateFax;
	public		$privateMobile;
	public		$ebayName;
	public		$paypalEmail;
	public		$paypalPayerId;
	public		$klarnaPersonalId;
	public		$dhlPostIdent;
	public		$forumUsername;
	public		$forumGroupId;
	public		$singleAccess;
	public		$contactPerson;
	public		$marketplacePartner;
	public		$addresses;
	public		$accounts;
	public		$orders;
	public		$banks;
	public		$reorders;
	public		$orderSchedulers;
	public		$options;
	public		$allowedMethodsOfPayment;
	public		$type;
	public		$orderSummary;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}