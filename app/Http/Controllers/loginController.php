<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    //

    public function login() //retorna la vista de login
    {
        return view('usuarios.login');
    }

    public function store() //recibe los datos del formulario de login, para el registro de usuario
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user=User::create(request(['name','email','password']));

        auth()->login($user);
        return redirect()->to('/');
    }

    public function storeinicio()//inicio de sesion de usuario
    {

        if(auth()->attempt(request(['email','password'])) == false)
        {
            return back()->withErrors(['message'=>'El usuario o la contraseña son incorrectos']);
        }
        else
        {
            return redirect()->to('/');
        }
    }

    public function salir()//cierre de sesion de usuario
    {
        auth()->logout();
        return redirect()->to('/login');
    }
}
