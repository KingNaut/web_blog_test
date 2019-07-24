<?php


namespace App\Libs;


/**
 *  
 */
class Timer
{
	

	public static function getTimeDuration($ips): array
	{

		if (isset($ips["start"]) && isset($ips["end"])) {
			return [
				"start" => $ips["start"],
				"end" => $ips["end"]
			];
		}

		// $date = date("Y")

		return [
			"start" => 0,
			"end" => 0
		];
	}

}