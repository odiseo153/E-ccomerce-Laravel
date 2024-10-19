@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center ">
    <div class="bg-gray-900 border-4 border-blue-900 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-200 p-8">
        <div class="flex flex-col items-center space-y-6">
            <img class="w-24" src="https://www.svgrepo.com/show/36558/sell-product.svg" alt="icono login">

            <h1 class="text-white text-3xl font-bold">Welcome to Market</h1>
            
            <form method="POST" action="{{ route('login') }}" class="space-y-4 w-full">
                @csrf

                <input class="@error('email') is-invalid @enderror w-full p-3 bg-blue-900 rounded-md border border-gray-700 focus:border-blue-500 hover:border-blue-400 transition-all duration-200 text-gray-200" placeholder="Email" type="email" name="email" value="{{ old('email') }}" />
                @error('email')
                <span class="text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input class="@error('password') is-invalid @enderror w-full text-black p-3 bg-blue-900 rounded-md border border-gray-700 focus:border-blue-500 hover:border-blue-400 transition-all duration-200" placeholder="Password" type="password" name="password" value="{{ old('password') }}" />
                @error('password')
                <span class="text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <button type="submit" class="w-full p-3 bg-blue-600 rounded-full font-bold text-white border-2 border-blue-700 hover:bg-blue-500 transition-all duration-200">Iniciar Sesión</button>
            </form>

            <div class="flex items-center">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="ml-2 text-gray-300" for="remember">{{ __('Remember Me') }}</label>
            </div>

            <p class="text-gray-300">
                No tienes cuenta?
                <a class="font-semibold text-white hover:text-blue-500 transition-all duration-200" href="{{ route('register') }}">Regístrate</a>
            </p>
        </div>
    </div>
</div>
@endsection
