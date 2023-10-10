@extends('layouts.app')


@section('title')
	Hola en Register
@endsection


@section('content')
<div class="md:flex">
	<div class="md:w-6/12 p-5 flex items-center justify-center">
		<img src="{{asset('img/registro.jpg')}}" alt="Imagen de Registro" class="rounded-lg">
	</div>
	<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
		<form action="" method="POST">
			@csrf
			<div class="mb-5">
				<label for="" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
				<input type="text" name="name" id="name" placeholder="Nombre" class="border p-5 w-full rounded-lg @error('name') border-y-rose-500 @enderror">
				@error('name')
					<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
				@enderror
			</div>
			<div class="mb-5">
				<label for="" class="mb-2 block uppercase text-gray-500 font-bold">UserName</label>
				<input type="text" name="username" id="username" placeholder="UserName" class="border p-5 w-full rounded-lg @error('username') border-y-rose-500 @enderror"">
				@error('username')
				<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
				@enderror
			</div>
			<div class="mb-5">
				<label for="" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
				<input type="text" name="email" id="email" placeholder="Correo" class="border p-5 w-full rounded-lg @error('email') border-y-rose-500 @enderror"">
				@error('email')
				<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
			@enderror
			</div>
			<div class="mb-5">
				<label for="" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
				<input type="text" name="password" id="password" placeholder="Contraseña" class="border p-5 w-full rounded-lg">
			</div>
			<div class="mb-5">
				<label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Contraseña</label>
				<input type="text" name="password_confirmation" id="password_confirmation" placeholder="Contraseña" class="border p-5 w-full rounded-lg">
			</div>
			<input type="submit" value="Crear Cuenta" class="bg-sky-500 hover:bg-sky-600 transition-color cursor-pointer uppercase font-bold w-full p-5 text-white rounded">
		</form>
	</div>
</div>
	
@endsection