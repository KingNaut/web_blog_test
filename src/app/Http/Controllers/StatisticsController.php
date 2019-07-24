<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Timer;
use App\Libs\Messages;

class StatisticsController extends Controller
{
    public function getBankStatistics(Request $request){
        $getUser = $request['getUser'];

        $input = $request->only("start", "end");

        $timer = Timer::getTimeDuration($input);

        $statis = $this->reportService->bankStatis(1561914000, 1562345999);

        if (!$statis["status"] || !$statis["data"]["success"]) {
            return redirect('/error')->with('errors', Messages::errors('ERROR_NOT_PERMISSION'));
        }

        return view('Dashboards.bankstatistics', ["data" => $statis["data"]["data"]])->with('getUser', $getUser);
    }
    public function getCardStatistics(Request $request){
        $getUser = $request['getUser'];

        $input = $request->only("start", "end");

        $timer = Timer::getTimeDuration($input);



        $statis = $this->reportService->cardStatis(1561914000, 1562345999);


        if (!$statis["status"] || !$statis["data"]["success"]) {
            return redirect('/error')->with('errors', Messages::errors('ERROR_NOT_PERMISSION'));
        }

        return view('Dashboards.cardstatistics', ["data" => $statis["data"]["data"]])->with('getUser', $getUser);
    }
    public function getCashStatistics(Request $request){
        $getUser = $request['getUser'];

        $input = $request->only("start", "end");

        $timer = Timer::getTimeDuration($input);



        $statis = $this->reportService->cashStatis(1561914000, 1562345999);


        if (!$statis["status"] || !$statis["data"]["success"]) {
            return redirect('/error')->with('errors', Messages::errors('ERROR_NOT_PERMISSION'));
        }


        return view('Dashboards.cashstatistics', ["data" => $statis["data"]["data"]])->with('getUser', $getUser);
    }
}
