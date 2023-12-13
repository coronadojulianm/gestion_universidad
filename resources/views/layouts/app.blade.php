<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>MU</title>
    </head>
    <body class="bg-gray-100">

        <header class="p-5 border-b bg-purple-400 shadow flex justify-between items-center  ">


            <h1 class="text-3xl font-black">
                <span class="text-cyan-400">M</span>onsters University
            </h1>


            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 hover:text-green-400" href="{{-- {{ route('/') }} --}}">
                    Login
                </a>
                <a class="font-bold uppercase text-gray-600 hover:text-green-400" href="{{-- {{route('/')}} --}}">
                    Crear cuenta
                </a>
            </nav>

        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Monster University - Todos los derechos reservado {{date("Y")}} ©Copyright - ElvoceroDev
        </footer>
        
    </body>
</html>