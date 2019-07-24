<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Timer;
use App\Libs\Messages;

class HomeController extends Controller
{
    public function getHome(Request $request){


        $getUser = $request['getUser'];

        $input = $request->only("start", "end");

        $timer = Timer::getTimeDuration($input);

        $statis = $this->reportService->homeStatis(1561914000, 1562345999);

        if (!$statis["status"] || !$statis["data"]["success"]) {
        	return redirect('/error')->with('errors', Messages::errors('ERROR_NOT_PERMISSION'));
        }

        return view('home', ["data" => $statis["data"]["data"]])->with('getUser', $getUser);
    }
}
