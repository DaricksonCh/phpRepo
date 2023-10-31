@extends('layouts.app')

@section('title')
  Hola en el dashboard
@endsection

@section('content')
  <div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
      <div class="md:w-8/12 lg:w-6/12 px-5">
        <img src="{{ asset('img/usuario.svg') }}" alt="Hola">
    </div>
    <div class="md:w-8/12 lg:w-6/12 px-5">
      {{-- {{dd($user)}} --}}
      <p>{{$user->username}}</p>
      <p class="text-gray-800 text-sm mb-3 font-bold">
        o
        <span class="font-normal mt-10">Seguidores</span>
      </p>
      <p class="text-gray-800 text-sm mb-3 font-bold">
        o
        <span class="font-normal mt-10">Siguiendo</span>
      </p>
      <p class="text-gray-800 text-sm mb-3 font-bold">
        o
        <span class="font-normal mt-10">Post</span>
      </p>
    </div>
  </div>
@endsection

