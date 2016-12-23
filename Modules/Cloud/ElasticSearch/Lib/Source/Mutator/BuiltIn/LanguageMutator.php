<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\BuiltIn;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\BaseMutator;

/**
 * foo
 */
abstract class LanguageMutator 
{

	abstract public function mutate(
		array $data
	):array;

	abstract public function addLanguage(
		string $language
	);

	abstract public function setLanguages(
		array $languages
	);

	abstract public function setSetLanguageAsIndex(
		boolean $setLanguageAsIndex
	);

	abstract public static function isSeqArray(
		 $array
	);

}