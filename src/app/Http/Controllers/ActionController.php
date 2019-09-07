<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getListAction(Request $request){
        $getUser = $request['getUser'];
        if ($getUser->permission === 'root') {
            $actions = Action::latest('created_at')->paginate(20);
        }else {
            $actions = Action::where('user_id', $getUser->id)->latest('created_at')->paginate(20);
        }
        return view('Admins.listAllAction')->with([
            'getUser' => $getUser,
            'actions' => $actions,
        ]);
    }
}
