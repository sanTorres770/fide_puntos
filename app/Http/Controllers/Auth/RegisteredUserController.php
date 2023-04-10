<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function registro(Request $request){

        $request->validate([
            'name'=> ['required','string','max:255'],
            'last_name'=> ['required','string','max:255'],
            'email'=> ['required','string','email','max:255'],
            'password'=> ['required','confirmed', Rules\Password::defaults()]
        ]);

        User::create([
            'name'=> $request->name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);

        DB::insert('insert into puntos_cliente values (:id,:puntos)',
        ['id'=>$request->email, 'puntos'=>500]);

        return to_route('productos.lista')->with('status','Tu registro se realizó exitosamente. Empieza a disfrutar de tus fidepuntos!');

    }
}
