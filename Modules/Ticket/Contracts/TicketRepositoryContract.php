<?php
namespace Plenty\Modules\Ticket\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Ticket\Models\Ticket;
use Illuminate\Database\Eloquent\Collection;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The TicketRepositoryContract is the interface for the ticket repository. This interface allows to list tickets by filters.
 */
interface TicketRepositoryContract 
{

	/**
	 * Create a new ticket.
	 */
	public function createTicket(
		array $data
	):Ticket;

	/**
	 * List tickets by filter options.
	 */
	public function searchTickets(
		array $filter, 
		int $page = 1, 
		int $itemsPerPage = 50
	):array;

	/**
	 * Creates a message for a ticket.
	 */
	public function createMessage(
		array $data, 
		int $ticketId
	):Ticket;

	/**
	 * Updates a ticket with given data.
	 */
	public function updateTicket(
		array $data, 
		int $ticketId
	):Ticket;

}