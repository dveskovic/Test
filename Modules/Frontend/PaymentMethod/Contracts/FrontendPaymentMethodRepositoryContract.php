<?php
namespace Plenty\Modules\Frontend\PaymentMethod\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Payment\Method\Models\PaymentMethod;

/**
 * The FrontendPaymentMethodRepositoryContract is the interface for the front end payment method repository. Get the payment method information to be displayed in the online store.
 */
interface FrontendPaymentMethodRepositoryContract 
{

	/**
	 * Lists all payment methods of the current customer session.
	 */
	public function getCurrentPaymentMethodsList(
	):array;

	/**
	 * Gets the name of the payment method in the specified language.
	 */
	public function getPaymentMethodName(
		PaymentMethod $paymentMethod, 
		string $lang
	):string;

	/**
	 * Gets additional costs for the payment method. Additional costs can be entered in the config.json.
	 */
	public function getPaymentMethodFee(
		PaymentMethod $paymentMethod
	):float;

	/**
	 * Gets the icon of the payment method. The path of the icon can be entered in the config.json.
	 */
	public function getPaymentMethodIcon(
		PaymentMethod $paymentMethod, 
		string $lang
	):string;

	/**
	 * Gets the description of the payment method. The description can be entered in the config.json.
	 */
	public function getPaymentMethodDescription(
		PaymentMethod $paymentMethod, 
		string $lang
	):string;

	/**
	 * Gets the name of the payment method by ID and language. The ID of the payment method and the language must be specified.
	 */
	public function getPaymentMethodNameById(
		int $paymentMethodId, 
		string $lang
	):string;

	/**
	 * Gets additional costs for the payment method by ID. The ID of the payment method must be specified.
	 */
	public function getPaymentMethodFeeById(
		int $paymentMethodId
	):float;

	/**
	 * Gets the icon of the payment method by ID and language. The ID of the payment method and the language must be specified.
	 */
	public function getPaymentMethodIconById(
		int $paymentMethodId, 
		string $lang
	):string;

	/**
	 * Gets the description of the payment method by ID and language. The ID of the payment method and the language must be specified.
	 */
	public function getPaymentMethodDescriptionById(
		int $paymentMethodId, 
		string $lang
	):string;

}