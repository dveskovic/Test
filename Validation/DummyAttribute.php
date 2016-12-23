<?php
namespace Plenty\Validation;

use Plenty\Validation\Contracts\Attribute;

/**
 * Dummy Attribute Class
 */
class DummyAttribute implements \Plenty\Validation\Contracts\Attribute

{

	public function getAttributeName(
	):string
	{
		return "DummyAttribute";
	}

	public function setAttributeName(
		string $attributeName
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.
	 */
	public function accepted(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a valid URL according to the checkdnsrr PHP function.
	 */
	public function activeUrl(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a value after a given date. The dates will be passed into the strtotime PHP function.
	 */
	public function dateAfter(
		string $fieldNameOrTimeStr
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be entirely alphabetic characters.
	 */
	public function alphabetic(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation may have alpha-numeric characters, as well as dashes and underscores.
	 */
	public function alphaDash(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be entirely alpha-numeric characters.
	 */
	public function alphaNum(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a PHP array.
	 */
	public function isArray(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a value preceding the given date. The dates will be passed into the PHP strtotime function.
	 */
	public function dateBefore(
		string $fieldNameOrTimeStr
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must have a size between the given min and max. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function between(
		int $min, 
		int $max
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be able to be cast as a boolean. Accepted input are true, false, 1, 0, "1", and "0".
	 */
	public function boolean(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must have a matching field of foo_confirmation. For example, if the field under validation is password,
a matching password_confirmation field must be present in the input.
	 */
	public function confirmed(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a valid date according to the strtotime PHP function.
	 */
	public function date(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must match the given format. The format will be evaluated using the PHP date_parse_from_format function.
	 */
	public function dateFormat(
		string $format
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must have a different value than field.
	 */
	public function different(
		string $fieldName
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be numeric and must have an exact length of $count.
	 */
	public function digits(
		int $count
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must have a length between the given min and max.
	 */
	public function digitsBetween(
		int $min, 
		int $max
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be formatted as an e-mail address.
	 */
	public function email(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must exist on a given database table.
	 */
	public function exists(
		string $table, 
		array $columns = []
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The file under validation must be an image (jpeg, png, bmp, gif, or svg)
	 */
	public function image(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be included in the given list of values.
	 */
	public function in(
		array $values
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be an integer.
	 */
	public function integer(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be an IP address.
	 */
	public function ip(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must a valid JSON string.
	 */
	public function json(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be less than or equal to a maximum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function max(
		int $value
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The file under validation must have a MIME type corresponding to one of the listed extensions.
	 */
	public function mimeTypes(
		array $types
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must have a minimum value. Strings, numerics, and files are evaluated in the same fashion as the size rule.
	 */
	public function min(
		int $value
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must not be included in the given list of values.
	 */
	public function notIn(
		 $values
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be numeric.
	 */
	public function numeric(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must match the given regular expression.
	 */
	public function regex(
		string $pattern
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be present in the input data and not empty. A field is considered "empty" is one of the following conditions are true:
The value is null.
	 */
	public function required(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be present if the anotherfield field is equal to any value.
	 */
	public function requiredIf(
		string $fieldName, 
		 $value
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be present unless the anotherfield field is equal to any value.
	 */
	public function requiredUnless(
		string $fieldName, 
		string $value
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be present only if any of the other specified fields are present.
	 */
	public function requiredWith(
		array $fieldNames
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * required_with_all
	 */
	public function requiredWithAll(
		array $fieldNames
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be present only when any of the other specified fields are not present.
	 */
	public function requiredWithout(
		array $fieldNames
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be present only when all of the other specified fields are not present.
	 */
	public function requiredWithoutAll(
		array $fieldNames
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The given field must match the field under validation.
	 */
	public function same(
		string $fieldName
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must have a size matching the given value. For string data, value corresponds to the number of characters.
	 */
	public function size(
		int $value
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a string.
	 */
	public function string(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a valid timezone identifier according to the timezone_identifiers_list PHP function.
	 */
	public function timezone(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be unique on a given database table. If the column option is not specified, the field name will be used.
	 */
	public function unique(
		string $table, 
		string $column, 
		string $except = null, 
		string $idColumn = null
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * The field under validation must be a valid URL according to PHP's filter_var function.
	 */
	public function url(
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * In some situations, you may wish to run validation checks against a field only if that field is present in the input array. To quickly accomplish this, add the sometimes rule.
	 */
	public function sometimes(
	):DummyAttribute
	{
		return $this;
	}

	public function generateRulesContent(
	)
	{
		return ["Dummy"];
	}

	/**
	 * The field under validation must be a valid w3c formated date time string.
	 */
	public function dateW3C(
		bool $allowTimestamps = false
	):DummyAttribute
	{
		return $this;
	}

	/**
	 * Add custom Role
	 */
	public function customRule(
		string $rule, 
		array $params
	):DummyAttribute
	{
		return $this;
	}

}