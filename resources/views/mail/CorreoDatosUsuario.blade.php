@extends('layouts.mail')

@section('mensaje')
    En adelante se le muestra el cifrado de datos del usuario 
    <ul>
        <li>Nombre: {{$users->user->name}}</li>
        <li>Apellido: {{$users->user->email}}</li>
    </ul>
@endsection

@section('nombreBoton', 'Verificar Correo')

@section('mensajeAdvertencia')
    Muchas gracias por leer este correo
@endsection
@section('mensajeUrl')
    Muchas Gracias 
@endsection