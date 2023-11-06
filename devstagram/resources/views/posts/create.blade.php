@extends('layouts.app')

@section('title')
	Crear una nueva Publicación
@endsection


@section('content')
<div class="md:flex md:items-center">
	<div class="md:w-6/12 px-10 bg-white p-6 rounded-lg shadow-xl">
			<div class="mb-5">
				<label for="title" class="mb-2 block uppercase text-gray-500 font-bold">Titlulo</label>
				<input type="text" name="title" id="title" placeholder="Nombre" class="border p-5 w-full rounded-lg @error('title') border-rose-600 @enderror" value="{{ old('title') }}">
				@error('title')
					<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
				@enderror
			</div>
			<div class="mb-5">
				<label for="title" class="mb-2 block uppercase text-gray-500 font-bold">Titlulo</label>
				<textarea name="descripcion" id="descripcion" placeholder="Descripcion" class="border p-3 w-full rounded-lg @error('title') border-rose-600 @enderror" value="{{ old('descripcion') }}">
				@error('descripcion')
					<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
				@enderror
			</div>
			<input type="submit" value="Publicar" class="bg-sky-500 hover:bg-sky-600 transition-color cursor-pointer uppercase font-bold w-full p-5 text-white rounded">
	</div>
</div>
	
@endsection