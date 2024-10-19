@extends('layouts.app')

@section('content')

<div class="container mx-auto p-6">
    <!-- Nuevo formulario de registro -->
    <div class="flex items-center justify-center">
        <form method="POST" action="{{ route('register') }}" class="bg-gray-900 shadow-lg rounded-3xl p-8 w-full max-w-sm transition-all duration-200 hover:shadow-xl">
            @csrf
            <div class="flex flex-col items-center space-y-6 text-gray-300">
                <img class="w-24 mb-4" src="https://www.svgrepo.com/show/36558/sell-product.svg" alt="icono registro">
                <h1 class="text-white text-3xl font-bold">Registro</h1>

                <!-- Campo para el nombre -->
                <input class="@error('name') is-invalid @enderror w-full p-3 bg-gray-700 rounded-md border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200" 
                       placeholder="Nombre" 
                       type="text" 
                       name="name" 
                       value="{{ old('name') }}" 
                       required 
                       autocomplete="name" 
                       autofocus />

                @error('name')
                <span class="invalid-feedback text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <!-- Campo para el correo electrónico -->
                <input class="@error('email') is-invalid @enderror w-full p-3 bg-gray-700 rounded-md border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200" 
                       placeholder="Correo electrónico" 
                       type="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       required 
                       autocomplete="email" />

                @error('email')
                <span class="invalid-feedback text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <!-- Campo para la imagen de perfil -->
                <input class="@error('image') is-invalid @enderror w-full p-3 bg-gray-700 rounded-md border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200" 
                       placeholder="Imagen" 
                       type="text" 
                       name="image" 
                       value="{{ old('image') }}" 
                       required 
                       autocomplete="image" />

                @error('image')
                <span class="invalid-feedback text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <!-- Campo para la contraseña -->
                <input class="@error('password') is-invalid @enderror w-full p-3 bg-gray-700 rounded-md border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200" 
                       placeholder="Contraseña" 
                       type="password" 
                       name="password" 
                       required 
                       autocomplete="new-password" />

                @error('password')
                <span class="invalid-feedback text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <!-- Campo para confirmar la contraseña -->
                <input class="w-full p-3 bg-gray-700 rounded-md border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200" 
                       placeholder="Confirmar contraseña" 
                       type="password" 
                       name="password_confirmation" 
                       required 
                       autocomplete="new-password" />

                <!-- Botón de envío -->
                <input class="w-full p-3 bg-blue-600 text-white rounded-md font-bold hover:bg-blue-500 transition-all duration-200 cursor-pointer" 
                       type="submit" 
                       value="Registrar" />

                <!-- Recuerda la sesión -->
                <div class="flex items-center">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                    <label class="form-check-label ml-2 text-gray-400" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                </div>

                <!-- Enlace para iniciar sesión si ya tiene cuenta -->
                <p class="text-center">
                    ¿Ya tienes cuenta?
                    <a class="font-semibold text-blue-400 hover:text-blue-300 transition-all duration-200" href="{{ route('login') }}">Iniciar sesión</a>
                </p>
            </div>
        </form>
    </div>
</div>

@endsection
