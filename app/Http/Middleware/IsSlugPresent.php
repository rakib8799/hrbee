<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSlugPresent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->has('subscription-plan-slug') || !is_string($request->query('subscription-plan-slug')) || !$request->has('plan-type') || !is_string($request->query('plan-type')) ||  !in_array($request->query('plan-type'), ['yearly', 'monthly'])) {
            return redirect()->route('home.index');
        }
        return $next($request);
    }
}
