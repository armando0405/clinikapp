<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// LAMA AL MODELO USER
use App\Models\User;

//clase usada en la validaciuon de login
use Auth;

class LoginController extends Controller
{
    //
    public function register(Request $request ){
        // dd($request->all());
        User::create( $request->all() );

        return redirect()->route('doctores.index');

    }

        /*
        DOCUMNETACION PASRA SABER LA VALIDACION
        https://laravel.com/docs/11.x/authentication#authenticating-users 
        */
    public function check(Request $request ){
        // dd($request->all());

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) { //recuerda llamar el metodo AUTH
            $request->session()->regenerate();
 
            return redirect()->route('doctores.index');
            // return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
}
