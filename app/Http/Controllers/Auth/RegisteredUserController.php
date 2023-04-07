<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function registro(Request $request){

        $request->validate([
            'name'=> ['required','string','max:255'],
            'email'=> ['required','string','email','max:255'],
            'password'=> ['required','confirmed', Rules\Password::defaults()]
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);

        return to_route('login')->with('status','Tu registro se realizó exitosamente. Empieza a disfrutar de tus fidepuntos!');

    }
}
