<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Market - @yield('template_title')</title>

    <style>
        .monaco-font {
            font-family: Monaco, Menlo, Courier, monospace;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div id="app">
        <div class="wrapper flex">

            <!-- Sidebar -->
            @auth
            <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform bg-gray-800 text-white shadow-lg" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto">
                    <div class="flex flex-col items-center mb-4">
                        <img src="{{ Auth::user()->image ? Auth::user()->image : 'https://ui-avatars.com/api/?name=' . Auth::user()->name }}" class="w-20 h-20 p-1 rounded-full ring-2 ring-gray-300" alt="Avatar">
                        <div class="mt-2 monaco-font text-xl text-center">
                            {{ Auth::user()->name }}<br>
                            <span class="text-sm">{{ Auth::user()->id }}</span>
                        </div>
                    </div>
                    <ul class="space-y-2 font-medium">
                        <!-- Sidebar links -->
                        <li>
                            <a href="{{ url('/products') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                                </svg>
                                <span class="ml-3">Productos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('carrito', Auth::user()->id ) }}" class="flex items-center p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                                <i class="fa-solid fa-cart-shopping text-gray-400 group-hover:text-white"></i>
                                <span class="flex-1 ml-3">Carrito De Compras</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                                <i class="fa-solid fa-right-from-bracket text-gray-400 group-hover:text-white"></i>
                                <span class="flex-1 ml-3">Cerrar Sesion</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="p-4 sm:ml-64 flex-1">
                <div class="p-4 border border-gray-200 rounded-lg shadow-md ">
                    <div class="grid mb-4">
                        @yield('content')
                    </div>
                </div>
            </div>
            @endauth

            <!-- Main content for guests -->
            @guest
            <div class="p-4 flex-1">
                <div class="p-4 rounded-lg">
                    <!-- Botón para volver al inicio -->
                    <div class="flex justify-center mt-4">
                        <a href="{{ url('/') }}" class="bg-blue-600 text-white rounded-md p-2 font-semibold hover:bg-blue-500 transition-all duration-200">
                            Volver al inicio
                        </a>
                    </div>
                    <div class="grid mb-4 mt-2">
                        @yield('content')
                    </div>
                </div>
            </div>
            @endguest


        </div>
    </div>
</body>

</html>
