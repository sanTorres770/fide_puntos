<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarCanjeRequest;
use App\Models\Canje;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['lista']]);
    }

    public function lista(){

        $productos = Producto::get();

        return view('productos.lista',['productos'=>$productos]);

    }

    public function detalle(Producto $producto){

        return view('productos.detalle',['producto'=>$producto]);

    }

    public function guardarCanje(GuardarCanjeRequest $request){

        Canje::create($request->validated());

        return to_route('index')->with('guardarCanje','Se guardó la información correctamente.');


    }
}
