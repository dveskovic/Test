<?php
namespace Plenty\Validation\Contracts;


/**
 * Attribute Interface
 */
interface Attribute 
{

	public function getAttributeName(
	):string;

	public function setAttributeName(
		string $attributeName
	):Attribute;

	/**
	 * The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.
	 */
	public function accepted(
	):Attribute;

	/**
	 * Add custom Role
	 */
	public function customRule(
		string $rule, 
		array $params
	):Attribute;

	/**
	 * The field under validation must be a valid URL according to the checkdnsrr PHP function.
	 */
	public function activeUrl(
	):Attribute;

	/**
	 * The field under validation must be a value after a given date. The dates will be passed into the strtotime PHP function. Instead of passing a date string to be evaluated by strtotime, you may specify another field to compare against the date
	 */
	public function dateAfter(
		string $fieldNameOrTimeStr
	):Attribute;

	/**
	 * The field under validation must be entirely alphabetic characters.
	 */
	public function alphabetic(
	):Attribute;

	/**
	 * The field under validation may have alpha-numeric characters, as well as dashes and underscores.
	 */
	public function alphaDash(
	):Attribute;

	/**
	 * The field under validation must be entirely alpha-numeric characters.
	 */
	public function alphaNum(
	):Attribute;

	/**
	 * The field under validation must be a PHP array.
	 */
	public function isArray(
	):Attribute;

	/**
	 * The field under validation must be a value preceding the given date. The dates will be passed into the PHP strtotime function.
	 */
	public function dateBefore(
		string $fieldNameOrTimeStr
	):Attribute;

	/**
	 * The field under validation must have a size between the given min and max. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function between(
		int $min, 
		int $max
	):Attribute;

	/**
	 * The field under validation must be able to be cast as a boolean. Accepted input are true, false, 1, 0, "1", and "0".
	 */
	public function boolean(
	):Attribute;

	/**
	 * The field under validation must have a matching field of foo_confirmation. For example, if the field under validation is password, a matching password_confirmation field must be present in the input.
	 */
	public function confirmed(
	):Attribute;

	/**
	 * The field under validation must be a valid date according to the strtotime PHP function.
	 */
	public function date(
	):Attribute;

	/**
	 * The field under validation must match the given format. The format will be evaluated using the PHP date_parse_from_format function. You should use either date or date_format when validating a field, not both.
	 */
	public function dateFormat(
		string $format
	):Attribute;

	/**
	 * The field under validation must be a valid w3c formated date time string.
	 */
	public function dateW3C(
		bool $allowTimestamps = false
	):Attribute;

	/**
	 * The field under validation must have a different value than field.
	 */
	public function different(
		string $fieldName
	):Attribute;

	/**
	 * The field under validation must be numeric and must have an exact length of $count.
	 */
	public function digits(
		int $count
	):Attribute;

	/**
	 * The field under validation must have a length between the given min and max.
	 */
	public function digitsBetween(
		int $min, 
		int $max
	):Attribute;

	/**
	 * The field under validation must be formatted as an e-mail address.
	 */
	public function email(
	):Attribute;

	/**
	 * The field under validation must exist on a given database table.
	 */
	public function exists(
		string $table, 
		array $columns = []
	):Attribute;

	/**
	 * The file under validation must be an image (jpeg, png, bmp, gif, or svg)
	 */
	public function image(
	):Attribute;

	/**
	 * The field under validation must be included in the given list of values.
	 */
	public function in(
		array $values
	):Attribute;

	/**
	 * The field under validation must be an integer.
	 */
	public function integer(
	):Attribute;

	/**
	 * The field under validation must be an IP address.
	 */
	public function ip(
	):Attribute;

	/**
	 * The field under validation must a valid JSON string.
	 */
	public function json(
	):Attribute;

	/**
	 * The field under validation must be less than or equal to a maximum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function max(
		int $value
	):Attribute;

	/**
	 * The file under validation must have a MIME type corresponding to one of the listed extensions.
	 */
	public function mimeTypes(
		array $types
	):Attribute;

	/**
	 * The field under validation must have a minimum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function min(
		int $value
	):Attribute;

	/**
	 * The field under validation must not be included in the given list of values.
	 */
	public function notIn(
		 $values
	):Attribute;

	/**
	 * The field under validation must be numeric.
	 */
	public function numeric(
	):Attribute;

	/**
	 * The field under validation must match the given regular expression.
	 */
	public function regex(
		string $pattern
	):Attribute;

	/**
	 * The field under validation must be present in the input data and not empty. A field is considered "empty" is one of the following conditions are true: The value is null. The value is an empty string. The value is an empty array or empty Countable object. The value is an uploaded file with no path.
	 */
	public function required(
	):Attribute;

	/**
	 * The field under validation must be present if the anotherfield field is equal to any value.
	 */
	public function requiredIf(
		string $fieldName, 
		 $value
	):Attribute;

	/**
	 * The field under validation must be present unless the anotherfield field is equal to any value.
	 */
	public function requiredUnless(
		string $fieldName, 
		string $value
	):Attribute;

	/**
	 * The field under validation must be present only if any of the other specified fields are present.
	 */
	public function requiredWith(
		array $fieldNames
	):Attribute;

	/**
	 * required_with_all
	 */
	public function requiredWithAll(
		array $fieldNames
	):Attribute;

	/**
	 * The field under validation must be present only when any of the other specified fields are not present.
	 */
	public function requiredWithout(
		array $fieldNames
	):Attribute;

	/**
	 * The field under validation must be present only when all of the other specified fields are not present.
	 */
	public function requiredWithoutAll(
		array $fieldNames
	):Attribute;

	/**
	 * The given field must match the field under validation.
	 */
	public function same(
		string $fieldName
	):Attribute;

	/**
	 * The field under validation must have a size matching the given value. For string data, value corresponds to the number of characters. For numeric data, value corresponds to a given integer value. For files, size corresponds to the file size in kilobytes.
	 */
	public function size(
		int $value
	):Attribute;

	/**
	 * The field under validation must be a string.
	 */
	public function string(
	):Attribute;

	/**
	 * The field under validation must be a valid timezone identifier according to the timezone_identifiers_list PHP function.
	 */
	public function timezone(
	):Attribute;

	/**
	 * The field under validation must be unique on a given database table. If the column option is not specified, the field name will be used.
	 */
	public function unique(
		string $table, 
		string $column, 
		string $except = null, 
		string $idColumn = null
	):Attribute;

	/**
	 * The field under validation must be a valid URL according to PHP's filter_var function.
	 */
	public function url(
	):Attribute;

	/**
	 * In some situations, you may wish to run validation checks against a field only if that field is present in the input array. To quickly accomplish this, add the sometimes rule.
	 */
	public function sometimes(
	):Attribute;

}