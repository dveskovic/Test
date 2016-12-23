<?php
namespace Plenty\Modules\Account\Newsletter\Contracts;


/**
 * Repository for Newsletter
 */
interface NewsletterRepositoryContract 
{

	/**
	 * Add a subscriber to newsletter list
	 */
	public function addToNewsletterList(
		string $email, 
		string $forename = "", 
		string $surname = "", 
		array $emailDirIds = []
	);

}