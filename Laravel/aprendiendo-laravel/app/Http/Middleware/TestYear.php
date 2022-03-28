<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestYear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $year = $request->route("year"); //ó $request->year
        
        //if(is_null($request->year) || $request->year == 2020){
        if(is_null($year) || $year == 2020){ 
            echo "<h2>Detenido</h2>";            
            return redirect('controller-prueba');
        }
        return $next($request);
    }
}
