<?php

namespace App\Http\Middleware\Custom;

use Closure;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class EmailConfigMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user()->config==null)
        {
            return redirect('/email_config.php');
        }

       
        return $next($request);
    }


}
