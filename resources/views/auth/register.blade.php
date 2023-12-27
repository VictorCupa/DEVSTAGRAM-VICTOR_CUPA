@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrarse-redes-sociales.jpg')}}" alt="imagen registro usuarios">
        </div>
        <div class="md:w-4/12 bg-slate-400 p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre" class=" border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="Username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="Username" name="Username" type="text" placeholder="Nombre de usuario" class=" border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="email" placeholder="tu correo electronico" class=" border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">contraseña</label>
                    <input id="password" name="password" type="password" placeholder="coloca tu contraseña" class=" border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">confirmar contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="confirma tu contraseña" class=" border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
@section('footer_contenido')
 DevStagram - Todos los derechos reservados @ Victor Cupa {{now()-> year}}
 @endsection