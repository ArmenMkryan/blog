<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class RoleMiddleware
{
public function handle(Request $request, Closure $next, string $role)
{
    if($request->input('role') != $role){
        return redirect('/');
    }
echo "Role: " . $role;
return $next($request);
}
}
