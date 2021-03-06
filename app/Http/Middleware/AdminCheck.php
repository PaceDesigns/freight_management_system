<?php namespace App\Http\Middleware;

use Closure;

class AdminCheck {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(!Auth::user()->privilege == 4){
			return redirect('/home');
		}
		return $next($request);
	}

}
