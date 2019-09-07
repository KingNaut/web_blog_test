<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Libs\Messages;
use Closure;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if((empty($request->cookie('AppotaPay'))) == true) {
            return redirect('/login')->with('error', Messages::errors('ERROR_LOGIN'));
        } else {
            $token = $request->cookie('AppotaPay');
        }

        $getUser = User::getToken($token);
        if (!$getUser) {
            return redirect('/login')->with('error', Messages::errors('ERROR_LOGIN'));
        }
        $request->merge([
            'getUser' => $getUser,
        ]);
        return $next($request);
    }
}
