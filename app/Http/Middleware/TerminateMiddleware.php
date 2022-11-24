<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TerminateMiddleware
{
public function handle(Request $request, Closure $next)
{
echo "Executing handle method of TerminateMiddleware.";
return $next($request);
}
public function terminate($request, $response)
{
echo "<br>Executing terminate method of TerminateMiddleware.";
}
}
