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
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <!--esta seccion pertenece a la etiqueta name-->
                <div class="mb-5">
                    <label 
                    for="name" 
                    class="mb-2 block uppercase text-gray-500 font-bold">nombre</label>
                    <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Tu nombre"
                    class=" border p-3 w-full rounded-lg @error('name')border-red-500 @enderror"
                    value="{{old('name')}}"
                    >
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <!--esta seccion pertenece a la etiqueta username-->
                <div class="mb-5">
                    <label 
                    for="Username" 
                    class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input 
                    id="Username"
                    name="Username"
                    type="text"
                    placeholder="Nombre de usuario"
                    class=" border p-3 w-full rounded-lg @error('Username')border-red-500 @enderror">
                    @error('Username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <!--esta seccion pertenece a la etiqueta email-->
                <div class="mb-5">
                    <label
                    for="email"
                    class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input
                    id="email"
                    name="email"
                    type="email"
                    placeholder="tu correo electronico"
                    class=" border p-3 w-full rounded-lg @error('email')border-red-500 @enderror">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <!--esta seccion pertenece a la etiqueta password-->
                <div class="mb-5">
                    <label
                    for="password"
                    class="mb-2 block uppercase text-gray-500 font-bold">contraseña</label>
                    <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="coloca tu contraseña"
                    class=" border p-3 w-full rounded-lg @error('password')border-red-500 @enderror">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <!--esta seccion pertenece a la etiqueta confirmar password-->
                <div class="mb-5">
                    <label
                    for="password_confirmation"
                    class="mb-2 block uppercase text-gray-500 font-bold">confirmar contraseña</label>
                    <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="confirma tu contraseña"
                    class=" border p-3 w-full rounded-lg @error('password_confirmation')border-red-500 @enderror">
                    @error('password_confirmation')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
@section('footer_contenido')
 DevStagram - Todos los derechos reservados @ Victor Cupa {{now()-> year}}
 @endsection