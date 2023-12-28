<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>@yield('titulo')</title>
    </head>

    <body class="bg-gray-100" >
        <header class="p-5 border-b bg-white shadow-slate-700">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-4xl font-extrabold ">
                    @yield('titulo')
                </h1>
                <nav class="flex gap-3 items-center">
                    <a class="font-bold uppercase text-red-950 text-sm" href="#">Login</a>
                    <a class="font-bold uppercase text-red-950 text-sm" href="{{route('register')}}">Registrate</a>
                </nav>
            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <footer class="mt-10 text-center p-5 text-gray-800 font-bold uppercase">
            @yield('footer_contenido') 
        </footer>
    </body>
</html>