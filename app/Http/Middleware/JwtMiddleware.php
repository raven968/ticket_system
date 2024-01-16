<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{

    function handle($request, Closure $next){
        try {
            $user = \JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json([ 'status' => false, 'message' => __('auth.invalid_token') ], 401);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json([ 'status' => false, 'message' => __('auth.token_is_expired') ], 401);
            }else{
                return response()->json([ 'status' => false, 'message' => __('auth.unauthorized') ], 401);
            }
        }
        
        return $next($request);
    }
}