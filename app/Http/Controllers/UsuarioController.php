<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\VerificacionCorreo;
use App\Mail\CorreoDatosUsuario;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Mailable;

use App\Http\Controllers\Receiver;

class UsuarioController extends Controller
{
//    /*  *
//      * Funcion que envia el correo con la url para verificar el correo del usuario
//      * @param $id
//      * @return false|string
//      */
//     public function reenviarVerificacionCorreo($id){
//             $this->verificarCorreo($id);
//             $usuario = User::where('id',$id)->first();
//             if((date('Y-m-d') == date('Y-m-d', strtotime($usuario->envio_correo_verificacion))) &&
//             !(date('H:i:s') > date('H:i:s', strtotime('+3 minutes', strtotime($usuario->envio_correo_verificacion))))){
//             return json_encode(["estatus" => "tiempoNoDisponible", "correo" => $usuario->correo]);
//             }

//         $usuario->envio_correo_verificacion = date('Y-m-d H:i:s');
//         $usuario->save();
//         return json_encode(["estatus" => "ok", "correo" => $usuario->email]);
//     }
//     /**
//      * Funcion que crea correo de verificacion al usuarios
//      * @param $id
//      */
//     function verificarcorreo($id){
//         $user = User::find($id);
//         Mail::to($user->email)->send(new VerificacionCorreo($this->generarUrlVerificarCorreo($id)));
//     }

//     /**
//      * Funcion que genera la url del codigo de verificacion de correo (con duracion de 60 minutos)
//      * @param $id
//      * @return string
//      */
//     function generarUrlVerificarCorreo($id){
//         return URL::temporarysignedRoute(
//             'verificar.usuario',
//             now()->addMinutes(60),
//             ['id'=> $id]    
//         );
//     }

//      /**
//      * Funcion que verifica si el correo del usuario esta verificado o crea la verificacion si no l oesta
//      * @param Request $datos
//      * @return \Illuminate\Http\RedirectResponse
//      */
//     public function verificarUsuario(Request $datos){
//         if (! $datos->hasValidSignature()) {
//             abort(403);
//         }

//         $usuario = User::find($datos->id);
//         if($usuario->email_verified_at != null){
//             if(Auth::check()){
//                 Session::flash('correoVerificado', $usuario->email);
//                 return redirect()->route('home');
//             }else{
//                 Session::flash('correoVerificado', $usuario->email);
//                 return redirect()->route('login');
//             }
//         }
//         $usuario->email_verified_at = date('Y-m-d H:i:s');
//         $usuario->save();
//         if(Auth::check()){
//             Session::flash('correoValidado', $usuario->email);
//             return redirect()->route('home');
//         }else{
//             Session::flash('correoValidado', $usuario->email);
//             return redirect()->route('login');
//         }
//     }

    public function DatosUsuario(){
        $user = User::all();
        Mail::to('rodriguezisrael1406@gmail.com')->send(new CorreoDatosUsuario($user));
        return 'Mensaje enviado';
    }
}
