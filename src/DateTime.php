<?php
declare(strict_types=1);

namespace Makville\Utilities;

use Cake\Chronos\Chronos;

class DateTime {
	
	/**
     * getStartDateOfCurrentWeek method
     * Monday is the first day, Sunday is the last day. That is my assumption deal with it :D
     *
     * @return \Cake\Chronos\Traits\FactoryTrait
     */	
	public static function getStartDateOfCurrentWeek() {
		$now = Chronos::now();
		return $now->startOfWeek();
	}
}
?>
