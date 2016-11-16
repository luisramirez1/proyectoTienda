<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use App\Productos;
use App\Pro_Cate;
use App\Categorias;


class ProductoController extends Controller
{
    public function __construct()
    {$this->middleware('auth');
        
    }

     public function registrarV()
    {
    	$cate= Categorias::all();
        return view('/registrarProducto', compact('cate'));
    }

    public function registrar(Request $datos){
    	$nuevo = new Productos;
        $procate = new Pro_Cate;
        $file = Input::file('imagen');
        $nombre = $file->getClientOriginalName();
        $file->move('images/productos', $nombre);
    	$nuevo->name=$datos->input('name');
    	$nuevo->precio=$datos->input('precio');
    	$nuevo->descripcion=$datos->input('descripcion');
        $nuevo->categoria=$datos->input('categoria');
    	$nuevo->imagen=$nombre;
    	$nuevo->save();

    	return Redirect('/registrarProducto');
    }

    public function productos()
    {
        return view('/productos');
    }
}
