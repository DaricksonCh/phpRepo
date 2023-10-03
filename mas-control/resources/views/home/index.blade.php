@extends('layouts.app-master')

@section('content')

  @auth
    <p>Hola de nuevo</p>
  @endauth
  @guest
    <p>Para ver el contenido <a href="/login">iniciar sesion </a></p>
  @endguest
@endsection
