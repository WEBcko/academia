<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonalAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Faz a verificação se o usuario ele nao esta autenticado e se ele não é o PERSONAL=1, caso contrario, retorna a home
        if(!auth()->check() || auth()->user()->role != 1){
            return redirect()->route('home');
        }
        return $next($request);

        dd('Você é Personal');

    }
}
