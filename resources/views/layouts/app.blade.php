<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>@yield('titulo')</title>
        
    </head>
    <body class="bg-gray-200" >
        <header class="p-5 border-b bg-white shadow-slate-700">
            <nav>
                <a href="/">Inicio</a>
                <a href="/contacto">Contactame</a>
                <a href="/nosotros">Nosotros</a>
                <a href="/tienda">Tienda</a>
            </nav>
        </header>
        
        <h1 class="text-4xl font-extrabold text-center ">
            @yield('titulo')
        </h1>
        
        <h2>
            @yield('infopagina')
        </h2>
        <hr>
        @yield('contenido')
    </body>
</html>