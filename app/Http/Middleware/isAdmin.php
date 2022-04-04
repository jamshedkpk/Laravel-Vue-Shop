<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
public function handle(Request $request, Closure $next)
{
if(Auth::id() && (auth()->user()->isAdmin()=='admin'))
{
return $next($request);
}
else
{
abort(403);
}
}
}
