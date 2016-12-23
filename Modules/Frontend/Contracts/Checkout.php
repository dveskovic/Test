<?php
namespace Plenty\Modules\Frontend\Contracts;


/**
 * The CheckoutContract is the interface for the checkout repository. This interface allows to set the shipping country ID, the payment method ID, the shipping profile ID and the currency in the checkout.
 */
interface Checkout 
{

	/**
	 * Gets the shipping country ID.
	 */
	public function getShippingCountryId(
	):int;

	/**
	 * Updates the ID of the shipping country. The ID must be specified.
	 */
	public function setShippingCountryId(
		int $shippingCountryId
	);

	/**
	 * Updates the ID of the payment method. The ID must be specified.
	 */
	public function setPaymentMethodId(
		int $paymentMethodId
	);

	/**
	 * Updates the ID of the shipping profile. The ID must be specified.
	 */
	public function setShippingProfileId(
		int $shippingProfileId
	);

	/**
	 * Updates the currency. The currency must be specified.
	 */
	public function setCurrency(
		string $currency
	);

	/**
	 * Updates the ID of the order referrer. The ID must be specified.
	 */
	public function setBasketReferrerId(
		int $referrerId
	);

}