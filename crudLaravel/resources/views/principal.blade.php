@extends('layouts.app')

@section('titulo')
    Pagina principal
@endsection

@section('contenido')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-4">Lista de Usuarios</h2>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">N</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Cedula</th>
                <th class="py-2 px-4 border-b">Teléfono</th>
                <th class="py-2 px-4 border-b">Dirección</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <th class="py-2 px-4 border-b">{{ $usuario->id }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->nombre }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->cedula }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->telefono }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->direccion }}</th>
                <th class="py-2 px-4 border-b">
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
