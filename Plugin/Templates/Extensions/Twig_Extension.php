<?php
namespace Plenty\Plugin\Templates\Extensions;

use \Twig_Extension as TwigExtension;
use TwigBridge\Twig\Globals;

/**
 * Twig extension
 */
abstract class Twig_Extension 
{

	abstract public function getName(
	):string;

}