<?php

namespace App\Http\Middleware;

use Closure;

class MDUsuarioInvitado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        switch (Auth::user()->tipoUsuario) {
            case '1':
                # Administrador
                return redirect()->to('administrador')
                break;
            case '2':
                # Administrador
                //return redirect()->to('invitado')
                break;
            default:
                # code...
                break;
        }
    }
}
