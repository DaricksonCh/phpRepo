@extends('layouts.auth-master')

@section('content')
  <form action="/login" method="POST">
    @csrf
    <h1>Iniciar Sesion</h1>
    @include('layouts.partials.messages')
    <div class="mb-3 form-floating">
      <input type="email" name="email" placeholder="Correo Electronico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    </div>
    <div class="mb-3 form-floating">
      <input type="password" placeholder="Conmtraseña" name="password" class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    </div>
    <div class="mb-3 form-floating">
      <a href="/register">Crea un usuario</a>
    </div>
    <button type="submit" value="Login" class="btn btn-primary">Enviar</button>
  </form>
@endsection



