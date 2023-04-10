<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarCanjeRequest;
use App\Models\Canje;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CanjesController extends Controller
{
    public function lista(User $user){

        $canjes = DB::select('select canjes.*, prod.descripcion, prod.valor from canjes join productos prod on prod.id=canjes.producto_id where canjes.cliente_id=:id',
        ['id'=> $user->id]);


        return view('canjes.canjes',['canjes' => $canjes]);

    }

    public function guardarCanje(GuardarCanjeRequest $request){

        Canje::create($request->validated());

        $puntosAntes = $request->puntos;
        $puntosCanjeados = $request->valor;

        $puntosActualizados = $puntosAntes-$puntosCanjeados;

        DB::insert('update puntos_cliente set puntos=:puntos where id=:userEmail',
        ['puntos'=>$puntosActualizados,'userEmail'=>$request->email]);

        return to_route('productos.lista')->with('guardarCanje','Has canjeado tu '.$request->descripcion.' correctamente. Disfrútalo.');


    }
}
