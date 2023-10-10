<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel</title>
		@vite('resources/css/app.css')
</head>
<body>
	@yield('navbar')
	<nav class="text-center p-5 flex flex-row h-16 align-items-center justify-between border-b shadow bg-white">
		<div class="text-left -mt-2">
			<h1 class="text-3xl font-black">DevsTagram</h1>
		</div>
    <div class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 ">
        <a class="" href="/">Home</a>
        <a class="" href="/nosotros">Nosotros</a>
        <a class="" href="/contacto">Contacto</a>
    </div>
    <div class="text-right">
        <a href="/login">Inicia Sesion</a>
				|
        <a href="{{route('register')}}">Registrate</a>
    </div>
	</nav>

	<main class="container mt-10 mx-auto">

		<h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>
		@yield('content')

	</main>


	<footer>
		<h3 class="text-center p-5 text-gray-500 font-bold uppercase">TODOS LOS DERECHOS RESERVADOS
			{{ date('Y') }}
		</h3>
	</footer>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
