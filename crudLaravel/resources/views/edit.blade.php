@extends('layouts.app')

@section('titulo')
    Editar en CrudLaravel
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
          <form action="{{ route('users.update',$usuario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold" >Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror " value="{{$usuario->nombre}}">
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold" >Cedula</label>
                    <input type="text" id="cedula" name="cedula" placeholder="cedula" class="border p-3 w-full rounded-lg" value="{{$usuario->cedula}}">
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="telefono" class="mb-2 block uppercase text-gray-500 font-bold" >Telefono</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="border p-3 w-full rounded-lg"  value="{{$usuario->telefono}}">
                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="direccion" class="mb-2 block uppercase text-gray-500 font-bold">direccion</label>
                    <input type="text" id="direccion" name="direccion" placeholder="direccion" class="border p-3 w-full rounded-lg"  value="{{$usuario->direccion}}">
                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-x-16">
                    <input type="submit" value="Actualizar Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold p-3 text-white rounded-lg">
                    <a href="{{route('export_user',$usuario->id)}}" class="rounded text-xl hover:bg-rose-800 bg-rose-600 p-3 text-white font-bold">Exportar Usuarios</a>
                </div>

            </form>
        </div>
    </div>
@endsection
