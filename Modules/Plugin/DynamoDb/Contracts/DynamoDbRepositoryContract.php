<?php
namespace Plenty\Modules\Plugin\DynamoDb\Contracts;


/**
 * AWS DynamoDb Repository
 */
interface DynamoDbRepositoryContract 
{

	const FIELD_TYPE_BOOL = 'BOOL';

	const FIELD_TYPE_NUMBER = 'N';

	const FIELD_TYPE_STRING = 'S';

	const FIELD_TYPE_LIST = 'L';

	const FIELD_TYPE_MAP = 'M';

	/**
	 * Create a table
	 */
	public function createTable(
		string $pluginName, 
		string $tableName, 
		array $attributeDefinitions, 
		array $keySchema, 
		int $readCapacityUnits = 3, 
		int $writeCapacityUnits = 2
	):boolean;

	/**
	 * Update a table
	 */
	public function updateTable(
		string $pluginName, 
		string $tableName, 
		int $readCapacityUnits = 3, 
		int $writeCapacityUnits = 2
	):boolean;

	/**
	 * Add item to table
	 */
	public function putItem(
		string $pluginName, 
		string $tableName, 
		array $item
	):boolean;

	/**
	 * Retrieving items
	 */
	public function getItem(
		string $pluginName, 
		string $tableName, 
		boolean $consistentRead, 
		array $key
	):array;

	/**
	 * Delete an item
	 */
	public function deleteItem(
		string $pluginName, 
		string $tableName, 
		array $key
	):bool;

	/**
	 * Deleting a table
	 */
	public function deleteTable(
		string $pluginName, 
		string $tableName
	):boolean;

	/**
	 * A scan operation scans the entire table. You can specify filters to apply to the results to refine the values returned to you, after the complete scan. Amazon DynamoDB puts a 1MB limit on the scan (the limit applies before the results are filtered).
	 */
	public function scan(
		string $pluginName, 
		string $tableName, 
		string $returnFields = "", 
		array $expressionAttributeValues = [], 
		string $filterExpression = "", 
		int $limit = 0
	);

}