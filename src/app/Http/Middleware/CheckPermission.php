<?php

namespace App\Http\Middleware;

use App\Libs\Messages;
use Closure;

class CheckPermission
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
        $getPermission = $request['getUser']->permission;
 

        if ($getPermission == "root") {
            return $next($request);
        }

        if($getPermission === 'staff') {

             $routeCheck = [
                '/' => ["GET"],
                'profile' => ['GET', 'POST'],
                'bankstatistics' => ["GET"],
                'cardstatistics' => ["GET"],
                'cashstatistics' => ['GET'],
                'change_password' => ['GET', 'POST'],
                'action' => ['GET'],
            ];
        } elseif($getPermission === 'guest') {

            $routeCheck = [
                '/' => ['GET'],
                'change_password' => ['GET', 'POST'],
            ];
        }else{

            return redirect('/error')->with('errors', Messages::errors('ERROR_NOT_PERMISSION'));
        }

        $route = $request->path();
        $method = $_SERVER['REQUEST_METHOD'];

        if(empty($routeCheck[$route])){

            return redirect('/error')->with('errors', Messages::errors('ERROR_NOT_PERMISSION'));
        }elseif(in_array($method, $routeCheck[$route])){

            return $next($request);
        }
        return redirect('/error')->with('errors', Messages::errors('ERROR_NOT_PERMISSION'));
    }
}
