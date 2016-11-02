<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        if (Auth::guard($guard)->check()) {
            switch (Auth::user()->tipoUsuario) {
                case '1':
                # Administrador
                return redirect()->to('administrador');
                break;
            case '2':
                # Administrador
                return redirect()->to('invitado');
                break;
            default:
                return redirect()->to('principal');
                # code...
                break;
            }
        }

        return $next($request);
    }
}
