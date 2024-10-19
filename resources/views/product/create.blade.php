@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Product
@endsection

@section('content')
    <section class="container mx-auto my-8">
        <div class="max-w-4xl mx-auto">

            <div class="bg-white  rounded-lg overflow-hidden">
                <div class="bg-gray-200 px-4 py-3 flex justify-between items-center">
                    <span class="text-lg font-bold text-gray-800">{{ __('Create') }} Product</span>
                    <div>
                        <a class="btn btn-primary btn-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition" href="{{ route('products.index') }}">
                            {{ __('Back') }}
                        </a>
                    </div>
                </div>

                <div class="p-6">
                    <form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @if(Route::has('products.store'))
                            @include('product.form')
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
