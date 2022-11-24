<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class CheckAge
{
public function handle(Request $request, Closure $next)
{
if ($request->age <= 200) {
return redirect('/');
}
return $next($request);
}
}
