<?php
namespace Plenty\Modules\Payment\Contracts;

use Plenty\Modules\Payment\Models\PaymentOrderRelation;
use League\Flysystem\Exception;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Payment\Models\Payment;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * The PaymentOrderRelationRepositoryContract is the interface for the payment order relation repository. Create and delete relations between payments and orders.
 */
interface PaymentOrderRelationRepositoryContract 
{

	/**
	 * Creates a payment order relation.
	 */
	public function createOrderRelation(
		Payment $payment, 
		Order $order
	):bool;

	/**
	 * Deletes a payment order relation.
	 */
	public function deleteOrderRelation(
		Payment $payment, 
		Order $order
	):bool;

}