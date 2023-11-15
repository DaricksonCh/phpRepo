@extends('layouts.app')

@section('titulo')
    Pagina principal
@endsection

@section('contenido')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-4">Lista de Usuarios</h2>
    <a href="{{route('export_user_pdf')}}" class="underline text-lg hover:text-rose-600">Exportar Usuarios</a>
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
                <th class="py-2 px-4 border-b">{{ $loop->index + 1 }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->nombre }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->cedula }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->telefono }}</th>
                <th class="py-2 px-4 border-b">{{ $usuario->direccion }}</th>
                <th class="py-2 px-4 border-b flex justify-center gap-1">
                    <a href="{{ route('users.edit',$usuario->id) }}" class="bg-blue-400 p-4 rounded hover:bg-blue-300">Editar</a>
                    <form action="{{ route('users.destroy', $usuario->id) }}" method="POST" class="bg-rose-400 p-3 rounded hover:bg-rose-300">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
