<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function administrador()
    {
        if(Auth::user()->tipoUsuario=1)
            return view('/menu/administrador');
        else
            return "sin derechos";
    }

    public function invitado()
    {
        return view('/menu/invitado');
    }
}
