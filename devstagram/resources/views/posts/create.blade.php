@extends('layouts.app')

@section('title')
	Crear una nueva Publicación
@endsection


@section('content')
<div class="md:flex md:items-center">
	<div class="md:w-6/12 px-10">
		Imagen Aqui
	</div>
	<div class="md:w-6/12 px-10 bg-white p-6 rounded-lg shadow-xl">
		<form action="{{route('register')}}" method="POST" novalidate>
			@csrf
			<div class="mb-5">
				<label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
				<input type="text" name="name" id="name" placeholder="Nombre" class="border p-5 w-full rounded-lg @error('name') border-rose-600 @enderror" value="{{ old('name') }}">
				@error('name')
					<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
				@enderror
			</div>
			<input type="submit" value="Crear Cuenta" class="bg-sky-500 hover:bg-sky-600 transition-color cursor-pointer uppercase font-bold w-full p-5 text-white rounded">
		</form>
	</div>
</div>
	
@endsection