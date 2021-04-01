<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SAuth
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


            $token      = $request->token;
            if($token != '101099'){

                return response()->json(['message' => 'Damnn , You are not registered'],401);

            }



            return $next($request);
        }+

}
