<?php
namespace Carbon;

use Closure;
use DateTime;
use DateTimeZone;
use DatePeriod;
use InvalidArgumentException;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Translation\Loader\ArrayLoader;

class Carbon extends \DateTime 

{
	public		$year;
	public		$yearIso;
	public		$month;
	public		$day;
	public		$hour;
	public		$minute;
	public		$second;
	public		$timestamp;
	public		$timezone;
	public		$tz;
	
}