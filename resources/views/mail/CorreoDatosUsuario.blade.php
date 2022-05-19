@extends('layouts.mail')

@section('mensaje')
    En adelante se le muestra el cifrado de datos del usuario 

    @foreach ($user as $User)
        
    <ul>
        <li>Nombre: {{$User->name}}</li>
        <li>email: {{$User->email}}</li>
    </ul>
    @endforeach
@endsection

@section('nombreBoton', 'Verificar Correo')

@section('mensajeAdvertencia')
    Muchas gracias por leer este correo
@endsection
@section('mensajeUrl')
    Muchas Gracias 
@endsection