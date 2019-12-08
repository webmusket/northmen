<?php 

namespace App\Services;

use Carbon\Carbon;


class ReportServices
{
	
	public static function dateformat($duration){
		if ($duration == 'day') {
			$date =  date("Y-m-d");

			return $date;

		}

		if ($duration == 'week') {

			$lastWeek = date("Y-m-d", strtotime("-7 days"));

			return $lastWeek;

		}

		if ($duration == 'month') {

			$lastWeek = date("Y-m-d", strtotime("-30 days"));

			return $lastWeek;

		}

		if ($duration == 'year') {

			$lastWeek = date("Y-m-d", strtotime("-365 days"));

			return $lastWeek;

		}


	}
}