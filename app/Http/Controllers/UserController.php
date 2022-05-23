<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Funcion usada para registrar un usuario
     * 
     * @param Request $request
     * Parametro nombre: nombre del usuario
     * Parametro email: email del usuario
     * Parametro password: contraseña del usuario
     * @return \Illuminate\Http\Response
     */
    public function Create(Request $request){
        try{
            $validacion = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);
            Log::channel('precaucion')->info('entro a la funcion de crear usuario');
            echo "hola";
        }catch(\Exception $e){
            DB::rollback();
            Log::channel('error')->error('Error al crear usuario: '.$e->getMessage());
            Session::flash('message', 'Error al crear el usuario');
        }
    }

    public function UpdateCorreo(Request $request){
        try{
            $validacion = Validator::make($request->all(), [
                'email' => 'required|email',
                'email_nuevo' => 'required|email',
            ]);
            if ($validacion->fails()) {
                Session::flash('message', 'Faltan datos', $validacion->errors()->first());
                return redirect()->back()->withErrors($validacion->errors());
            }
            $email = User::where('email', $request->email)->first();
            if(!$email){
                Session::flash('message', 'El email no fue encontrado');
                return redirect()->back();
            }
            $user = User::find(auth()->user()->id);
            $user->email = $request->email_nuevo;
            $user->save();
            DB::commit();
            Log::channel('info')->info('Usuario'.$request->email.' ha actualizado con al correo: '.$request->email_nuevo);
            Session::flash('message', 'Correo actualizado correctamente');
            return redirect()->route('index');
        }catch(\Exception $e){
            DB::rollback();
            Log::channel('error')->error('Error al actualizar correo: '.$e->getMessage());
            Session::flash('message', 'Error al actualizar el correo');
        }
    }

}
