@extends('layouts.mail')

@section('mensaje')
    Por favor, Haga clic en el botón siguiente para verificar su correo electronico.
@endsection

@section('nombreBoton', 'Verificar Correo')

@section('mensajeAdvertencia')
    Si no ha solicitado la verificación de correo, por favor haga caso omiso a este correo.
@endsection
@section('mensajeUrl')
    Si tiene problemas para hacer clic en el botón "Verificar Correo",
    copie y pegue la siguiente URL en su navegador:
@endsection