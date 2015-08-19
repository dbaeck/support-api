<?php

namespace App\Http\Middleware;

use App\Facades\Api;
use Closure;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ApiAuthenticationMiddleware
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
        $api_key = $request->get('api_key');
        Api::authUser($api_key);

        if(!Api::isAuthenticated())
            throw new AccessDeniedHttpException;

        return $next($request);
    }
}
