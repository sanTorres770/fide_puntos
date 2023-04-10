<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarCanjeRequest;
use App\Models\Canje;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{

    public function __construct()
    {

        // para autorizar la entrada a las rutas segun se necesite. arreglo Except para excluir
        $this->middleware('auth');
    }

    public function lista(){

        $productos = Producto::get();

        return view('productos.lista',['productos'=>$productos]);

    }

    public function detalle(Producto $producto, string $user){

        $puntosActuales = DB::select('select puntos from puntos_cliente where id=:id',
        ['id'=>$user]);

        $valorProducto = $producto->valor;

        //se comparan los puntos del usuario y los del producto para habilitar o no su canjeo
        $valido = $puntosActuales[0]->puntos >= $valorProducto;

        return view('productos.detalle',['producto'=>$producto,'puntos'=>$puntosActuales[0]->puntos, 'valido'=>$valido]);

    }

}
