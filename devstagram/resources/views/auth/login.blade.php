@extends('layouts.app')


@section('title')
	Hola en login
@endsection


@section('content')
<div class="md:flex">
	<div class="md:w-6/12 p-5 flex items-center justify-center">
		<img src="{{asset('img/login.jpg')}}" alt="Imagen de Registro" class="rounded-lg">
	</div>
	<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
		<form action="{{ route('login') }}" method="POST" novalidate>
			@csrf
      @if (session('mensaje'))
        <p class="bg-red-500 text-white my-5 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
      @endif
			<div class="mb-5">
				<label for="" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
				<input type="text" name="email" id="email" placeholder="Correo" class="border p-5 w-full rounded-lg @error('email') border-rose-600 @enderror" value="{{ old('email') }}">
				@error('email')
				<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
			  @enderror
			</div>
			<div class="mb-5">
				<label for="" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
				<input type="text" name="password" id="password" placeholder="Contraseña" class="border p-5 w-full rounded-lg @error('password') border-rose-600 @enderror">
        @error('password')
				<p class="bg-red-500 text-white p-2 rounded-lg my-2 text-center">{{$message}}</p>
			  @enderror
			</div>
			<div class="mb-5">
				<input type="checkbox" name="remember"> <label class="text-gray-600 text-sm">Mantener mi Sesión Abierta</label>
			</div>
			<input type="submit" value="INICIAR SESIÓN" class="bg-sky-500 hover:bg-sky-600 transition-color cursor-pointer uppercase font-bold w-full p-5 text-white rounded">
		</form>
	</div>
</div>
	
@endsection