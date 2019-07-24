<?php


namespace App\Services;

use App\Libs\Request;
use Illuminate\Support\Facades\Log;

class ReportService
{




	public function homeStatis(int $start, int $end): array
	{

		$url = env("URL_REPORT_SERVICE")."/v1/home";
		$query = [
			"start" => $start,
			"end" => $end
		];



		$result = Request::sendGet($url, $query);

		if ($result["status"] != 200) {

			Log::info("debuggg_home_statis", [$result]);
			return [
				"status" => false,
				"data" => []
			];
		}

		$result = (array)$result["body"];

		if (!$result["success"]) {

			Log::info("debuggg_home_statis", [$result]);

			return [
				"status" => false,
				"data" => []
			];
		}

		return [
			"status" => true,
			"data" => $result
		];
	}


	public function bankStatis(int $start, int $end): array
	{
		$url = env("URL_REPORT_SERVICE")."/v1/statistical/bank";
		$query = [
			"start" => $start,
			"end" => $end
		];

		$result = Request::sendGet($url, $query);

		if ($result["status"] != 200) {

			Log::info("debuggg_bank_statis", [$result]);
			return [
				"status" => false,
				"data" => []
			];
		}

		$result = (array)$result["body"];

		if (!$result["success"]) {

			Log::info("debuggg_bank_statis", [$result]);

			return [
				"status" => false,
				"data" => []
			];
		}

		return [
			"status" => true,
			"data" => $result
		];
	}

	public function cardStatis(int $start, int $end): array
	{
		$url = env("URL_REPORT_SERVICE")."/v1/statistical/card";
		$query = [
			"start" => $start,
			"end" => $end
		];

		$result = Request::sendGet($url, $query);

		if ($result["status"] != 200) {

			Log::info("debuggg_card_statis", [$result]);
			return [
				"status" => false,
				"data" => []
			];
		}

		$result = (array)$result["body"];

		if (!$result["success"]) {

			Log::info("debuggg_card_statis", [$result]);

			return [
				"status" => false,
				"data" => []
			];
		}

		return [
			"status" => true,
			"data" => $result
		];
	}

	public function cashStatis(int $start, int $end): array
	{
		$url = env("URL_REPORT_SERVICE")."/v1/statistical/cash";
		$query = [
			"start" => $start,
			"end" => $end
		];

		$result = Request::sendGet($url, $query);

		if ($result["status"] != 200) {

			Log::info("debuggg_cash_statis", [$result]);
			return [
				"status" => false,
				"data" => []
			];
		}

		$result = (array)$result["body"];

		if (!$result["success"]) {

			Log::info("debuggg_cash_statis", [$result]);

			return [
				"status" => false,
				"data" => []
			];
		}

		return [
			"status" => true,
			"data" => $result
		];
	}
}