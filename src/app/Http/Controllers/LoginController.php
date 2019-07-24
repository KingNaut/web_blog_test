<?php

namespace App\Http\Controllers;

use App\Libs\Messages;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use  App\Model\User;
use App\Model\Action;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * getLogin()
     */
    public function  getLogin(){

        unset($_COOKIE['AppotaPay']);
        setcookie('AppotaPay', null, -1);

        return view('login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin(LoginRequest $request)
    {

        $input = $request->only('email', 'password');
        $password = $input['password'];
        $checkUser = User::where('email', $input['email'])->first();

        if (!$checkUser) {

            return back()->with('error', Messages::errors('ERROR_LOGIN_FAIL'));
        }

        if (password_verify($password.$checkUser->salt, $checkUser->password)) {

            $token = substr(md5(rand()), 0, 50);
            User::editToken($checkUser, $token);
            Action::add($checkUser, Messages::actions('LOGIN'));
            return redirect('/')->cookie('AppotaPay', $token, time() + 86400*7);
        }

        return back()->with('error', Messages::errors('ERROR_LOGIN_FAIL'));
    }
}
