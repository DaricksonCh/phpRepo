@extends('layouts.auth-master')

@section('content')
  <form action="/register" method="POST">
    @csrf
    <h1>Crear una cuenta</h1>
    @include('layouts.partials.messages')
    <div class="mb-3 form-floating" >
      <input type="text" name="name" placeholder="Nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
    </div>
    <div class="mb-3 form-floating">
      <input type="email" name="email" placeholder="Correo Electronico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    </div>
    <div class="mb-3 form-floating">
      <input type="password" name="password" placeholder="Contraseña" class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    </div>
    <div class="mb-3 form-floating">
      <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" class="form-control" id="exampleInputPassword1">
      <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
    </div>
    <div class="mb-3 form-floating">
      <a href="/logout">Inicia Sesion</a>
    </div>
    <button type="submit" value="Login" class="btn btn-primary">Enviar</button>
  </form>
@endsection
