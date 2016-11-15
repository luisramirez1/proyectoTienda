<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {$this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function inicio()
    {
        switch (Auth::user()->tipoUsuario) {
            case '1':
                # Administrador
                return view('/menu/administrador');
                //return redirect()->to('administrador')
                break;
            case '2':
                # Administrador
                return view('/menu/invitado');
                //return redirect()->to('invitado')
                break;
            default:
                # code...
                break;
        }
            //return view('/menu/administrador');
        
    }

    public function administrador()
    {
        return view('/administrador');
    }

    public function editar()
    {
        return view('/editar');
    }
}
